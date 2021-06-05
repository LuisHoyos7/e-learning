<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;

class GroupController extends Controller
{
   
    public function index()
    {
        $groups = Group::all();

        return $groups;
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $group = new Group($data);

        $group->save();

        return $group;
    }

    public function show(Group $group)
    {
        return $group;
    }

    public function update(Request $request, Group $group)
    {
        $group->update($request->all());

        return $group;
    }

    public function destroy(Group $group)
    {
        $group->delete();
        return response()->json([
            'message' => 'Grupo Eliminado'
        ]);
    }
}
