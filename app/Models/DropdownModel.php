<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DropdownModel extends Model
{
    use HasFactory;
     protected $table = "registration";
     protected $primaryKey = "id";
}
