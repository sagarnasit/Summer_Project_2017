@extends('Boot.master')
@section('title')
<title>Add a new address</title>
@stop
@section('body')
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center margin-bottom-40">
				<div class="page-header">
					<h1 class="text-uppercase">
						Add a new address
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
				@if (Session::has('address.level'))
				<div class="alert alert-{{ session('address.level') }}">
					{{ Session::get('address.content') }}
				</div>
				@endif
			</div>
			<div>
				<form class="form-horizontal" method="POST" action="/addresses-add-form">
					{{ csrf_field() }}
					<ul class="list-unstyled">
						<input type="hidden" name="user_id" id="user_id" value="{{ Auth::user()->id }}">
						<li>
							<div class="form-group">
								<label for="pincode" class="col-sm-2 control-label">Pincode : </label>
								<div class="col-sm-10">
									<input type="number" class="form-control color-scheme-3" name="pincode" id="pincode" required="">
								</div>
							</div>
						</li>
						<li>
							<div class="form-group">
								<label for="address" class="col-sm-2 control-label">Street Address : </label>
								<div class="col-sm-10">
									<input type="text" class="form-control color-scheme-3" name="address" id="address" required="">
								</div>
							</div>
						</li>
						<li>
							<div class="form-group">
								<label for="city" class="col-sm-2 control-label">City : </label>
								<div class="col-sm-10">
									<input type="text" class="form-control color-scheme-3" name="city" id="city" required="">
								</div>
							</div>
						</li>
						<li>
							<div class="form-group">
								<label for="state" class="col-sm-2 control-label">State : </label>
								<div class="col-sm-10">
									<input type="text" class="form-control color-scheme-3" name="state" id="state" required="">
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
					<a href="/addresses" class="btn btn-default color-scheme-1 btn-lg btn-block text-uppercase pull-right">
						Do Nothing
					</a>
				</div>
			</div>
			<br>
		</div>
	</section>
	@stop