<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<head>
<title> Admin web</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="{{asset('backend/css/bootstrap.min.css')}}" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="{{asset('backend/css/style.css')}}" rel='stylesheet' type='text/css' />
<link href="{{asset('backend/css/style-responsive.css')}}" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="{{asset('backend/css/font.css')}}" type="text/css"/>
<link href="{{asset('backend/css/font-awesome.css')}}" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="{{asset('backend/js/jquery2.0.3.min.js')}}"></script>
</head>
<body>
<div class="log-w3">
<div class="w3layouts-main">
	<h2>Sign In Now</h2>
	 {{-- Hiển thị thông báo lỗi --}}
     
    @if(session('error'))
        <div style="color: red; margin-bottom: 10px;">
            {{ session('error') }}
        </div>
    @endif
    {{-- Hiển thị thông báo đăng ký thành công --}}
    @if(session('success'))
        <div style="color: green; margin-bottom: 10px;">
            {{ session('success') }}
        </div>
    @endif
		<!-- <form action="{{route('admin.login.post')}}" method="post">
			{{csrf_field()}}
			<input type="text" class="ggg" name="admin_email" placeholder="Điền email" required="">
			<input type="password" class="ggg" name="admin_password" placeholder="Điền password" required="">
			<span><input type="checkbox" />Remember Me</span>
			<h6><a href="#">Forgot Password?</a></h6>
				<div class="clearfix"></div>
				<input type="submit" value="Sign In" name="login">
		</form> -->
		<form id="loginForm" action="{{ route('admin.login.post') }}" method="post">
    {{ csrf_field() }}
    <input type="text" class="ggg" name="admin_email" placeholder="Điền email" required="">
    <input type="password" class="ggg" name="admin_password" placeholder="Điền password" required="">
    <span>
        <input type="checkbox" id="is_admin" /> Đăng nhập với tư cách Admin
    </span>
    <h6><a href="#">Forgot Password?</a></h6>
    <div class="clearfix"></div>
    <input type="submit" value="Sign In" name="login">
</form>
		<!-- <p>Don't Have an Account ?<a href="registration.html">Create an account</a></p> -->
</div>
</div>
<script>
document.getElementById('loginForm').addEventListener('submit', function(e) {
    var isAdmin = document.getElementById('is_admin').checked;
    if(isAdmin) {
        this.action = "{{ route('admin.login.post') }}";
    } else {
        this.action = "{{ route('user.login.post') }}";
    }
});
</script>
<script src="{{asset('backend/js/bootstrap.js')}}"></script>
<script src="{{asset('backend/js/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{asset('backend/js/scripts.js')}}"></script>
<script src="{{asset('backend/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('backend/js/jquery.nicescroll.js')}}"></script>
<!-- [if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]s -->
<script src="{{asset('backend/js/jquery.scrollTo.js')}}"></script>
</body>
</html>
