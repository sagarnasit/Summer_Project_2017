@extends('Boot.master')
@section('title')
<title>Your Addresses</title>
@stop
@section('body')
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center margin-bottom-40">
				<div class="page-header">
					<h1 class="text-uppercase">Your Addresses</h1>
					<hr>
				</div>
			</div>
		</div>
		<div class="row">
			<div>
				<form class="form-horizontal">
					<?php $a = 1;?>
					@foreach ($users as $user)
					<div class="form-group">
						<label for="addressDetails {{ $a }}" class="col-sm-2 control-label">Address {{ $a }}</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="addressDetails {{ $a }}" name="addressDetails {{ $a }}" value="{{ $user->address }}, {{ $user->city }}, {{ $user->state }}, {{ $user->pincode }}">
							<br>
							<a href="">
								<button class="btn btn-default pull-right">Edit</button>
							</a>
						</div>
					</div>
					<?php $a++;?>
					@endforeach
				</form>
				<div class="form-group col-lg-8 col-md-8 col-sm-8">
					<a href="addressesadd">
						<button  class="btn btn-success text-uppercase padding-left-45 font-bold padding-right-45 pull-right margin-left-15 btn-lg">Add Address</button>
					</a>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4">
				<a href="/your-account">
					<button  type="button" class="btn btn-default color-scheme-1 btn-lg btn-block text-uppercase pull-right">Do Nothing</button>
				</a>
			</div>
		</div>
		<br>
	</div>
</section>
@stop