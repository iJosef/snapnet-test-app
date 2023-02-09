<?php

namespace App\Http\Controllers;

use App\Http\Requests\CitizenFormRequest;
use App\Repositories\CitizenRepositoryInterface;

class CitizenController extends Controller
{
    private $citizenRepository;

    public function __construct(CitizenRepositoryInterface $citizenRepository)
    {
        $this->citizenRepository = $citizenRepository;
    }

    public function create (CitizenFormRequest $request)
    {
        $request->validated();

        $citizen = $this->citizenRepository->create();

        return $citizen;

    }

    public function allCitizens ()
    {
        $citizens = $this->citizenRepository->all();

        return response()->json($citizens, 200);
    }

    public function getCitizen($citizen_id)
    {
        $citizen = $this->citizenRepository->showCitizen($citizen_id);

        return response()->json($citizen, 200);
    }
}
