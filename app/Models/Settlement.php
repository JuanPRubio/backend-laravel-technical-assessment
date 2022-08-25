<?php

namespace App\Models;

use Database\Seeders\ZipCodeSeeder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settlement extends Model
{
    use HasFactory;

    protected $fillable = [
        "key",
        "name",
        "zone_type",
    ];

    protected $hidden = [
        'zip_code',
        'id',
        'type_id',
        'created_at',
        'updated_at',
    ];

    //RELATIONS
    public function zipCode(){
        return $this->belongsTo(ZipCode::class, 'zip_code');
    }

    public function settlementType(){
        return $this->belongsTo(SettlementType::class, 'type_id', 'key');
    }

    // public function settlements(){
    //     return $this->belongsTo(Settlement::class, 'settlement_id', 'id')->with('settlementType');
    // }
}
