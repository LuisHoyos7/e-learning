<?php

namespace App\Http\Controllers;

use App\Models\Third;
use Illuminate\Http\Request;
use App\Repositories\Third\ThirdRepository;

class ThirdController extends Controller
{


    protected $thirdRepository;

    public function __construct(ThirdRepository $thirdRepository)
    {
        $this->thirdRepository = $thirdRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $third = $this->thirdRepository->getAll();

        return $third;
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $third = $this->thirdRepository->create($request->all());

        return $third;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Third  $third
     * @return \Illuminate\Http\Response
     */
    public function show(Third $third)
    {
        return $third;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Third  $third
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Third $third)
    {
        $third = $this->thirdRepository->update($third, $request->all());

        return $third;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Third  $third
     * @return \Illuminate\Http\Response
     */
    public function destroy(Third $third)
    {
        $this->thirdRepository->delete($third);
        return response()->json([
            'message' => 'Tercero Eliminado'
        ]);
    }
}
