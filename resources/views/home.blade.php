@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            @component('components.sidebar')@endcomponent
        </div>
        <div class="col-md-9">
            <h3>Profile</h3>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            @if (!Auth::guest() && Auth::user()->admin)
                <p>welcome admin, nothing here yet!</p>
            @else
            @endif
        </div>
    </div>
</div>
@endsection
