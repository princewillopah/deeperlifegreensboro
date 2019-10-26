<!DOCTYPE html>
<html lang="en">
<head>
<title>@yield('title') | Deeperlife Greensboro</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="{{asset('admin-temp/css/bootstrap.min.css')}}" />
<link rel="stylesheet" href="{{asset('admin-temp/css/bootstrap-responsive.min.css')}}" />
<link rel="stylesheet" href="{{asset('admin-temp/css/fullcalendar.css')}}" />
<link rel="stylesheet" href="{{asset('admin-temp/css/matrix-style.css')}}" />
<link rel="stylesheet" href="{{asset('admin-temp/css/matrix-media.css')}}" />
<link href="{{asset('admin-temp/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
<link rel="stylesheet" href="{{asset('admin-temp/css/jquery.gritter.css')}}" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->
<div id="header">
<h1><a href="{{route('home')}}">Dashboard</a></h1>
</div>
<!--close-Header-part--> 


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">{{Auth::user()->name}}</span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
        <li class="divider"></li>
        <li><a href="#"><i class="icon-check"></i>Home</a></li>
        <li class="divider"></li>
        <li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>
      </ul>
    </li>
    <li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>
    <li class=""><a title="" href="login.html"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
  </ul>
</div>
<!--close-top-Header-menu-->

<!--sidebar-menu-->
<div id="sidebar"><a href="{{route('home')}}" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="{{(request()->is('home'))?'active':''}}"><a href="{{route('home')}}"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li class="submenu {{(request()->is('pastors'))||(request()->is('pastors/create'))?'active':''}}"> <a href=""><i class="icon icon-th-list"></i> <span>Pastor</span> <span class="label label-important">3</span></a>
      <ul>
        <li  class="{{(request()->is('pastors'))?'active':''}}"><a href="{{route('pastors.index')}}">All Pastors</a></li>
        <li class="{{(request()->is('pastors/create'))?'active':''}}"><a href="{{route('pastors.create')}}">Create New</a></li>
      </ul>
    </li>
    <li><a href="buttons.html"><i class="icon icon-tint"></i> <span>Buttons &amp; icons</span></a></li>
    <li><a href="interface.html"><i class="icon icon-pencil"></i> <span>Eelements</span></a></li>
    <li class="submenu"> <a href="#"><i class="icon icon-file"></i> <span>Addons</span> <span class="label label-important">5</span></a>
      <ul>
        <li><a href="index2.html">Dashboard2</a></li>
        <li><a href="gallery.html">Gallery</a></li>
        <li><a href="calendar.html">Calendar</a></li>
        <li><a href="invoice.html">Invoice</a></li>
        <li><a href="chat.html">Chat option</a></li>
      </ul>
    </li>
    <li class="submenu"> <a href="#"><i class="icon icon-info-sign"></i> <span>Error</span> <span class="label label-important">4</span></a>
      <ul>
        <li><a href="error403.html">Error 403</a></li>
        <li><a href="error404.html">Error 404</a></li>
        <li><a href="error405.html">Error 405</a></li>
        <li><a href="error500.html">Error 500</a></li>
      </ul>
    </li>
    <li class="content"> <span>Monthly Bandwidth Transfer</span>
      <div class="progress progress-mini progress-danger active progress-striped">
        <div style="width: 77%;" class="bar"></div>
      </div>
      <span class="percent">77%</span>
      <div class="stat">21419.94 / 14000 MB</div>
    </li>
    <li class="content"> <span>Disk Space Usage</span>
      <div class="progress progress-mini active progress-striped">
        <div style="width: 87%;" class="bar"></div>
      </div>
      <span class="percent">87%</span>
      <div class="stat">604.44 / 4000 MB</div>
    </li>
  </ul>
</div>
<!--sidebar-menu-->

<!--Action boxes-->
@yield('content')

<!--end-main-container-part-->

<!--Footer-part-->

<div class="row-fluid">
<div id="footer" class="span12"> &copy; 2019  | <a href="{{route('home')}}">Deeperlife Greensboro</a> </div>
</div>

<!--end-Footer-part-->

<script src="{{asset('admin-temp/js/excanvas.min.js')}}"></script> 
<script src="{{asset('admin-temp/js/jquery.min.js')}}"></script> 
<script src="{{asset('admin-temp/js/jquery.ui.custom.js')}}"></script> 
<script src="{{asset('admin-temp/js/bootstrap.min.js')}}"></script> 
<script src="{{asset('admin-temp/js/jquery.flot.min.js')}}"></script> 
<script src="{{asset('admin-temp/js/jquery.flot.resize.min.js')}}"></script> 
<script src="{{asset('admin-temp/js/jquery.peity.min.js')}}"></script> 
<script src="{{asset('admin-temp/js/fullcalendar.min.js')}}"></script> 
<script src="{{asset('admin-temp/js/matrix.js')}}"></script> 
<script src="{{asset('admin-temp/js/matrix.dashboard.js')}}"></script> 
<script src="{{asset('admin-temp/js/jquery.gritter.min.js')}}"></script> 
<script src="{{asset('admin-temp/js/matrix.interface.js')}}"></script> 
<script src="{{asset('admin-temp/js/matrix.chat.js')}}"></script> 
<script src="{{asset('admin-temp/js/jquery.validate.js')}}"></script> 
<script src="{{asset('admin-temp/js/matrix.form_validation.js')}}"></script> 
<script src="{{asset('admin-temp/js/jquery.wizard.js')}}"></script> 
<script src="{{asset('admin-temp/js/jquery.uniform.js')}}"></script> 
<script src="{{asset('admin-temp/js/select2.min.js')}}"></script> 
<script src="{{asset('admin-temp/js/matrix.popover.js')}}"></script> 
<script src="{{asset('admin-temp/js/jquery.dataTables.min.js')}}"></script> 
<script src="{{asset('admin-temp/js/matrix.tables.js')}}"></script> 

<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>
</body>
</html>
