<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Species;

class MainController extends Controller
{
    public function index()
    {
        return view('welcome');
        
    }
    
    public function fetch(Request $request) {
        return Species::where('name_latvian', 'LIKE', '%'.$request->get('search').'%')->get();
    }

}
