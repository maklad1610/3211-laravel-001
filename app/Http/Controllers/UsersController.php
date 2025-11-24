<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = [
    [
        "id" => 1,
        "name" => "Fares Mohamed",
        "email" => "fares@example.com",
        "age" => 22,
        "country" => "Egypt",
        "avatar" => "https://cdn.dummyjson.com/user-images/1.webp"
    ],
    [
        "id" => 2,
        "name" => "Zeyad Wael",
        "email" => "zeyad@example.com",
        "age" => 21,
        "country" => "Egypt",
        "avatar" => "https://cdn.dummyjson.com/user-images/2.webp"
    ],
    [
        "id" => 3,
        "name" => "Adham Hassan",
        "email" => "adham@example.com",
        "age" => 23,
        "country" => "Egypt",
        "avatar" => "https://cdn.dummyjson.com/user-images/3.webp"
    ],
    [
        "id" => 4,
        "name" => "Marawan Ibrahim",
        "email" => "marawan@example.com",
        "age" => 22,
        "country" => "Egypt",
        "avatar" => "https://cdn.dummyjson.com/user-images/4.webp"
    ],
    [
        "id" => 5,
        "name" => "Jeffrey Smith",
        "email" => "jeffrey@example.com",
        "age" => 30,
        "country" => "USA",
        "avatar" => "https://cdn.dummyjson.com/user-images/5.webp"
    ],
    [
        "id" => 6,
        "name" => "Lara Ahmed",
        "email" => "lara@example.com",
        "age" => 26,
        "country" => "UAE",
        "avatar" => "https://cdn.dummyjson.com/user-images/6.webp"
    ],
    [
        "id" => 7,
        "name" => "Sara Hassan",
        "email" => "sara@example.com",
        "age" => 20,
        "country" => "Egypt",
        "avatar" => "https://cdn.dummyjson.com/user-images/7.webp"
    ],
    [
        "id" => 8,
        "name" => "Omar Khaled",
        "email" => "omar@example.com",
        "age" => 24,
        "country" => "Qatar",
        "avatar" => "https://cdn.dummyjson.com/user-images/8.webp"
    ],
    [
        "id" => 9,
        "name" => "Mona Adel",
        "email" => "mona@example.com",
        "age" => 28,
        "country" => "Egypt",
        "avatar" => "https://cdn.dummyjson.com/user-images/9.webp"
    ],
    [
        "id" => 10,
        "name" => "Ahmed Ali",
        "email" => "ahmed@example.com",
        "age" => 31,
        "country" => "Egypt",
        "avatar" => "https://cdn.dummyjson.com/user-images/10.webp"
    ]
]; 
    return view('users.index', ['users' => $users]);
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
        return view('users.show' , ['id' => $id]);
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
