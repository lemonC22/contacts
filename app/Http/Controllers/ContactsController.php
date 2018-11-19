<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Contact;
use App\User;
use DB;

class ContactsController extends Controller
{
    
    
    public function __construct()
    {
        $this->middleware('auth');
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        //$contacts = Contact::all();
        //$contacts= Contact::where('contactname','Nomel')->get();
        //$contacts = DBCT * FROM nomelcontacts');
        //$contacts = Contact::orderBy('contactname','asc')->take()->get();
        //$contacts = Contact::orderBy('contactname','asc')->paginate(1);
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        $contacts = Contact::orderBy('contactname','asc')->get();
        return view('contacts.index')->with('contacts',$user->contacts);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function search(Request $request)
    {
        $search = $request->get('search');
        $contacts = Contact::where('contactname','like','%'.$search.'%')->get();
        return view ('contacts.index',['contacts'=>$contacts]);
    }

    public function store(Request $request)
    {
        //return view('contacts.create');
        //

        $this->validate($request, [

            'contactname' => 'required',
            'contactnumber' => 'required',
            
        ]);


        $contact = new Contact;
        $contact->contactname = $request->input('contactname');
        $contact->contactnumber = $request->input('contactnumber');
        $contact->email = $request->input('email');
        $contact->address = $request->input('address');
        $contact->user_id = auth()->user()->id;
        $contact->save();

        return redirect ('/contacts')->with('success','New Contact Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contact = Contact::find($id);
        return view('contacts.show')->with('contact',$contact);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact = Contact::find($id);
        return view('contacts.edit')->with('contact',$contact);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $contact = Contact::find($id);
        $contact->contactname = $request->input('contactname');
        $contact->contactnumber = $request->input('contactnumber');
        $contact->email = $request->input('email');
        $contact->address = $request->input('address');
        $contact->save();

        return redirect ('/contacts')->with('success','Contact Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $contact = Contact::find($id);
        $contact->delete();
        return redirect ('/contacts')->with('success','Contact Removed');

    }

   
}
