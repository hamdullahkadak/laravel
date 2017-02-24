<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="csrf-token" content="{{ csrf_token() }}">
 <meta name="description" content="">
 <meta name="author" content="">
 <link rel="icon" type="image/png" sizes="16x16" href="/backend/images/favicon.png">
 <title>{{ config('app.name', 'Laravel') }} - Yönetim Paneli</title>
 <!-- Bootstrap Core CSS -->
 <link href="/backend/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
 <!-- Menu CSS -->
 <link href="/backend/plugins/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
 <!-- animation CSS -->
 <link href="/backend/css/animate.css" rel="stylesheet">
 <!-- Custom CSS -->
 <link href="/backend/css/style.css" rel="stylesheet">
 <!-- color CSS -->
 <link href="/backend/css/colors/default.css" id="theme"  rel="stylesheet">
 @yield('css')
 <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
 <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
 <!--[if lt IE 9]>
 <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
 <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
 <![endif]-->
</head>
<body class="fix-sidebar">
<!-- Preloader -->
<div class="preloader">
 <div class="cssload-speeding-wheel"></div>
</div>
<div id="wrapper">
 <!-- Top Navigation -->
 <nav class="navbar navbar-default navbar-static-top m-b-0">
  <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
   <div class="top-left-part"><a class="logo" href="index.html"><b><!--This is dark logo icon--><img src="/backend/images/eliteadmin-logo.png" alt="home" class="dark-logo" /><!--This is light logo icon--><img src="/backend/images/eliteadmin-logo-dark.png" alt="home" class="light-logo" /></b><span class="hidden-xs"><!--This is dark logo text--><img src="/backend/images/eliteadmin-text.png" alt="home" class="dark-logo" /><!--This is light logo text--><img src="/backend/images/eliteadmin-text-dark.png" alt="home" class="light-logo" /></span></a></div>
   <ul class="nav navbar-top-links navbar-left hidden-xs">
    <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu"></i></a></li>
    <li>
     <form role="search" class="app-search hidden-xs">
      <input type="text" placeholder="Ara..." class="form-control">
      <a href=""><i class="fa fa-search"></i></a>
     </form>
    </li>
   </ul>
   <ul class="nav navbar-top-links navbar-right pull-right">
    <li class="dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><i class="icon-envelope"></i>
      <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
     </a>
     <ul class="dropdown-menu mailbox animated bounceInDown">
      <li>
       <div class="drop-title">You have 4 new messages</div>
      </li>
      <li>
       <div class="message-center"> <a href="#">
         <div class="user-img"> <img src="/backend/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
         <div class="mail-contnet">
          <h5>Pavan kumar</h5>
          <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span> </div>
        </a> <a href="#">
         <div class="user-img"> <img src="/backend/images/users/sonu.jpg" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
         <div class="mail-contnet">
          <h5>Sonu Nigam</h5>
          <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> </div>
        </a> <a href="#">
         <div class="user-img"> <img src="/backend/images/users/arijit.jpg" alt="user" class="img-circle"> <span class="profile-status away pull-right"></span> </div>
         <div class="mail-contnet">
          <h5>Arijit Sinh</h5>
          <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span> </div>
        </a> <a href="#">
         <div class="user-img"> <img src="/backend/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
         <div class="mail-contnet">
          <h5>Pavan kumar</h5>
          <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
        </a> </div>
      </li>
      <li> <a class="text-center" href="javascript:void(0);"> <strong>See all notifications</strong> <i class="fa fa-angle-right"></i> </a></li>
     </ul>
     <!-- /.dropdown-messages -->
    </li>
    <!-- /.dropdown -->
    <li class="dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><i class="icon-note"></i>
      <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
     </a>
     <ul class="dropdown-menu dropdown-tasks animated slideInUp">
      <li> <a href="#">
        <div>
         <p> <strong>Task 1</strong> <span class="pull-right text-muted">40% Complete</span> </p>
         <div class="progress progress-striped active">
          <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
         </div>
        </div>
       </a> </li>
      <li class="divider"></li>
      <li> <a href="#">
        <div>
         <p> <strong>Task 2</strong> <span class="pull-right text-muted">20% Complete</span> </p>
         <div class="progress progress-striped active">
          <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%"> <span class="sr-only">20% Complete</span> </div>
         </div>
        </div>
       </a> </li>
      <li class="divider"></li>
      <li> <a href="#">
        <div>
         <p> <strong>Task 3</strong> <span class="pull-right text-muted">60% Complete</span> </p>
         <div class="progress progress-striped active">
          <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"> <span class="sr-only">60% Complete (warning)</span> </div>
         </div>
        </div>
       </a> </li>
      <li class="divider"></li>
      <li> <a href="#">
        <div>
         <p> <strong>Task 4</strong> <span class="pull-right text-muted">80% Complete</span> </p>
         <div class="progress progress-striped active">
          <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"> <span class="sr-only">80% Complete (danger)</span> </div>
         </div>
        </div>
       </a> </li>
      <li class="divider"></li>
      <li> <a class="text-center" href="#"> <strong>See All Tasks</strong> <i class="fa fa-angle-right"></i> </a> </li>
     </ul>
     <!-- /.dropdown-tasks -->
    </li>
    <!-- /.dropdown -->
    <li class="right-side-toggle"> <a class="waves-effect waves-light" href="javascript:void(0)"><i class="ti-settings"></i></a></li>
    <!-- /.dropdown -->
   </ul>
  </div>
  <!-- /.navbar-header -->
  <!-- /.navbar-top-links -->
  <!-- /.navbar-static-side -->
 </nav>
 <!-- End Top Navigation -->
 <!-- Left navbar-header -->
 <div class="navbar-default sidebar" role="navigation">

  <div class="sidebar-nav navbar-collapse slimscrollsidebar">
   <div class="user-profile">
    <div class="dropdown user-pro-body">
     <div><img src="/backend/images/users/varun.jpg" alt="user-img" class="img-circle"></div>
     <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
     <ul class="dropdown-menu animated flipInY">
      <li><a href="#"><i class="ti-user"></i> Profilim</a></li>
      <li><a href="#"><i class="ti-wallet"></i> Haberlerim</a></li>
      <li><a href="#"><i class="ti-email"></i> Mesajlarım</a></li>
      <li role="separator" class="divider"></li>
      <li role="separator" class="divider"></li>
      <li><a href="{{ route('logout') }}"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i> Güvenli Çıkış Yap</a></li>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
       {{ csrf_field() }}
      </form>
     </ul>
    </div>
   </div>

   <ul class="nav" id="side-menu">

    <li class="sidebar-search hidden-sm hidden-md hidden-lg">
     <!-- input-group -->
     <div class="input-group custom-search-form">
      <input type="text" class="form-control" placeholder="Ara...">
      <span class="input-group-btn">
            <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
            </span> </div>
     <!-- /input-group -->
    </li>
    <li> <a href="index.html" class="waves-effect"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i> <span class="hide-menu"> Anasayfa</a>
    </li>
    <li> <a href="javascript:void(0);" class="waves-effect"><i class="linea-icon linea-basic fa-fw text-danger" data-icon="7"></i> <span class="hide-menu text-danger"> İçerik Yönetimi <span class="fa arrow"></span> <span class="label label-rouded label-danger pull-right">HOT</span></span></a>
     <ul class="nav nav-second-level">
      <li> <a href="../eliteadmin-hospital/index.html">Haberler</a> </li>
      <li> <a href="../eliteadmin-crm/index.html">Foto Galeri</a> </li>
      <li> <a href="../eliteadmin-university/index.html">Video Galeri</a> </li>
     </ul>
    </li>
    <li><a href="{{ route('logout') }}"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="waves-effect"><i class="icon-logout fa-fw"></i> <span class="hide-menu">Güvenli Çıkış</span></a></li>

   </ul>
  </div>
 </div>
 <!-- Left navbar-header end -->
 <!-- Page Content -->
 <div id="page-wrapper">
  <div class="container-fluid">
   <div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
     <h4 class="page-title">Starter Page</h4>
    </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
     <a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
     <ol class="breadcrumb">
      <li><a href="#">Dashboard</a></li>
      <li class="active">Starter Page</li>
     </ol>
    </div>
    <!-- /.col-lg-12 -->
   </div>
   @yield('content')
   <!-- .right-sidebar -->
   <div class="right-sidebar">
    <div class="slimscrollright">
     <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
     <div class="r-panel-body">
      <ul>
       <li><b>Layout Options</b></li>
       <li>
        <div class="checkbox checkbox-info">
         <input id="checkbox1" type="checkbox" class="fxhdr">
         <label for="checkbox1"> Fix Header </label>
        </div>
       </li>
       <li>
        <div class="checkbox checkbox-warning">
         <input id="checkbox2" type="checkbox" checked="" class="fxsdr">
         <label for="checkbox2"> Fix Sidebar </label>
        </div>
       </li>
       <li>
        <div class="checkbox checkbox-success">
         <input id="checkbox4" type="checkbox" class="open-close">
         <label for="checkbox4" > Toggle Sidebar </label>
        </div>
       </li>
      </ul>
      <ul id="themecolors" class="m-t-20">
       <li><b>With Light sidebar</b></li>
       <li><a href="javascript:void(0)" theme="default" class="default-theme working">1</a></li>
       <li><a href="javascript:void(0)" theme="green" class="green-theme">2</a></li>
       <li><a href="javascript:void(0)" theme="gray" class="yellow-theme">3</a></li>
       <li><a href="javascript:void(0)" theme="blue" class="blue-theme">4</a></li>
       <li><a href="javascript:void(0)" theme="purple" class="purple-theme">5</a></li>
       <li><a href="javascript:void(0)" theme="megna" class="megna-theme">6</a></li>
       <li><b>With Dark sidebar</b></li>
       <br/>
       <li><a href="javascript:void(0)" theme="default-dark" class="default-dark-theme">7</a></li>
       <li><a href="javascript:void(0)" theme="green-dark" class="green-dark-theme">8</a></li>
       <li><a href="javascript:void(0)" theme="gray-dark" class="yellow-dark-theme">9</a></li>

       <li><a href="javascript:void(0)" theme="blue-dark" class="blue-dark-theme">10</a></li>
       <li><a href="javascript:void(0)" theme="purple-dark" class="purple-dark-theme">11</a></li>
       <li><a href="javascript:void(0)" theme="megna-dark" class="megna-dark-theme">12</a></li>

      </ul>
      <ul class="m-t-20 all-demos">
       <li><b>Choose other demos</b></li>

      </ul>
      <ul class="m-t-20 chatonline">
       <li><b>Chat option</b></li>
       <li><a href="javascript:void(0)"><img src="/backend/images/users/varun.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a></li>
       <li><a href="javascript:void(0)"><img src="/backend/images/users/genu.jpg" alt="user-img"  class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a></li>
       <li><a href="javascript:void(0)"><img src="/backend/images/users/ritesh.jpg" alt="user-img"  class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a></li>
       <li><a href="javascript:void(0)"><img src="/backend/images/users/arijit.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a></li>
       <li><a href="javascript:void(0)"><img src="/backend/images/users/govinda.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a></li>
       <li><a href="javascript:void(0)"><img src="/backend/images/users/hritik.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a></li>
       <li><a href="javascript:void(0)"><img src="/backend/images/users/john.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a></li>
       <li><a href="javascript:void(0)"><img src="/backend/images/users/pawandeep.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a></li>
      </ul>
     </div>
    </div>
   </div>
   <!-- /.right-sidebar -->
  </div>
  <!-- /.container-fluid -->
  <footer class="footer text-center"> 2016 &copy; Elite Admin brought to you by themedesigner.in </footer>
 </div>
 <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
<!-- jQuery -->
<script src="/backend/plugins/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="/backend/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Menu Plugin JavaScript -->
<script src="/backend/plugins/sidebar-nav/dist/sidebar-nav.min.js"></script>
<!--slimscroll JavaScript -->
<script src="/backend/js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="/backend/js/waves.js"></script>
<!-- Custom Theme JavaScript -->
<script src="/backend/js/custom.min.js"></script>
<!--Style Switcher -->
<script src="/backend/plugins/styleswitcher/jQuery.style.switcher.js"></script>
@yield('js')
</body>
</html>
