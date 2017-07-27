@extends('Boot.master')
@section('title')
<title>Review Order</title>
@stop
@section('body')
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center margin-bottom-40">
        <div class="page-header">
          <h1 class="text-uppercase">Review Order</h1>
          <hr>
        </div>
      </div>
    </div>
    <div class="row">
      <div>
      <table class="table">
        <tr bgcolor="#000000">
            <th class="col-md-8 text-center"><h4><font color="#ffffff">Item Details</font></h4></th>
            <th class="col-md-2 text-center"><h4><font color="#ffffff">Quantity</font></h4></th>
            <th class="col-md-2 text-center"><h4><font color="#ffffff">Total</font></h4></th>
        </tr>
        <tr>
            <td class="col-md-8 text-center"><img src="images\Puma_shoe.jpg" width="15%" alt=""></td>
            <td class="col-md-2 text-center">4</td>
            <td class="col-md-2 text-center">Rs. 100</td>
        </tr>
        <tr>
          <td></td>
          <td class="text-center"><h4>Sub-total</h4></td>
          <td class="text-center"><h4>Rs. 100</h4></td>
        </tr>
    </table>
      </div>
    </div>
  </div>
</section>
@stop
