<?php
include 'components/pagehead.php'; ?>

<script>

    $(function() {
        FastClick.attach(document.body);
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
                            <h2>All Messages </h2>

                            <div class="clearfix"></div>
                        </div>

                        <div class="x_content">

                            <p>All Messages</p>

                            <div class="table-responsive">
                                <table class="table table-striped jambo_table bulk_action">
                                    <thead>
                                    <tr class="headings">

                                        <th class="column-title">District </th>
                                        <th class="column-title">Subcity </th>
                                        <th class="column-title">Order </th>
                                        <th class="column-title">Description </th>
                                        <th class="column-title">Status </th>
                                        <th class="column-title">Date  </th>


                                    </tr>
                                    </thead>

                                    <tbody>

                                    <?php  foreach ($allposts as $posts) {?>
                                        <tr class="even pointer">
                                            <td class=" "><?php echo $posts->district; ?></td>
                                            <td class=" "><?php echo $posts->subcity; ?></td>
                                            <td class=" "><?php echo $posts->description; ?></td>
                                            <td class=" "><?php /*echo $posts->status; */?></td>
                                            <td class=" "><?php echo $posts->date; ?></td>


                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php include "components/footer.php";?>
            <!-- /footer content -->
        </div>
    </div>


    <?php include "components/pagetail.php";?>
