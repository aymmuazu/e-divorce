@extends('layouts.app')
@section('title', 'Home')
@section('meta', 'Online Divorce Information System')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Online Divorce Information System') }}</div>

                <div class="card-body">
                    <h2>Overview 👌</h2>
                    <p>
                        This system is designed to analyze and gathered data and statistics of divorced women,
                        it move further to solve the abandoned right of divorced women wether pregnant divorcees or early delivery divorcees, this data can further
                        be a statistics in government support to the divorced women, recent government administrations introduces programme of marrying divorcees, 
                        this software will hance modern way of getting acurate data and forecast for government planning .
                        <p></p>
                        @guest
                            <a href="{{route('register')}}" class="btn btn-primary">Let's get started 👉</a>
                        @else
                            <a href="{{route('home')}}" class="btn btn-primary">Dashboard 🏠</a>
                        @endguest
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
