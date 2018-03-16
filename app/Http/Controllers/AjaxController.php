<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AjaxController extends Controller {

   public function displayrace(Illuminate\Http\Request $request)
    {
        return response()->json(['response' => 'Hello World']);
    }

    public function races()
    {
        return view('includes/child/races');
    }

}