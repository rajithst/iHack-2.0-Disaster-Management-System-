<?php include 'components/page_head.php'; ?>

    <style>
        #content{width:100%; height:450px; position:relative; background:#99FF33; }
       #navbar ul li a {

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

        #map_wrapper {
            height: 500px;
        }



</style>

<?php echo $map['js']; ?>

        
    </head>

    <body>

    <!-- Navigation -->
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
                    <li class="active">
                        <a href="<?php echo base_url('index.php/Home'); ?>">Home</a>
                    </li>
                                       

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">News <span class="caret"></span></a>
                        <ul class="dropdown-menu" aria-labelledby="about-us">
                            <li><a href="#"><font color="black">Flood</font></a></li>
                            <li><a href="#"><font color="black">Drought</font></a></li>
                            <li><a href="#"><font color="black">Landslip</font></a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="<?php echo base_url('index.php/Home/report'); ?>">Report Disasters</a>
                    </li>
                    <li>
                        <a href="#">About Us</a>
                    </li> 
                </ul>
                 <ul class="nav navbar-nav navbar-right">
                      <li><a href="Home/registration"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>          
                      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
                </ul>
                
                <!--Login form
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
            /.login form -->


            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="content">
        <img src="<?php echo base_url('assets/images/homeImage.jpg'); ?>" alt="" style="height: 300px; width: 100%;">

    </div>

    <br>



    <div class="container-fluid">     
        <div class="col-sm-3">

            

            <!-- Text Panel -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1 class="panel-title"><span class="glyphicon glyphicon-cog"></span> Dramatically Engage</h1>
                </div>

                <div class="panel-body">
                    <p>Objectively innovate empowered manufactured products whereas parallel platforms. Holisticly predominate extensible testing procedures for reliable supply chains. Dramatically engage top-line web services vis-a-vis cutting-edge deliverables.</p>
                    <p><button class="btn btn-default">Engage</button></p>
                </div>
            </div>

            <!-- List-Group Panel -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1 class="panel-title"><span class="glyphicon glyphicon-link"></span> Important Links</h1>
                </div>
                <div class="list-group">
                    <a target="_blank" href="http://www.meteo.gov.lk/"><img width="300" height="45" src="<?php echo base_url('assets/images/mete.png'); ?>" alt=""/></a>

                    <a href="http://www.dmc.gov.lk/" target="_blank"><img width="300" height="45" src="<?php echo base_url('assets/images/disaster.png'); ?>" alt="" /></a><br />

                    <a href="http://www.sarvodaya.org/" target="_blank"><img width="300" height="45" src="<?php echo base_url('assets/images/sarvodaya.png'); ?>" alt="" /></a>

                    <a href="http://www.ndrsc.gov.lk" target="_blank"><img width="300" height="45" src="<?php echo base_url('assets/images/service.png'); ?>" alt="" /></a>

<<<<<<< HEAD

=======
                    <a href="http://www.dmc.gov.lk/" target="_blank"><img width="268" height="45" src="<?php echo base_url('assets/images/disaster.PNG'); ?>" alt="" /></a><br />

                    <a href="http://www.ndrsc.gov.lk" target="_blank"><img width="268" height="45" src="<?php echo base_url('assets/images/service.PNG'); ?>" alt="" /></a>
>>>>>>> 024adba01a04c30df9e07c152cc48c492ba497e4
                </div>
            </div>
        
        </div>

        <!-- Center Column -->
        <div class="col-sm-6">

            <!-- Alert
            <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>Synergize:</strong> Seamlessly visualize quality intellectual capital!
            </div>

            Articles -->


            <div class="row">

               <?php foreach ($postdata as $data) { ?>
                <article class="col-xs-12">
                    <div class="media">
                        <div class="media-left">
                            <a href="#">


                            </a>
                        </div>
                        <div class="media-body">
                            <h2 class="media-heading"><a href="#"><?php echo  $data->subjects; ?></a></h2>
                            <p><?php echo $data->content; ?></p>

                            <ul class="list-inline">
                                <li><a href="#"><span class="glyphicon glyphicon-comment"></span> 2 Comments</a></li>
                                <li><a href="#"><span class="glyphicon glyphicon-share"></span> 8 Shares</a></li>
                                <li><a href="#"><span class="glyphicon glyphicon-"></span> <?php echo  $data->date; ?></a></li>
                            </ul>
                        </div>
                    </div>
                </article>
    <?php } ?>
            </div>
            <hr>

        </div><!--/Center Column-->


        <!-- Right Column -->
        <div class="col-sm-3">

            <!-- Search
            <form class="form-inline search" role="search">
                <div class="form-group">
                    <input type="text" class="form-control">
                </div>
                <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span> Search</button>
            </form>

            Progress Bars -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <span class="glyphicon glyphicon-alert"></span>
                        Affected Areas
                    </h3>
                </div>
                <div class="panel-body">
                    Kegalle
                    <div class="progress">
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="100"
                             aria-valuemin="0" aria-valuemax="100" style="width:100%">
                            100% Affected
                        </div>
                    </div>
                    Kelaniya
                    <div class="progress">
                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80"
                             aria-valuemin="0" aria-valuemax="100" style="width:80%">
                            80% Affected
                        </div>
                    </div>

                    Peradeniya
                    <div class="progress">
                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="45"
                             aria-valuemin="0" aria-valuemax="100" style="width:45%">
                            45% Affected
                        </div>
                    </div>
                    Ratnapura
                    <div class="progress">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="35"
                             aria-valuemin="0" aria-valuemax="100" style="width:35%">
                            35% Affected
                        </div>
                    </div>
                </div>
            </div>

            <!-- Text Panel
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <span class="glyphicon glyphicon-bullhorn"></span>
                        Active Predomination
                    </h3>
                </div>
                <div class="panel-body">
                    <p>Proactively envisioned multimedia based expertise and cross-media growth strategies.</p>
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-default">Resource</button>
                        <button type="button" class="btn btn-default">Envision</button>
                        <button type="button" class="btn btn-default">Niche</button>
                    </div>
                </div>
            </div>-->


        </div><!--/Right Column -->

    </div><!--/container-fluid-->

    <footer>
        <div class="footer-blurb">

            <center><h2>Currently Affected Areas</h2></center>
                <div class="row">
                    <div id="map_wrapper" style="width: 100%; margin: 0; height:500px">
                        <?php echo $map['html']; ?>
                    </div>
                </div>

        </div>

        <div class="small-print">
            <div class="container">
                <p><a href="#">Terms &amp; Conditions</a> | <a href="#">Privacy Policy</a> | <a href="#">Contact</a></p>
                <p>Copyright &copy; Disastercare.com 2016 </p>
            </div>
        </div>
    </footer>



<?php include 'components/page_tail.php'; ?>
