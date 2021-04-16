<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    
    // Profile = profiles

    protected $fillable = [
        'user_id',
        'jawatan',
        'gred',
        'jantina',
        'taraf_perkahwinan',
        'telefon',
        'city_id',
        'address'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class)->withDefault(['nama' => 'BELUM KEMASKINI']);
    }
}
