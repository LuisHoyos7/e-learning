<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modality;
use App\Repositories\Modality\ModalityRepository;

class ModalityController extends Controller
{
    protected $modalityRepository;

    public function __construct(ModalityRepository $modalityRepository)
    {
        $this->modalityRepository = $modalityRepository;
    }
    public function index()
    {
        $modalities = $this->modalityRepository->getAll();

        return $modalities;
    }

    public function store(Request $request)
    {
        $modality = $this->modalityRepository->create($request->all());

        return $modality;
    }

    public function show($category)
    {
        return $category;
    }

    public function update(Request $request, Modality $modality)
    {
        $modality = $this->modalityRepository->update($modality, $request->all(),);

        return $modality;
    }

    public function destroy(Modality $modality)
    {
        $this->modalityRepository->delete($modality);
        return response()->json([
            'message' => 'Modalidad Eliminada'
        ]);
    }
}
