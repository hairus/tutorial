@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">List Post</div>
                <div class="card-body">
                    <ul>
                        @php $no = 1; @endphp
                        @foreach ( $users as $user)
                        <li>{{$user->id . ' - '. $user->name }}</li>
                        @endforeach
                    </ul>
                    <hr>
                </div>
            </div>
        </div>
    </div>
    @endsection
