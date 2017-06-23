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
                                <label><i class="fa fa-user"></i></label>
                                <input type="text" class="form-control margin-bottom-40" name="name" placeholder="Full Name">

                                <label><i class="fa fa-envelope"></i></label>
                                <input type="email" class="form-control margin-bottom-40" name="email" placeholder="you@example.com">
                                <label><i class="fa fa-lock"></i></label>
                                <input type="password" class="form-control margin-bottom-40" name="password" placeholder="Password">
                                <label><i class="fa fa-lock"></i></label>
                                <input type="password" class="form-control margin-bottom-40" name="confirmation_password" placeholder="Confirm Password">
                            </div>
                            <button  class="btn btn-default text-uppercase font-bold  pull-left margin-left-15 btn-lg color-scheme-1 btn-sub paira-animation" data-paira-animation="fadeInUp" data-paira-animation-delay="0.2s">Register</button>
                            <a href="/" class="btn btn-success text-uppercase font-bold  pull-right margin-right-15 btn-lg paira-animation" data-paira-animation="fadeInUp" data-paira-animation-delay="0.5s">return to store</a>
                        </form>
                    </div>
                </div>
            </div>
        </section>
@stop