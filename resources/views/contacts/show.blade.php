@extends('layouts.app')

@section('content')

<a href="/contacts" class="btn btn-sm btn-secondary ">Go Back</a>
<hr>
        <h1>{{$contact->contactname}}</h1>
        <h2>{{$contact->contactnumber}}</h2>
        <h3>{{$contact->email}}</h3>
        <h4>{{$contact->address}}</h4>
<div class="text-center">
    <a href="/contacts/{{$contact->contactid}}/edit" class="btn btn-sm btn-secondary">Edit</a>
</div>

{!!Form::open(['action' => ['ContactsController@destroy', $contact->contactid], 'method' => 'POST', 'class' => 'pull-left'])!!}
    {{Form::hidden('_method','DELETE')}}
    {{Form::submit('Delete',['class' => 'btn btn-danger'])}}
{!!Form::close()!!}

@endsection
        
  
