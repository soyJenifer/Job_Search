<?php

namespace App\Models;
use App\Models\Feedback;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Offer extends Model
{
    //
    use HasFactory;
    protected $fillable = [
        "offer",
        "description",
        "company" ,
        "status",
    ];
    public function feedback(){

        return $this->hasMany(Feedback::class);
    }
}