<?php

namespace App\Http\Controllers;
use config;
use App\Message;
use App\Mail\ContactMessage;
use Illuminate\Http\Request;
use App\Mail\ContactMessageCreated;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactValidationRequest;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.contact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactValidationRequest $request)
    {
  
        //return new ContactMessage($request->name,$request->email,$request->message);
        // $message = new Message;
        // $message->name = $request->name;
        // $message->email = $request->email;
        // $message->message = $request->message;
        // $message->save();
        // ou  
        $message = Message::create($request->only('name','email','message'));

        Mail::to(config('laracarte.admin_support_admin'))->send(new ContactMessage($message));
        flashy()->success('Votre message a ete envoyer , nous vous repondrons aussi tot');
        return redirect(route('root_path'));
        //new ContactMessageCreated("Ndeme yvan","yvan@gmail.com","hello bonjour mois c'est ndeme yvan");

        // $name= $request->name;
        // $email= $request->email;
        // $message =  $request->message;
        //  Event::create([
        //      'title' => $title,
        //      'description' => $description,
        //  ]);
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
}
