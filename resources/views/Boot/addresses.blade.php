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
					<?php $a = 1; ?>
					@foreach ($users as $user)
					<div class="form-group">
						<label for="addressDetails" class="col-sm-2 control-label">Address {{ $a }}</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="addressDetails" name="addressDetails" value="{{ $user->add_details }}">
							<br>
							<button class="btn btn-default pull-right">Edit</button>
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