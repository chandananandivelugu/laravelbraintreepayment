<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plan;

class StatsController extends Controller
{
    public function index()
    {
        $plans = Plan::all();
        return view('stats.index', compact('plans'));
    }

    public function show(Plan $plan, Request $request)
    {
        if($request->user()->subscribedToPlan($plan->braintree_plan, 'main')) {
            return redirect()->route('home')->with('success', 'You have already subscribed the plan');
        }
        return view('stats.show', compact('plan'));
    }
}