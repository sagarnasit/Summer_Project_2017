@extends('Boot.master')
@section('title')
<title>User Profile</title>
@stop
@section('body')
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center margin-bottom-40">
				<div class="page-header">
					<h1 class="text-uppercase">
						Login & Security
					</h1>
					<hr>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-2 col-md-2 col-sm-2">
			</div>
			<div class="col-lg-10 col-md-10 col-sm-10">
				@include ('Boot.layouts.errors')
				@if (Session::has('loginsecurity.level'))
				<div class="alert alert-{{ session('loginsecurity.level') }}">
					{{ Session::get('loginsecurity.content') }}
				</div>
				@endif
			</div>
			<div>
				<form class="form-horizontal" method="POST" action="/login-security-form">
					{{ csrf_field() }}
					<ul class="list-unstyled">
						<li>
							<div class="form-group">
								<label for="name" class="col-sm-2 control-label">Name : </label>
								<div class="col-sm-10">
									<input type="text" class="form-control color-scheme-3" name="name" id="name" value="{{ Auth::user()->name }}" required="">
								</div>
							</div>
						</li>
						<li>
							<div class="form-group">
								<label for="email" class="col-sm-2 control-label">E - mail : </label>
								<div class="col-sm-10">
									<input type="text" class="form-control color-scheme-3" name="email" id="email" value="{{ Auth::user()->email }}" required="">
								</div>
							</div>
						</li>
						<li>
							<div class="form-group">
								<label for="oldPassword" class="col-sm-2 control-label">Old Password : </label>
								<div class="col-sm-10">
									<input type="password" class="form-control color-scheme-3" name="oldPassword" id="oldPassword" placeholder="******" required="">
								</div>
							</li>
							<li>
								<div class="form-group">
									<label for="password" class="col-sm-2 control-label">New Password : </label>
									<div class="col-sm-10">
										<input type="password" class="form-control color-scheme-3" name="password" id="password" placeholder="******" required="">
									</div>
								</div>
							</li>
							<li>
								<div class="form-group">
									<label for="password_confirmation" class="col-sm-2 control-label">Password Confirmation : </label>
									<div class="col-sm-10">
										<input type="password" class="form-control color-scheme-3" name="password_confirmation" id="password_confirmation" placeholder="******" required="">
									</div>
								</div>
							</li>
							<li>
								<div class="form-group col-lg-8 col-md-8 col-sm-8">
									<button  class="btn btn-success text-uppercase padding-left-45 font-bold padding-right-45 pull-right margin-right-15 btn-lg">Done</button>
								</div>
							</li>
						</form>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4">
						<a href="/your-account" class="btn btn-default color-scheme-1 btn-lg btn-block text-uppercase pull-right">
						Do Nothing
						</a>
					</div>
				</div>
				<br>
			</div>
		</section>
		@stop