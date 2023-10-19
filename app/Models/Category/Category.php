<?php

namespace App\Models\Category;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'color',
        'state_id',
    ];

    public function state()
    {
        return $this->belongsTo('App\Models\State\State', 'state_id');
    }

    public function news()
    {
        return $this->hasMany('App\Models\New\News', 'category_id');
    }
}
