<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\EventResponse;
use App\Models\Events;
use Illuminate\Http\Request;

class EventsController extends Controller
{

    public function index()
    {
        return  response()->json(Events::all());
    }

    public function store(Request $request)
    {
        $request->all();
        if ($create = Events::create($request->all())) {
            return  response()->json('Cadastrado com Successo');
        }
    }
}
