<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'content', 'user_id', 'post_item_id',
    ];
    
    public function user()
    {
        return $this->belongsTo('App\User','user_id','id');
    }
}
