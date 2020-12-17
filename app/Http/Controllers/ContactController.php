<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\If_;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('website.contact');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // return view('test');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
             'message' => 'required|max:255',
        ]);

/*
        if ($validator->failed()) {
            return
                withErrors($validator)
                ->withInput();
        }
*/
        try {
            $contact = new Contact();
            $contact->name = $request->name;
            $contact->email = $request->email;
            $contact->message = $request->message;
           if (Auth::check()) {
               $contact->user_id = Auth::id();
            }
            $contact->save();

           // return response()->json(['message'=>'Success','data'=>$contact],200);
            return redirect('/');

        }catch (\Exception $exception){
            echo $exception;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
    }

    public function getAllToAdminpanel(){
/*
        $contacts =  Contact::orderBy('created_at' , 'desc')->paginate(20);
        return view('dashboard.contactus.index' , compact('contacts'));
*/
    }

    public function getContactById($id){
/*
        $contact = Contact::find($id);
        return view('dashboard.contactus.singles' , compact('contact'));
*/
    }
}
