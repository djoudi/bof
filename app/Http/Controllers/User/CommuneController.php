<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Commune;
use App\Models\Wilaya;
use Illuminate\Http\Request;

class CommuneController extends Controller
{

    public function getCommunes($wilayaId)
    {
        $wilaya = Wilaya::findOrFail($wilayaId);
        $communes = $wilaya->communes;

        return response()->json($communes);
    }
}
