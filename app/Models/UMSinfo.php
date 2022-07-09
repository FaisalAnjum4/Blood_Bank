<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UMSinfo extends Model
{
    use HasFactory;
    protected $table = "info";
    public $timestamps=false;
    protected $primaryKey="i_id";
}
