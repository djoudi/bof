<?php

namespace App\Models;

use App\Models\Center;
use App\Models\Commune;
use App\Models\Grade;
use App\Models\Wilaya;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bilan extends Model
{
    use HasFactory;

    protected $fillable = [
        'date_fromation',
        'wilaya_id',
        'commune_id',
        'center_id',
        'grade_id',
        'reponse_formateur',
        'observations',
        'formation',
        'type_formation',
        'nom_ecole',
        'num_male',
        'num_fmale',
        'num_total',
    ];

    public function wilaya()
    {
        return $this->belongsTo(Wilaya::class);
    }

    public function commune()
    {
        return $this->belongsTo(Commune::class);
    }

    public function center()
    {
        return $this->belongsTo(Center::class);
    }

    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }

    public function module()
    {
        return $this->belongsTo(Module::class);
    }

 
    
  /*  protected $casts = [
        'performance_level' => PerformanceLevelEnum::class,
        'contenu_pedagogique_module' => NotesEnum::class,
        'contenu_et_les_missions' => NotesEnum::class,
        'volume_horaire' => NotesEnum::class,
        'documentation' => NotesEnum::class,
        'force_formateur' => YesNoEnum::class,
        'reponse_formateur' => YesNoEnum::class,
        'relation' => YesNoEnum::class,
        'debat' => YesNoEnum::class,
        'exemple' => YesNoEnum::class,
        'exercice' => YesNoEnum::class,
        'experience' => YesNoEnum::class,
        'analyse' => YesNoEnum::class,
        'situation_des_salles' => NotesEnum::class,
        'logistique' => NotesEnum::class,
        'restauration_aux_centres' => NotesEnum::class,
        'restauration_aux_hotel' => NotesEnum::class,
    ];*/
}
