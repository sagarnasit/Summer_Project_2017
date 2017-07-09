@extends('Vendor.master')

@section('title')
    / Add Product
@stop
@section('body')
    <div class="white-box" align="center">
        <h2>Add Category</h2>
        <hr>
        <div class="row">
            <form method="post" class="form-horizontal" action="/seller/storeCategory">
                {{ csrf_field() }}
                <div class="col-md-offset-3 col-md-6 col-md-offset-3">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Category Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="categoryname" class="form-control" required="">
                        </div>
                    </div>

                    </div>


                    <div align="center" class="form-group">
                        <button type="submit" id="colorbutton" class="btn btn-success">Add Category</button>
                    </div>


                </div>

            </form>
        </div>
    </div>
    <div id='msg'>
        @include('flash::message')
    </div>
    <style type="text/css">
        #msg {
            position: absolute;

            right: 0;

            z-index: 10;
        }

    </style>
@stop
@section('javascript')


    <script>
        function msg() {
            $('#msg').addClass('animated fadeOutRight');
        }
        setInterval(msg, 3500);

    </script>


@stop