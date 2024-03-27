<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class qos extends Model
{
    use HasFactory;
    protected $fillable = ['longitude', 'latitude', 'pathloss', 'link_budget', 'field_strength', 'cnr', 'snr', 'ber'];
    protected $table = 'qos';
    public $timestamps = false;
}
