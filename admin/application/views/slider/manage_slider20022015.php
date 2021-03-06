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
                  <div class="panel-title hidden-xs"> <span class="glyphicon glyphicon-picture"></span>
                  Manage Slider Images
                  </div>
                  <a href="<?php echo base_url('slider/manage-slider/add-new-image'); ?>">
                                	<div class="panel-title hidden-xs pull-right">
                                    	<span class="glyphicon glyphicon-plus"></span>
                                        Add New Slider Image
                                   	</div>
                             	</a>
                                
                </div>
                <div class="panel-body padding-bottom-none">

				<?php
                    if($this->session->flashdata('err_message')){
                ?>
                        <div class="alert alert-danger"><?php echo $this->session->flashdata('err_message'); ?></div>
                <?php
                    }//end if($this->session->flashdata('err_message'))
                    
                    if($this->session->flashdata('ok_message')){
                ?>
                        <div class="alert alert-success alert-dismissable"><?php echo $this->session->flashdata('ok_message'); ?></div>
                <?php 
                    }//if($this->session->flashdata('ok_message'))
					
					if($slider_images_count > 0){
                ?>
                
                  <table class="table table-striped table-bordered table-hover" id="manage_slider_images">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Image Thumbnail</th>
                        <th class="hidden-xs">URL Link</th>
                        <th class="hidden-xs">Content</th>
                         
                        <th class="hidden-xs hidden-sm">Status</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php 
							for($i=0;$i<$slider_images_count;$i++){
								
					?>
                            <tr>
                            <?php //echo img.stripslashes($slider_images_arr[$i]['slider_image']); exit;?>
                                
                                <td><span class="xedit"><?php echo ($i+1) ?></span></td>
                                <td class="hidden-xs"><span class="xedit">
									<img width="200" height="170" src="<?php echo IMG_slider.stripslashes($slider_images_arr[$i]['slider_image'])//echo IMG.stripslashes($slider_images_arr[$i]['slider_image']) ?>"></span>
                                </td>
                                <td><?php echo (stripslashes($slider_images_arr[$i]['slider_caption']) == '') ? '-' : stripslashes($slider_images_arr[$i]['slider_caption']); ?></td>
                                <td class="hidden-xs hidden-sm"><?php echo (stripslashes($slider_images_arr[$i]['slider_content']) == '') ? '-' : stripslashes($slider_images_arr[$i]['slider_content']); ?></td>
                                <!-- <td class="hidden-xs hidden-sm">< ?php echo stripslashes($slider_images_arr[$i]['seo_url_name']) ?></td> 
                                <td class="hidden-xs hidden-sm"><?php //echo date('d, M Y', strtotime($slider_images_arr[$i]['created_date'])) ?></td> -->
                                <td><?php echo ($slider_images_arr[$i]['status'] == 1) ? '<span class="label btn-success">Active</span>' : '<span class="label btn-danger">InActive</span>' ?></td>
                                 
                                
                                <td style="width:100px;">
                                	<div class="btn-group">
									<?php 
                                        if($ALLOW_pages_edit == 1){ 
									?>
											<a href="<?php echo SURL?>slider/manage-slider/edit-image/<?php echo $slider_images_arr[$i]['id']?>" type="button" class="btn btn-info btn-gradient"> <span class="glyphicons glyphicons-edit"></span> </a>                                    
                                    <?php		
										}//end if 
                                        if($ALLOW_pages_delete == 1){ 
									?>
											<a href="<?php echo SURL?>slider/manage-slider/delete-image/<?php echo $slider_images_arr[$i]['id']?>" type="button" class="btn btn-danger btn-gradient" onClick="return confirm('Are you sure you want to delete?')"> <span class="glyphicons glyphicons-remove"></span> </a>                                    
                                    <?php	
										}//end if
                                    ?>
                                  </div>
                                 </td>
                            </tr>
                    <?php			
						}//end for
					?>
                    </tbody>
                  </table>
                  
                  <?php 
					}else{
				?>
                <div class="alert alert-danger alert-dismissable">
                	<strong>No Slider Images Found</strong> </div>                	
                <?php		
					}//end if($slider_images_count > 0)
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
	$('#manage_slider_images').dataTable({
		"aoColumnDefs": [{ 'bSortable': false, 'aTargets': [ -1,-4,-5,-6 ] }],
		"aaSorting": [],
		"oLanguage": { "oPaginate": {"sPrevious": "", "sNext": ""} },
		"iDisplayLength": 5,
		"bPaginate": true,
		"bLengthChange": true,
		"bFilter": true,
		"aLengthMenu": [[5, 25, 25,45],[5, 25, 25,45]],
		"sDom": 'T<"panel-menu dt-panelmenu"lfr><"clearfix">tip',
		"oTableTools": {
			"sSwfPath": "<?php echo VENDOR ?>plugins/datatables/extras/TableTools/media/swf/copy_csv_xls_pdf.swf"
		}
		
	});	
</script>
</body>
</html>
