<?php


namespace App\Repositories;


interface CitizenRepositoryInterface
{
    public function create();

    public function all();

    public function showCitizen($citizen_id);
}
