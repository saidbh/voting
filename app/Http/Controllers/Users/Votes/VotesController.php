<?php

namespace App\Http\Controllers\Users\Votes;

use App\Models\sessions;
use App\Models\commissions;
use App\Models\disciplines;
use App\Models\condidate;
use App\Models\compositions;
use Carbon\Carbon;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;

class VotesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sessionslist = sessions::all();
        $commissionslist = commissions::all();
        $displineslist = disciplines::all();
        $sessions = sessions::where('date_vote_start','>=',Carbon::now()->format('Y-m-d'))->first();
        $condidate = condidate::where('users_id',Auth::id())->first();
        $voters = compositions::where('users_id',Auth::id())->get();
        foreach($voters as $voter)
        {
            if(
                Date('Y-m-d',strtotime($voter->condidate->sessions->date_vote_start)) <= Carbon::now()->format('Y-m-d')
                &&
                Date('Y-m-d',strtotime($voter->condidate->sessions->date_vote_end)) >= Carbon::now()->format('Y-m-d')
                )
            {
                Session::flash('error', "Vous avez deja voté !");
                return redirect()->back()->withInput();
            }
        }
         if($condidate)
        {
            Session::flash('error', "Vous ete un condidat n vous ne pouvez pas faire de vote !");
            return redirect()->back()->withInput();
        } 
        if(!$sessions)
        {
            Session::flash('error', "Vote pas encore commencer !");
            return redirect()->back()->withInput();
        }
        elseif(Date('Y-m-d',strtotime($sessions->date_vote_start)) >= Carbon::now()->format('Y-m-d') && Carbon::now()->format('Y-m-d') <= Date('Y-m-d',strtotime($sessions->date_vote_end)))
        {
            return view('users.votes.index',compact('sessionslist','commissionslist','displineslist'));
        }
        else
        {
            Session::flash('error', "Période de vote est expirer !");
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
            'vote' => 'bail|required',
        ]);
        if($validator->fails()){
            Session::flash('error',$validator->errors()->first());
            return redirect()->back()->withInput();
        }
        try{
            $vote = new compositions();
            $vote->condidate_id = $request->vote;
            $vote->vote_number = 1;
            $vote->users_id = Auth::id();
            $vote->save();

        }catch(QueryException $e){
            Session::flash('error', $e->getMessage());
            return redirect()->back()->withInput();
        }
        Session::flash('success', "Vote créer avec succés");
        return redirect()->route('user.dashboard');
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
    public function getCondidateList(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'sesssion' => 'bail|required',
            'commission' => 'bail|required',
            'discipline' => 'bail|required',
        ]);
        if($validator->fails()){
            return response()->json([
                'Error' => $validator->errors()->first()
            ], 500);
        }
        try{
            $condidates = condidate::where('sessions_id',$request->sesssion)
            ->where('commissions_id',$request->commission)
            ->where('disciplines_id',$request->discipline)
            ->get();
            $data = array();
            foreach($condidates as $condidate)
            {
                array_push($data,[
                    'id' => $condidate->id,
                    'firstname' => $condidate->first_name,
                    'lastname' => $condidate->last_name,
                    'ar_establishment' => $condidate->establishement->ar_name,
                    'fr_establishment' => $condidate->establishement->fr_name,
                    'cin' => '****'.substr($condidate->cin,4,4),
                ]);
            }
            return response()->json([
                'condidates' => $data
            ], 200);
        }catch(QueryException $e){
            return response()->json([
                'Error' => $e
            ], 500);
        }
    }
}
