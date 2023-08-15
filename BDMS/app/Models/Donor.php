<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    public $timestamps = false;
    protected $table='donors';
    protected $primaryKey = 'Donor_ID';
    use HasFactory;
}
