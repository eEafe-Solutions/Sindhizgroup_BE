<?php

namespace Modules\Careers\Entities;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class Career extends Model
{
    use  HasApiTokens, HasFactory, Notifiable;


    protected $fillable = [
        'name',
        'email',
        'massage',
        'position',
        'cv'
    ];
}
