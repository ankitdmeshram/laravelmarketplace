<?php

namespace App\Http\Controllers;

use App\Models\Storedetail;
use Illuminate\Http\Request;

class storeController extends Controller
{
    //
    function fetchAllDetails($storename) {
        echo $storename;
        return Storedetail::all();
    }

}
