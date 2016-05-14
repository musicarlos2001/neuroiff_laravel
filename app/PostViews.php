<?php

namespace neuroiff;

use Illuminate\Database\Eloquent\Model;

class PostViews extends Model
{
    protected $table = 'views_post';
    
    protected $fillable = ['qtd', 'id_post'];
    
    public $timestamps = false;
}
