@extends('Vendor.master')

@section('title')
      / Add ProductSKU
@stop
@section('body')
      <div class="white-box" align="center">
            <h2>Add ProductSKU</h2>
            <hr>

            {{-- display SKU form --}}
            <div class="row">
                  <form method="post" class="" action="/seller/addSKU">
                        {{ csrf_field() }}
                        <div class=" col-md-offset-3 col-md-6 col-md-offset-3">
                              <div class="form-horizontal">
                                    <div class="form-group">
                                          <label class="col-md-offset-1 col-sm-2 control-label">Product:</label>
                                          <div class="col-md-6">


                                                <select name="productid" class="form-control" required="">
                                                        <option class="form-control"  value="null"> -- Select Product -- </option>
                                                        @foreach($products as $product)
                                                                <option class="form-control"
                                                                        value='{{  $product->product_id  }}'>
                                                                      {{ $product->product_name }}
                                                                </option>
                                                         @endforeach

                                                </select>
                                          </div>
                                    </div>
                              
                              
                                    <div class="form-group">
                                          <label class="col-md-offset-1 col-sm-2 control-label" for="color">Color:</label>
                                          <div class="col-md-6">

                                          <select name="colorid" id="" class="form-control">
                                                <option class="form-control" value="null"> -- Select Color -- </option>
                                                @foreach($colors as $color)
                                                      <option class="form-control" value='{{ $color->color_id }}'>
                                                            {{ $color->color_name }}
                                                      </option>
                                                @endforeach
                                          </select>
                                          </div>
                                    </div>
                                    <div class="form-group">
                                          <label class="col-md-offset-1 col-sm-2 control-label" for="size">Size:</label>
                                          <div class="col-md-6">

                                          <select name="sizeid" id="" class="form-control">
                                                 <option class="form-control" value="null"> -- Select Size -- </option>
                                                @foreach($sizes as $size)
                                                      <option class="form-control" value='{{ $size->size_id }}'>
                                                            {{ $size->size}}
                                                      </option>
                                                @endforeach
                                          </select>
                                          </div>
                                    </div>
                                    
                              
                                    <div class="form-group">
                                        <label  control-label" class="col-md-offset-1 col-sm-2 control-label">MRP:</label>
                                        <div class="col-md-6">

                                            <input type="text" name="mrp" class="form-control" id="mrp">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label control-label" class="col-md-offset-1 col-sm-2 control-label">Price:</label>
                                        <div class="col-md-6">
                                        
                                            <input type="text" name="price" class="form-control" id="price">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label  control-label" class="col-md-offset-1 col-sm-2 control-label">Qty:</label>
                                        <div class="col-md-6">
                                        
                                            <input type="text" name="qty" class="form-control" id="qty">
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="form-group">
                                        <label  control-label" class="col-md-offset-1 col-sm-2 control-label">Min Qty:</label>
                                        <div class="col-md-6">
                                        
                                            <input type="text" name="minqty" class="form-control" id="minqty">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-offset-3 col-md-6">
                                        
                                           <button type="submit" class="btn btn-success">Add SKU</button>
                                           <button type="reset" class="btn btn-success">Clear</button>
                                        </div>
                                    </div>
                                    
                              </div>
                        </div>
                        

                  </form>
                  
            </div>
        
            {{--  Display SKU Details  --}}

            <hr>
            @if($productdetails)
            <div class="row">
                <div class="col-md-offset-3 col-md-6 col-md-offset-3">
                    <table class="table">
                        <thead>
                            <th>Color</th><th>Size</th><th>MRP</th><th>Price</th><th>Qty</th><th>MinQty</th>
                        </thead>
                        <tbody>
                            @foreach($productdetails as $p)
                                <tr>
                                    
                                    <td>{{ $p->color->color_name }}</td>
                                    <td>{{ $p->size->size }}</td>
                                    <td>{{ $p->mrp }}</td>
                                    <td>{{ $p->price }}</td>
                                    <td>{{ $p->qty }}</td>
                                    <td>{{ $p->minqty }}</td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>   
                </div>
            </div>
            @endif
                
            
      </div>
     
      <div id='msg'>
            @include('flash::message')
            <script type="text/javascript">
                
            </script>
      </div>

@stop
