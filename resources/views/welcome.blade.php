@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            @component('components.sidebar')@endcomponent
        </div>
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-12">
                  <a href="#">
                    <img class="img-fluid img-thumbnail" src="images/campaign1.jpg" alt="campaing1">
                  </a>
                </div>
                <div class="col-md-12">
                  <a href="#">
                    <img class="img-fluid img-thumbnail" src="images/campaign2.jpg" alt="campaing2">
                  </a>
                </div>
                <div class="col-md-12">
                  <a href="#">
                    <img class="img-fluid img-thumbnail" src="images/campaign3.jpg" alt="campaing2">
                  </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
