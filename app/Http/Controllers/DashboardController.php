<?php

namespace App\Http\Controllers;

use App\Models\Support;
use App\Models\Dashboard;
use App\Models\Environment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(auth()->user()->role == 'ADMIN') {
            $media_partner_count = Support::where('category',"Media Partner")->count();
            $sponsor_count = Support::where('category',"Sponsor")->count();

            return view('dashboards.admin', [
                'media_partner_count' => $media_partner_count,
                'sponsor_count' => $sponsor_count,
                'environments' => Environment::all(),
            ]);
        }else{
            return redirect()->route('home')->with('error','Not Authorized!');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Dashboard $dashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dashboard $dashboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dashboard $dashboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dashboard $dashboard)
    {
        //
    }
}
