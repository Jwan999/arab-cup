<?php

namespace App\Http\Controllers;

use App\Exports\ApplicantsExport;
use App\Models\Student;
use Illuminate\Support\Facades\Response;

use Carbon\Carbon;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;
use Illuminate\Support\Facades\Redirect;
use App\Exports\StudentsExport;
use Maatwebsite\Excel\Facades\Excel;

class StudentController extends Controller
{
    public function export()
    {
        if (Auth::check()) {
            return Excel::download(new StudentsExport, 'coding_marathon_registers.xlsx');
        }
        return Redirect::route('dashboard/login');

    }

    public function exportApplicants()
    {
        if (Auth::check()) {
            return Excel::download(new ApplicantsExport(), 'coding_marathon_final_stage.xlsx');
        }
        return Redirect::route('dashboard/login');

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request);

//        dd($request->code);
        $rules = $this->validate($request, [
            "name" => "required",
            "email" => "required",
            "phone" => "required",
            "age" => "required",
            "country" => "required",
            "partner" => "required",
        ]);
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->code . $request->phone,
            'age' => $request->age,
//            'title' => $request->age,
//            'description' => $request->age,
            'country' => $request->country,
            'partner' => $request->partner,
        ];

        Student::create($data);;
        return redirect('/',)->withSuccess('تم التسجيل بنجاح');

    }

    public function charts(Request $request)
    {
        if (!Auth::check()) {
            return Redirect::route('dashboard/login');
        }
        $countries = Student::all()->groupBy('country')->map->count();
        $partners = Student::all()->groupBy('partner')->map->count();
//        dd($countries,$partners);
        return view('dashboard/charts', ['countries' => $countries, 'partners' => $partners]);
        return view('/dashboard/registers');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Student $student
     * @return \Illuminate\Http\Response
     */

    public function registersPage()
    {
        if (!Auth::check()) {
            return Redirect::route('dashboard/login');
        }
        return view('dashboard/registers');
    }

    public function show(Student $student, Request $request)
    {

        $query = Student::orderByDesc('created_at');

        if ($request->has('country')) {
//            dd($request);
            $students = $query->where('country', $request->country);
        }
        $students = $query->paginate(15);
        $response = [
            "success" => true,
            "students" => $students,
        ];

        return Response::json($response);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Student $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Student $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Student $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
