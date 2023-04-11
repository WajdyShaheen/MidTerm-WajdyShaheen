<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class TicketController extends Controller
{
    public function create()
    {
        return view('opentask');
    }
    public function store(Request $request)
    {
    $data = new Ticket;
        $data->title = $request->title;
        $data->category = $request->category;
        $data->priority = $request->priority;
        $data->message = $request->message;

        $data->save();

        return redirect()->route('allData');
    }
    
    public function index()
    {
        $alltasks = Alltask::all();
        return view('showtasks', compact('alltasks'));
    }

}
