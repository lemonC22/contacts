@extends('layouts.app')

@section('content')
    <h1>Add Contact</h1>
    {!! Form::open(['action' => 'ContactsController@store','method' => 'POST']) !!}
        <div class="form-group">
            {{Form::text('contactname', '', ['class' => 'form-control', 'placeholder' => 'Name*'])}}
        </div>
        <div class="form-group">
                {{Form::text('contactnumber', '', ['class' => 'form-control', 'placeholder' => 'Contact Number*'])}}
        </div>
        <div class="form-group">
                {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Email'])}}
        </div>
        <div class="form-group">
                {{Form::textarea('address', '', ['class' => 'form-control', 'placeholder' => 'Address'])}}
        </div>
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    
    {!! Form::close() !!}

@endsection
        
  
