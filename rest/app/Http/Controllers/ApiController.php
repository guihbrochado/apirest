<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Listt;

class ApiController extends Controller
{
    public function getAllTasks()
    {
        $tasks = Listt::get()->toJson(JSON_PRETTY_PRINT);
        return response($tasks, 200);
    }

    public function createTask(Request $request)
    {
        $task = new Listt();
        $task->description = $request->description;
        $task->completed = $request->completed;
        $task->save();

        return response()->json([
            "message" => "Tarefa criada"
        ], 201);
    }

    public function getTask($id)
    {
       if (Listt::where('id', $id)->exists()) {
           $task = Listt::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
           return response($task, 200);
       }else{
           return response([
               "messagem" => "Tarefa não encontrada"
           ], 404);
       }
    }

    public function updateTask(Request $request, $id)
    {
        if (Listt::where('id', $id)->exists()) {
            $task = Listt::find($id);
            $task->description = is_null($request->description) ? $task->description : $request->description;
            $task->completed = is_null($request->completed) ? $task->completed : $request->completed;
            $task->save();

            return response()->json([
                "message" => "Tarefa atualizada com sucesso"
            ], 200);
        } else {
            return response()->json([
                "message" => "Tarefa não encontrada"
            ], 404);
        }
    }

    public function deleteTask($id)
    {
        if (Listt::where('id', $id)->exists()) {
            $task = Listt::find($id);
            $task->delete();

            return response()->json([
                "message" => "Tarefe removida com sucesso"
            ], 202);
        } else {
            return response()->json([
                "message" => "Tarefa não encontrada"
            ], 404);
        }
    }
}
