<?php

namespace App\Models\SocialNetwork;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialNetwork extends Model
{
    use HasFactory;

    protected $table = 'social_networks';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'icon',
        'url',
        'state_id',
        'user_id',
    ];

    public function state()
    {
        return $this->belongsTo('App\Models\State\State', 'state_id');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }
}
