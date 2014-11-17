@extends('layout')

@section('content')
<div class="page-header">
   <h1>Asset</h1>
</div>
{{-- Form::open(array('route' => 'saveAsset', 'class' => 'form-horizontal')) --}}
{{ Form::open(array('url' => ['asset', $asset->id], 'class' => 'form-horizontal')) }}
      <div class='form-group required'>
         <label class="col-md-2 control-label">Name</label>
         <div class="col-sm-6">
            {{ Form::text('name', $asset->name,
            array('class' => 'form-control', 'required' => 'required')) }}
         </div>
      </div>
      <div class="form-group required">
		 <label class="col-md-2 control-label">Custom Tag</label>
         <div class="col-sm-6">
            {{ Form::text('tag', $asset->tag, array('class' => 'form-control', 'required' => 'required')) }}
         </div>
      </div>
      <div class="form-group">
         <label class="col-md-2 control-label">Description</label>
         <div class="col-sm-6">
            {{ Form::text('description', $asset->description, array('class' => 'form-control', 'required' => 'required')) }}
         </div>
      </div>
      <div class="form-group">
         <label class="col-md-2 control-label">Status</label>
         <div class="col-sm-6">
      {{ Form::select('status', $ments['status'], $asset->status_id, array('class' => 'form-control')) }}
         </div>
      </div>
      <div class="form-group">
         <label class="col-md-2 control-label">Location</label>
         <div class="col-sm-6">
      {{ Form::select('location', $ments['location'] , $asset->location_id, array('class' => 'form-control')) }}
         </div>
      </div>
      <div class="form-group">
         <label class="col-md-2 control-label">Category</label>
         <div class="col-sm-6">
      {{ Form::select('category', $ments['categories'] , $asset->category_id, array('class' => 'form-control')) }}
         </div>
      </div>
      <div class="form-group">
         <label class="col-md-2 control-label"></label>
         <div class="col-sm-6">
    {{ Form::submit('Save', array('class' => 'btn btn-default')) }}
         </div>
      </div>
    {{ Form::close() }}
@stop
