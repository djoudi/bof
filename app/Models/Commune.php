<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commune extends Model
{
    use HasFactory;

    protected $table = 'communes';

    protected $fillable = [
        'name_ar',
        'name_fr',
        'wilaya_id',
    ];

    public function wilaya()
    {
        return $this->belongsTo(Wilaya::class);
    }
}
