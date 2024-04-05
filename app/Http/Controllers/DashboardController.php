<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;

class DashboardController extends Controller
{

    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $status = 'Package Delivered';
        return Inertia::render('Dashboard', [


            'packages' => Package::where('user_id', auth()->user()->id)->paginate(5),

            'user' => User::where('id', auth()->user()->id)->paginate(10),

            //'status' => Package::where('status', 'Package Delivered', auth()->user()->id)->paginate(),

            'status' => Package::where(function ($query) {
                $query->where('user_id', auth()->user()->id);
            })->where(function ($query) use ($status) {
                $query->where('status', '!=', $status);
            })->get(),

            'balance' => Package::where(function ($query) {
                $query->where('user_id', auth()->user()->id);
            })->where(function ($query) use ($status) {
                $query->where('status', '!=', 'Package Delivered');
            })->get()->sum('cost'),

            //'balance' =>  Package::where('status', '!=', 'Package Delivered')->get()->sum('cost'),



        ]);
    }
}
