<?php

namespace App\Http\Controllers\Admin\Sessions;

use App\Models\sessions;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class SessionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sessions = sessions::all();
        return view('admin.sessions.index',compact('sessions'));
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
            'fr_name' => 'bail|required', 
            'ar_name' => 'bail|required', 
            'start_date' => 'bail|required', 
            'end_date' => 'bail|required', 
            'start_date_vote' => 'bail|required', 
            'end_date_vote' => 'bail|required', 
            'end_date_vote'=> 'bail|required', 
            'start_date_result' => 'bail|required',
            'end_date_result' => 'bail|required',

        ]);
        if($validator->fails()){
            Session::flash('error',$validator->errors()->first());
            return redirect()->back()->withInput();
        }
        try{
            $session = new sessions();
            $session->cd_session = rand(00000,99999);
            $session->l_ar_sess = $request->ar_name;
            $session->l_fr_sess = $request->fr_name;
            $session->date_deb_sess = $request->start_date;
            $session->date_fin_sess = $request->end_date;
            $session->date_vote_start = $request->start_date_vote;
            $session->date_vote_end = $request->end_date_vote;
            $session->date_result_start = $request->start_date_result;
            $session->date_result_end = $request->end_date_result;
            $session->save();
        }catch(QueryException $e){
            Session::flash('error', $e->getMessage());
            return redirect()->back()->withInput();
        }
        Session::flash('success', "Session créer avec succés");
        return redirect()->route('sessions-list');
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
            'fr_name' => 'bail|required', 
            'ar_name' => 'bail|required', 
            'start_date' => 'bail|required', 
            'end_date' => 'bail|required', 
            'start_date_vote' => 'bail|required', 
            'end_date_vote' => 'bail|required', 
            'end_date_vote'=> 'bail|required', 
            'start_date_result' => 'bail|required',
            'end_date_result' => 'bail|required',

        ]);
        if($validator->fails()){
            Session::flash('error',$validator->errors()->first());
            return redirect()->back()->withInput();
        }
        try{
            sessions::where('id',$id)->update([
                'l_ar_sess' => $request->ar_name,
                'l_fr_sess' => $request->fr_name,
                'date_deb_sess' => $request->start_date,
                'date_fin_sess' => $request->end_date,
                'date_vote_start' => $request->start_date_vote,
                'date_vote_end' => $request->end_date_vote,
                'date_result_start' => $request->start_date_result,
                'date_result_end' => $request->end_date_result,
            ]);
        }catch(QueryException $e){
            Session::flash('error', $e->getMessage());
            return redirect()->back()->withInput();
        }
        Session::flash('success', "Session mis a jour avec succés");
        return redirect()->route('sessions-list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            sessions::where('id',$id)->delete();
        }catch(QueryException $e){
            Session::flash('error', $e->getMessage());
            return redirect()->back()->withInput();
        }

        Session::flash('success', "Session suppromer avec succés");
        return redirect()->route('sessions-list');
    }
}
