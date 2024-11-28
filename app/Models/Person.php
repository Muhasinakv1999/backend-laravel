<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Person extends Model
{
    use HasFactory;

    // Optional: specify the table name if it's not `persons`
    protected $table = 'persons';

    // Specify the fields that can be mass-assigned
    protected $fillable = ['id', 'name', 'age'];
}

