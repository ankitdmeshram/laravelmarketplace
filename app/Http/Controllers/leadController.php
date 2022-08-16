<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class leadController extends Controller
{
    //
    function allLeads() {
        $data = Lead::all();
        return view('leadlist', ["leads"=>$data]);
    }

    function addLead(Request $req) {
        $lead = new Lead;
        $lead -> name = $req -> name;
        $lead -> email = $req -> email;
        $lead -> phone = $req -> phone;
        $lead -> city = $req -> city;
        $lead -> company = $req -> company;
        $lead -> save();

        return back();
    }
}
