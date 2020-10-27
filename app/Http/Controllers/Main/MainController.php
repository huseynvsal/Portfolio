<?php

namespace App\Http\Controllers\Main;

use App\Contact;
use App\Http\Controllers\Controller;
use App\Http\Requests\Message\Message;
use App\Project;
use App\Tools;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function add_messages(Message $message)
    {
        Contact::create($message->validated());
        return response()->json([
           'status' =>true,
           'message' => 'success'
        ]);
    }

    public function mainpage()
    {
        $projects = Project::all();
        $tools = Tools::all();
        return view("mainpage", compact('projects'), compact('tools'));
    }
}
