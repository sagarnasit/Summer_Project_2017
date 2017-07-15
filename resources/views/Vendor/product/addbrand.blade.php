@extends('Vendor.master')

@section('title')
/ Add Brand
@stop
@section('body')
<div id='msg'>
    @include('flash::message')
</div>
<div class="white-box" align="center">
    <h2>Add Brand</h2>
    <hr>
    <div class="row">
        <form method="post" class="form-horizontal" action="/seller/storeBrand">
            {{ csrf_field() }}
            <div class="col-md-offset-3 col-md-6 col-md-offset-3">
                <div class="form-group">
                    <label class="col-sm-2 control-label">Brand Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="brandname" class="form-control" required="">
                    </div>
                </div>

            </div>

            <div class="col-md-offset-3 col-md-6">
                <div align="center" class="form-group">
                    <button type="submit" id="colorbutton" class="btn btn-success">Add Brand</button>
                </div>
            </div>

        </form>
    </div>

    
</div>
</div>


@stop
