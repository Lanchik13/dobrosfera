@extends('layouts.base')

@section('content')
<h2> {{isset($obj->name)?$obj->name:'404'}}</h2>
<div>
{!! $obj->small_body !!}
</div>
<div>
{!! $obj->body !!}
</div>

@endsection
