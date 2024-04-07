<?php

namespace App\Http\Controllers;

use App\Models\User;
use Inertia\Inertia;
use App\Models\Package;
use Akaunting\Money\Money;
use App\Enums\PackageStatus;
use Illuminate\Http\Request;
use App\Http\Resources\PackageResource;

class DashboardController extends Controller
{

    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return Inertia::render('Dashboard', [
            'userStatistics' => User::query()
                ->select('id', 'customer_number')
                ->where('id', auth()->user()->id)
                ->withCount(['packages as total_packages' => function ($query) {
                    $query->where('status', PackageStatus::WAREHOUSE)
                    ->orWhere('status', PackageStatus::DELIVERED)
                    ->orWhere('status', PackageStatus::PICKUP);
                }])
                ->withCount(['packages as total_packages_processing' => function ($query) {
                    $query->where('status', PackageStatus::WAREHOUSE)
                    ->orWhere('status', PackageStatus::PICKUP);
                }])
                ->first(),

            'recentPackages' => PackageResource::collection(
                Package::query()
                    ->whereBelongsTo(auth()->user())
                    ->orderBy('id', 'DESC')
                    ->where('status', PackageStatus::WAREHOUSE)
                    ->orWhere('status', PackageStatus::PICKUP)
                    ->orWhere('status', PackageStatus::DELIVERED)
                    ->take(5)
                    ->get()
            ),

            'balance' => Package::query()
            ->whereBelongsTo(auth()->user())
            ->orderBy('id', 'DESC')
            ->where('status', PackageStatus::WAREHOUSE)
            ->orWhere('status', PackageStatus::PICKUP)
            ->sum('balance')
        ]);
    }
}
