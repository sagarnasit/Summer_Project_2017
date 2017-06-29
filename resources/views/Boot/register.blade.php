@extends('Boot.master')
@section('title')
    <title>Register</title>
@stop

@section('body')

        <section class="content-login margin-bottom-75 paira-animation-container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 margin-bottom-40">
                        <div class="page-header text-center">
                            <h1 class="text-uppercase">Register</h1>
                            <hr>
                        </div>
                    </div>
                    <div>
                        <form accept-charset="UTF-8" action="#" class="contact-form" method="post">
                            <div class="col-md-12">
                               {{ csrf_field() }}
                                <div class="form-group margin-bottom-40">

                                    <label><i class="fa fa-user"></i></label>
                                    <input type="email" class="form-control" name="name" placeholder="Tony Stark">
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group margin-bottom-40">

                                    <label><i class="fa fa-envelope"></i></label>
                                    <input type="email" class="form-control" name="email" placeholder="you@example.com">
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group margin-bottom-40">

                                <label><i class="fa fa-lock"></i></label>
                                <input type="password" class="form-control " name="password" placeholder="Password">
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group margin-bottom-40">

                                <label><i class="fa fa-lock"></i></label>
                                <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password">
                                    @if ($errors->has('password_confirmation'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <button  class="btn btn-default text-uppercase font-bold  pull-left margin-left-15 btn-lg color-scheme-1 btn-sub paira-animation" data-paira-animation="fadeInUp" data-paira-animation-delay="0.2s">Register</button>
                            <a href="/" class="btn btn-success text-uppercase font-bold  pull-right margin-right-15 btn-lg paira-animation" data-paira-animation="fadeInUp" data-paira-animation-delay="0.5s">return to store</a>
                        </form>
                    </div>
                </div>
            </div>
        </section>
@stop