<a href="{{ url('/gigs/create') }}">Create Gig</a><br>
<a href="{{ url('/project/create') }}">Create Project</a><br>
<a href="{{ url('/find') }}">Job & Projects</a><br>
<a href="{{ url('/categories') }}">Categories</a><br>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
