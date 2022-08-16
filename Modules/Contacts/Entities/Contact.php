<?php


namespace Modules\Contacts\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class Contact extends Model
{

    use  HasApiTokens, HasFactory, Notifiable;


    protected $fillable = [
        'name',
        'email',
        'massage',
        'mobile'
    ];
}
