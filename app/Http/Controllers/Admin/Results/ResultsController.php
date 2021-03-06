<?php

namespace App\Http\Controllers\Admin\Results;

use App\Models\sessions;
use App\Models\commissions;
use App\Models\disciplines;
use App\Models\condidate;
use App\Models\compositions;
use App\Models\voteResult;
use Carbon\Carbon;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;

class ResultsController extends Controller
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
        $condidates = condidate::all();
        return view('admin.results.index',compact('sessionslist','commissionslist','displineslist'));
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
            'candidate' => 'bail|required',
            'vote_number' => 'bail|required',
            'vote_result' => 'bail|required',
        ]);
        if($validator->fails()){
            Session::flash('error',$validator->errors()->first());
            return redirect()->back()->withInput();
        }
        try{
            $status = new voteResult();
            $status->candidate_id = $request->candidate; 
            $status->vote_number = $request->vote_number;
            $status->vote_result = $request->vote_result;
            $status->save();
        }catch(QueryException $e){
            Session::flash('error', $e->getMessage());
            return redirect()->back()->withInput();
        }
        Session::flash('success', "Resultat de Candidat envoyer avec succ??s");
        return redirect()->route('results-list');
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
    public function getVotesResults(Request $request)
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
                $votesCount = compositions::where('condidate_id',$condidate->id)->count('vote_number');
                  array_push($data,[
                    'id' => $condidate->id,
                    'firstname' => $condidate->first_name,
                    'lastname' => $condidate->last_name,
                    'ar_establishment' => $condidate->establishement->ar_name,
                    'fr_establishment' => $condidate->establishement->fr_name,
                    'cin' => $condidate->cin,
                    'cnrps' => $condidate->cnrps,
                    'votesNumber' => $votesCount,
                    'status' => $condidate->statusCandidat?$condidate->statusCandidat->id:null,
                ]); 
            }
            return response()->json([
                'results' => $data
            ], 200);
        }catch(QueryException $e){
            return response()->json([
                'Error' => $e
            ], 500);
        }
    }
}
