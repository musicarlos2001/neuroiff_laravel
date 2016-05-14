<?php

namespace neuroiff;

use Illuminate\Database\Eloquent\Model;

class CommentsPost extends Model
{
    protected $fillable = ['id_post', 'name','comments'];
    
    public function post() {
        return $this->belongsTo('neuroiff\Post', 'id_post');
    }
}
