<?php

namespace App\Http\Controllers\Admin\Voting;

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

class VotingController extends Controller
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
        return view('admin.votes.index',compact('sessionslist','commissionslist','displineslist'));
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
                array_push($data,[
                    'id' => $condidate->id,
                    'firstname' => $condidate->first_name,
                    'lastname' => $condidate->last_name,
                    'ar_establishment' => $condidate->establishement->ar_name,
                    'fr_establishment' => $condidate->establishement->fr_name,
                    'cin' => $condidate->cin,
                    'cnrps' => $condidate->cnrps,
                    'date_condidate' => Date('Y-m-d',strtotime($condidate->created_at)),
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
