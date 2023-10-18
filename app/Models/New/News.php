<?php

namespace App\Models\New;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $table = 'news';
    protected $primaryKey = 'id';
    protected $fillable = [
        'imagen',
        'title',
        'pre_description',
        'description',
        'sub_imagen',
        'document',
        'state_id',
        'category_id',
        'user_id',
    ];

    public function state()
    {
        return $this->belongsTo('App\Models\State\State', 'state_id');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category\Category', 'category_id');
    }
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }


}
