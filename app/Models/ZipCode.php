<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ZipCode extends Model
{
    use HasFactory;

    protected $fillable = [
        "zip_code",
        "locality",
    ];
    
    protected $hidden = [
        'federal_entity_id',
        'municipality_id',
        'created_at',
        'updated_at',
    ];

    //RELATIONS
    public function federalEntity(){
        return $this->belongsTo(FederalEntity::class, 'federal_entity_id', 'key');
    }
    public function municipality(){
        return $this->belongsTo(Municipality::class, 'municipality_id', 'key');
    }
    public function settlements(){
        return $this->hasMany(Settlement::class, 'zip_code', 'zip_code')->with('settlementType');
    }

}
