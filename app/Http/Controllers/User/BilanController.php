<?php

namespace App\Http\Controllers\User;

use App\Enums\FormationsEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\BilanRequest;
use App\Models\Bilan;
use App\Models\Center;
use App\Models\Commune;
use App\Models\Grade;
use App\Models\Wilaya;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BilanController extends Controller
{
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function getCommunes($wilayaId)
{
    $communes = Commune::where('wilaya_id', $wilayaId)->get();
    return response()->json($communes);
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       // $w = Auth::user()->wilaya_id;
       // $wilaya = Wilaya::find($w);
        $wilayas = Wilaya::all();
        $centers = Center::all();
        $grades = Grade::all();
     //   $communes = Commune::where('wilaya_id',$w)->get();
       // $communes = Commune::all();
        $data['formation'] = FormationsEnum::getValues();

        return view('bilan', compact(
            'wilayas',
            'centers',
            'grades',
            'data'
        ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BilanRequest $request)
    {
        $validatedData = $request->validated();
       // $validatedData['observations'] = 
       // dd($validatedData);
        // Save the evaluation
        $evaluation = Bilan::create($validatedData);
        flash()
    ->translate('ar')
    ->addSuccess('تمت العملية بنجاح.', 'تهانينا!');
        // Optionally, you can redirect or add a success message
        return back()->withInput();
    }
}
