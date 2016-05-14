<?php

namespace neuroiff;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'description','date','time'];
    
    public function qtdViews() {
        return $this->hasOne('neuroiff\PostViews','id_post');
    }
    
    public function comments() {
        return $this->hasMany('neuroiff\CommentsPost','id_post');
    }
}
