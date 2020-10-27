<?php

namespace App\Http\Controllers\Admin;

use App\Contact;
use App\Http\Controllers\Controller;
use App\Http\Requests\Message\Message;
use App\Http\Requests\Projects\Projects;
use App\Project;
use App\Tools;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function main_table()
    {
        $projects = Project::all();
        return view("admin.main_table", compact('projects'));
    }
    public function messages_table(){
        $messages = Contact::all();
        return view("admin.messages_table", compact('messages'));
    }
    public function additional_categories_table(){
        $tools = Tools::query()->leftJoin('projects','projects.id','=','tools.project_id')
        ->select('project_name','tool','tools.id')
        ->get();
        $projects = Project::select('id','project_name')->get();
        return view("admin.additional_categories", compact('tools'), compact('projects'));
    }

    public function upsert_project(Projects $projects){
        $id = $projects -> id;
        $project = Project::find($id);
        $exist = 0;
        if(!$project){
            $project = new Project();
            $exist = 1;
        }

        $project->project_name = $projects->input('project_name');
        $project->url = $projects->input('url');
        $project->category = $projects->get('category');

        if ($projects->hasfile('image')){
            if($exist == 0){
                $image_path = app_path("../public/portfolio/images/{$project->image}");
                unlink($image_path);
            }
            $file = $projects->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('portfolio/images/', $filename);
            $project->image = $filename;
        }

        $project->save();
        $project->id;
        return response()->json([
            'status' =>true,
            'message' => 'success',
            'last_inserted_id' => $project->id,
            'upsert' => $exist
        ]);
    }
    public function add_tool(Request $request){
        $tools = new Tools();

        $tools->project_id = $request->id;
        $tools->tool = $request->tool;

        $tools->save();
        $tools->id;
        return response()->json([
            'status' =>true,
            'message' => 'success',
            'last_inserted_id' => $tools->id
        ]);
    }
    public function delete_project(Request $request){
        $id = $request -> id;
        $project = Project::find($id);
        $image_path = app_path("../public/portfolio/images/{$project->image}");
        unlink($image_path);
        $project->delete();
        return response()->json([
            'status' =>true,
            'message' => 'success'
        ]);
    }
    public function delete_message(Request $request){
        $id = $request -> id;
        $message = Contact::find($id);
        $message->delete();
        return response()->json([
            'status' =>true,
            'message' => 'success'
        ]);
    }
    public function delete_tool(Request $request){
        $id = $request -> id;
        $tool = Tools::find($id);
        $tool->delete();
        return response()->json([
            'status' =>true,
            'message' => 'success'
        ]);
    }
    public function message_seen(Request $request){
        $id = $request -> id;
        $contact = Contact::find($id);

        $contact->seen = 1;

        $contact->save();
        return response()->json([
            'status' =>true,
            'message' => 'success'
        ]);
    }
}
