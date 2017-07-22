@extends('Boot.master')
@section('title')
<title>User Profile</title>
@stop
@section('body')
<section class="cart-content paira-animation-container">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center margin-bottom-40">
				<div class="page-header">
					<h1 class="text-uppercase">User Profile</h1>
					<hr>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="user-profile">
				<form class="form-horizontal">
					<div class="form-group">
						<label for="userName" class="col-sm-2 control-label">Name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="userName" name="userName" value="{{ Auth::user()->name }}">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Email</label>
						<div class="col-sm-10">
							<p class="form-control-static">{{ Auth::user()->email }}</p>
						</div>
					</div>
					<?php $a = 1; ?>
					@foreach ($users as $user)
					<div class="form-group">
						<label for="addressDetails" class="col-sm-2 control-label">Address {{ $a }}</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="addressDetails" name="addressDetails" value="{{ $user->add_details }}">
						</div>
					</div>
					<?php $a++; ?>
					@endforeach
					<div class="form-group">
						<button  class="btn btn-success text-uppercase padding-left-45 font-bold padding-right-45 pull-right margin-right-15 btn-lg">Save Changes</button>
					</div>
				</form>
			</div>
		</div>
		<br>
	</div>
</section>
@stop