@extends('welcome')

@section('body')
<div class="row">
  <div class="col-md-offset-4 col-md-4">
		{{ $id }}<br>
		{{ $name }}<br>
		{{ $contactNumber }}<br>
		{{ $isSuspended }}<br>
  </div>
</div>
@endsection