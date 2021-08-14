@extends('layouts.app')
@section('content')


  <h1 align='center'>STATEMENT PAGE</h1>
<div class="container">
  <div class="row">
  @foreach($data as $el)
  <div class="col-md-4">

    <div class="alert alert-info mt-3">
      <p><h3 align='center'>{{ $el->title }}</h3></p>
      <img class="card-img-top" src="{{ $el->image }}" >
       
      <a href="{{ route('state_one', $el->id) }}"><button class="btn btn-warning btn-block ">Ավելի ></button>  </a>
    </div>

  </div>

@endforeach
<div class="col-md-4"></div>
  <div class="col-md-4"></div>
</div>
</div>
@endsection