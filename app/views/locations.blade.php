@extends('layout')

@section('content')
   @foreach($locations as $location)
	  <div class="row">
		 <div class="col-sm-4">
			{{ $location->name }}
		 </div>
		 <div class="col-sm-4">
    {{ Form::open(array('route' => 'locations', 'class' => '')) }}
	<span  href="{{ route('rmLocation', $location->id)  }}" class="rmlocation glyphicon glyphicon-remove-circle"></span>
    {{ Form::close() }}
		 </div>
	  </div>
    @endforeach
    {{ Form::open(array('route' => 'locations', 'class' => '')) }}
    <div class="form-group">

	  <div class="row">
		 <div class="col-sm-4">
		  {{ Form::text('name', '', array('class' => 'form-control', 'placeholder' => 'Location')) }}
		 </div>
		 <div class="col-sm-2">
			{{ Form::submit('Save', array('class' => 'btn btn-default')) }}
		 </div>
	  </div>
    </div>
    {{ Form::close() }}
 @stop
