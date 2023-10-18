<?php

namespace App\Models\State;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    protected $table = 'states';
    protected $primaryKey = 'id';
    protected $fillable = [
      'name',
      'type_state',
    ];

    public function users()
    {
        return $this->hasMany('App\Models\User', 'state_id');
    }

    public function socialnetworks()
    {
        return $this->hasMany('App\Models\SocialNetwork\SocialNetwork', 'state_id');
    }

    public function categories()
    {
        return $this->hasMany('App\Models\Category\Category', 'state_id');
    }

    public function news()
    {
        return $this->hasMany('App\Models\New\News', 'state_id');
    }

}
