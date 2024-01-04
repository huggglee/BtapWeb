<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{asset('public/backend/admin_login/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('public/backend/admin_login/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('public/backend/admin_login/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('public/backend/admin_login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('public/backend/admin_login/vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('public/backend/admin_login/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('public/backend/admin_login/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('public/backend/admin_login/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('public/backend/admin_login/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('public/backend/admin_login/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('public/backend/admin_login/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="{{route('admin.login')}}" method="post">
				<?php
				$msg=Session()->get('msg');
				if($msg){
					echo $msg;
					Session()->put('msg',null);
				}
				?>
				@csrf	
				<span class="login100-form-title p-b-43">
						Đăng nhập
					</span>
					<div class="wrap-input100 validate-input" data-validate = "">
						<input class="input100" type="text" name="admin_name">
						<span class="focus-input100"></span>
						<span class="label-input100">Tên đăng nhập</span>
					</div>
					
					
					<div class="wrap-input100 validate-input" data-validate="Cần nhập mật khẩu">
						<input class="input100" type="password" name="admin_pass">
						<span class="focus-input100"></span>
						<span class="label-input100">Mật khẩu</span>
					</div>
			
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Đăng nhập
						</button>
					</div>
				</form>

				<img src="{{asset('public/backend/admin_login/images/bg_login_admin.jpg')}}" class="login100-more" alt="">
			</div>
		</div>
	</div>

<!--===============================================================================================-->
	<script src="{{asset('public/backend/admin_login/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('public/backend/admin_login/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('public/backend/admin_login/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('public/backend/admin_login/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('public/backend/admin_login/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('public/backend/admin_login/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('public/backend/admin_login/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('public/backend/admin_login/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('public/backend/admin_login/js/main.js')}}"></script>

</body>
</html>