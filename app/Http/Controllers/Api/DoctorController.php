<?php

namespace App\Http\Controllers\Api;


use App\Models\Doctor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = Doctor::with('promotions')->paginate(5);

        return response()->json([
            'success' => true,
            'results' => $doctors,
        ]);
    }


    public function show($id)
    {
        //
    }
}
