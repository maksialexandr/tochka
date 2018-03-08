<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use Illuminate\Support\Facades\Request;
use App\Models\Task;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;

class TaskController extends Controller
{

    public function index(){
        $message_search = '';
        if(!empty(Request::input('title'))) {
            $title = Request::input('title');
            $tasks = Task::where('title', $title)->paginate(10);
            if(!count($tasks))
                $message_search = 'Данный запрос не дал результатов!!!';
        }
        else
            $tasks = Task::paginate(10);

        return view('task.index', ['tasks' => $tasks])->with(['message_search' => $message_search]);
    }

    public function generate(){
        for($i = 0; $i < 1000; $i++){
            $task = new Task();
            $task->title = 'Задача ' . $i;
            $task->date = Carbon::now()->addHour($i);
            $task->author = 'Автор ' . $i;
            $task->status = 'Статус ' . $i;
            $task->description = 'Описание ' . $i;

            $task->save();
        }

        return redirect()->back()->with(['message' => 'База заполнена !!!']);
    }

    public function show(Task $task){

        return Helper::renderPopupTask($task);
    }

    public function showDetail(Task $task){
        if(isset($task))
            $html = Helper::renderPopupTask($task);

        return view('task.show', ['task' => $html]);
    }

    public function getList(){
        if (Cache::has('tasks'))
            $tasks = Cache::get('tasks');
        else {
            $tasks = Task::all();
            Cache::add('tasks', $tasks, 60); //кэшируем на 1 час
        }

        return view('task.list', ['tasks' => $tasks]);
    }

}
