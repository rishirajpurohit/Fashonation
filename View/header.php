<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Modern Business - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo css?>/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
   
    <link href="<?php echo css?>/modern-business.css" rel="stylesheet">
    <link href="<?php echo css?>/shop-homepage.css" rel="stylesheet">

    <link href="<?php echo css?>/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo css?>/bootstrap-social.css" rel="stylesheet">
    <link href="<?php echo css?>/nav.css" rel="stylesheet">
     <link href="<?php echo css?>/style.css" rel="stylesheet">
    <link href="<?php echo css?>/reset.css" rel="stylesheet">
    <!-- Dropdown Menu --> 
    <link rel="stylesheet" href="<?php echo css?>/bootstrap.vertical-tabs.css">

    <!-- DropDwown Tab Styles -->
    <!-- <link rel="stylesheet" type="text/css" href="css/tabs.css" />
    <link rel="stylesheet" type="text/css" href="css/tabstyles.css" /> -->
    
    <!-- Slider css -->
    <link rel="stylesheet" type="text/css" href="<?php echo css?>/component.css" />
    <script src="<?php echo js?>/modernizr.custom.js"></script>
    <script src="<?php echo js?>/modernizr.js"></script>
   

    <!-- Products tab slider -->
    <link href="<?php echo css?>/homepage-productSlider.css" rel="stylesheet">

    <!-- Font Roboto -->
<!--     <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:600' rel='stylesheet' type='text/css'>
 -->    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <style>
        .offer img{
            width: 70% important;
        }
        ol, ul {
    list-style: none;
}

    </style>
    
</head>

<body>


  
    <header class="masthead">
        <div class="container-fluid boxShadow" style="padding: 0px; margin-bottom: 30px;">
        <div class="col-lg-8 col-md-4 col-sm-12 col-xs-12 nav-items email">
            <b><i class="fa fa-envelope" aria-hidden="true"></i> Fashonation@gmail.com</b>
        </div>

        <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 nav-items searchbox">
            <form role="search" class="search">
                <div class="form-group">
                    <input type="text" id="searchbx" placeholder="Search Here" class="col-md-9 col-lg-9 col-sm-8 col-xs-8">
                    <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
                </div>
            </form>
        </div>
        <div class="col-lg-1 col-md-2 col-sm-3 col-xs-3 nav-items main-nav">
            
            <a href="#0" class="cd-signup"><i class="fa fa-user" aria-hidden="true"></i>    Login</a>
        </div>
        
        <div class="col-lg-1 col-md-2 col-sm-3 col-xs-3 nav-items cart">
            <a data-toggle="modal" data-target="#myModal"><i class="fa fa-shopping-cart" aria-hidden="true"></i>    Cart:0</a>
        </div>
        </div>
        <div class="container namebar">
        <a href="#"><img class="img-responsive" src="<?php echo images;?>/logo/namelogo(blackdark).png" height="33%" width="33%"> <!-- FASHONATION --></a>
    </div>
    </header>

<!--     <header class="masthead">
        <div class="container-fluid boxShadow" style="padding: 0px; margin-bottom: 30px;">
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 nav-items">
            <b><i class="fa fa-envelope" aria-hidden="true"></i> Fashonation@gmail.com</b>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 nav-items searchbox">
            <form role="search" class="search">
                <div class="form-group">
                    <input type="text" id="searchbx" placeholder="Search Here" class="col-md-9 col-lg-9 col-sm-8 col-xs-8">
                    <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
                </div>
            </form>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4 nav-items">
            <a data-toggle="modal" data-target="#myModal"><i class="fa fa-user" aria-hidden="true"></i>    Login/Signup</a>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4 nav-items cart">
            <a data-toggle="modal" data-target="#myModal"><i class="fa fa-shopping-cart" aria-hidden="true"></i>    Shopping Cart</a>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4 nav-items cart">
            <a data-toggle="modal" data-target="#myModal"><i class="fa fa-shopping-cart" aria-hidden="true"></i>    Whislist</a>
        </div>
        </div>
        <div class="container namebar">
        <a href="#"><img class="img-responsive" src="namelogo(blackdark).png" height="33%" width="33%"> FASHONATION</a>
    </div>
    </header> -->

    <!--Navbar -->
    

    <nav id="nav" class="navbar yamm navbar-inverse navbar-static" role="navigation">
    
        <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <!-- <img src="logo.png" height="50%" width="50%"> -->
          </button>
          <!-- <a class="navbar-brand" href="#">
            <img class="img-responsive" src="namelogo(blackdark).png">
          </a> -->
          <!-- <a class="navbar-brand" href="#">FASHONATION</a> -->
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        
        <div class="collapse navbar-collapse navbar_items" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">HOME <span class="sr-only">(current)</span></a></li>
            <li><a href="#">DESIGNERS</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">CLOTHES</a>
              <div class="dropdown-menu col-lg-12" role="menu">
                <div class="col-xs-4 tabs tabs-hovereffect"> 
                <!-- <div class="col-xs-4 tabs tabs-hovereffect"  style="background-color:rgba(222, 222, 222, 0.71); height:100%;padding-right:0px;">  -->
                  <ul class="nav nav-tabs tabs-left ">
                    <li class="var_nav active">
                          <div class="link_bg"></div>
                          <div class="link_title">
                            <div class=icon> 
                            <i class="fa fa-male fa-3x" aria-hidden="true"></i>
                            
                            </div>
                            <a href="#home" data-toggle="tab"><span>Men's Wear
                            <p>Add beautiful Indian wear and some natty outfits to your wardrobe</p>
                            </span>
                            </a>
                          </div>
                    </li>

                    <li class="var_nav active">
                          <div class="link_bg"></div>
                          <div class="link_title">
                            <div class=icon> 
                            <i class="fa fa-female fa-3x" aria-hidden="true"></i>
                            
                            </div>
                            <a href="#profile" data-toggle="tab"><span>Women's Wear
                            <p>Add beautiful Indian wear and some natty outfits to your wardrobe</p>
                            </span>
                            </a>
                          </div>
                    </li>

                    <!-- <li class="var_nav active">
                          <div class="link_bg"></div>
                          <div class="link_title">
                            <div class=icon> 
                            
                            
                            </div>
                            <a href="#nothing" data-toggle="tab"><span>
                            <p></p>
                            </span>
                            </a>
                          </div>
                    </li> -->

                    <!-- <li class="var_nav">
                          <div class="link_bg"></div>
                          <div class="link_title">
                            <div class=icon> 
                            <i class="fa fa-famale fa-3x" aria-hidden="true"></i>
                            </div>
                            <li><a href="#profile" data-toggle="tab"><span>Womens's Wear
                                <p>Add beautiful Indian wear and some natty outfits to your wardrobe</p>
                            </span></a></li>
                          </div>
                    </li> -->
                    <!-- <li class="active"><a href="#home" data-toggle="tab">Men's Wear</a></li> -->
                    <!-- <li><a href="#profile" data-toggle="tab">Womens's Wear</a></li> -->
                  </ul> 
                </div>

                <div class="col-xs-8 tab-bg-image mob-view">
                  <!-- Tab panes -->

                  <div class="tab-content ">
                    <div class="tab-pane active" id="home">
                        <div class="col-xs-6 col-lg-6">

                            <div class="col-xs-2 col-lg-3">
                               <section class="color-4">
                                <div class="cl-effect-11 nav-hover">
                                    <a href="#" data-hover="Desultory">Desultory</a>
                                    <a href="#" data-hover="Sumptuous">Sumptuous</a>
                                    <a href="#" data-hover="Scintilla">Scintilla</a>
                                    <a href="#" data-hover="Propinquity">Propinquity</a>
                                    <a href="#" data-hover="Harbinger">Harbinger</a>
                                </div>
                            </section> 
                            </div>

                            <div class="col-xs-2 col-lg-3 tab-content-align">
                           <section class="color-4">
                                <div class="cl-effect-11 nav-hover">
                                    <a href="#" data-hover="Desultory">Desultory</a>
                                    <a href="#" data-hover="Sumptuous">Sumptuous</a>
                                    <a href="#" data-hover="Scintilla">Scintilla</a>
                                    <a href="#" data-hover="Propinquity">Propinquity</a>
                                    <a href="#" data-hover="Harbinger">Harbinger</a>
                                </div>
                            </section> 
                                </div>    

                            
                        </div>
                        <div class="col-xs-3 col-lg-3 dropdown-image">
                            <img class="img-responsive" src="<?php echo images;?>/featured/image1.jpg" alt="">
                        </div>
                    </div>
                    <div class="tab-pane" id="profile">
                        <div class="col-xs-6 col-lg-6">

                            <div class="col-xs-2 col-lg-3">
                               <section class="color-4">
                                <div class="cl-effect-11 nav-hover">
                                    <a href="#" data-hover="Desultory">Desultory</a>
                                    <a href="#" data-hover="Sumptuous">Sumptuous</a>
                                    <a href="#" data-hover="Scintilla">Scintilla</a>
                                    <a href="#" data-hover="Propinquity">Propinquity</a>
                                    <a href="#" data-hover="Harbinger">Harbinger</a>
                                </div>
                            </section> 
                            </div>

                            <div class="col-xs-2 col-lg-3 tab-content-align">
                           <section class="color-4">
                                <div class="cl-effect-11 nav-hover">
                                    <a href="#" data-hover="Desultory">Desultory</a>
                                    <a href="#" data-hover="Sumptuous">Sumptuous</a>
                                    <a href="#" data-hover="Scintilla">Scintilla</a>
                                    <a href="#" data-hover="Propinquity">Propinquity</a>
                                    <a href="#" data-hover="Harbinger">Harbinger</a>
                                </div>
                            </section> 
                                </div>    

                            
                        </div>
                        <div class="col-xs-3 col-lg-3 dropdown-image">
                            <img class="img-responsive" src="<?php echo images;?>/featured/image6.jpg" alt="">
                        </div>
                    </div>
                  </div>    
                
              </div>
              <!-- <section>
                <div class="tabs tabs-style-circlefill">
                    <nav>
                        <ul>
                            <li><a href="#section-circlefill-1" class="icon icon-plug"><span>Connect</span></a></li>
                            <li><a href="#section-circlefill-2" class="icon icon-gift"><span>Gifts</span></a></li>
                            <li><a href="#section-circlefill-3" class="icon icon-box"><span>Boxes</span></a></li>
                            <li><a href="#section-circlefill-4" class="icon icon-date"><span>Prints</span></a></li>
                            <li><a href="#section-circlefill-5" class="icon icon-plane"><span>Fun</span></a></li>
                        </ul>
                    </nav>
                    <div class="content-wrap">
                        <section id="section-circlefill-1"><p>1</p></section>
                        <section id="section-circlefill-2"><p>2</p></section>
                        <section id="section-circlefill-3"><p>3</p></section>
                        <section id="section-circlefill-4"><p>4</p></section>
                        <section id="section-circlefill-5"><p>5</p></section>
                    </div>
                </div>
            </section> -->
            </li>
        
            <li><a href="#">ACCESSORIES</a></li>
            <li><a href="#">BLOG</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

<div class="cd-user-modal"> <!-- this is the entire modal form, including the background -->
        <div class="cd-user-modal-container"> <!-- this is the container wrapper -->
            <ul class="cd-switcher">
                <li><a href="#0">Sign in</a></li>
                <li><a href="#0">New account</a></li>
            </ul>

            <div id="cd-login"> <!-- log in form -->
                <form class="cd-form">
                    <p class="fieldset">
                        <label class="image-replace cd-email" for="signin-email">E-mail</label>
                        <input class="full-width has-padding has-border" id="signin-email" type="email" placeholder="E-mail">
                        <span class="cd-error-message">Error message here!</span>
                    </p>

                    <p class="fieldset">
                        <label class="image-replace cd-password" for="signin-password">Password</label>
                        <input class="full-width has-padding has-border" id="signin-password" type="text"  placeholder="Password">
                        <a href="#0" class="hide-password">Hide</a>
                        <span class="cd-error-message">Error message here!</span>
                    </p>

                    <p class="fieldset">
                        <input type="checkbox" id="remember-me" checked>
                        <label for="remember-me">Remember me</label>
                    </p>

                    <p class="fieldset">
                        <input class="full-width" type="submit" value="Login">
                    </p>
                </form>
                
                <p class="cd-form-bottom-message"><a href="#0">Forgot your password?</a></p>
                <!-- <a href="#0" class="cd-close-form">Close</a> -->
            </div> <!-- cd-login -->

            <div id="cd-signup"> <!-- sign up form -->
                <form class="cd-form">
                    <p class="fieldset">
                        <label class="image-replace cd-username" for="signup-username">Username</label>
                        <input class="full-width has-padding has-border" id="signup-username" type="text" placeholder="Username">
                        <span class="cd-error-message">Error message here!</span>
                    </p>

                    <p class="fieldset">
                        <label class="image-replace cd-email" for="signup-email">E-mail</label>
                        <input class="full-width has-padding has-border" id="signup-email" type="email" placeholder="E-mail">
                        <span class="cd-error-message">Error message here!</span>
                    </p>

                    <p class="fieldset">
                        <label class="image-replace cd-password" for="signup-password">Password</label>
                        <input class="full-width has-padding has-border" id="signup-password" type="text"  placeholder="Password">
                        <a href="#0" class="hide-password">Hide</a>
                        <span class="cd-error-message">Error message here!</span>
                    </p>

                    <p class="fieldset">
                        <input type="checkbox" id="accept-terms">
                        <label for="accept-terms">I agree to the <a href="#0">Terms</a></label>
                    </p>

                    <p class="fieldset">
                        <input class="full-width has-padding" type="submit" value="Create account">
                    </p>
                </form>

                <!-- <a href="#0" class="cd-close-form">Close</a> -->
            </div> <!-- cd-signup -->

            <div id="cd-reset-password"> <!-- reset password form -->
                <p class="cd-form-message">Lost your password? Please enter your email address. You will receive a link to create a new password.</p>

                <form class="cd-form">
                    <p class="fieldset">
                        <label class="image-replace cd-email" for="reset-email">E-mail</label>
                        <input class="full-width has-padding has-border" id="reset-email" type="email" placeholder="E-mail">
                        <span class="cd-error-message">Error message here!</span>
                    </p>

                    <p class="fieldset">
                        <input class="full-width has-padding" type="submit" value="Reset password">
                    </p>
                </form>

                <p class="cd-form-bottom-message"><a href="#0">Back to log-in</a></p>
            </div> <!-- cd-reset-password -->
            <a href="#0" class="cd-close-form">Close</a>
        </div> <!-- cd-user-modal-container -->
    </div> <!-- cd-user-modal -->
<script src="<?php echo js?>/jquery.min.js"></script>
<script src="<?php echo js?>/main.js"></script>
        
        
        

    <!--Navbar -->
    <!-- MODAL POPUP -->




