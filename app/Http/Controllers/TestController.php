<?php
/**
 * Created by PhpStorm.
 * User: ankit
 * Date: 1/3/16
 * Time: 12:45 PM
 */

namespace App\Http\Controllers;


class TestController extends Controller
{
    public function index()
    {
        return response()->json("Hello World");
    }
}