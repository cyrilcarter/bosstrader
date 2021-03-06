<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from aqvatarius.com/themes/intuitive/form-wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Sep 2015 11:24:05 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>        
        <!-- meta section -->
        <title>Boss Trader- Register Business</title>
        
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
        <meta http-equiv="X-UA-Compatible" content="IE=edge" >
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" >
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" >
        <!-- /meta section -->
        
        <!-- css styles -->
        <link rel="stylesheet" type="text/css" href="css/default-blue-white.css" id="dev-css">
        <!-- ./css styles -->                               
        
        <!--[if lte IE 9]>
        <link rel="stylesheet" type="text/css" href="css/dev-other/dev-ie-fix.css">
        <![endif]-->
        
        <!-- javascripts -->
        <script type="text/javascript" src="js/plugins/modernizr/modernizr.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="script/js.js"></script>
        <!-- ./javascripts -->  
        
        <style>.dev-page{visibility: hidden;}</style>
    </head>
    <body>
        <!-- set loading layer -->
        <div class="dev-page-loading preloader"></div>
        <!-- ./set loading layer -->
        
        <!-- page wrapper -->
        <div class="dev-page dev-page-sidebar-collapsed">
            
            <!-- page header -->    
            <div class="dev-page-header">
                <div class="dph-logo">
                    <a href="home">Boss Trader</a>
                    <a class="dev-page-sidebar-collapse">
                        <div class="dev-page-sidebar-collapse-icon">
                            <span class="line-one"></span>
                            <span class="line-two"></span>
                            <span class="line-three"></span>
                        </div>
                    </a>
                </div>
                <ul class="dph-buttons pull-right">                    
                    <li class="dph-button-stuck">
                        <a href="#" class="dev-page-search-toggle">
                            <div class="dev-page-search-toggle-icon">
                                <span class="circle"></span>
                                <span class="line"></span>
                            </div>
                        </a>
                    </li>                    
                    <li class="dph-button-stuck">
                        <a href="#" class="dev-page-rightbar-toggle">
                            <div class="dev-page-rightbar-toggle-icon">
                                <span class="line-one"></span>
                                <span class="line-two"></span>
                            </div>
                        </a>
                    </li>
                </ul>                                                
                
            </div>
            <!-- ./page header -->
            
            <!-- page container -->
            <div class="dev-page-container">

                <!-- page sidebar -->
                <div class="dev-page-sidebar">                    
                    
                   
                    
                    <ul class="dev-page-navigation">
                        <?php require_once 'registermenu.php'; ?>
                   </ul>    
                </div>
                <!-- ./page sidebar -->
                
                <!-- page content -->
                <div class="dev-page-content">                    
                    <!-- page content container -->
                    <div class="container">
                        
                        <!-- page title -->
                        <div class="page-title">
                            <h1>Register Business</h1>
                            <p>Kindly follow the steps below to activate business</p>
                            
                            <ul class="breadcrumb">
                                <li><a href="home">BossTrader</a></li>
                                <li><a href="home">Home</a></li>
                                <li><a href="register">Register</a></li>
                                <li>Activation</li>
                            </ul>
                        </div>                        
                        <!-- ./page title -->
                        
                        <!-- Wizard with validation -->
                        <div class="wrapper wrapper-white">
                            <?php if ( $_SESSION['newcompany'] == 1 ): ?>
                                <div class="alert alert-success alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <strong>Congratulations!</strong> Your company has been successfully registered! Check your email for further details!.
                                </div>
                           <?php  unset($_SESSION['newcompany']);endif;?>
                            <?php if ( isset( $_SESSION['newcompany']) &&  $_SESSION['newcompany'] == 0 ): ?>
                                <div class="alert alert-danger alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    Registration failed! Invalid token entered
                                </div>
                           <?php  unset($_SESSION['newcompany']); endif;?>
                            <?php if ( isset( $_SESSION['bosspassword']) &&  $_SESSION['bosspassword'] == 1 ): ?>
                                <div class="alert alert-danger alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    Registration failed! Boss Password do not match!
                                </div>
                           <?php unset($_SESSION['bosspassword']); endif;?>
                            <?php if ( isset( $_SESSION['salespassword']) &&  $_SESSION['salespassword'] == 1 ): ?>
                                <div class="alert alert-danger alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    Registration failed! Sales person password do not match!
                                </div>
                           <?php  unset($_SESSION['salespassword']); endif;?>
                            <?php if ( isset( $_SESSION['company_exist']) &&  $_SESSION['company_exist'] == 1 ): ?>
                                <div class="alert alert-danger alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    Company Name has already been registered.
                                </div>
                           <?php  unset($_SESSION['company_exist']); endif;?>
                            <div class="page-subtitle">
                                <h3>Business Activation</h3>
                                <p>One time activity</p>
                            </div>
                            
                            <form action="register" role="form" class="form-horizontal" id="wizard-validation" method="post">
                                <div class="wizard show-submit wizard-validation">
                                    <ul>
                                        <li>
                                            <a href="#step-1">
                                                <span class="stepNumber">1</span>
                                                <span class="stepDesc">Step 1: Login<br /><small>Information</small></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#step-2">
                                                <span class="stepNumber">2</span>
                                                <span class="stepDesc">Step 2: Company<br /><small>Personal data</small></span>
                                            </a>
                                        </li>                                    
                                    </ul>

                                    <div id="step-1">   

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Boss Username: </label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" name="bossUserReg" placeholder="Boss" required/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Password</label>
                                            <div class="col-md-8">
                                                <input type="password" class="form-control" name="bossPasswordReg" placeholder="Password" id="boss_password" required/>
                                            </div>
                                        </div>             
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Re-Password</label>
                                            <div class="col-md-8">
                                                <input  type="password" class="form-control" name="bossRepasswordReg" placeholder="Re-Password" id="boss_repassword"required/>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">SalesPerson Username: </label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" name="salesUserReg" placeholder="Sales Person" required/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Password</label>
                                            <div class="col-md-8">
                                                <input type="password" class="form-control" name="salesPasswordReg" placeholder="Password" id="sales_password" required/>
                                            </div>
                                        </div>             
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Re-Password</label>
                                            <div class="col-md-8">
                                                <input type="password" class="form-control" name="salesRepasswordReg" placeholder="Re-Password"id="sales_repassword" required/>
                                            </div>
                                        </div>

                                    </div>

                                    <div id="step-2">

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Company Name</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" name="companyNameReg" placeholder="Company Name" required/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">E-mail</label>
                                            <div class="col-md-8">
                                                <input id="companyEmailAddress" type="text" class="form-control" name="companyEmailAddress" placeholder="Your email" required/>
                                            </div>
                                        </div>                                    
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Phone number: </label>
                                            <div class="col-md-8">
                                                <input id="companyPhoneNumber" type="text" class="form-control" name="companyPhoneNumber" placeholder="Your phone number" required/>
                                            </div>                                        
                                        </div>          
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Referral Code: </label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" name="referralCode" placeholder="Referral Code" />
                                            </div>                                        
                                        </div> 
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Token: </label>
                                            <div class="col-md-8">
                                                <input id="tokenField" type="text" class="form-control" name="tokenReg" placeholder="Token here" required/>
                                                <br/><button id="genTokenBtn" type="button" class="btn btn-default">Generate Token</button>
                                            </div>                                        
                                        </div> 
                                    </div>                                                                                                            
                                </div>
                                
                            </form>
                            
                        </div>
                        <!-- ./Wizard with validation -->
                        
                        
                        <!-- Copyright -->
                        <div class="copyright">
                            <div class="pull-left">
                                &copy; 2016 <strong>Boss Trader</strong>. All rights reserved.
                            </div>
                            <div class="pull-right">
                                <a href="#">Terms of use</a> / <a href="#">Privacy Policy</a>
                            </div>
                        </div>
                        <!-- ./Copyright -->
                        
                    </div>
                    <!-- ./page content container -->                                        
                </div>
                <!-- ./page content -->                                                
            </div>  
            <!-- ./page container -->
            
            <!-- right bar -->
            
            <!-- ./right bar -->
            
            <!-- page footer -->    
            <div class="dev-page-footer dev-page-footer-fixed"> <!-- dev-page-footer-closed dev-page-footer-fixed -->
                <ul class="dev-page-footer-controls">
                    <li><a class="tip" title="Settings"><i class="fa fa-cogs"></i></a></li>
                    <li><a class="tip" title="Support"><i class="fa fa-life-ring"></i></a></li>
                    <li><a class="tip" title="Logoff"><i class="fa fa-power-off"></i></a></li>
                   
                    <li class="pull-right">
                        <a class="dev-page-sidebar-minimize tip" title="Toggle navigation"><i class="fa fa-outdent"></i></a>
                    </li>
                </ul>
                
                <!-- page footer buttons -->
                <ul class="dev-page-footer-buttons">                    
                    <li><a href="#footer_content_1" class="dev-page-footer-container-open"><i class="fa fa-database"></i></a></li>                    
                    <li><a href="#footer_content_2" class="dev-page-footer-container-open"><i class="fa fa-bar-chart"></i></a></li>
                    <li><a href="#footer_content_3" class="dev-page-footer-container-open"><i class="fa fa-server"></i></a></li>
                </ul>
                <!-- ./page footer buttons -->
                <!-- page footer container -->
                <div class="dev-page-footer-container">
                    
                    <!-- loader and close button -->
                    <div class="dev-page-footer-container-layer">
                        <a href="#" class="dev-page-footer-container-layer-button"></a>
                    </div>
                    <!-- ./loader and close button -->                    
                    
                    <!-- informers -->
                    <div class="dev-page-footer-container-content" id="footer_content_1">                        
                        <div class="dev-list-informers">                            
                            <div class="dev-list-informers-item">
                                <div class="chart">
                                    <input class="knob" data-width="100" data-max="100" data-fgColor="#E74E40" value="33" data-angleArc="250" data-angleOffset="-125" data-thickness=".1"/>
                                </div>
                                <div class="info">
                                    <h5>Disk Usage</h5>
                                    <p>Server #1 - <strong>235,4Gb / 500Gb</strong></p>
                                    <p>Server #2 - <strong>114,2Gb / 500Gb</strong></p>
                                    <p class="text-higlight">33% - Total disk usage</p>
                                </div>
                            </div>
                            
                            <div class="dev-list-informers-item">
                                <div class="chart">
                                    <input class="knob" data-width="100" data-max="100" data-fgColor="#85d6de" value="75" data-thickness=".1"/>
                                </div>
                                <div class="info">
                                    <h5>Database Usage</h5>
                                    <p>Disk Space - <strong>64,3Gb / 100Gb</strong></p>
                                    <p>Accounts - <strong>12 / 30</strong></p>
                                    <p class="text-higlight">75% - Features usage</p>
                                </div>
                            </div>
                            
                            <div class="dev-list-informers-item">
                                <div class="chart">
                                    <input class="knob" data-width="100" data-max="100" data-fgColor="#82b440" value="62" data-thickness=".1"/>
                                </div>
                                <div class="info">
                                    <h5>Memory Usage</h5>
                                    <p>Total - <strong>2048Mb</strong></p>
                                    <p>Cached - <strong>1291Mb</strong></p>
                                    <p>Available - <strong>757Mb</strong></p>
                                </div>
                            </div>                            
                        </div>                        
                    </div>
                    <!-- ./informers -->
                    
                    <!-- informers -->
                    <div class="dev-page-footer-container-content" id="footer_content_2">                        
                        <div class="dev-list-informers">                            
                            <div class="dev-list-informers-item dev-list-informers-item-extended">
                                <div class="chart">
                                    <span class="sparkline" sparkType="bar" sparkBarColor="#82b440" sparkWidth="150" sparkHeight="100" sparkBarWidth="15">5,4,3,2,4,5,6,7,8,6,4,5</span>
                                </div>
                                <div class="info">
                                    <h5>Visitors</h5>
                                    <p>New - <strong>722</strong></p>
                                    <p>Returned - <strong>230</strong></p>
                                    <p class="text-higlight">Total - <strong>952</strong></p>
                                </div>
                            </div>                            
                            
                            <div class="dev-list-informers-item dev-list-informers-item-extended">
                                <div class="chart">
                                    <span class="sparkline" sparkFillColor="#85d6de" sparkLineWidth="2" sparkLineColor="#85d6de" sparkWidth="200" sparkHeight="100" >5,4,3,2,4,5,6,7,8,6,4,5</span>
                                </div>
                                <div class="info">
                                    <h5>Sales</h5>
                                    <p>Total Sales - 35</p>
                                    <p>Rate - 25</p>
                                    <p class="text-higlight">Ratio - <strong>75%</strong></p>
                                </div>
                            </div>
                            
                            <div class="dev-list-informers-item">
                                <div class="chart">
                                    <span class="sparkline" sparkType="pie" sparkWidth="100" sparkHeight="100" >3,7</span>
                                </div>
                                <div class="info">
                                    <h5>User Stats</h5>
                                    <p>Registrated - 1,522</p>
                                    <p>Not active - 316</p>
                                    <p class="text-higlight">Total - <strong>1,838</strong></p>
                                </div>
                            </div>                            
                        </div>                        
                    </div>
                    <!-- ./informers -->
                    
                    <!-- projects -->
                    <div class="dev-page-footer-container-content" id="footer_content_3">                        
                        <ul class="dev-list-projects">
                            <li><a href="#" class="active">Intuitive</a></li>
                            <li><a href="#">Atlant</a></li>
                            <li><a href="#">Gemini</a></li>
                            <li><a href="#">Taurus</a></li>
                            <li><a href="#">Leo</a></li>
                            <li><a href="#">Aries</a></li>
                            <li><a href="#">Virgo</a></li>
                            <li><a href="#">Aquarius</a></li>
                            <li><a href="#" class="dev-list-projects-add"><i class="fa fa-plus"></i></a></li>
                        </ul>                        
                    </div>
                    <!-- ./projects -->
                </div>
                <!-- ./page footer container -->
                
                <ul class="dev-page-footer-controls dev-page-footer-controls-auto pull-right">
                    <li><a class="dev-page-footer-fix tip" title="Fixed footer"><i class="fa fa-thumb-tack"></i></a></li>
                    <li><a class="dev-page-footer-collapse dev-page-footer-control-stuck"><i class="fa fa-dot-circle-o"></i></a></li>
                </ul>
            </div>
            <!-- ./page footer -->
            
            <!-- page search -->
            <div class="dev-search">
                <div class="dev-search-container">
                    <div class="dev-search-form">
                    <form action="http://aqvatarius.com/themes/intuitive/index.html" method="post">
                        <div class="dev-search-field">
                            <input type="text" placeholder="Search..." value="Nature">
                        </div>                        
                    </form>
                    </div>
                    <div class="dev-search-results"></div>
                </div>
            </div>
            <!-- page search -->            
        </div>
        <!-- ./page wrapper -->
        
        <!-- javascript -->
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>       
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>
        
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="js/plugins/moment/moment.js"></script>
        
        <script type="text/javascript" src="js/plugins/knob/jquery.knob.min.js"></script>
        <script type="text/javascript" src="js/plugins/sparkline/jquery.sparkline.min.js"></script>
        
        <script type="text/javascript" src="js/plugins/bootstrap-select/bootstrap-select.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap-datetimepicker/bootstrap-datetimepicker.js"></script>        
                
        <script type="text/javascript" src="js/plugins/jquery-validate/jquery.validate.min.js"></script>                
        <script type="text/javascript" src="js/plugins/smartwizard/jquery.smartWizard.js"></script>

        <script type="text/javascript" src="js/dev-settings.js"></script>
        <script type="text/javascript" src="js/dev-loaders.js"></script>
        <script type="text/javascript" src="js/dev-layout-default.js"></script>
        <script type="text/javascript" src="js/demo.js"></script>
        <script type="text/javascript" src="js/dev-app.js"></script>
        <!-- ./javascript -->
    </body>

<!-- Mirrored from aqvatarius.com/themes/intuitive/form-wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Sep 2015 11:24:05 GMT -->
</html>