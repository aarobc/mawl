
@extends('layout')

@section('content')
<div class="panel panel-default">
   <!-- Default panel contents -->
   <div class="panel-heading">Search Results</div>
   <table class='table table-hover'>
   <tr>
      <th>Tag</th>
      <th>Status</th>
      <th>Location</th>
      <th>Category</th>
   @foreach($assets as $asset)
   <tr class='clickableRow' href="{{ URL::route('viewAsset', array('tag' => $asset->tag)) }}"> 
       <td>
          {{ $asset->tag }}
      </td>
      <td>
         {{ $asset->status()->name }}
      </td>
      <td>
         {{ $asset->location()->name }}
      </td>
      <td>
         {{ $asset->category()->name }}
      </td>
   </tr>
    @endforeach
 </table>
 </div>
 @stop
