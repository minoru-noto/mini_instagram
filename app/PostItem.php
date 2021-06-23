<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostItem extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'img_url', 'comment', 'user_id',
    ];
    
    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id','id');
    }
    
    
    
}
