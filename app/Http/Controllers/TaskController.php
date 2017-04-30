<?php

namespace App\Http\Controllers;

use App\Lesson;
use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index($lessonID)
    {
        $lesson = Lesson::where('id',$lessonID)->first();
        $task = Task::where('lesson_id',$lessonID)->first();
        $tasks = Task::where('lesson_id',$lessonID)->get();
        $count = count($tasks);
        return view('client.lesson.index')->with([
            'task' => $task,
            'lesson' => $lesson,
            'count' => $count
        ]);
    }

    public function showNext($lessonID,$taskID)
    {
        $lesson = Lesson::where('id',$lessonID)->first();
        $task = Task::where(['lesson_id'=>$lessonID,'id' => $taskID])->first();
        $tasks = Task::where(['lesson_id'=>$lessonID])->get();
        $count = count($tasks);
        return view('client.lesson.index')->with([
            'task' => $task,
            'lesson' => $lesson,
            'count' => $count
        ]);
    }
}
