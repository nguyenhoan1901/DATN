<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <base href="{{asset('')}}">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Đăng nhập</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="back/global_assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
	<link href="back/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="back/assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
	<link href="back/assets/css/layout.min.css" rel="stylesheet" type="text/css">
	<link href="back/assets/css/components.min.css" rel="stylesheet" type="text/css">
	<link href="back/assets/css/colors.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="back/global_assets/js/main/jquery.min.js"></script>
	<script src="back/global_assets/js/main/bootstrap.bundle.min.js"></script>
	<script src="back/global_assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="back/global_assets/js/plugins/forms/styling/uniform.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="back/global_assets/js/demo_pages/login.js"></script>
	<!-- /theme JS files -->

</head>

<body>

	<!-- Page content -->
	<div class="page-content">

		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Content area -->
			<div class="content d-flex justify-content-center align-items-center">

				<!-- Login card -->
				<form method="post" class="login-form" action="">
					@csrf
					<div class="card mb-0">
						<div class="card-body">
							<div class="text-center mb-3">
								<i class="icon-reading icon-2x text-slate-300 border-slate-300 border-3 rounded-round p-3 mb-3 mt-1"></i>
								<h5 class="mb-0">Đăng nhập vào hệ thống</h5>
							</div>

							<div class="form-group form-group-feedback form-group-feedback-left">
								<input name="username" type="text" class="form-control" placeholder="Username" value={{old('username')}}>
								<div class="form-control-feedback">
									<i class="icon-user text-muted"></i>
								</div>
							</div>

							<div class="form-group form-group-feedback form-group-feedback-left">
								<input value="" name="password" type="password" class="form-control" placeholder="Password">
								<div class="form-control-feedback">
									<i class="icon-lock2 text-muted"></i>
								</div>
							</div>

							<div class="form-group d-flex align-items-center">
								<div class="form-check mb-0">
									<label class="form-check-label">
										<input type="checkbox" name="remember" class="form-input-styled" checked data-fouc>
										Ghi nhớ
									</label>
								</div>

								<a href="{{route('password_forgot')}}" class="ml-auto">Quên mật khẩu?</a>

							</div>

							<div class="form-group">
								<button type="submit" class="btn btn-primary btn-block">Đăng nhập <i class="icon-circle-right2 ml-2"></i></button>
                            </div>

						</div>
					</div>
				</form>
				<!-- /login card -->

			</div>
			<!-- /content area -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

</body>
</html>
