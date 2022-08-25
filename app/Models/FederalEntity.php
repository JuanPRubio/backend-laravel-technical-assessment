<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FederalEntity extends Model
{
    use HasFactory;

    protected $fillable = [
        "key",
        "name",
        "code",
    ];

    protected $hidden = [
        // 'id',
        'created_at',
        'updated_at',
    ];

    //RELATIONS
    public function zipCode(){
        return $this->hasMany(ZipCode::class, 'key', 'federal_entity_id');
    }
}
