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


                <div class="clearfix"></div>

                <!-- /menu profile quick info -->

                <br />

                <!-- sidebar menu -->
                <?php include 'components/sidebarmenu.php'?>
                <!-- /sidebar menu -->

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
                            <h2>Compose a new Text Message</h2>

                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div id="alerts"></div>

                            <form action="<?php echo base_url('index.php/admin/Messages/sendsms');?>" method="post">

                                <div class="form-group">
                                    <label for="subject">Users</label>
                                    <input type="text" class="form-control" id="subject" name="subject" value="All users" disabled>
                                </div>


                                <div class="form-group">

                                    <label for="district" class="control-label ">District</label>

                                    <div>

                                        <select id="districtname" name="dname">
                                            <option value="">---- Select District -----</option>
                                            <option value="Ampara">Ampara</option>
                                            <option value="Anuradhapura">Anuradhapura</option>
                                            <option value="Badulla">Badulla</option>
                                            <option value="Batticaloa">Batticaloa</option>
                                            <option value="Colombo">Colombo</option>
                                            <option value="Galle">Galle</option>
                                            <option value="Gampaha">Gampaha</option>
                                            <option value="Hambantota">Hambantota</option>
                                            <option value="Jaffna">Jaffna</option>
                                            <option value="Kalutara">Kalutara</option>
                                            <option value="Kandy">Kandy</option>
                                            <option value="Kegalle">Kegalle</option>
                                            <option value="Kilinochchi">Kilinochchi</option>
                                            <option value="Kurunegala">Kurunegala</option>
                                            <option value="Mannar">Mannar</option>
                                            <option value="Matale">Matale</option>
                                            <option value="Matara">Matara</option>
                                            <option value="Monaragala">Monaragala</option>
                                            <option value="Mullaitivu">Mullaitivu</option>
                                            <option value="Nuwara Eliya">Nuwara Eliya</option>
                                            <option value="Polonnaruwa">Polonnaruwa</option>
                                            <option value="Puttalam">Puttalam</option>
                                            <option value="Ratnapura">Ratnapura</option>
                                            <option value="Trincomalee">Trincomalee</option>
                                            <option value="Vavuniya">Vavuniya</option>


                                        </select>
                                        </div>
                                    </div>


                                        <div class="form-group">
                                    <label for="txt">Message body</label>
                                    <textarea class="form-control" rows="5" id="compose-textarea" style="width: 100%; height: 300px;" name="content"></textarea>
                                </div>


                                <br> <br>

                                <center>
                                    <button type="submit" class="btn btn-round btn-success btn-lg">Send SMS</button>
                                    <button type="reset" class="btn btn-round btn-danger btn-lg">Cancel</button>

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