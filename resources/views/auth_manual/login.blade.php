@extends('template_auth.layout')

@section('isi')

<!-- page -->
<div class="page">

	<!-- main-signin-wrapper -->
	<div class="my-auto page page-h">
		<div class="main-signin-wrapper">
			<div class="main-card-signin d-md-flex">
			<div class="wd-md-50p login d-none d-md-block page-signin-style p-5 text-white" >
				<div class="my-auto authentication-pages">
					<div>
						<img src="../assets/img/brand/logo-white.png" class=" m-0 mb-4" alt="logo">
						<h5 class="mb-4">Responsive Modern Dashboard &amp; Admin Template</h5>
						<p class="mb-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting</p>
						<a href="index.html" class="btn btn-success">Learn More</a>
					</div>
				</div>
			</div>
			<div class="sign-up-body wd-md-50p">
				<div class="main-signin-header">
					<h2>Welcome back!</h2>
					<div class="px-0 col-12 mb-2">
                        @include('_component.message')
                    </div>
					<h4>Please Register with Azira</h4>
					<form method="POST" action="{{ route('login')}}">
						@csrf
						<div class="form-group">
							<label>Email</label>
							<input name="email" class="form-control" placeholder="Enter your email"
								type="email" required autofocus>
						</div>
						<div class="form-group">
							<label>Password</label> 
							<input name="password" class="form-control"
								placeholder="Enter your password" type="password" value="password" required>
						</div>
						<button type="submit" class="btn btn-primary btn-block"><i class="fe fe-log-in"></i> Sign In</button>
					</form>
				</div>
				<div class="main-signup-footer mg-t-10">
					<p>Already have an account? <a href="page-signin.html">Sign In</a></p>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>
	<!-- page closed -->
	
@endsection