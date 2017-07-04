@extends('Vendor.master')

@section('title')
      / Add Product Image
@stop
@section('body')
      <div class="white-box" align="center">
            <h2>Add Product Image</h2>
            <hr>

            {{-- display SKU form --}}
            <div class="row">
                  <form method="post" class="" action="/seller/storeImage" enctype="multipart/form-data">
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
                                          <label class="col-md-offset-1 col-sm-2 control-label" for="color">Image:</label>
                                          <div class="col-md-6">
                                            <input type="file" name="img[]"  required="" />                                        
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
           
                
            
      </div>
     
      <div id='msg'>
            @include('flash::message')
            <script type="text/javascript">
                
            </script>
      </div>

@stop
