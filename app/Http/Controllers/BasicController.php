<?php

namespace App\Http\Controllers;

use App\Models\Basic;
use Illuminate\Http\Request;

class BasicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        echo "hii";
        $superCars = [
            ['name' => 'Porsche',
             'HP' => 2000
            ],
            ['name' => 'GT R35',
             'HP' => 8000
            ],
            ['name' => 'Lamborghini Huracan',
             'HP' => 12000
            ]
        ];
        return view('basic', ['superCars' => $superCars]);
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
    public function show(Basic $basic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Basic $basic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Basic $basic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Basic $basic)
    {
        //
    }

    public function baseCars()
    {
        $basicCars = ['ToyotaHybrid','Swift'];
        $superCars = [
            ['name' => 'Porsche',
             'HP' => 2000
            ],
            ['name' => 'GT R35'],
            ['name' => 'Lamborghini Huracan']
        ];
        
        if($basicCars){
            return response()->json([
                'status' => 200,
                'cars' => $basicCars,
                'supercars' => $superCars,
            ]);
        }else{
            return response()->json([
                'status' => 400,
                'message' => 'Bad Request'
            ]);
        }
    }
}
