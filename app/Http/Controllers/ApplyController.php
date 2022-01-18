<?php

namespace App\Http\Controllers;
use App\Models\apply;
use Illuminate\Http\Request;
use Mail;
use PDF;
class ApplyController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          // Form validation
          $validate=$request->validate(
            [
               'name' => 'required',
               'email' => 'required|email',
               'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
               'file'=>'required|mimes:pdf,docx',
              
       ]
        );

        $path =public_path('resume');

        $name = time().'.'.$request->file('file')->getClientOriginalExtension();
        $request->file('file')->move(public_path('resume'),$name);
        $path =public_path('resume'.'.'.$request->file('file')->getClientOriginalExtension());
      //  $attachment = $request->file('file');


         \Log::info($path);
     //    \Log::info($attachment);
         \Log::info($name);

        $file=public_path($name);
        \Log::info( $file);
       //  Store data in database
     $Contact=apply::create(  [        
          
           'name' => $request->name,
           'email' => $request->email,
           'phone' => $request->phone,
           'docurl'=>$path
          
     ]);

       //  Send mail to admin
       \Mail::send('mail', array(
           'name' => $request->get('name'),
           'email' => $request->get('email'),
           'phone' => $request->get('phone'),
           'subject' => $request->get('subject'),
           'user_query' => $request->get('message'),

         
       ), 
       
       function($message) use ($request, $name,$file, $path){
           $message->from('tumelo@atlantissearchgroup.com');
           $message->to('kirinyetbrian@gmail.com', 'Atlantis')->subject($request->get('subject'));
           $message->attach(public_path('/resume/'.$name));
       });

       return back()->with('success', 'We have received your application and we will get back to you.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\apply  $apply
     * @return \Illuminate\Http\Response
     */
    public function show(apply $apply)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\apply  $apply
     * @return \Illuminate\Http\Response
     */
    public function edit(apply $apply)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\apply  $apply
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, apply $apply)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\apply  $apply
     * @return \Illuminate\Http\Response
     */
    public function destroy(apply $apply)
    {
        //
    }
}
