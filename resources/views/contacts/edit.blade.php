@extends('layouts.app')

@section('content')
    <h1>Edit Contact</h1>
    {!! Form::open(['action' => ['ContactsController@update',$contact->contactid],'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::text('contactname', $contact->contactname, ['class' => 'form-control', 'placeholder' => 'Name*'])}}
        </div>
        <div class="form-group">
                {{Form::text('contactnumber', $contact->contactnumber, ['class' => 'form-control', 'placeholder' => 'Contact Number*'])}}
        </div>
        <div class="form-group">
                {{Form::text('email', $contact->email, ['class' => 'form-control', 'placeholder' => 'Email'])}}
        </div>
        <div class="form-group">
                {{Form::textarea('address', $contact->address, ['class' => 'form-control', 'placeholder' => 'Address'])}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    
    {!! Form::close() !!}

@endsection
        
  
