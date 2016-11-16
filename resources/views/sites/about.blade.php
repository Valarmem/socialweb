@extends('app')
@section('content')
@if(count($people)>0)
<ul>
	@foreach($people as $person)
	<h1>{{$person}}</h1>
</ul>
@endforeach
@endif
@endsection