<?php

namespace App\Http\Controllers;

use App\Models\Worker;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    public function index()
    {
        return view('worker.all', [
            "title" => "Workers",
            "workers" => Worker::all()
        ]);
    }

    public function show(Worker $worker)
    {
        return view('worker.detail', [
            "title" => "Worker Detail",
            "worker" => $worker
        ]);
    }
}
