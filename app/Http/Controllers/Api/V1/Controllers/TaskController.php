<?php

namespace App\Http\Controllers\Api\V1\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\TaskResource;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends ApiController {

    //
    public function tasks(Request $request)
    {
        return $this->response(true, 'Successfully processed', TaskResource::collection(Task::whereUserId(auth()->user()->id)->get()));
    }

    public function create(Request $request)
    {
        return $this->response(true, 'Successfully processed', Task::create(['name' => $request->input('name'), 'user_id' => auth()->user()->id]));
    }

    public function chart(Request $request)
    {
        $user             = auth()->user();
        $data             = [];
        $minute           = now()->minute;
        $previous_minutes = null;
        if($minute < 30) {
            $previous_minutes = [30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60];
        }

        foreach($previous_minutes as $previous_minute) {
            $data[$previous_minute] = Task::where('completed',0)->where('user_id',$user->id)->where('updated_at', '<', now()->subMinute()->minute($previous_minute)->toDateTimeString())->count();
        }

        for($i = 1; $i <= $minute; $i++) {
            $data[$i] = Task::where('completed',0)->where('user_id',$user->id)->where('updated_at', '<', now()->minute($minute)->toDateTimeString())->count();
        }

        $data = collect($data);
        return $this->response(true, 'Successfully processed', [
            'time' => $data->keys(),
            'data' => $data->values()
        ]);
    }

}
