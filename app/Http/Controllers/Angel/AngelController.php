<?php

namespace App\Http\Controllers\Angel;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AngelController extends Controller
{
    private $table_name = 'customer';

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        // List all customers
        $users = DB::table('customer')->select('id', 'name', 'contactNumber', 'isSuspended')->get();
        return 'sdadas';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        return view('create', ['name' => 'Juani']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        // Get the values
        $userInputs = retrieveInputs($request);

        // Insert
        DB::table($this->table_name)->insert([$userInputs]);

        // Return
        return response()->json(['message' => 'Succesfully added user!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        // Display user information
        $userInfo = DB::table($this->table_name)
        ->select('id', 'name', 'contactNumber', 'isSuspended')
        ->where('id', $id)
        ->get();
        return response()->json($userInfo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        // Display user information
        $userInfo = DB::table($this->table_name)
        ->select('id', 'name', 'contactNumber', 'isSuspended')
        ->where('id', $id)
        ->get();
        return view('edit', $userInfo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        // Get the values
        $userInputs = retrieveInputs($request);

        // Update
        DB::table($this->table_name)
        ->where('id', $id)
        ->update([$userInputs]);

        // Return
        return response()->json(['message' => 'Succesfully updated user!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        // Delete this user
        DB::table($this->table_name)
        ->where('id', '=', $id)
        ->delete();

        // Return
        return response()->json(['message' => 'Succesfully deleted user!']);
    }

    private function retrieveInputs(Request $request)
    {
        // Retrieve inputs
        $name = $request->input('name');
        $contactNumber = $request->input('contactNumber', '+639053343746');
        $isSuspended = $request->input('isSuspended', false);
        return ['name' => $name, 'contactNumber' => $contactNumber, 'isSuspended' => $isSuspended];
    }
}
