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

        $request->validate([
            'title' => 'required|string'
        ]);

        if ($evento = Events::create($request->all())) {
            return  response()->json($evento);
        }
    }


    public function update(Request $request, $id)
    {
        if ($create = Events::find($id)->update([
            'title' => $request->title,
            'start' => $request->start,
            'end' => $request->end
        ])) {
            return  response()->json('atualizado com Successo');
        }
    }

    public function destroy($id)
    {

        if ($destroy = Events::find($id)->delete()) {
            return  response()->json('Excluir com Successo');
        }
    }
}
