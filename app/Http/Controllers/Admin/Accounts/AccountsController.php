<?php

namespace App\Http\Controllers\Admin\Accounts;

use App\Models\contacts;
use App\Models\establishments;
use App\Models\regions;
use App\Models\grades;
use App\Models\users_type;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AccountsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $establishsment = establishments::all();
        $regions = regions::all();
        $type = users_type::all();
        $grades = grades::all();
        $users = Contacts::all();
        return view('admin.users.index', compact('users','establishsment','regions','type','grades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'firstName' => 'bail|required|string|min:3',
            'lastName' => 'bail|required|string|min:3',
            'email' => 'bail|required|email',
            'phone' => 'bail|required|string|min:8',
            'address' => 'bail|required|string',
            'cin' => 'bail|required',
            'cnrps' => 'bail|required',
            'type' =>'bail|required',
            'establishment' => 'bail|required',
            'grade' => 'bail|required',
            'date_grade' =>'bail|required',
            'date_recrutement' =>'bail|required',
            'region' => 'bail|required',
            'zipcode' => 'bail|required|string|min:4',
        ]);
        if($validator->fails()){
            Session::flash('error',$validator->errors()->first());
            return redirect()->back()->withInput();
        }
        try{
            $contact = new contacts();
            $contact->first_name = $request->firstName;
            $contact->last_name = $request->lastName;
            $contact->email = $request->email;
            $contact->phone = $request->phone;
            $contact->gender = $request->gender;
            $contact->birthday = $request->birthday;
            $contact->address_line = $request->address;
            $contact->cin = $request->cin;
            $contact->cnrps = $request->cnrps;
            $contact->users_type_id = $request->type;
            $contact->establishments_id = $request->establishment;
            $contact->grades_id = $request->grade;
            $contact->date_grade = $request->date_grade;
            $contact->date_recrutement = $request->date_recrutement;
            $contact->regions_id = $request->region;
            $contact->zip_code= $request->zipcode;
            $contact->save();

        }catch(QueryException $e){
            Session::flash('error', $e->getMessage());
            return redirect()->back()->withInput();
        }

        Session::flash('success', "Utilisateur créer avec succés");
        return redirect()->route('users-accounts.list');
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
        $validator = Validator::make($request->all(),[
            'firstName' => 'bail|required|string|min:3',
            'lastName' => 'bail|required|string|min:3',
            'email' => 'bail|required|email',
            'phone' => 'bail|required|string|min:8',
            'address' => 'bail|required|string',
            'city' => 'bail|required|string',
            'region' => 'bail|required|string',
            'zipcode' => 'bail|required|string|min:4',
        ]);
        if($validator->fails()){
            Session::flash('error',$validator->errors()->first());
            return redirect()->back()->withInput();
        }
        try{
            Contacts::where('id',$id)->update([
               'first_name' =>  $request->firstName,
                'last_name' => $request->lastName,
                'email' => $request->email,
                'phone' => $request->phone,
                'gender' => $request->gender,
                'birthday' => $request->birthday,
                'address_line' => $request->birthday,
                'city' => $request->city,
                'region' => $request->region,
                'zip_code' => $request->zipcode
            ]);
        }catch(QueryException $e){
            Session::flash('error', $e->getMessage());
            return redirect()->back()->withInput();
        }

        Session::flash('success', "Utilisateur mis a jour avec succés");
        return redirect()->route('users-accounts.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try
        {
            Contacts::where('id',$id)->delete();
        }catch(QueryException $e){
            Session::flash('error', $e->getMessage());
            return redirect()->back()->withInput();
        }
        Session::flash('success', "Utilisateur supprimer avec succés");
        return redirect()->route('users-accounts.list');
    }
}
