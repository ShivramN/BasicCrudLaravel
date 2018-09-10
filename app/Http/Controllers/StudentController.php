<?php

namespace App\Http\Controllers;
use Illuminate\Auth\AuthenticationException;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
       public function __construct()
    {
        $this->middleware('auth');
    }
   
    public function index()
    {
       $students=\App\Student::all();
     
       return view('index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $validatedData = $request->validate([
               'fname' => 'required|min:2|max:255',
               'lname' => 'required|max:255',
               'course' => 'required',
               'semester' => 'required',
               'dob'=>'required',
               'filename'=>'required',
               'gender' => 'required',

    ],[

               'fname.required' => 'First Name is required',
               'fname.min' => 'First Name must be at least 2 characters.',
               'lname.required' => 'Last Name is required',
               'course.required' => 'Course is required',
               'semester.required' => 'Semester is required',
               'dob.required' => 'DOB is required',
               'filename.required' => 'Photo is required',


    ]);

       if($request->hasfile('filename'))
         {
            $file = $request->file('filename');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $name);
         }
             $student= new \App\Student;
             $student->fname=$request->get('fname');
             $student->lname=$request->get('lname');
             $student->course=$request->get('course');
             $student->semester=$request->get('semester');
             $student->dob = date('d-m-Y', strtotime($request->get('dob')));
             $student->filename=$name;
             $student->gender=$request->get('gender');
             $student->save();
          
        return redirect('students')->with('success', 'Information has been added');
    }
        

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = \App\Student::find($id);

        return view('edit',compact('student','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $validatedData = $request->validate([
               'fname' => 'required|min:2|max:255',
               'lname' => 'required|max:255',
               'course' => 'required',
               'semester' => 'required',
               'dob'=>'required',
               'filename'=>'required',
               'gender' => 'required',

    ],[

               'fname.required' => 'First Name is required',
               'fname.min' => 'First Name must be at least 2 characters.',
               'lname.required' => 'Last Name is required',
               'course.required' => 'Course is required',
               'semester.required' => 'Semester is required',
               'dob.required' => 'DOB is required',
               'filename.required' => 'Photo is required',


    ]);
         if($request->hasfile('filename'))
         {
            $file = $request->file('filename');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $name);
         }
             $student= \App\Student::find($id);
             $student->fname=$request->get('fname');
             $student->lname=$request->get('lname');
             $student->course=$request->get('course');
             $student->semester=$request->get('semester');
             $student->dob = date('d-m-Y', strtotime($request->get('dob')));
             $student->filename=$name;
             $student->gender=$request->get('gender');
             $student->save();
             return redirect('students');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            $student = \App\Student::find($id);
            $student->delete();
            return redirect('students')->with('success','Information has been  deleted');
    }
}
         
