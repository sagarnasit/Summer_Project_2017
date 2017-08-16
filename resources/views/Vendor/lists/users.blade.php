@extends('Vendor.master')

@section('body')


    <div class="row">
        <div class="container">
            <table class="table table-responsive">
                <thead>
                    <tr>
                        <td>Name</td>
                        <td>Email Address</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
