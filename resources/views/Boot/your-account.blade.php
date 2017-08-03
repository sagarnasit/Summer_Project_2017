@extends('Boot.master')
@section('title')
<title>Your Account</title>
@stop
@section('body')
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center margin-bottom-40">
				<div class="page-header">
					<h1 class="text-uppercase">Your Account</h1>
					<hr>
				</div>
			</div>
		</div>
		<div class="row">
			<table class="table">
				<tr>
					<td>
						<img class="img-responsive pull-left margin-right-15" height="150px" width="150px" src="assets/images/shopping-bag-3.png">
					</td>
					<td>
						<div class="comments-content padding-top-5">
							<h4 class="font-bold">Your Orders</h4>
							<p class="margin-top-10">Track, return, or buy things again</p>
						</div>
					</td>
					<td>
						<img class="img-responsive pull-left margin-right-15" height="150px" width="150px" src="assets/images/security.png">
					</td>
					<td>
						<div class="comments-content padding-top-5">
							<h4 class="font-bold">Login & Security</h4>
							<p class="margin-top-10">Edit login, and name</p>
						</div>
					</td>
					<td>
						<img class="img-responsive pull-left margin-right-15" height="150px" width="150px" src="assets/images/trolley.png">
					</td>
					<td>
						<div class="comments-content padding-top-5">
							<h4 class="font-bold">Addresses</h4>
							<p class="margin-top-10">Edit addresses for orders and gifts</p>
						</div>
					</td>
				</tr>
			</table>
		</div>
		<br>
	</div>
</section>
@stop