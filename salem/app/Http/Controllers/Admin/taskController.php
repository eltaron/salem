<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;

class taskController extends Controller
{
    public function index(){
        $tasks = Task::where('status',0)->orderBy('id', 'DESC')->get();
        return view('admin.tasks.index')->with([
            'tasks' => $tasks
        ]);
    }
    public function end(){
        $tasks = Task::where('status',1)->orderBy('id', 'DESC')->get();
        return view('admin.tasks.end')->with([
            'tasks' => $tasks
        ]);
    }
    public function add(){
        return view('admin.tasks.add');
    }
    public function store(Request $request) {
        $request->validate([
            'task'           => 'required',
        ], [], [
            'task'           => 'عنوان الموعد',
        ]);
        $task = new Task();
        $task->task             = $request->task;
        $task->description      = $request->description;
        $task->dayToDeliver     = $request->dayToDeliver;
        $task->user_name        = $request->user_name;
        $task->user_phone       = $request->user_phone;
        $task->quantity         = $request->quantity;
        $task->status           = 0;
        $task->save();

        $mainpath = date("Y-m-d").'/';
        $file = $request->file('images');
        if (isset($file)){
            $fileNameWithExtension = $file->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExtension, PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $imageName = $fileName.'_'.time().'.'.$extension;
            $path = $file->move(public_path('storage/Tasks/'.$mainpath), $imageName);

            $entry = Task::where('id',$task->id)->first();
            $entry->image = url('').'/storage/Tasks/'.$mainpath.$imageName;
            $entry->save();
        }
        return redirect(aurl('tasks'))->with('success','تم اضافة الموعد بنجاح');
    }
    public function delete(Request $request){
        $product = Task::where('id',$request->product_id)->first();
        if($product){
            Task::where('id',$request->product_id)->delete();
            return back()->with('success','تم حذف الموعد');
        } else {
            return back()->with('faild','الموعد غير موجود');
        }
    }
    public function activate(Request $request) {
        $task = Task::where('id',$request->product_id)->first();
        if($task){
            $task->status = 1;
            $task->save();
            return back()->with('success','تم انهاء الموعد');
        } else {
            return back()->with('faild','الموعد غير موجود');
        }
    }
    public function edit($id){
        $task = Task::where('id',$id)->first();
        if($task){
            return view('admin.tasks.edit')->with([
                'task'=>$task
            ]);
        } else {
            return back()->with('faild','الموعد غير موجود');
        }
    }
    public function update(Request $request) {
        $task = Task::where('id',$request->task_id)->first();
        if($task){
            $task->task             = $request->task;
            $task->description      = $request->description;
            $task->dayToDeliver     = $request->dayToDeliver;
            $task->user_name        = $request->user_name;
            $task->user_phone       = $request->user_phone;
            $task->quantity         = $request->quantity;
            $task->save();
            $mainpath = date("Y-m-d").'/';
            $file = $request->file('images');
            if (isset($file)){
                $fileNameWithExtension = $file->getClientOriginalName();
                $fileName = pathinfo($fileNameWithExtension, PATHINFO_FILENAME);
                $extension = $file->getClientOriginalExtension();
                $imageName = $fileName.'_'.time().'.'.$extension;
                $path = $file->move(public_path('storage/Tasks/'.$mainpath), $imageName);
                $entry = Task::where('id',$task->id)->first();
                $entry->image = url('').'/storage/Tasks/'.$mainpath.$imageName;
                $entry->save();
            }
            return back()->with('success','تم تعديل الموعد بنجاح');
        } else {
            return back()->with('faild','الموعد غير موجود');
        }
    }
}
