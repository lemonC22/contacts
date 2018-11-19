@extends('layouts.app')

@section('content')

        
        <div class="row">
        <div class="col-lg-6 col-md-6"><h1>Contacts</h1></div>
        <div class="col-lg-6 col-md-6">
        <div class="pull-right">
                <form action="/search" method="get">
                        <div class="input-group">
                                <input type="search" name="search" class="form-contol">
                                        <span class="input-group-btn">
                                                <button type="submit" class="btn btn-primary">Search</button>
                                        </span>
                                 
                </form>
        </div>
        </div>
        </div>
        </div>
       

        


        @if(count($contacts) > 0)
                @foreach($contacts as $contact)
                        <div class="text-center">
                                <h3><a href='/contacts/{{$contact->contactid}}'>{{$contact->contactname}}</a></h3>
                        </div>
                @endforeach
                
        @else
                <p>No Contacts</p>
        @endif
        
@endsection
        
  
