<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Alert;
use App\Models\Package;
use App\Enums\PackageStatus;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Resources\AlertResource;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\AlertStoreRequest;
use Symfony\Contracts\Service\Attribute\Required;


class AlertController extends Controller
{
    public function index()
    {
        // return Inertia::render('Alerts/Index', [
        //     'alerts' => Package::query()
        //     ->where('status', PackageStatus::PRE_ALERT)
        //     ->where('user_id', auth()->user()->id)->paginate(6),
        // ]);
        return Inertia::render('Alerts/Index', [
            'alerts' => AlertResource::collection(
                Package::query()
                    ->where('status', PackageStatus::PRE_ALERT)
                    ->where('user_id', auth()->user()->id)->paginate(6),
            ),
        ]);
        
    }

    public function create()
    {
        return Inertia::render('Alerts/Create');
    }

    public function store(AlertStoreRequest $request)
    {
       // return $request->all();

        $invoicePath = null;
        if($request->hasFile('file')) {
            $invoicePath = $request->file('file')->store('invoices');
        }

        Package::create([
            "user_id" => auth()->user()->id,
            "tracking_number" => $request->tracking_number,
            "vendor" => $request->vendor,
            "weight" => $request->weight,
            "pickup_location" => $request->pickup_location,
            "order_description" => $request->order_description,
            "status" => PackageStatus::PRE_ALERT,
            "courier" => $request->courier,
            "usd_value" => $request->usd_value,
            "invoice_path" => $invoicePath
        ]);

        // auth()->user()->packages->create($request->safe()->all());

        //return redirect()->back()->withFlash('The pre-alert was successfully created');
        return redirect(route('alerts.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Package $alert)
    {
        return Inertia::render('Packages/Show', [
            'alert' => new AlertResource($alert),
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $alert = Package::query()
            ->where('id', $id)
            ->where('status', PackageStatus::PRE_ALERT)
            ->first();

        $alert->delete();
        

        //return redirect(route('alert.index'));
        return redirect()->back()->withFlash('The resource was successfully deleted');
    }
}
