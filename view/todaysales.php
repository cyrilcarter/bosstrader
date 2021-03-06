<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from aqvatarius.com/themes/intuitive/tables-sortable.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Sep 2015 11:24:20 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>        
        <!-- meta section -->
        <title>Boss Trader - Sales </title>
        
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
        <div class="dev-page">
            
            <!-- page header -->    
            <div class="dev-page-header">
                
                <div class="dph-logo">
                    <a href="home">Intuitive</a>
                    <a class="dev-page-sidebar-collapse">
                        <div class="dev-page-sidebar-collapse-icon">
                            <span class="line-one"></span>
                            <span class="line-two"></span>
                            <span class="line-three"></span>
                        </div>
                    </a>
                </div>
                <?php 
                    $companyProfile = $_SESSION['company']; 
                    $name = $companyProfile[0]['boss_user'];
                    $companyname = strtoupper( $companyProfile[0]['company_name'] );
                    $name = ucfirst($name);
                ?>
                
                <span style="margin-left: 250px;"><h1><?= $companyname;?></h1></span>
                                                                
                
            </div>
            <!-- ./page header -->
            
            <!-- page container -->
            <div class="dev-page-container">

                <!-- page sidebar -->
                <div class="dev-page-sidebar">                    
                    
                    <div class="profile profile-transparent">
                        <div class="profile-image">
                            <img src="assets/images/users/<?= $_SESSION['company'][0]['company_id']?>_user_2.jpg">
                            <div class="profile-badges">
                                <a href="editprofilesales" id="uploadPic" class="profile-badges-right"><i class="fa fa-camera"></i></a>
                            </div>
                            <div class="profile-status online"></div>
                        </div>
                        <div class="profile-info">
                            <?php 
                                $companyProfile = $_SESSION['company']; 
                                $name = $companyProfile[0]['sales_user'];
                                $name = ucfirst($name);
                            ?>
                            <h4><?= $name ?></h4>
                            <span>Sales Person</span>
                        </div>                        
                    </div>
                    
                    <ul class="dev-page-navigation">
                        <?php require_once 'menusales.php'; ?>
                   </ul>    
                </div>
                <!-- ./page sidebar -->
                
                <!-- page content -->
                <div class="dev-page-content">                    
                    <!-- page content container -->
                    <div class="container">
                        
                        <!-- page title -->
                        <div class="page-title">
                            <h1>Sales</h1>
                            <br/><p>List of all sales on </p><button class="btn btn-default btn-rounded btn-icon"><i class="fa fa-calendar pull-left"></i><?php echo date("Y-m-d H:i:s")?></button>
                            
                            <ul class="breadcrumb">
                                <li><a href="home">Home</a></li>
                                <li><a href="home">Dashboard</a></li>
                                <li>All stock</li>
                            </ul>
                        </div>                        
                        <!-- ./page title -->
                        
                        <!-- datatables plugin -->
                        <div class="wrapper wrapper-white">
                            <div class="page-subtitle">
                                <h3>Todays Sales</h3>
                                <p>List of sales for today.</p>
                            </div>
                            
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-sortable">
                                    <thead>
                                        <tr>
                                            <th>Stock Name</th>
                                            <th>Quantity</th>
                                            <th>Unit Selling Price</th>
                                            <th>Total Selling Price</th>
                                            <th>Sales date</th>
                                            <th></th>
                                        </tr>
                                    </thead>                               
                                    <tbody>
                                        <?php
                                            $sales = $_SESSION['sales_today'];
//                                            print '<pre>';print_r($stocks);print'</pre>';
                                            foreach ($sales as $key=>$value) {
                                                $profit = $value['total_price'] - ( $value['quantity'] * $value['cost_price']);
                                                echo '<tr>';
                                                echo '<td>'.$value['stock_name'].'</td>';
                                                echo '<td>'.number_format ($value['quantity']).'</td>';
                                                echo '<td>'.number_format ($value['unit_price']).'</td>';
                                                echo '<td>'.number_format ($value['total_price']).'</td>';
                                                echo '<td>'.$value['salesDate'].'</td>';
                                                echo '<td>';?> <button class="btn btn-primary btn-rounded btn-clean delete_sales_id" value="<?=$value['sales_id']  ?>">Reverse</button><?php echo '</td>';
                                                
                                                echo '</tr>';
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>                        
                        <!-- ./datatables plugin -->
                        
                        <!-- Sortable plugin -->
                        
                        <!-- summernote plugin -->
                        
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
            <div class="dev-page-rightbar">
                <div class="rightbar-chat">

                    <div class="rightbar-chat-frame-contacts scroll">
                        <div class="rightbar-title">
                            <h3>Messages</h3>
                            <a href="#" class="btn btn-default btn-rounded rightbar-close pull-right"><span class="fa fa-times"></span></a>
                        </div>
                        <ul class="contacts">
                            <li class="title">online</li>
                            <li>
                                <a href="#" class="status online">
                                    <img src="assets/images/users/user_1.jpg" title="Aqvatarius"> John Doe                                            
                                </a>
                            </li>                                    
                            <li>
                                <a href="#" class="status online">
                                    <img src="assets/images/users/user_2.jpg" title="Aqvatarius"> Shannon Freeman                                            
                                </a>
                            </li>
                            <li>
                                <a href="#" class="status away">
                                    <img src="assets/images/users/user_3.jpg" title="Aqvatarius"> Devin Stephens                                            
                                </a>
                            </li>                                    
                            <li>
                                <a href="#" class="status away">
                                    <img src="assets/images/users/user_4.jpg" title="Aqvatarius"> Marissa George                                           
                                </a>
                            </li>
                            <li>
                                <a href="#" class="status dont">
                                    <img src="assets/images/users/user_5.jpg" title="Aqvatarius"> Sydney Reeves                                           
                                </a>
                            </li>
                            <li class="title">offline</li>
                            <li>
                                <a href="#" class="status">
                                    <img src="assets/images/users/user_6.jpg" title="Aqvatarius"> Kaitlynn Bowen                                           
                                </a>
                            </li>
                            <li>
                                <a href="#" class="status">
                                    <img src="assets/images/users/user_7.jpg" title="Aqvatarius"> Karen Spencer                                            
                                </a>
                            </li>
                            <li>
                                <a href="#" class="status">
                                    <img src="assets/images/users/user_8.jpg" title="Aqvatarius"> Darrell Wolfe                                            
                                </a>
                            </li>                                    
                        </ul>
                    </div>

                    <div class="rightbar-chat-frame-chat">
                        <div class="user">
                            <div class="user-panel">
                                <a href="#" class="btn btn-default btn-rounded rightbar-chat-close"><span class="fa fa-angle-left"></span></a>
                                <a href="#" class="btn btn-default btn-rounded pull-right"><span class="fa fa-user"></span></a>
                            </div>
                            <div class="user-info">
                                <div class="user-info-image status online">
                                    <img src="assets/images/users/user_1.jpg">
                                </div>
                                <h5>Devin Stephens</h5>
                                <span>UI/UX Designer</span>
                            </div>
                        </div>
                        <div class="chat-wrapper scroll">
                            <ul class="chat" id="rightbar_chat">
                                <li class="inbox">
                                    Hi, you have a second? Need to ask you something.
                                    <span>about 1h ago</span>
                                </li>                                    
                                <li class="sent">
                                    Sure i have...
                                    <span>59min ago</span>
                                </li>
                                <li class="inbox">
                                    It's about latest design you did...
                                    <span>14min ago</span>
                                </li>
                                <li class="sent">
                                    I will do my best to help you
                                    <span>2min ago</span>
                                </li>
                            </ul>
                        </div>

                        <form class="form" action="#" method="post" id="rightbar_chat_form">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-btn">
                                        <button class="btn btn-default"><i class="fa fa-paperclip"></i></button>
                                    </div>
                                    <input type="text" class="form-control" name="message">
                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-default">Send</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
            <!-- ./right bar -->            
            
            <!-- page footer -->    
            <div class="dev-page-footer dev-page-footer-fixed"> <!-- dev-page-footer-closed dev-page-footer-fixed -->
                <ul class="dev-page-footer-controls">
                    <li><a class="tip" title="Settings"><i class="fa fa-cogs"></i></a></li>
                    <li><a class="tip" title="Support"><i class="fa fa-life-ring"></i></a></li>
                    <li><a class="tip" title="Logoff" href="logoff"><i class="fa fa-power-off"></i></a></li>
                   
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
        
        <!-- javascripts -->
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>       
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>
        
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="js/plugins/moment/moment.js"></script>
        
        <script type="text/javascript" src="js/plugins/knob/jquery.knob.min.js"></script>
        <script type="text/javascript" src="js/plugins/sparkline/jquery.sparkline.min.js"></script>
        
        <script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>
        
        <script type="text/javascript" src="js/plugins/sortable/sortable.min.js"></script>

        <script type="text/javascript" src="js/dev-settings.js"></script>        
        <script type="text/javascript" src="js/dev-loaders.js"></script>
        <script type="text/javascript" src="js/dev-layout-default.js"></script>
        <script type="text/javascript" src="js/dev-app.js"></script>
        <!-- ./javascripts -->
    </body>

<!-- Mirrored from aqvatarius.com/themes/intuitive/tables-sortable.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Sep 2015 11:24:21 GMT -->
</html>