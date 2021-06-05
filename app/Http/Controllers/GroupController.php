<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;
use App\Repositories\Group\GroupRepository;

class GroupController extends Controller
{
    protected $groupReposity;

    public function __construct(GroupRepository $groupRepository)
    {
        $this->groupRepository = $groupRepository;
    }
   
    public function index()
    {
        $groups = $this->groupRepository->getAll();

        return $groups;
    }

    public function store(Request $request)
    {
        $group = $this->groupRepository->create($request->all());

        return $group;
    }

    public function show(Group $group)
    {
        return $group;
    }

    public function update(Request $request, Group $group)
    {
        $group = $this->groupRepository->update($group, $request->all(),);

        return $group;
    }

    public function destroy(Group $group)
    {
        $this->groupRepository->delete($group);
        return response()->json([
            'message' => 'Grupo Eliminado'
        ]);
    }
}
