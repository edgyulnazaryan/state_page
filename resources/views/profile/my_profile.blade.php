@extends('layouts.app')
@section('content')


<div class="container">
  <div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">

<div class="card border-dark" style="width: 18rem;box-shadow: 50px 50px 100px 0px cadetblue;">
<h1 align='center'>MY PROFILE</h1>
  
  <div class="card-body text-center">
  
  <h5 class="card-title">             {{  Auth::user()->name           }} </h5>
  <p class="card-text">Country:       {{  Auth::user()->country        }} </p>
  <p class="card-text">City:          {{  Auth::user()->city           }} </p>
  <p class="card-text">Date of birth: {{  Auth::user()->date_of_birth  }} </p>
  <p class="card-text">Phone:         {{  Auth::user()->phone          }} </p>
  <p class="card-text">Profession:    {{  Auth::user()->profession     }} </p>
  <p class="card-text">Email:         {{  Auth::user()->email          }} </p>
  <p class="card-text">CREATED_AT     {{  Auth::user()->created_at     }} </p>
  
  </div>
  
</div>
</div>
  <div class="col-md-4"></div>
</div></div>
@endsection