<?php

namespace Modules\Locations\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocationManagement extends Model
{
    use HasFactory;

    protected $table = 'location_management';
    protected $primaryKey = 'id';

    protected $fillable = [
        'longitude', 'latitude'
    ];
}
