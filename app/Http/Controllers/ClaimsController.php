<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Claim;

class ClaimsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $claims = $user->claims()->get();

        return view('claims.index', [
                'user' => $user,
                'claims' => $claims
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('claims.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $claim = new Claim;

        $claim->customer_name   = $request->input('customerName');
        $claim->opportunity_id  = $request->input('opportunityId');
        $claim->country         = $request->input('country');
        $claim->activity_date   = $request->input('activityDate');
        $claim->value           = $request->input('value');
        $claim->user_id         = Auth::user()->id;
        $claim->status          = 'PENDING';

        $claim->save();

        return redirect('claims');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return "show method";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $claim = Claim::find($id);

        return view('claims.edit', ['claim' => $claim]);
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
        $claim = Claim::find($id);

        $claim->customer_name   = $request->input('customerName');
        $claim->opportunity_id  = $request->input('opportunityId');
        $claim->country         = $request->input('country');
        $claim->activity_date   = $request->input('activityDate');
        $claim->value           = $request->input('value');

        $claim->update();

        return redirect('claims');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $claim = Claim::find($id);

        $claim->delete();

        return redirect('claims');
    }
}
