<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\SavePetRequest;

class PetController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => []]);
    }

    public function index()
    {
        //creamos una variabel (u objeto) con en el cual se guaradaran la info desde la DB
        //metofo DB::table(Nombre de la tabla a consultar) con el metodo get
        $pets = Pet::get();

        //ahora retornaremos la vista desde aqui, pasandole como parametro la informacion o variable
        return view('pets.index', ['pets' => $pets]);
    }

    public function show(Pet $pet)
    {
        return view('pets.show', ['pet' => $pet]);
    }

    public function create()
    {
        return view('pets.create', ['pet' => new Pet]);
    }

    public function store(SavePetRequest $request)
    {
        Pet::create($request->validated());

        return to_route('pets.index');
    }

    public function edit(Pet $pet)
    {
        return view('pets.edit', ['pet' => $pet]);
    }

    public function update(SavePetRequest $request, Pet $pet)
    {
        $pet->update($request->validated);
        return to_route('pets.show', $pet);
    }

    public function destroy(Pet $pet)
    {
        $pet->delete();
        return to_route('pets.index');
    }

    public function form(Pet $pet)
    {
        return view('pets.adopt', ['pet' => $pet]);
    }
}