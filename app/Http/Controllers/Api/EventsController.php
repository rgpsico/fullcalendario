<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\EventRequest;
use App\Models\Events;
use App\Repositories\Contracts\ActivityRepositoryInterface;

use Illuminate\Http\Request;


class EventsController extends Controller
{
    protected $repository;

    public function __construct(ActivityRepositoryInterface $repository)
    {
        return $this->repository = $repository;        
    }

    public function index()
    {
      return $this->repository->All();
    }

    public function store(EventRequest $request)
    {
     
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
