<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Personnes extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id_personne',
        'civilite_pers',
        'nom_pers',
        'prenom_pers',
        'telephone_pers',
        'password',
        'ville_pers',
        'code_postal_pers',
        'adresse_pers',
        'pays_pers',
        'mdp_pers',
        'pseudo_pers',
        'photo_pers',
        'age_pers',
        'est_banni',
        'iban',
        'role',
        'remember_token',
        'date_de_naissance',
        'mail_pers',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        //'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
