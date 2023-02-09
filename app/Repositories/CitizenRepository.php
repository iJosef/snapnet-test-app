<?php

namespace App\Repositories;

use App\Models\Citizen;


class CitizenRepository implements CitizenRepositoryInterface
{
    public function create() {
        $citizen = new Citizen();
        $citizen->full_name = request()->full_name;
        $citizen->gender = request()->gender;
        $citizen->address = request()->address;
        $citizen->phone = request()->phone;
        $citizen->ward_id = request()->ward_id;

        if($citizen->save()) {
            $data = [
                'status' => 'success',
                'message' => 'Citizen saved',
                'citizen' => $citizen
            ];

            return response()->json($data, 201);
        } else {
            $data = [
                'status' => 'error',
                'message' => 'An error occurred'
            ];

            return response()->json($data, 500);
        }
    }

    public function all() {

        return Citizen::select(['id','full_name','gender'])->get();
    }

    public function showCitizen($citizen_id) {

        return Citizen::with('ward')->findOrFail($citizen_id);
    }

    public function getCitizenByName($citizen_name) {
        return Citizen::where('full_name','LIKE','%'.$citizen_name.'%')->select(['id','full_name','gender'])->get();
    }

    public function fetchAll() {

        return Citizen::with('ward')->get();
    }
}
