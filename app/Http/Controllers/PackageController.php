<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePackageRequest;
use App\Http\Requests\UpdatePackageRequest;
use App\Models\Package;
use Inertia\Inertia;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //return Package::where('user_id', auth()->user()->id)->paginate();


        $status = 'Package Delivered';
        return Inertia::render('Packages/Index', [
            //'packages' => Package::with('user:id,name')->latest()->get(),
            'packages' => Package::where('user_id', auth()->user()->id)->paginate(8),

            'status' => Package::where(function ($query) {
                $query->where('user_id', auth()->user()->id);
            })->where(function ($query) use ($status) {
                $query->where('status', '!=', $status);
            })->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePackageRequest $request)
    {
        logger($request->all());

        return redirect(route('alerts.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Package $package)
    {
        return Inertia::render('Packages/Show', [
            'package' => $package,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Package $package)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePackageRequest $request, Package $package)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Package $package)
    {
        //
    }
}
