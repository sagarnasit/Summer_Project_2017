
@extends('Boot.master')
@section('body')
    <title> Password</title>
        <section class="content-login margin-bottom-75 paira-animation-container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 margin-bottom-40">
                        <div class="page-header text-center">
                            <h1 class="text-uppercase">Reset Password</h1>
                            <hr>
                        </div>
                    </div>
                    <div>
                        <form accept-charset="UTF-8" action="#" class="contact-form margin-top-40" method="post">
                            <div class="input-group margin-bottom-40">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input id="email" type="text" class="form-control" name="email" placeholder="Email">
                            </div>
                            <a href="#" class="btn btn-default text-uppercase font-bold margin-right-15 color-scheme-1 btn-sub  pull-left margin-left-15 btn-lg paira-animation" data-paira-animation="fadeInUp" data-paira-animation-delay="0.2s">submit</a>
                            <a href="#" class="btn btn-success text-uppercase font-bold  btn-lg paira-animation" data-paira-animation="fadeInUp" data-paira-animation-delay="0.3s">cancle</a>
                        </form>
                    </div>
                </div>
            </div>
        </section>

@stop