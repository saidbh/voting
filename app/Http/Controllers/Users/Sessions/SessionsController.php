<?php

namespace App\Http\Controllers\Users\Sessions;

use App\Models\sessions;
use App\Models\commissions;
use App\Models\disciplines;
use App\Models\contacts;
use App\Models\establishments;
use App\Models\regions;
use App\Models\grades;
use App\Models\users_type;
use App\Models\condidate;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $regions = regions::all();
        $type = users_type::all();
        $grades = grades::all();
        $condidatecommissions = commissions::all();
        $condidatedisplines = disciplines::all();
        $establishsment = establishments::all();
        $condidateSessions = sessions::where('date_deb_sess','>=',Carbon::now()->format('Y-m-d'))->get();
        $contacts = contacts::where('users_id',Auth::id())->first();
        $sessions = sessions::where('date_deb_sess','<=',Carbon::now()->format('Y-m-d'))->first();
        $condidate = condidate::where('users_id',Auth::id())->first();
        if(!$sessions)
        {
            Session::flash('error', "Pas de sessions disponible !");
            return redirect()->back()->withInput();
        }
        if(Carbon::now()->between(Carbon::createFromFormat('Y-m-d', $sessions->date_deb_sess), Carbon::createFromFormat('Y-m-d', $sessions->date_fin_sess)))
        {
            return view('users.sessions.index',compact('condidateSessions','condidatecommissions','condidatedisplines','establishsment','regions','type','grades','contacts','condidate'));
        }
        else
        {
            Session::flash('error', "Période d'inscription au condidature est expirer !");
            return redirect()->back()->withInput();
        } 
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
        $validator = Validator::make($request->all(),[
            'sessions' => 'bail|required',
            'commissions' => 'bail|required',
            'disciplines' => 'bail|required',
            'users_id' => 'bail|required',
            'contacts_id' => 'bail|required',
        ]);
        if($validator->fails()){
            Session::flash('error',$validator->errors()->first());
            return redirect()->back()->withInput();
        }
        try{
            $contacts = contacts::where('id',$request->contacts_id)->first();
            $condidat = new condidate();
            $condidat->sessions_id = $request->sessions;
            $condidat->commissions_id = $request->commissions;
            $condidat->grades_id = $request->grade;
            $condidat->disciplines_id = $request->disciplines;
            $condidat->users_id = $request->users_id;
            $condidat->establishments_id = $request->etablishment_id;
            $condidat->first_name = $contacts->first_name;
            $condidat->last_name = $contacts->last_name;
            $condidat->email = $contacts->email;
            $condidat->phone = $contacts->phone;
            $condidat->gender = $contacts->gender;
            $condidat->birthday = $contacts->birthday;
            $condidat->address_line = $contacts->address_line;
            $condidat->cin = $contacts->cin;
            $condidat->cnrps = $contacts->cnrps;
            $condidat->date_grade = $contacts->date_grade;
            $condidat->date_recrutement = $contacts->date_recrutement;
            $condidat->zip_code= $contacts->zip_code;
            $condidat->save();

        }catch(QueryException $e){
            Session::flash('error', $e->getMessage());
            return redirect()->back()->withInput();
        }

        Session::flash('success', "Condidature créer avec succés");
        return redirect()->route('condidate-validation');
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
            'sessions' => 'bail|required',
            'commissions' => 'bail|required',
            'disciplines' => 'bail|required',
            'users_id' => 'bail|required',
            'contacts_id' => 'bail|required',
        ]);
        if($validator->fails()){
            Session::flash('error',$validator->errors()->first());
            return redirect()->back()->withInput();
        }
        try{
            $condidat = condidate::where('id',$id)->first();
            $condidat->sessions_id = $request->sessions;
            $condidat->commissions_id = $request->commissions;
            $condidat->grades_id = $request->grade;
            $condidat->disciplines_id = $request->disciplines;
            $condidat->users_id = $request->users_id;
            $condidat->first_name = $request->firstName;
            $condidat->last_name = $request->lastName;
            $condidat->email = $request->email;
            $condidat->phone = $request->phone;
            $condidat->gender = $request->gender;
            $condidat->birthday = $request->birthday;
            $condidat->address_line = $request->address;
            $condidat->zip_code= $request->zipcode;
            $condidat->save();

        }catch(QueryException $e){
            Session::flash('error', $e->getMessage());
            return redirect()->back()->withInput();
        }

        Session::flash('success', "Condidature modifier avec succés");
        return redirect()->route('condidate-validation');
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
    public function validation(Request $request)
    {
        return view('users.validation.index');
    }
}
