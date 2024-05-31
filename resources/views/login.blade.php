@extends('layouts.public.app')
@section('content')
<body class="my-login-page">
	<section class="h-1000" id="about" class="">
		<div class=" h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="brand">
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Login Page</h4>
							<form method="POST" action="" class="my-login-validation" novalidate="">
								<div class="form-group">
									<label for="username">Username</label>
									<input id="username" type="text" class="form-control" name="username" value="" required autofocus>
									<div class="invalid-feedback">
										Username is required
									</div>
								</div>

								<div class="form-group">
									<label for="password">Password</label>
									<input id="password" type="password" class="form-control" name="password" required data-eye>
								    <div class="invalid-feedback">
								    	Password is required
							    	</div>
								</div>
                                <br>

								<div class="form-group m-0">
									<button type="submit" class="btn btn" style="background-color: pink;">
										Login
									</button>
								</div>

							</form>
						</div>
					</div>
					<div class="footer">
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection