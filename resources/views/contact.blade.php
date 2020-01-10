@extends('layouts.base')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card" style="padding-top: 80px;">
      
          <div class="card-header"> {{$obg->name}} </div>

          <div class="card-body"> {!!$obg->body!!}
         
          </div>
      </div>
    </div>
  </div>
</div>
@endsection
