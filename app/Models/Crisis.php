<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crisis extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function crido(){
        return $this->belongsTo(Donor::class,'donor_id','id');
    }

    public function donations()
    {
        return $this->hasMany(Donate::class);
    }

    public function volunteer(){
        return $this->belongsTo(User::class, 'volunteer_id','id');
    }
    public function category(){
        return $this->belongsTo(CrisisCategory::class, 'crisisCategory_id', 'id');
    }

}
