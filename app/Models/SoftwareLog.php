<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoftwareLog extends Model
{
    use HasFactory;
    protected $fillable = ['project_title', 'ip_address', 'date', 'time', 'url', 'browser','user'];
}
