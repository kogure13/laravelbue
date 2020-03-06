<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\log_access;

class log_accessController extends Controller
{
    //get all data
    public static function all()
    {
        return log_access::all();
    }
    //get by id
    public static function show($id)
    {
        return log_access::find($id);
    }
}