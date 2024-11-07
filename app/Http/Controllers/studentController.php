<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Student;

class studentController extends Controller
{
    public function layout()
    {
        return view('layout.contact');
    }
    public function insert(Request $res)
    {

        $model = new Student();
        $model->first_name = $res->fname;
        $model->last_name = $res->lname;
        $model->email = $res->email;
        $model->msg = $res->feedback;

        if ($model->save()) {
            return redirect('showdata');
        }
    }

    public function showdata()
    {
        $students = Student::all();
        $data = compact('students');
        return view('layout.showdata')->with($data);
    }
    public function delete($id)
    {
        $students = Student::find($id);
        $students->delete();
        return back();
    }
    public function edit($id)
    {
        $student = Student::find($id);
        $data = compact('student');
        return view('layout.update')->with($data);
    }
    public function update(Request $res, $id)
    {
        $model = new Student();
        $student = Student::find($id);
        $student->first_name = $res->fname;
        $student->last_name = $res->lname;
        $student->email = $res->email;
        $student->msg = $res->feedback;



        if ($student->save()) {
            return redirect('showdata');
        }
    }
}
