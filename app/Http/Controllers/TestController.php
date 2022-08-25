<?php

namespace App\Http\Controllers;

use App\Models\ZipCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class TestController extends Controller
{
    public function testDB($zipCode)
    {
        try {
            $zip_code = ZipCode::where('zip_code', $zipCode)->with('federalEntity', 'settlements', 'municipality')->first();
    
            return Response::json($zip_code, 200);

        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
