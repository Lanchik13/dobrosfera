@extends('layouts.base')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{$obj->name}}</div>

                <div class="card-body">
				<div class="row">
					@foreach($obj->products()->get() as $cat)
						<div class="col-md-4">
							<div class="card">
								<div class="card-header">
								{{$cat->name}}
							</div>
							<div class="card-body">
								<div class="card-title">
									@if($cat->picture)
										<img src=
										"{{asset('uploads/'.$cat->user_id.'/s_'.$cat->picture)}}" width="100%" />
									@else
										<img src="{{asset('uploads/no_photo.png')}}" width="100%" />
									@endif
								</div>
								<div class="card-text text-center">{{$cat->body}}</div>
								<br style="clear:both" />
								<div class='row'>
								<div class='col-sm-12 my-2 text-center'>
								<a href="#" data-id="{{$cat->id}}" class="btn-primary btn-sm my_modal ">Открыть</a>
								<a href="#" data-id="{{$cat->id}}" class="btn-primary btn-sm go my-1 ">Перейти</a>
								<a href="#" data-id="{{$cat->id}}" class="btn-primary btn-sm buy my-1 ">Купить</a>
								</div>
		<div class='col-sm-12 my-2 text-center'>
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg{{$cat->id}}">Подробненько...</button>
		</div>
								
								
								</div>
								
								</div>
							</div>	
						</div>
						
						

<div class="modal fade bd-example-modal-lg{{$cat->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
	<div class='card text-center'>
		@if($cat->picture)
										<img src=
										"{{asset('uploads/'.$cat->user_id.'/s_'.$cat->picture)}}" width="100%" class='card-img-top' />
									@else
										<img src="{{asset('uploads/no_photo.png')}}" width="100%" class='card-img-top' />
									@endif
									<div class='card-body'>
									<h2 class='card-title'>
									{{$cat->name}}
									</h2>
									<p class='card-text'>
									{{$cat->body}}
									</p>
									<p class='card-title text-primary font-weight-bold'>{{$cat->price}}</p>
									</div>
									<div class='col-sm-12 mb-4 text-center'>
								<a href="#" data-id="{{$cat->id}}" class="btn-primary btn-sm my_modal ">Открыть</a>
								<a href="#" data-id="{{$cat->id}}" class="btn-primary btn-sm go my-1 ">Перейти</a>
								<a href="#" data-id="{{$cat->id}}" class="btn-primary btn-sm buy my-1 ">Купить</a>
								</div>
	</div>
     								
									
    </div>
  </div>
</div>
						
						
						
						
					@endforeach
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
