@extends('layouts.base')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
  <form class="was-validated" action="{{asset('home')}}" method="post" enctype="multipart/form-data">
	{!!csrf_field()!!}
  <div class="form-group">
    <label for="name">Название товара</label>
    <input type="text" name="name" class="form-control is-invalid" id="name" required>
  </div>
  @error('name')
	<span class="alert alert-danger" role="alert">
		<strong>{{ $message }}</strong>
	</span>
  @enderror
  
   <div class="form-group"> 
   <label for="categories">Категория</label>
  	<select class="custom-select" name="categories" required>
		<option value="">Выберите категорию</option>
		@foreach ($cats as $one)
		<option value="{{$one->id}}">{{$one->name}}</option>
		@endforeach
	</select>
  </div>
  
 
  <div class="form-group">
    <label for="name">Цена</label>
    <input type="text" name="name" class="form-control is-invalid" id="name">
  </div>
  <div class="form-group">
    <label for="body">Описание товара</label>
    <textarea class="form-control is-invalid" name="body" class="form-control is-invalid" id="body"></textarea>
   @error('name')
	<span class="alert alert-danger" role="alert">
		<strong>{{ $message }}</strong>
	</span>
  @enderror
  
  
  <div class="custom-file"> 
   <input type="file" name="picture1" class="custom-file-input" id="picture1">
   <label class="custom-file-label" for="picture1">Выберите изображение...</label>
  </div>
  
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
