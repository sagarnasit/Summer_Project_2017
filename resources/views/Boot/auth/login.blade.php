
@extends('Boot.master')
@section('title')
    <title>Log In</title>
@stop

@section('body')

        <section class="content-login">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 margin-bottom-40">
                        <div class="page-header text-center">
                            <h1 class="text-uppercase">Login</h1>
                            <hr>
                        </div>
                    </div>
                    <div class="log-form">
                        <form accept-charset="UTF-8" action="{{ route('login') }}" class="contact-form" method="post">
                            <div class="col-md-12">
                                {{ csrf_field() }}
                                <div class="form-group margin-bottom-40">

                                    <label><i class="fa fa-envelope"></i></label>
                                    <input type="email" class="form-control {{ $errors->has('email') ? 'alert alert-danger' : '' }}" name="email" placeholder="you@example.com">
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        {{--<strong class="{{ $errors->has('email') ? ' text-danger' : '' }}">{{ $errors->first('email') }}</strong>--}}
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group margin-bottom-40">

                                    <label><i class="fa fa-lock"></i></label>
                                    <input type="password" class="form-control {{ $errors->has('email') ? 'alert alert-danger' : '' }}" name="password" placeholder="Password">
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                       <strong class="{{ $errors->has('email') ? ' text-danger' : '' }}">{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <button  class="btn btn-default text-uppercase font-bold pull-left margin-left-15 margin-bottom-75 btn-lg">login</button>
                            <a href="password/email" class="text-uppercase pull-right margin-bottom-75 reset-bt margin-right-15 margin-top-20 font-bold font-color-orange fg-pass">Forget Password<i class="fa fa-long-arrow-right margin-left-10"></i></a>
                        </form>
                    </div>
                </div>
                <div class="row small-foot margin-bottom-75">
                    <a href="/register" class="text-uppercase pull-left reset-bt margin-top-15 margin-left-15 font-bold margin-top-20">new customer<i class="fa fa-long-arrow-right margin-left-10"></i></a>
                    <a href="/register" class="btn btn-success text-uppercase padding-left-45 font-bold padding-right-45 pull-right margin-right-15 btn-lg">Create account</a>
                </div>
            </div>
        </section>

@stop