<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['students'] = Students::all();
        return view('students', $data);
        //eloqument orm rekomendasi
        //query builder masih bisa digunakan
        //raw tidak disaran kan
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //memanggil list student
        //$students = Students::all();
        //dd($students);
        //die();
        //return view(
        //    'students',
        //    ['siswa' => $students]
        //);
        $data['students'] = Students::all();
        return view(
            'students',
            ['siswa' => $data]
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
