<?php include 'components/page_head.php'?>


<style>
    #content{width:100%; height:450px; position:relative; background:#99FF33; }
    div#navbar ul li a {

        color: white;

    }
    #logo{
        width:50px;
        height:50px;
        margin-top:-15px;
    }

    .modal-body{
        height: 175px;
    }
    .form-group input{
        margin-bottom: 4%;
        width: 100%;
    }
    .modal-body button{
        margin-left: 80px;
    }
    .modal-header h4{
        text-align: center;
        font-weight: bold;
    }

</style>

</head>





<body>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Logo and responsive toggle -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="<?php echo base_url('assets/images/logo.png'); ?>" alt="" id="logo"></a>
        </div>
        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav">
                <li>
                    <a href="<?php echo base_url('index.php/Home'); ?>">Home</a>
                </li>


                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">News <span class="caret"></span></a>
                    <ul class="dropdown-menu" aria-labelledby="about-us">
                        <li><a href="#">Engage</a></li>
                        <li><a href="#">Pontificate</a></li>
                        <li><a href="#">Synergize</a></li>
                    </ul>
                </li>
                <li class="active">
                    <a href="<?php echo base_url('index.php/Home/report'); ?>">Report Disasters</a>
                </li>
                <li>
                    <a href="#">About Us</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="Home/registration"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in" style="cursor: pointer"></span>Login</a></li>
            </ul>

            <!--Login form-->
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">LOGIN</h4>
                        </div>

                        <div class="modal-body">
                            <form class="navbar-form navbar-right form-inline">
                                <div class="form-group">
                                    <label class="sr-only" for="emailAddress">Email address</label>
                                    <input type="email" class="form-control" id="emailAddress" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="pwd">Password</label>
                                    <input type="password" class="form-control" id="pwd" placeholder="Password">
                                </div>
                                <button type="submit" class="btn btn-default">Sign in</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.login form -->


        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>


<div class="container">
    <div class="row">

        <center>
            <h2>Report Early</h2>
        </center>
        <br> <br>

           <center><p> Through this form you can report your early warning to us</p></center>

        <form class="form-horizontal" method="post" action="<?php echo base_url('index.php/Report/setreport');?>">

            <div class="form-group">

                <label for="district" class="control-label col-xs-2">District</label>

                <div class="col-xs-8">

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
            <br>

            <div class="form-group">

                <label for="subcity" class="control-label col-xs-2">Enter Sub City</label>

                <div class="col-xs-10">

                    <input type="text" class="form-control" id="subcity" placeholder="Sub City" name="subc">

                </div>

            </div>

            <br><br>
            <div class="form-group">
                <label for="comment" class="control-label col-xs-2">Description</label>
                <div class="col-xs-10">
                <textarea class="form-control" rows="5" id="comment" name="desc"></textarea>
                    </div>
            </div>


            <div class="form-group">
                <label for="rate" class="control-label col-xs-2">Rate here</label>
                <div class="col-xs-10">
                    <div class="radio">
                        <label><input type="radio" name="himpotant">Highly Important</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="important">Important</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="notimportant">Least Important</label>
                    </div>
                </div>

            </div>

            <div class="form-group">
                <label for="upload" class="control-label col-xs-2">Upload Images</label>
                <div class="col-xs-10">
                    <label class="control-label">Select File</label>
                    <input id="input-1" type="file" class="file">
                </div>

            </div>

            <div class="form-group">
                <label for="upload" class="control-label col-xs-2">Upload Images</label>
                <div class="col-xs-10">
                    <label class="control-label">Select Video</label>
                    <input id="input-1" type="file" class="file">
                </div>

            </div>



            <center><div id="map" style="height: 500px; width:70% "></div></center>
            <script>
                var map;
                function initMap() {
                    map = new google.maps.Map(document.getElementById('map'), {
                        center: {lat: 7.8731, lng: 80.7718},
                        zoom: 10
                    });
                }
            </script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCGtu56PVgl9dJd2BVGM80ZqlPRE9Q_beo&callback=initMap"
                    async defer></script>


            <br> <br>
            <div class="form-group">

                <div class="col-xs-offset-2 col-xs-10">

                    <center>
                        <button type="submit" class="btn btn-round btn-success btn-lg">Submit Post</button>
                        <button type="reset" class="btn btn-round btn-danger btn-lg">Cancel Post</button>

                    </center>

                </div>

            </div>

        </form>




        <div class="col-md-2 col-xs-2 col-lg-2"></div>

    </div>


    </div>


<?php include "components/page_tail.php";?>


<script>

    $(document).ready(function () {


    });



</script>
