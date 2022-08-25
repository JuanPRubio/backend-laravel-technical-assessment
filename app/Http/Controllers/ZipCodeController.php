<?php

namespace App\Http\Controllers;

use App\Http\Requests\FindZipCodeRequest;
use App\Http\Requests\StoreZipCodeRequest;
use App\Http\Requests\UpdateZipCodeRequest;
use App\Models\FederalEntity;
use App\Models\ZipCode;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Response;

class ZipCodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreZipCodeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreZipCodeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ZipCode  $zipCode
     * @return \Illuminate\Http\Response
     */
    public function show(ZipCode $zipCode)
    {
        //
    }

    public function findByZipCode($zipCode)
    {

        // AGREGAR TRY CATCH

        try {
            $zip_code = ZipCode::where('zip_code', $zipCode)->with('federalEntity', 'settlements', 'municipality')->first();
            
            if (NULL == $zip_code) {
                    return abort(404);
                }
            
                $response = $zip_code;
        
                return Response::json($response, 200);
        } catch (\Throwable $th) {

            return abort(404);

            // $response['message'] = $th->getMessage();
            // return response()->json([
            //     'message' => 'ZIP CODE NO ENCONTRADO'
            // ], 410);

        }


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ZipCode  $zipCode
     * @return \Illuminate\Http\Response
     */
    public function edit(ZipCode $zipCode)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateZipCodeRequest  $request
     * @param  \App\Models\ZipCode  $zipCode
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateZipCodeRequest $request, ZipCode $zipCode)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ZipCode  $zipCode
     * @return \Illuminate\Http\Response
     */
    public function destroy(ZipCode $zipCode)
    {
        //
    }
}
