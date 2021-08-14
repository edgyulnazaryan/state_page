@extends('layouts.app')


@section('content')

 
<div class="row">
<div class="col-4">
<h3 align="center">Add review</h3>


<div class="card border-light col-4" style="width: 50rem;">
  <div class="card-body text-center">
    <form action="{{route('review')}}" method="POST">
      @csrf
      <textarea  rows="5" style="font-size: 20px; width: 400px" class="form-control" name="text" placeholder="Write review"></textarea>
      <select class="form-control" name="rate">
        <option value="1">*</option>
        <option value="2">**</option>
        <option value="3">***</option>
        <option value="4">****</option>
        <option value="5" selected>*****</option>
      </select>
      <input type="text" name="state_id" value="{{$data->id}}" hidden>
      <input type='submit' name="submit_review" class="btn btn-primary" value="Add review">
    </form>
  </div>
</div>


</div>
<div class="card border-light col-4" style="width: 18rem;">
  <img class="card-img-top " src="{{ $data->image }}" >
  <div class="card-body text-center">
  <h5 class="card-title">{{ $data->title }}</h5>
  <p class="card-text">Content ։ {{ $data->content }}</p>
  <p class="card-text">Category ։ {{ $data->category }}</p>
  <p class="card-text">Age ։ {{ $data->age }}</p>
  <p class="card-text">Gender ։ {{ $data->gender }} </p>
  <p class="card-text">Dead Line ։ {{ $data->dead_line }} </p>
  
  <p class="card-text">Price ։ {{ $data->price }} դրամ</p>
  
  @if( Auth::user()->email == 'admin@admin.com')
  <div class="card-body">
  <a href="{{ route('state_remove', $data->id) }}" class="btn btn-danger"> Ջնջել </a>
  <a href="{{ route('state_update', $data->id) }}" class="btn btn-dark "> Փոփոխել </a>
  </div>

  @endif
  </div>
</div>

<div class="col-4">
@if(!empty($data_review))
@foreach($data_review as $el)
  <div class="alert alert-info mt-3">
      <h5 class="card-title">ID: {{ $el->id }} </h5>
      <label><b>REVIEW</b></label>
      <p>{{ $el->text }}</p>
      <label><b>RATE</b></label>
      <p>{{ $el->rate }}</p>
      
  </div>
@endforeach
@else
<div class="alert alert-info mt-3">
  <h5 class="card-title">HAVE NO ONE REVIEW</h5>
</div>
@endif
</div>
</div>

@endsection
