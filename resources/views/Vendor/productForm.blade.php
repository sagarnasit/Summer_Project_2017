@extends('Vendor.master')

@section('title')
     / Add Product
@stop
@section('body')
      <div class="white-box" align="center">
            <h3>Add New Product</h3>
            <div class="row">
                  <form method="post" action="" >
                        {{ csrf_field() }}
                  </form>
            </div>
      </div>
@stop