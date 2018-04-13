<?php

namespace App\Http\Controllers;

use App\People;
use App\Interest;
use App\Language;
use Illuminate\Http\Request;

use App\Events\PersonAdded; 

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PeoplesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $peoples = People::all();
        return view('index',['peoples'=> $peoples] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $interests= Interest::all();
        $languages= Language::all();

      

        return view('create',compact('interests','languages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

            if(Auth::check()){

                $input = $request->all();  
                $interests  = $request->input('interests');
                $interests = implode(',' ,$interests);
                $input['interests'] = $interests ;    

                $people  = People::create($input);

                event(new PersonAdded($people));

                //return $people;

                if($people){return redirect()->route('peoples.index')->with('success' , 'People created successfully'); }
            }
        
            return back()->withInput()->with('errors', 'Error creating New Person');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\People  $people
     * @return \Illuminate\Http\Response
     */
    public function show(People $people)
    {
        //
        $people = Company::find($people->id);
        return view('peoples.show', ['people'=>$people]);   

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\People  $people
     * @return \Illuminate\Http\Response
     */
    public function edit(People $people)
    {       
        $interests= Interest::all();
        $languages= Language::all();
        $people = People::find($people->id);
        $pInterests = explode( ',', $people->interests );
        return view('edit',compact('interests','languages','people','pInterests') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\People  $people
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, People $people)
    {
  
        if(Auth::check()){

            $input                 = $request->all(); 
            $interests              = $request->input('interests');
            $interests              = implode(',',$interests);
            $input['interests']    = $interests ;    


            $person = People::findOrFail($people->id);
            $person->update($input);

            return redirect()->route('peoples.index')->with(['success' => 'Person Updated Successfully']);
           
         } 

        return back()->withInput();                  

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\People  $people
     * @return \Illuminate\Http\Response
     */
    public function destroy(People $people)
    {
        //


        $findPeople = People::find( $people->id);
        if($findPeople->delete()){
            
            //redirect
            return redirect()->route('peoples.index')
            ->with('success' , 'Person deleted successfully');
        }
        return back()->withInput()->with('error' , 'Person could not be deleted');  

    }
}
