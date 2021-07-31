<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Throwable;
use Illuminate\Support\Facades\Session;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Installment;
use Illuminate\Contracts\Auth\StatefulGuard;
use Illuminate\Support\Facades\Hash;
use Illuminate\Routing\Pipeline;
use App\Actions\Fortify\AttemptToAuthenticate;
use Laravel\Fortify\Actions\EnsureLoginIsNotThrottled;
use Laravel\Fortify\Actions\PrepareAuthenticatedSession;
use App\Actions\Fortify\RedirectIfTwoFactorAuthenticatable;
use App\Http\Responses\LoginResponse;
use Laravel\Fortify\Contracts\LoginViewResponse;
use Laravel\Fortify\Contracts\LogoutResponse;
use Laravel\Fortify\Features;
use Laravel\Fortify\Fortify;
use Laravel\Fortify\Http\Requests\LoginRequest;
use PhpParser\Node\Expr\FuncCall;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use PDF;
// use Image;
use Intervention\Image\Facades\Image;



class UseController extends Controller
{
    public function Udashboard(){
    $users=DB::table('users')->first();
    //dd(Auth::user()->id);
    $installments=DB::table('installments')->where('user_id', Auth::user()->id)->get();

    //dd($installments);
    $totalPaidIns = 0;
    foreach ($installments as $installment)
    {
        $totalPaidIns = $totalPaidIns + $installment->installment_paid;
    }
    //Auth::user()->total_installment_amount = 11000;
    
    Auth::user()->save();
    $totalDueIns = Auth::user()->total_installment_amount - $totalPaidIns;
    //dd($totalDueIns);
    $time=strtotime($users->installment_start_from);
    $timeformate=date('d-M-Y',$time);

    return view('userDashboard', compact('users', 'totalDueIns','totalPaidIns' ,'timeformate'));

    }
}
