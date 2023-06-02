<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Company;

class Contact extends Model
{
    protected $fillable = ['first_name', 'last_name', 'email', 'hobbies','phone', 'address' , 'company_id'];
    use HasFactory;

    public function company(){
       return $this->belongsTo(Company::class);
    }
}
