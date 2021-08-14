@extends('layouts.app')


@section('content')
<div class="container">
  <div class="row">
    
  


@foreach($user as $el) 
<div class="col-md-4">
<div class="card border-dark mt-3" style="width: 18rem;box-shadow: 50px 50px 100px 0px cadetblue;">
<h5 align='center' class="card-title">{{ $el->name }}</h5>
  <div class="card-body text-center">
  
  
  <p class="card-text">Country:       {{  $el->country        }} </p>
  <p class="card-text">City:          {{  $el->city           }} </p>
  <p class="card-text">Date of birth: {{  $el->date_of_birth  }} </p>
  <p class="card-text">Phone:         {{  $el->phone          }} </p>
  <p class="card-text">Profession:    {{  $el->profession     }} </p>
  <p class="card-text">Email:         {{  $el->email          }} </p>
  <p class="card-text">CREATED_AT     {{  $el->created_at     }} </p>
  
  </div>
</div>
</div>
@endforeach 

<div class="col-md-4"></div> 
<div class="col-md-4"></div>
</div>
</div>
@endsection