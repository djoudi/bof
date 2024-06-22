<?php

namespace App\Http\Controllers\User;

use App\Enums\GoodBadEnum;
use App\Enums\NotesEnum;
use App\Enums\PerformanceLevelEnum;
use App\Enums\YesNoEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\EvaluationRequest;
use App\Models\Center;
use App\Models\Commune;
use App\Models\Evaluation;
use App\Models\Groupe;
use App\Models\Modules;
use App\Models\TypeApprenant;
use App\Models\Wilaya;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EvaluationController extends Controller
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
        $w = Auth::user()->wilaya_id;
       // $wilaya = Wilaya::find($w);
        $wilayas = Wilaya::all();
        $centers = Center::all();
        $groupes = Groupe::all();
        $modules = Modules::latest('id')->get();
        $type_appranents = TypeApprenant::all();
     //   $communes = Commune::where('wilaya_id',$w)->get();
       // $communes = Commune::all();
        $data['performance_level'] = PerformanceLevelEnum::getValues();
        $data['contenu_pedagogique_module'] = GoodBadEnum::getValues();
        $data['contenu_et_les_missions'] = NotesEnum::getValues();
        $data['volume_horaire'] = NotesEnum::getValues();
        $data['documentation'] = GoodBadEnum::getValues();
        $data['force_formateur'] = YesNoEnum::getValues();
        $data['reponse_formateur'] = YesNoEnum::getValues();
        $data['relation'] = GoodBadEnum::getValues();
        $data['debat'] = YesNoEnum::getValues() ;
        $data['exemple'] = YesNoEnum::getValues() ;
        $data['exercice'] = YesNoEnum::getValues() ;
        $data['experience'] = YesNoEnum::getValues();
        $data['analyse'] = YesNoEnum::getValues();
        $data['situation_des_salles'] = NotesEnum::getValues();
        $data['logistique'] = NotesEnum::getValues();
        $data['restauration_aux_centres'] = NotesEnum::getValues();
        $data['restauration_aux_hotel'] = NotesEnum::getValues();

        return view('evaluation', compact(
            'wilayas',
            'centers',
            'groupes',
            'modules',
            'type_appranents',
            'data'
        ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EvaluationRequest $request)
    {
        $validatedData = $request->validated();
       // $validatedData['observations'] = 
       // dd($validatedData);
        // Save the evaluation
        $evaluation = Evaluation::create($validatedData);
        flash()
    ->translate('ar')
    ->addSuccess('تمت العملية بنجاح.', 'تهانينا!');
        // Optionally, you can redirect or add a success message
        return back()->withInput();
    }
  


}
