@extends('layout')

@section('content')
<label>Name</label>
<P>{{ $asset->name }}</p>
<label>Tag</label>
<p>{{ $asset->tag }}</p>
<label>Description</label>
<p>{{ $asset->description }}</p>
<label>location</label>
<p>{{ $asset->location()->name }}</p>
<label>status</label>
<p>{{ $asset->status()->name }}</p>
<label>Category</label>
<p>{{ $asset->category()->name }}</p>
<label>Created</label>
<p>{{ $asset->created_at }}</p>

<label>Notes</label>
@foreach($asset->notes as $note)
<p>  {{ $note->created_at }}</p>
<p>  {{ $note->text }}</p>
<hr>
@endforeach
<label>Add Note:</label>
{{ Form::open(['route' => ['saveNote', $asset->id ] ]) }}
   {{ Form::textarea('text', NULL, ['class' => 'form-control', 'placeholder' => 'Note', 'rows' => '3']) }}
   {{ Form::submit('Save') }}
{{ Form::close() }}
 @stop
