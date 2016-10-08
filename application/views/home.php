<?php include 'components/page_head.php'; ?>

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
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
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
                        <a href="#">Home</a>
                    </li>
                                       

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">News <span class="caret"></span></a>
                        <ul class="dropdown-menu" aria-labelledby="about-us">
                            <li><a href="#">Engage</a></li>
                            <li><a href="#">Pontificate</a></li>
                            <li><a href="#">Synergize</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Report Disasters</a>
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

    <div class="content">
        <img src="<?php echo base_url('assets/images/1.jpg'); ?>" alt="" style="height: 300px; width: 100%;">
    </div>

    <br>



    <div class="container-fluid">     
        <div class="col-sm-3">

            <!-- List-Group Panel -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1 class="panel-title"><span class="glyphicon glyphicon-random"></span> Completely Synergize</h1>
                </div>
                <div class="list-group">
                    <a href="#" class="list-group-item">Resource Taxing</a>
                    <a href="#" class="list-group-item">Premier Niche Markets <span class="badge">New</span></a>
                    <a href="#" class="list-group-item">Dynamically Innovate</a>
                    <a href="#" class="list-group-item">Objectively Innovate</a>
                    <a href="#" class="list-group-item">Proactively Envisioned</a>
                </div>
            </div>

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
        
        </div>

        <!-- Center Column -->
        <div class="col-sm-6">

            <!-- Alert -->
            <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>Synergize:</strong> Seamlessly visualize quality intellectual capital!
            </div>

            <!-- Articles -->


            <div class="row">

               <?php foreach ($postdata as $data) { ?>
                <article class="col-xs-12">
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <img class="media-object" src="holder.js/120x120" alt="">
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

            <!-- Search -->
            <form class="form-inline search" role="search">
                <div class="form-group">
                    <input type="text" class="form-control">
                </div>
                <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span> Search</button>
            </form>

            <!-- Progress Bars -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <span class="glyphicon glyphicon-scale"></span>
                        Dramatically Engage
                    </h3>
                </div>
                <div class="panel-body">
                    <div class="progress">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100"
                             aria-valuemin="0" aria-valuemax="100" style="width:100%">
                            100% Proactively Envisioned
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80"
                             aria-valuemin="0" aria-valuemax="100" style="width:80%">
                            80% Objectively Innovated
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="45"
                             aria-valuemin="0" aria-valuemax="100" style="width:45%">
                            45% Portalled
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="35"
                             aria-valuemin="0" aria-valuemax="100" style="width:35%">
                            35% Done
                        </div>
                    </div>
                </div>
            </div>

            <!-- Text Panel -->
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
            </div>


        </div><!--/Right Column -->

    </div><!--/container-fluid-->

    <footer>
        <div class="footer-blurb">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 footer-blurb-item">
                        <h3><span class="glyphicon glyphicon-text-size"></span> Dynamic</h3>
                        <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.</p>
                        <p><a class="btn btn-default" href="#">Procrastinate</a></p>
                    </div>
                    <div class="col-sm-3 footer-blurb-item">
                        <h3><span class="glyphicon glyphicon-wrench"></span> Efficient</h3>
                        <p>Dramatically maintain clicks-and-mortar solutions without functional solutions. Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas. </p>
                        <p><a class="btn btn-default" href="#">Unleash</a></p>
                    </div>
                    <div class="col-sm-3 footer-blurb-item">
                        <h3><span class="glyphicon glyphicon-paperclip"></span> Complete</h3>
                        <p>Professionally cultivate one-to-one customer service with robust ideas. Completely synergize resource taxing relationships via premier niche markets. Dynamically innovate resource-leveling customer service for state of the art customer service.</p>
                        <p><a class="btn btn-default" href="#">Complete</a></p>
                    </div>
                    <div class="col-sm-3 footer-blurb-item">

                        <!-- Thumbnails -->
                        <h3><span class="glyphicon glyphicon-camera"></span> Phosfluorescent</h3>
                        <div class="row">
                            <div class="col-xs-6">
                                <a href="#" class="thumbnail">
                                    <img src="holder.js/110x80" alt="">
                                </a>
                            </div>
                            <div class="col-xs-6">
                                <a href="#" class="thumbnail">
                                    <img src="holder.js/110x80" alt="">
                                </a>
                            </div>
                            <div class="col-xs-6">
                                <a href="#" class="thumbnail">
                                    <img src="holder.js/110x80" alt="">
                                </a>
                            </div>
                            <div class="col-xs-6">
                                <a href="#" class="thumbnail">
                                    <img src="holder.js/110x80" alt="">
                                </a>
                            </div>
                        </div>

                    </div>

                </div>
                <!-- /.row -->
            </div>
        </div>

        <div class="small-print">
            <div class="container">
                <p><a href="#">Terms &amp; Conditions</a> | <a href="#">Privacy Policy</a> | <a href="#">Contact</a></p>
                <p>Copyright &copy; Example.com 2015 </p>
            </div>
        </div>
    </footer>



<?php include 'components/page_tail.php'; ?>