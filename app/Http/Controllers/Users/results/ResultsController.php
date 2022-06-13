<?php

namespace App\Http\Controllers\Users\results;

use App\Models\sessions;
use App\Models\condidate;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class ResultsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $condidate = condidate::where('users_id',Auth::id())->first();
        $sessions = sessions::where('date_result_start','<=',Carbon::now()->format('Y-m-d'))->first();
        if(!$condidate)
        {
            Session::flash('error', "Vous n'ete pas un condidat !");
            return redirect()->back()->withInput();
        } 
        if(!$sessions)
        {
            Session::flash('error', "Pas de resultat pour le moment !");
            return redirect()->back()->withInput();
        }
        elseif(Date('Y-m-d',strtotime($sessions->date_result_start)) <= Date('Y-m-d') && Date('Y-m-d') <= Date('Y-m-d',strtotime($sessions->date_result_end)))
        {
            return view('users.results.index',compact('sessions','condidate'));
        }else
        {
            Session::flash('error', "Resulat est expirer !");
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
        //
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
