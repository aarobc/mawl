
@extends('layout')

@section('content')
   @foreach($categories as $category)
	  <div class="row">
		 <div class="col-sm-4">
			{{ $category->name }}
		 </div>
		 <div class="col-sm-2">
			{{ $category->prefix }}
		 </div>
	  </div>
    @endforeach
	{{ Form::open(array('route' => 'categories', 'class' => '')) }}
	   <div class="row">
		  <div class="col-xs-4">
			 {{ Form::text('name', '', ['class' => 'form-control', 'placeholder' => "Category"]) }}
		  </div>
		  <div class="col-xs-2">
			 {{ Form::text('prefix', '', ['class' => 'form-control', 'placeholder' => 'Prefix']) }}
		  </div>
		  <div class="col-xs-3">
			 {{ Form::submit('Save', array('class' => 'btn btn-default')) }}
		  </div>
	   </div>
    {{ Form::close() }}
 @stop
