@extends('Vendor.master')

@section('title')
/ Add Product
@stop
@section('body')
<div id='msg'>
	@include('flash::message')
</div>
<div class="white-box" align="center">
	<h2>Add New Product</h2>
	<hr>
	<div class="row">
		<form method="post" class="form-horizontal" action="/seller/addproduct">
			{{ csrf_field() }}
			<div class="col-md-offset-3 col-md-6 col-md-offset-3">
				<div class="form-group">
					<label class="col-sm-2 control-label">Brand</label>
					<div class="col-sm-10">
						<select name="brandid" class="form-control" required="">
							<option class="form-control"  value="null"> -- Select Brand -- </option>
							@foreach($brands as $brand)
							<option class="form-control"
							value='{{  $brand->brand_id  }}'>
							{{ $brand->brand_name }}
						</option>
						@endforeach

					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Catagory</label>
				<div class="col-sm-10">
					<select name="categoryid" id="" class="form-control">
						<option class="form-control" value="null"> -- Select Category -- </option>
						@foreach($categories as $category)
						<option class="form-control" value='{{ $category->category_id }}'>
							{{ $category->category_name}}
						</option>
						@endforeach
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Product Name</label>
				<div class="col-sm-10">
					<input type="text" name="name" class="form-control" required="">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Product Dscription</label>
				<div class="col-sm-10">
					<textarea class="form-control" rows="3" name="description"
					required=""></textarea>
				</div>
			</div>


			<div align="center" class="form-group">
				<button type="submit" id="colorbutton" class="btn btn-success">Add Product</button>
			</div>


		</div>

	</form>
</div>
</div>


@stop
@section('javascript')


<script>
	function msg() {
		$('#msg').addClass('animated fadeOutRight');
	}
	setInterval(msg, 3500);

</script>


@stop