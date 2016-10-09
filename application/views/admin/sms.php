<?php
include 'components/pagehead.php'; ?>

<script>

    $(function() {
        FastClick.attach(document.body);
    });





    $(function () {

        $("#compose-textarea").wysihtml5();
    });




</script>


</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentellela Alela!</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile">
                    <div class="profile_pic">
                        <img src="images/img.jpg" alt="..." class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <h2>John Doe</h2>
                    </div>
                </div>
                <!-- /menu profile quick info -->

                <br />

                <!-- sidebar menu -->
                <?php include 'components/sidebarmenu.php'?>
                <!-- /sidebar menu -->

                <div class="sidebar-footer hidden-small">
                    <a data-toggle="tooltip" data-placement="top" title="Settings">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Lock">
                        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Logout">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                    </a>
                </div>
                <!-- /menu footer buttons -->
            </div>
        </div>


        <?php include "components/topnav.php";?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <!-- top tiles -->

            <!-- /top tiles -->
            <br>
            <div class="row">

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Compose a new post</h2>

                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div id="alerts"></div>

                            <form action="<?php echo base_url('index.php/admin/Post/setpost');?>" method="post">

                                <div class="form-group">
                                    <label for="subject">Subject</label>
                                    <input type="text" class="form-control" id="subject" name="subject">
                                </div>


                                <div class="form-group">
                                    <label for="txt">Post Content</label>
                                    <textarea class="form-control" rows="5" id="compose-textarea" style="width: 100%; height: 300px;" name="content"></textarea>
                                </div>


                                <br> <br>

                                <center>
                                    <button type="submit" class="btn btn-round btn-success btn-lg">Submit Post</button>
                                    <button type="reset" class="btn btn-round btn-danger btn-lg">Cancel Post</button>

                                </center>



                            </form>
                            <br />

                            <div class="ln_solid"></div>

                        </div>
                    </div>
                </div>




            </div>

            <?php include "components/footer.php";?>
            <!-- /footer content -->
        </div>
    </div>


    <?php include "components/pagetail.php";?>



    https://rest.nexmo.com/sms/json?api_key=d2180e2b&api_secret=41d4e0e4e762030f&from=NEXMO&to=94715136507&text=Welcome+to+Nexmo+test+from+homi