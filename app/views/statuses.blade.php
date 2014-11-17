@extends('layout')

@section('content')
   @foreach($statuses as $status)
	  <div class="row">
		 <div class="col-sm-4">
		 {{ $status->name }}
		 </div>
	  </div>
    @endforeach
	<div class="row">
	   {{ Form::open(array('route' => 'statuses', 'class' => '')) }}
	   <div class="form-group">
		  <div class="col-sm-4">
			 {{ Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Status']) }}
		  </div>
		  <div class="col-sm-2">
			 {{ Form::submit('Save', array('class' => 'btn btn-default')) }}
		  </div>
	   </div>
	   {{ Form::close() }}
	</div>
 @stop
