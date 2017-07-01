@extends('Vendor.master')

@section('title')
     / Add Product
@stop
@section('body')
      <div class="white-box" align="center">
            <h3>Add New Product</h3>
            <div class="row">
                  <form method="post" class="form-horizontal" action="/addproduct" >
                        {{ csrf_field() }}
                        <div class="col-md-offset-3 col-md-6 col-md-offset-3">
                              <div class="form-group">
                                    <label  class="col-sm-2 control-label">Product Name</label>
                                    <div class="col-sm-10">
                                          <input type="text" name="name" class="form-control"  >
                                    </div>
                              </div>
                              <div class="form-group">
                                    <label  class="col-sm-2 control-label">Product Dscription</label>
                                    <div class="col-sm-10">
                                          <textarea class="form-control" rows="3" name="description"></textarea>
                                    </div>
                              </div>

                              <div id="addcolor" class="row">

                              </div>
                              <div align="left" class="form-group">
                                    <button type="button" id="colorbutton" class="btn btn-default">Add Color</button>
                              </div>


                        </div>

                  </form>
            </div>
      </div>
@stop

@section('javascript')
     <script type="text/javascript">
           $(document).ready(function(){
              $('#colorbutton').click(function(){
                $.get('/getAjaxColor',function(data){
                  //  console.log(data);
                   $('#addcolor').append(data);
                });
              });

              //Size
               $('#buttonsize').click(function(){

                         alert('hi');
//                       $('#addsize').append(data);

               });

           });
     </script>
@stop