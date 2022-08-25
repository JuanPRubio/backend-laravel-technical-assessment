<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{
    use HasFactory;

    protected $fillable = [
        "key",
        "name",
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    //RELATIONS
    public function zipCode(){
        return $this->hasMany(ZipCode::class);
    }
}
