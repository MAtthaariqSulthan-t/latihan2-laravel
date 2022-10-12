<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Models\Major;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $filter = $request->input('filter');
        $data = Student::with(['major']);
        if ($search)
        {
            $data->where(function($query) use ($search) {
                $query->where('name', 'like', "%$search%")
                      ->orwhere('address', 'like', "%$search%");
        });
        }
        if ($filter)
        {
            $data->where(function($query) use ($filter) {
                $query->where('major_id', '=', "$filter");
            });
        }
        $majors = Major::get();
        $data = $data->paginate(10);
        return view('pages.student.list', ['data' => $data, 'majors' => $majors]);

        // return view('pages.list', compact($data));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $student = new Student();
        $majors = Major::get();


        return view('pages.student.form', ['student' => $student], ['majors' => $majors]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStudentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStudentRequest $request)
    {
        $data = $request->all();
        Student::create($data);
        return redirect('student')->with('notif', 'berhasil menambahkan data');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        $majors = Major::get();
        return view('pages.student.form', ['student' => $student, 'majors' => $majors]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStudentRequest  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStudentRequest $request, Student $student)
    {
        $data = $request->all();
        $student->update($data);
        return redirect()->route('student.index')->with('notif', 'berhasil mengedit data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('student.index')->with('notif', 'berhasil menghapus data');
    }
}