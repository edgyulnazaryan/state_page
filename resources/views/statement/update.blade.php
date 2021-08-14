@extends('layouts.app')
@section('content')


<div class="container">
			<form action="statements/edit/{{$data->id}}" method="POST" enctype="multipart/form-data">
			@csrf

			<div class="form-group row">
                <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                <div class="col-md-6">
                    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" 
                    value="{{ $data->title }}" required >

                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="content" class="col-md-4 col-form-label text-md-right">{{ __('Content') }}</label>

                <div class="col-md-6">
                    <input id="content" type="text" class="form-control @error('content') is-invalid @enderror" name="content" 
                    value="{{ $data->content }}" required autocomplete="content" >

                    @error('content')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="category" class="col-md-4 col-form-label text-md-right">{{ __('Category') }}</label>

                <div class="col-md-6">
                    <input id="category" type="text" class="form-control @error('category') is-invalid @enderror" name="category"
                    value="{{ $data->category }}" required autocomplete="title" >

                    @error('category')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Price') }}</label>

                <div class="col-md-6">
                    <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" 
                    value="{{ $data->price }}" required autocomplete="price" >

                    @error('price')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="dead_line" class="col-md-4 col-form-label text-md-right">{{ __('Dead line') }}</label>

                <div class="col-md-6">
                    <input id="dead_line" type="date" class="form-control @error('dead_line') is-invalid @enderror" name="dead_line" 
                    value="{{ $data->dead_line }}" required autocomplete="dead_line" >
                    @error('dead_line')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>

                <div class="col-md-6">
                    <select class="form-control @error('gender') is-invalid @enderror" name="gender" required autocomplete="gender" >
                    	<option {{$data->gender == 'Male' ? "selected='selected'" : ''}}>Male</option>
                    	<option {{$data->gender == 'Female' ? "selected='selected'" : ''}}>Female</option>
                    </select>
                    @error('gender')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Age') }}</label>

                <div class="col-md-6">
                    <input id="age" type="number" class="form-control @error('age') is-invalid @enderror" name="age" value="{{ $data->age }}" required autocomplete="age" >

                    @error('age')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>

                <div class="col-md-6">
                    <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="new_image" 
                     autocomplete="image" >
                     <input type="text" name="image" hidden value="{{$data->image}}">
                	<img src='{{$data->image}}'  height="54.5%" width="500px">

                    @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="submit" class="col-md-4 col-form-label text-md-right"></label>

                <div class="col-md-6">
                   <input id="submit" type="submit" class="form-control @error('submit') is-invalid @enderror btn btn-info" name="submit" value="UPDATE" required autocomplete="submit" >
                    @error('submit')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
		</form>
	
</div>




@endsection