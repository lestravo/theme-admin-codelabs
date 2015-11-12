<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>Avenger Admin Theme</title>
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
      <meta name="apple-mobile-web-app-capable" content="yes">
      <meta name="apple-touch-fullscreen" content="yes">
      <meta name="description" content="Avenger Admin Theme">
      <meta name="author" content="KaijuThemes">
      <link href='http://fonts.googleapis.com/css?family=RobotoDraft:300,400,400italic,500,700' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,400italic,600,700' rel='stylesheet' type='text/css'>
      <!--[if lt IE 10]>
      <script type="text/javascript" src="assets/js/media.match.min.js"></script>
      <script type="text/javascript" src="assets/js/placeholder.min.js"></script>
      <![endif]-->
      <link type="text/css" href="assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
      <!-- Font Awesome -->
      <link type="text/css" href="assets/css/styles.css" rel="stylesheet">
      <!-- Core CSS with all styles -->
      <link type="text/css" href="assets/plugins/jstree/dist/themes/avenger/style.min.css" rel="stylesheet">
      <!-- jsTree -->
      <link type="text/css" href="assets/plugins/codeprettifier/prettify.css" rel="stylesheet">
      <!-- Code Prettifier -->
      <link type="text/css" href="assets/plugins/iCheck/skins/minimal/blue.css" rel="stylesheet">
      <!-- iCheck -->
      <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries. Placeholdr.js enables the placeholder attribute -->
      <!--[if lt IE 9]>
      <link type="text/css" href="assets/css/ie8.css" rel="stylesheet">
      <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.1.0/respond.min.js"></script>
      <script type="text/javascript" src="assets/plugins/charts-flot/excanvas.min.js"></script>
      <script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]-->
      <!-- The following CSS are included as plugins and can be removed if unused-->
      <link type="text/css" href="assets/plugins/form-daterangepicker/daterangepicker-bs3.css" rel="stylesheet">
      <!-- DateRangePicker -->
      <link type="text/css" href="assets/plugins/fullcalendar/fullcalendar.css" rel="stylesheet">
      <!-- FullCalendar -->
      <link type="text/css" href="assets/plugins/charts-chartistjs/chartist.min.css" rel="stylesheet">
      <!-- Chartist -->
   </head>
   <body class="infobar-offcanvas">
      <header id="topnav" class="navbar navbar-midnightblue navbar-fixed-top clearfix" role="banner">
         <span id="trigger-sidebar" class="toolbar-trigger toolbar-icon-bg">
         <a data-toggle="tooltips" data-placement="right" title="Toggle Sidebar"><span class="icon-bg"><i class="fa fa-fw fa-bars"></i></span></a>
         </span>
         <a class="navbar-brand" href="index.html">Avenger</a>
         <ul class="nav navbar-nav toolbar pull-right">
            <li class="dropdown toolbar-icon-bg">
               <a href="#" id="navbar-links-toggle" data-toggle="collapse" data-target="header>.navbar-collapse">
               <span class="icon-bg">
               <i class="fa fa-fw fa-ellipsis-h"></i>
               </span>
               </a>
            </li>
            <li class="dropdown toolbar-icon-bg demo-search-hidden">
               <a href="#" class="dropdown-toggle tooltips" data-toggle="dropdown"><span class="icon-bg"><i class="fa fa-fw fa-search"></i></span></a>
               <div class="dropdown-menu dropdown-alternate arrow search dropdown-menu-form">
                  <div class="dd-header">
                     <span>Search</span>
                     <span><a href="#">Advanced search</a></span>
                  </div>
                  <div class="input-group">
                     <input type="text" class="form-control" placeholder="">
                     <span class="input-group-btn">
                     <a class="btn btn-primary" href="#">Search</a>
                     </span>
                  </div>
               </div>
            </li>
            <li class="toolbar-icon-bg hidden-xs" id="trigger-fullscreen">
               <a href="#" class="toggle-fullscreen"><span class="icon-bg"><i class="fa fa-fw fa-arrows-alt"></i></span></i></a>
            </li>
            <li class="dropdown toolbar-icon-bg">
               <a href="#" class="hasnotifications dropdown-toggle" data-toggle='dropdown'><span class="icon-bg"><i class="fa fa-fw fa-bell"></i></span><span class="badge badge-info">5</span></a>
               <div class="dropdown-menu dropdown-alternate notifications arrow">
                  <div class="dd-header">
                     <span>Notifications</span>
                     <span><a href="#">Settings</a></span>
                  </div>
                  <div class="scrollthis scroll-pane">
                     <ul class="scroll-content">
                        <li class="">
                           <a href="#" class="notification-info">
                              <div class="notification-icon"><i class="fa fa-user fa-fw"></i></div>
                              <div class="notification-content">Profile Page has been updated</div>
                              <div class="notification-time">2m</div>
                           </a>
                        </li>
                        <li class="">
                           <a href="#" class="notification-success">
                              <div class="notification-icon"><i class="fa fa-check fa-fw"></i></div>
                              <div class="notification-content">Updates pushed successfully</div>
                              <div class="notification-time">12m</div>
                           </a>
                        </li>
                        <li class="">
                           <a href="#" class="notification-primary">
                              <div class="notification-icon"><i class="fa fa-users fa-fw"></i></div>
                              <div class="notification-content">New users request to join</div>
                              <div class="notification-time">35m</div>
                           </a>
                        </li>
                        <li class="">
                           <a href="#" class="notification-danger">
                              <div class="notification-icon"><i class="fa fa-shopping-cart fa-fw"></i></div>
                              <div class="notification-content">More orders are pending</div>
                              <div class="notification-time">11h</div>
                           </a>
                        </li>
                        <li class="">
                           <a href="#" class="notification-primary">
                              <div class="notification-icon"><i class="fa fa-arrow-up fa-fw"></i></div>
                              <div class="notification-content">Pending Membership approval</div>
                              <div class="notification-time">2d</div>
                           </a>
                        </li>
                        <li class="">
                           <a href="#" class="notification-info">
                              <div class="notification-icon"><i class="fa fa-check fa-fw"></i></div>
                              <div class="notification-content">Succesfully updated to version 1.0.1</div>
                              <div class="notification-time">40m</div>
                           </a>
                        </li>
                     </ul>
                  </div>
                  <div class="dd-footer">
                     <a href="#">View all notifications</a>
                  </div>
               </div>
            </li>
            <li class="dropdown toolbar-icon-bg hidden-xs">
               <a href="#" class="hasnotifications dropdown-toggle" data-toggle='dropdown'><span class="icon-bg"><i class="fa fa-fw fa-envelope"></i></span></a>
               <div class="dropdown-menu dropdown-alternate messages arrow">
                  <div class="dd-header">
                     <span>Messages</span>
                     <span><a href="#">Settings</a></span>
                  </div>
                  <div class="scrollthis scroll-pane">
                     <ul class="scroll-content">
                        <li class="">
                           <a href="#">
                              <img class="msg-avatar" src="assets/demo/avatar/avatar_09.png" alt="avatar" />
                              <div class="msg-content">
                                 <span class="name">Steven Shipe</span>
                                 <span class="msg">Nonummy nibh epismod lorem ipsum</span>
                              </div>
                              <span class="msg-time">30s</span>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <img class="msg-avatar" src="assets/demo/avatar/avatar_01.png" alt="avatar" />
                              <div class="msg-content">
                                 <span class="name">Roxann Hollingworth <i class="fa fa-paperclip attachment"></i></span>
                                 <span class="msg">Lorem ipsum dolor sit amet consectetur adipisicing elit</span>
                              </div>
                              <span class="msg-time">5m</span>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <img class="msg-avatar" src="assets/demo/avatar/avatar_05.png" alt="avatar" />
                              <div class="msg-content">
                                 <span class="name">Diamond Harlands</span>
                                 <span class="msg">:)</span>
                              </div>
                              <span class="msg-time">3h</span>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <img class="msg-avatar" src="assets/demo/avatar/avatar_02.png" alt="avatar" />
                              <div class="msg-content">
                                 <span class="name">Michael Serio <i class="fa fa-paperclip attachment"></i></span>
                                 <span class="msg">Sed distinctio dolores fuga molestiae modi?</span>
                              </div>
                              <span class="msg-time">12h</span>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <img class="msg-avatar" src="assets/demo/avatar/avatar_03.png" alt="avatar" />
                              <div class="msg-content">
                                 <span class="name">Matt Jones</span>
                                 <span class="msg">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et mole</span>
                              </div>
                              <span class="msg-time">2d</span>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <img class="msg-avatar" src="assets/demo/avatar/avatar_07.png" alt="avatar" />
                              <div class="msg-content">
                                 <span class="name">John Doe</span>
                                 <span class="msg">Neque porro quisquam est qui dolorem</span>
                              </div>
                              <span class="msg-time">7d</span>
                           </a>
                        </li>
                     </ul>
                  </div>
                  <div class="dd-footer"><a href="#">View all messages</a></div>
               </div>
            </li>
            <li class="dropdown toolbar-icon-bg">
               <a href="#" class="dropdown-toggle" data-toggle='dropdown'><span class="icon-bg"><i class="fa fa-fw fa-user"></i></span></a>
               <ul class="dropdown-menu userinfo arrow">
                  <li><a href="#"><span class="pull-left">Profile</span> <span class="badge badge-info">80%</span></a></li>
                  <li><a href="#"><span class="pull-left">Account</span> <i class="pull-right fa fa-user"></i></a></li>
                  <li><a href="#"><span class="pull-left">Settings</span> <i class="pull-right fa fa-cog"></i></a></li>
                  <li class="divider"></li>
                  <li><a href="#"><span class="pull-left">Earnings</span> <i class="pull-right fa fa-line-chart"></i></a></li>
                  <li><a href="#"><span class="pull-left">Statement</span> <i class="pull-right fa fa-list-alt"></i></a></li>
                  <li><a href="#"><span class="pull-left">Withdrawals</span> <i class="pull-right fa fa-dollar"></i></a></li>
                  <li class="divider"></li>
                  <li><a href="#"><span class="pull-left">Sign Out</span> <i class="pull-right fa fa-sign-out"></i></a></li>
               </ul>
            </li>
         </ul>
      </header>
      <div id="wrapper">
         <div id="layout-static">
            <div class="static-sidebar-wrapper sidebar-midnightblue">
               <div class="static-sidebar">
                  <div class="sidebar">
                     <div class="widget stay-on-collapse" id="widget-welcomebox">
                        <div class="widget-body welcome-box tabular">
                           <div class="tabular-row">
                              <div class="tabular-cell welcome-avatar">
                                 <a href="#"><img src="http://placehold.it/300&text=Placeholder" class="avatar"></a>
                              </div>
                              <div class="tabular-cell welcome-options">
                                 <span class="welcome-text">Welcome,</span>
                                 <a href="#" class="name">Jonathan Smith</a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="widget stay-on-collapse" id="widget-sidebar">
                        <nav role="navigation" class="widget-body">
                           <ul class="acc-menu">
                              <li class="nav-separator">Explore</li>
                              <li><a href="index.html"><i class="fa fa-home"></i><span>Dashboard</span></a></li>
                              <!-- <li><a href="javascript:;"><i class="fa fa-user"></i><span>More Dashboard Pages</span></a>
                                 <ul class="acc-menu">
                                 			<li><a href="sales-force.html">Sales Force</a></li>
                                 			<li><a href="sales-performance.html">Sales Performance</a></li>
                                 			<li><a href="kpi-dashboard.html">KPI Dashboard</a></li>
                                 			<li><a href="shipping-status.html">Shipping Status</a></li>
                                 			<li><a href="metrics-dashboard.html">Metrics Dashboard</a></li>
                                 </ul>
                                 </li> -->
                              <li>
                                 <a href="javascript:;"><i class="fa fa-columns"></i><span>Layouts</span><span class="badge badge-primary">8</span></a>
                                 <ul class="acc-menu">
                                    <li><a href="layout-grids.html">Grid Scaffolding</a></li>
                                    <li><a href="layout-fixed-sidebars.html">Stretch Sidebars</a></li>
                                    <li><a href="layout-sidebar-scroll.html">Sidebar Scroll</a></li>
                                    <li><a href="layout-static-leftbar.html">Static Sidebar</a></li>
                                    <li><a href="layout-infobar-offcanvas.html">Offcanvas Infobar</a></li>
                                    <li><a href="layout-infobar-overlay.html">Overlay Infobar</a></li>
                                    <li><a href="layout-page-tabs.html">Page Tabs</a></li>
                                    <li><a href="layout-fullheight-content.html">Fixed Height Content</a></li>
                                    <li><a href="layout-fullheight-panel.html">Fixed Height Panel</a></li>
                                    <li><a href="layout-leftbar-widgets.html">Leftbar Widgets <span class="label label-grape">Cool</span></a></li>
                                    <li><a href="layout-rightbar-widgets.html">Rightbar Widgets <span class="label label-grape">Cool</span></a></li>
                                    <li><a href="layout-topnav-options.html">Topnav Options</a></li>
                                    <li>
                                       <a href="javascript:;">Horizontal Nav <span class="badge badge-dark">2</span></a>
                                       <ul class="acc-menu">
                                          <li><a href="layout-horizontal-small.html">Small Menu</a></li>
                                          <li><a href="layout-horizontal-large.html">Large Menu</a></li>
                                       </ul>
                                    </li>
                                    <li><a href="layout-chatbar-overlay.html">Chatbar</a></li>
                                    <li><a href="layout-boxed.html">Boxed</a></li>
                                    <li><a href="layout-compact.html">Compact Leftbar</a></li>
                                 </ul>
                              </li>
                              <li><a href="index.html"><i class="fa fa-home"></i><span>Dashboard</span></a></li>
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
            <div class="static-content-wrapper">
               <div class="static-content">










               <!-- Dari sini -->
                  <div class="page-content">
                     <ol class="breadcrumb">
                        <li class=""><a href="index.html">Home</a></li>
                        <li class="active"><a href="index.html">Blog</a></li>
                     </ol>
                     <div class="page-heading">
                        <h1>Blog</h1>
                     </div>
                     <div class="container-fluid">
                        <div data-widget-group="group1">
                           <div class="row">
                                   <div class="panel panel-sky">
                                       <div class="panel-heading">
                                           <h2>All Blog</h2>
                                     </div>
                                     <div class="panel-body">
                                       <div class="table-responsive">
                                           <table class="table">
                                               <thead>
                                                   <tr>
                                                       <th style="padding-right:300px">Title</th>
                                                       <th></th>
                                                   </tr>
                                               </thead>
                                               <tbody>
                                                   <tr>
                                                       <td align="left"><i>I'm CEO, Bitch.</i></td>
                                                       <td><i class="fa fa-pencil-square-o"></i>  <i class="fa fa-recycle"></i>  <i class="fa fa-times"></i></td>
                                                   </tr>
                                               </tbody>
                                           </table>
                                       </div>
                                     </div>
                                   </div>
                           </div>

                        </div>
                     </div>
                     <!-- .container-fluid -->
                  </div>

                  <!-- Sampe Sini -->













                  <!-- #page-content -->
               </div>
               <footer role="contentinfo">
                  <div class="clearfix">
                     <ul class="list-unstyled list-inline pull-left">
                        <li>
                           <h6 style="margin: 0;"> &copy; 2015 Avenger</h6>
                        </li>
                     </ul>
                     <button class="pull-right btn btn-link btn-xs hidden-print" id="back-to-top"><i class="fa fa-arrow-up"></i></button>
                  </div>
               </footer>
            </div>
         </div>
      </div>
      
      <!-- Load site level scripts -->
      <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
         <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script> -->
      <script type="text/javascript" src="assets/js/jquery-1.10.2.min.js"></script> 							<!-- Load jQuery -->
      <script type="text/javascript" src="assets/js/jqueryui-1.9.2.min.js"></script> 							<!-- Load jQueryUI -->
      <script type="text/javascript" src="assets/js/bootstrap.min.js"></script> 								<!-- Load Bootstrap -->
      <script type="text/javascript" src="assets/plugins/easypiechart/jquery.easypiechart.js"></script> 		<!-- EasyPieChart-->
      <script type="text/javascript" src="assets/plugins/sparklines/jquery.sparklines.min.js"></script>  		<!-- Sparkline -->
      <script type="text/javascript" src="assets/plugins/jstree/dist/jstree.min.js"></script>  				<!-- jsTree -->
      <script type="text/javascript" src="assets/plugins/codeprettifier/prettify.js"></script> 				<!-- Code Prettifier  -->
      <script type="text/javascript" src="assets/plugins/bootstrap-switch/bootstrap-switch.js"></script> 		<!-- Swith/Toggle Button -->
      <script type="text/javascript" src="assets/plugins/bootstrap-tabdrop/js/bootstrap-tabdrop.js"></script>  <!-- Bootstrap Tabdrop -->
      <script type="text/javascript" src="assets/plugins/iCheck/icheck.min.js"></script>     					<!-- iCheck -->
      <script type="text/javascript" src="assets/js/enquire.min.js"></script> 									<!-- Enquire for Responsiveness -->
      <script type="text/javascript" src="assets/plugins/bootbox/bootbox.js"></script>							<!-- Bootbox -->
      <script type="text/javascript" src="assets/plugins/simpleWeather/jquery.simpleWeather.min.js"></script> <!-- Weather plugin-->
      <script type="text/javascript" src="assets/plugins/nanoScroller/js/jquery.nanoscroller.min.js"></script> <!-- nano scroller -->
      <script type="text/javascript" src="assets/plugins/jquery-mousewheel/jquery.mousewheel.min.js"></script> 	<!-- Mousewheel support needed for jScrollPane -->
      <script type="text/javascript" src="assets/js/application.js"></script>
      <script type="text/javascript" src="assets/demo/demo.js"></script>
      <script type="text/javascript" src="assets/demo/demo-switcher.js"></script>
      <!-- End loading site level scripts -->
      <!-- Load page level scripts-->
      <script type="text/javascript" src="assets/plugins/fullcalendar/fullcalendar.min.js"></script>   				<!-- FullCalendar -->
      <script type="text/javascript" src="assets/plugins/wijets/wijets.js"></script>     								<!-- Wijet -->
      <script type="text/javascript" src="assets/plugins/charts-chartistjs/chartist.min.js"></script>               	<!-- Chartist -->
      <script type="text/javascript" src="assets/plugins/charts-chartistjs/chartist-plugin-tooltip.js"></script>    	<!-- Chartist -->
      <script type="text/javascript" src="assets/plugins/form-daterangepicker/moment.min.js"></script>              	<!-- Moment.js for Date Range Picker -->
      <script type="text/javascript" src="assets/plugins/form-daterangepicker/daterangepicker.js"></script>     				<!-- Date Range Picker -->
      <script type="text/javascript" src="assets/demo/demo-index.js"></script> 										<!-- Initialize scripts for this page-->
      <!-- End loading page level scripts-->
   </body>
</html>