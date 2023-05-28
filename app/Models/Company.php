<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Contact;

class Company extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'address', 'website' , 'email'];

    public function contacts()
    {
        $this->hasMany(Contact::class);
    }
}

