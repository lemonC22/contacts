@extends('layouts.app')

@section('content')

        <h1>Contacts</h1>
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
        
  
