<?php

namespace App\Http\Controllers;

use App\Enums\PackageStatus;
use Inertia\Inertia;
use App\Models\Package;
use Illuminate\Http\Request;
use App\Http\Resources\PackageResource;

class PackageController extends Controller
{
    public function index()
    {
        return Inertia::render('Packages/Index', [
            'packages' => PackageResource::collection(
                Package::query()
                    ->whereBelongsTo(auth()->user())
                    ->orderBy('id', 'DESC')
                    ->where('status', PackageStatus::WAREHOUSE)
                    ->orWhere('status', PackageStatus::PICKUP)
                    ->orWhere('status', PackageStatus::DELIVERED)
                    ->paginate(8)
            ),

            'totalPackageProcessing' => Package::query()
                ->whereBelongsTo(auth()->user())
                ->where('status', PackageStatus::WAREHOUSE)
                ->orWhere('status', PackageStatus::PICKUP)
                ->count()
        ]);
    }

    public function show(Package $package)
    {
        return Inertia::render('Packages/Show', [
            'package' => new PackageResource($package),
        ]);
    }

}
