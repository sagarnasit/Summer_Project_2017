@extends('Vendor.master')

@section('body')


    <div class="row">
        <div class="container">
            <table class="table table-responsive">
                <thead>
                    <tr>
                        <td>Email Address</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($subs as $sub)
                        <tr>
                            <td>{{ $sub->email }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
