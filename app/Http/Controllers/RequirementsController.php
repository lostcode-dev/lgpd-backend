<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Requirements;
use App\Models\Type;

class RequirementsController extends Controller
{
    public function index()
    {
        return Requirements::all();
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $requirement = Requirements::create([
            'email' => $request->get('email'),
            'message' => $request->get('message'),
            'type_id' => $request->get('type_id'),
            'status_id' => '1',
            ]);

        return response()->json(['message'=>'Requirement Created','data'=>$requirement],200);

    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
