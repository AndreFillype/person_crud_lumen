<?php

namespace App\Http\Controllers;
use App\Models\Person;

class PersonsController extends Controller
{
    protected $person;

    public function __construct(Person $person)
    {
        $this->person = $person;
    }
    public function index()
    {
        return $this->person->all()->toJson();
    }
}