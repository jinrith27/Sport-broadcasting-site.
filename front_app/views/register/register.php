<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>WiziWig</title>
        <link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/images/favicon.ico">
        <!-- Bootstrap -->
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/demo.css" type="text/css" media="screen" />

        <!--<link href='https://fonts.googleapis.com/?family=Open+Sans:400,400italic,600,600italic,700,800' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/?family=Raleway:400,500,700,600,800' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/?family=Oswald:400,700' rel='stylesheet' type='text/css'>-->

    <!-- HTML5 shim and Respond.<?php echo base_url(); ?>assets/js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.<?php echo base_url(); ?>assets/js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.<?php echo base_url(); ?>assets/js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.<?php echo base_url(); ?>assets/js"></script>
        <![endif]-->

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/modernizr.js"></script>
        <script defer src="<?php echo base_url(); ?>assets/js/jquery.flexslider.js"></script>
        <style>
            #register_form label {
                font-weight: bold;
                font-size: 1.1em;
				padding-bottom:10px
            }
            #register_form label.error {
                font-weight: normal;
                color: #ff0000;
            }
        </style>

    </head>
    <body>
        <div id="error_container" class="alert alert-danger" style="display: none; right:3%; top:30%;  z-index: 999999; position: fixed;  width:30%;  float:right;"></div>
        <?php if ($this->session->flashdata('message')) { ?>
            <p class="alert alert-success"><?php echo $this->session->flashdata('message') ?></p>
        <?php } ?> 	

        <!--header started-->
        <div class="header-wraper">

            <div class="container">

                <!--logo, navigation & login or register-->
                <div class="row">

                    <!--logo
                    <div class="col-md-2">
                        <div class="logo-wraper">
                            <a href="<?php //echo base_url(); ?>"> <img src="<?php// echo base_url(); ?>assets/images/logo.png"></a>
                        </div>
                    </div>
                    //logo-->


                    <!--navigation
                    <div class="col-md-7">
                        <div class="navigation">
                            <div class="wrapper">
                                <div class="mobile-toggle" id="mobile">Menu</div>
                                <ul class="navigation-menu"> <?php// foreach ($get_my_header As $header) { ?>
                                        <li><a href="<?php// base_url(); ?>menu/<?php //echo $header['slug_menu']; ?>" title=""><?php// echo $header['menu_name']; ?></a></li>
                                    <?php //} ?>
                                    <div class="clear"></div>
                            </div><!--wrapper -->
                     <!--   </div>
                    </div>
                    //navigation-->



                    <!--login or register-->
                    <div class="col-md-3">
                        <div class="header-button">
                            <a href="<?php echo base_url(); ?>home" class="login"> login  </a>
                            <a href="#" class="register" style="display:none;"> Register  </a>
                        </div>
                    </div>
                    <!--login or register-->



                </div>
                <!--logo, navigation & login or register-->

            </div>
        </div>
        <!--header ends-->

        <!--slider started-->
        <div class="inner-slider">
            <div class="container">
                <div class="inner-sliderheading" style="color:red;">JOIN WiziWizi Today </div>
            </div>
        </div> 
        <!--slider ends-->


        <!--content started-->
        <div class="inner-content">
            <div class="container">

                <!--register-->
                <div  class="register-wrape" style="color:white;">


                    <form id="register_form" method="POST" action="<?php echo base_url(); ?>home/register">
                        <div class="row">
                            <div class="col-md-6">
                                <label>First Name</label>
                                <div class="form-group">
                                    <input type="text" name="fname" class="form-control form-register" id="fname" placeholder="First Name">
                                </div>
                            </div>

<!--                            <div class="col-md-6">
                                <label>Middle Name</label>
                                <div class="form-group">
                                    <input type="text" name="mname" class="form-control form-register" id="mname" placeholder="Middle Name">
                                </div>
                            </div>-->
                            
                            <div class="col-md-6">
                                <label>Last Name</label>
                                <div class="form-group">
                                    <input type="text" class="form-control form-register" id="lname" name="lname" placeholder="Last Name">
                                </div>
                            </div>
<div class="clearfix"></div>
                            <div class="col-md-6">
                                <label>Username</label>
                                <div class="form-group">
                                    <input type="text" name="uname" class="form-control form-register" id="uname" placeholder="User Name">
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <label>Date Of Birth</label>
                                <div class="form-group">
                                    <input type="text" class="form-control form-register" readonly style="background-color: #fff;" id="dob" name="dob" placeholder="Date of Birth">
                                </div>
                            </div>
<div class="clearfix"></div>
                            <div class="col-md-6">
                                <label>Email</label>
                                <div class="form-group">
                                    <input type="email" class="form-control form-register" id="email" name="email" placeholder="Email Address">
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <label>Password</label>
                                <div class="form-group">
                                    <input type="password" class="form-control form-register" id="password" name="password" placeholder="Password">
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-md-6">
                                <label>Mobile</label>
                                <div class="form-group">
                                    <input type="text" class="form-control form-register" id="mobnum" name="mobnum" placeholder="Mobile Number">
                                </div>
                            </div>
                             <div class="col-md-6">
                                <label>Address</label>
                                <input type="text" class="form-control form-register" id="address" name="address" placeholder="Address">	
                            </div>
                           <!-- <div class="col-md-6">
                                <label>Country</label>
                                <select class="form-control form-register" name="country" id="country">
                                    <option value="" name="">Select Your Country</option>	
                                    <?php
                                   // foreach ($country as $count) {
                                       // ?>
                                        <option value="<?php// echo $count['id']; ?>"><?php //echo $count['name']; ?></option>
                                     //   <?php
                                  //  }
                                  //  ?>
                                </select>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-md-6">
                                <label>State</label>
                                <select class="form-control form-register" name="stateDropdown" id="stateDropdown">
                                    <option value="" name="">Select Your State</option>	
                                </select>
                            </div>
                            
                            <div class="col-md-6">
                                <label>Twitch tv</label>
                                <div class="form-group">
                                    <input type="text" class="form-control form-register" id="twitchid" name="twitchid" placeholder="Twitch ID">
                                </div> 
                            </div>-->
                            <div class="clearfix"></div>
                          
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label></label>
                                    <input type="submit" value="Click here for sign up" class="register-button">
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </form>
                </div>
                <!--------------------------------------------------------------------------------->

                <script src="<?php echo base_url(); ?>assets/js/jquery-1.10.2.js"></script>

                <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
                <script src="<?php echo base_url(); ?>assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script> 
                <script src="<?php echo base_url(); ?>assets/plugins/jquery-validation/dist/additional-methods.min.js"></script>
                <script>
                    $(document).ready(function () {
                        $('#country').change(function () {
                            $.ajax({
                                url: '<?php echo base_url(); ?>home/get_states',
                                type: 'POST',
                                dataType: 'json',
                                data: {country: $(this).val()},
                                success: function (data)
                                {
                                    var states = $.parseJSON(JSON.stringify(data));

                                    var stateDropdown = $('#stateDropdown');
                                    var stateTextbox = $('#stateTextbox');
                                    if (states == null)
                                    {
                                        stateTextbox.show();
                                        stateDropdown.hide();
                                    }
                                    else {
                                        stateTextbox.hide();
                                        stateDropdown.show()
                                                .find('option')
                                                .remove();

                                        $.each(states, function (key, value)
                                        {
                                            //console.log(value.id);
                                            var option = $('<option></option>')
                                                    .text(value.name)
                                                    .val(value.name);
                                            stateDropdown.append(option);
                                        });
                                    }
                                }
                            });
                        });

                    });
                </script>		

                <script>
                    var $jquery = jQuery.noConflict();
                    $jquery(document).ready(function ()
                    {
                        $jquery("#login_form").validate({
                            rules:
                                    {
                                        login_email:
                                                {
                                                    required: true
                                                },
                                        login_pass:
                                                {
                                                    required: true
                                                }
                                    }

                        });

                        $jquery("#register_form").validate({
                            rules:
                                    {
                                        fname:
                                                {
                                                    required: true
                                                },
                                        mname:
                                                {
                                                    required: true
                                                },
                                        lname: {
                                            required: true
                                        },
                                        uname:{
                                            required: true,
                                            remote: {
                                                url: "<?php echo base_url(); ?>home/validate_uname",
                                                type: "post"
                                            }
                                        },
                                        password:
                                                {
                                                    required: true,
                                                    minlength: 5
                                                },
                                        dob:
                                                {
                                                    required: true
                                                },
                                        country:
                                                {
                                                    required: true
                                                },
                                        state:
                                                {
                                                    required: true
                                                },
                                        twitchid:
                                                {
                                                    remote: {
                                                        url: "<?php echo base_url(); ?>home/validate_twitch",
                                                        type: "post"
                                                    }
                                                },
                                        mobnum:
                                                {
                                                    required: true,
                                                    number: true
                                                },
                                        address:
                                                {
                                                    required: true
                                                },
                                        email:
                                                {
                                                    required: true,
                                                    email: true,
                                                    remote: {
                                                        url: "<?php echo base_url(); ?>home/validate_email",
                                                        type: "post"
                                                    }
                                                }
                                    },
                            messages: {
                                email: {
                                    required: "This field is required",
                                    email: "Invalid Email Address",
                                    remote: "Email address already in use."
                                },
                                uname: {
                                    required: "This field is required",
                                    remote: "Username already in use."
                                },
                                twitchid: {
                                    remote: "Channel does not exist."
                                }
                            }
                        });
                        $jquery("#register_form").submit(function(){
                            var now = new Date();                            
                            var past = new Date($jquery("#dob").val());                            
                            var nowYear = now.getFullYear();
                            var pastYear = past.getFullYear();
                            var age = nowYear - pastYear;
                            if(age < 1) {
                                $jquery("#error_container").html("You must be 1 or older to signup with us");
                                $jquery("#error_container").show().delay(4000).fadeOut();
                                return false;
                            }
                        });

                    });
                    $jquery(".abc").keypress(function (e)
                    {
                        if (e.which == 13) {
                            document.getElementById('login_form_submit').click();

                        }
                    });
                    $jquery(".abcd").keypress(function (e)
                    {
                        if (e.which == 13) {
                            document.getElementById('login_form_submit').click();

                        }
                    });
                </script>

                <script src="<?php echo base_url(); ?>assets/js/jquery-ui.js"></script>		
                <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery-ui.css">
                <script src="<?php echo base_url(); ?>assets/js/datepicker/bootstrap-datepicker.js"></script>
                <link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/datepicker/datepicker.css"></script>
                <script>
                    $jquery(function () {
                        $jquery("#dob").datepicker({
                            changeYear: true,
                            yearRange: "1900:<?php echo date("Y"); ?>",
                            dateFormat: "yyyy-mm-dd"
                        });
                    });
                </script>
                <!-------------------------------------------------------------------------------------------------------------------------> 
                <!--register-->
            </div>
        </div>
        <!--content started-->



        <!--foooter started-->
        <div class="footer-wraper">

            <!--about & news feedback-->
            <div class="container">

                <!--about sigod-->
                <div class="col-md-6">
                    <div class="about-wraper">
                   <!--     <div class="about-img"> <img src="<?php //echo base_url(); ?>assets/images/footerlogo.png"></div>  -->

                        <?php// echo $settings['3']['value']; ?>

<!-- <div class="about-logo"> <img src="<?php echo base_url(); ?>assets/images/about-logo.png"> </div> -->


							<!--
                        <div class="about-socail">
                            <a href="<?php //echo $social_icons[0]['social_link']; ?>">  <i class="fa fa-facebook"></i>  </a>
                            <a href="<?php// echo $social_icons[1]['social_link']; ?>">  <i class="fa fa-twitter"></i>  </a>   
                            <a href="<?php// echo $social_icons[2]['social_link']; ?>">  <i class="fa fa-twitch"></i>  </a>   
                            <a href="<?php //echo $social_icons[3]['social_link']; ?>">  <i class="fa fa-google-plus"></i>  </a>   
                            <a href="<?php //echo $social_icons[4]['social_link']; ?>">  <i class="fa fa-youtube"></i>  </a>   -->
                 <!--       </div>-->




                    </div>
                </div>
                <!--about sigod-->

                <!--NEWS FEEDBACK
                <div class="col-md-6">
                    <div class="news-wraper">
                        <div class="news-heading"> NEWS FEEDBACK </div>
                        <div id="footer_news_div">
                        </div>
                    </div>
                </div>
                <!--NEWS FEEDBACK-->

            </div>
            <!--about & news feedback-->


            <!--copyright-->
            <div class="copyright">
                2015 © WiziWig.com All right reserved 
            </div>
            <!--copyright-->

        </div>
        <!--foooter ends-->

        <script>
            var $jqu = jQuery.noConflict();
            $jqu(document).ready(function () {
                $jqu(".mobile-toggle").click(function () {
                    $jqu(".navigation-menu").toggle("slow");
                });
            });

        </script>
        <!-- Modal -->
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Login</h4>
                    </div>
                    <div class="modal-body">
                        <form id="login_form" method="POST" action="<?php echo base_url(); ?>home/login">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="login_email" class="form-control form-register" id="login_email" placeholder="Email Address">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="password" name="login_pass" class="form-control form-register" id="login_pass" placeholder="Password">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="submit" value="Login" class="btn btn-info">
                                    </div>
                                </div>
                            </div>
                        </form>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>
<script>
    var jfq = jQuery.noConflict();
    jfq(document).ready(function () {
        jfq.ajax({
            url: '<?php echo base_url(); ?>social_me/footer_tweets',
            type: 'POST',
            data: {
                abc: "ads"
            },
            success: function (data) {
                jfq("#footer_news_div").html(jfq.trim(data));
                jfq.ajax({
                    url: '<?php echo base_url(); ?>social_me/instagram',
                    type: 'POST',
                    data: {
                        abc: "ads"
                    },
                    success: function (data) {
                        jfq("#footer_news_div").append(jfq.trim(data));
                    }
                });
            }
        });
        
    });//document.ready
</script>
    </body>
</html>
