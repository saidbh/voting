<?php

namespace App\Http\Controllers\Users;

use App\Models\sessions;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $sessions = sessions::where('date_result_end','<',Carbon::now())->where('date_deb_sess','>=',Carbon::now())->first();
        return view('users.dashboard.index',compact('sessions'));
    }
}
