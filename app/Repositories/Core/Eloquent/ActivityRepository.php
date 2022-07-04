<?php

namespace App\Repositories\Core\Eloquent;


use App\Models\Events;

use App\Repositories\Contracts\ActivityRepositoryInterface;


class ActivityRepository implements ActivityRepositoryInterface
{
    public function entity()
    {
        return Events::class;
    }

    public function All()
    {
        return $customers = Events::all();
    }

    public function findById($eventId)
    {
        return $Events = Events::where('id', $eventId)
            ->firstOrFail()
            ->format();
    }

    public function store($request)
    {
        if ($evento = Events::create($request)) {
            return  response()->json($evento);
        }
    }

    public function update(int $customerId, $data)
    {
        $Events = Events::where('id', $customerId)->firstOrFail();
        return $Events->update(request()->only('name'));
    }

    public function delete(int $customerId)
    {
        return $Events = Events::where('id', $customerId)->delete();
    }
}
