@extends('Boot.master')
@section('title')
    <title>Review Order</title>
@stop



@section('body')
<form class="" action="" method="post" >
  <div style="margin:10px">
    <table width=80% align='center' border="2" style="border: 2px solid; border-radius: 250px;" >
    <caption style="background-color:black">Review Order</caption>
      <thead>
        <tr>
          <th>Item Detials</th>
          <th>Quantity</th>
          <th>Delivery Options</th>
          <th>Subtotal</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><img src="images\Puma_shoe.jpg" width="15%" alt=""><h5></h5></td>
          <td>4</td>
          <td>options</td>
          <td align='right'><b>Price</b>:Rs.400 <br><b>Delivery Charges</b>:Rs.30 <br><b>Total</b>:Rs.430</td>
        </tr>
      </tbody>
    </table>
  <div class="payment-options">
    <span>
       <input type="radio" name="pay" value="COD" checked="checked">COD
       <input type="submit" name="" value="COD">
     </span>
    <span>
      <input type="radio" name="pay" value="gateway">GATEWAY
      <input type="submit" name="" value="GATEWAY">
    </span>
    <span><input type="submit" name="" value="Continue"></span>
  </div>
  </div>
  <form>
@stop
