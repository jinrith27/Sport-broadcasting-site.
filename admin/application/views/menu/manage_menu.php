<!DOCTYPE html>
<html>
<head>

<!-- Meta, title, CSS, favicons, etc. -->
<meta charset="utf-8">
<title><?php echo $meta_title ?></title>
<meta name="keywords" content="<?php echo $meta_keywords ?>" />
<meta name="description" content="<?php echo $meta_description ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php echo $INC_header_script_top; ?>
</head>

<body>
<!-- Start: Header -->
<header class="navbar navbar-fixed-top"> <?php echo $INC_top_header; ?> </header>
<!-- End: Header --> 
<!-- Start: Main -->
<div id="main"> 
  <!-- Start: Sidebar --> 
  <?php echo $INC_left_nav_panel; ?> 
  <!-- End: Sidebar --> 
  <!-- Start: Content -->
  <section id="content"> <?php echo $INC_breadcrum?>
    <div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-12">
						<div class="panel panel-visible">
                    		<div class="panel-heading">
                    			<div class="panel-title hidden-xs"> 
                    				<span class="glyphicon glyphicon-list"></span>Manage Menus
                    			</div>
                                <a href="<?php echo base_url('menu/manage-menu/add-new-menu'); ?>">
                                	<div class="panel-title hidden-xs pull-right">
                                    	<span class="glyphicon glyphicon-plus"></span>
                                        Add New Menu
                                   	</div>
                             	</a>
                    		</div>
							<div class="panel-body padding-bottom-none">
							<?php
                            if($this->session->flashdata('err_message')){
                            ?>
                            <div class="alert alert-danger"><?php echo $this->session->flashdata('err_message'); ?>
                            </div>
							<?php
                            }//end if($this->session->flashdata('err_message'))
                            if($this->session->flashdata('ok_message'))
							{
                            ?>
                            <div class="alert alert-success alert-dismissable">
								<?php echo $this->session->flashdata('ok_message'); ?>
                         	</div>
                            <?php 
                            }//if($this->session->flashdata('ok_message'))

							if($menu_list_count > 0)
							{?>

								<table class="table table-striped table-bordered table-hover" id="manage_all_menus">
                                    <thead>
                                        <tr>
                        <th>Menu Name</th>
                        <th>Menu Positions</th>
<!--                        <th>Menu link</th>-->
                        <th class="hidden-xs hidden-sm">Status</th>
                        <th class="hidden-xs">Display Order</th>
                        <th class="hidden-xs">Action</th>
                                            
                                    	</tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                            	</table>
							<?php 
                            }
							else
							{
                            ?>
                                <div class="alert alert-danger alert-dismissable">
                                <strong>No Menus Found</strong> </div>                	
							<?php		
                            }//end if($menu_list_count > 0)
                            ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    <div class="clearfix"></div>
    <div class="row" style="min-height:250px;">&nbsp;</div>
    </div>
  </section>
  <!-- End: Content --> 
  
</div>
<!-- End: Main --> 
<!-- Start: Footer -->
<footer> <?php echo $INC_footer;?> </footer>
<!-- End: Footer --> 
<?php echo $INC_header_script_footer;?>
<script type="application/javascript">
	$('#manage_all_menus').dataTable({
		
		"bProcessing": true,
		"bServerSide": true,
		"sServerMethod": "POST",
		"sAjaxSource": "<?php echo base_url()?>menu/manage-menu/process-menu-grid",
		"aoColumnDefs": [{ 'bSortable': false, 'aTargets': [ -1,-2] }],
		"aaSorting": [],
		/*"order": [[ 3, "desc" ]]*/
		"iDisplayLength": 10,
		"bPaginate": true,
		"bLengthChange": true,
		"bFilter": true,
		"aLengthMenu": [[25, 50, 75,100], [25, 50, 75,100]],
		"aoColumns": [
		{ "bSearchable": true, "sWidth": "25%"  },
		{ "bSearchable": true, "sWidth": "18%"  },
		{ "bSearchable": false, "sWidth": "8%"},
		{ "bSearchable": false, "sWidth": "8%" },
		{ "bSearchable": false, "sWidth": "25%"}
		],
		"oLanguage": {
           "sProcessing": "Searching Please Wait..."
         }
		
	}).fnSetFilteringDelay(700);	
</script>
</body>
</html>
