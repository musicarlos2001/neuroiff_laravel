<?php

namespace neuroiff\Http\Controllers;

use Illuminate\Http\Request;

use neuroiff\Http\Requests;
use neuroiff\Post;
use neuroiff\PostViews;
use neuroiff\CommentsPost;

class RelationshipsController extends Controller
{
    public function oneToOne(){
        
        /*
        $post = Post::create([
            'title'=>'Titulo do Post',
            'description' => 'descrição completa do post',
            'date'=>date('Y-m-d'),
            'time'=>date('Hms'),
        ]);
        
        $postViews = PostViews::create([
            'qdt'=>0,
            'id_post'=>$post->id,
        ]);
         * 
         * 
         */
        $post = Post::find(7);
        
        //dd($post->toArray());
        //dd($post->qtdViews);
        
        $postViews = $post->qtdViews;
        
        $newQtdViews = $postViews->qtd + 1;
        
        $updateVP = $postViews->update([
            'qtd'=>$newQtdViews
        ]);
        
        var_dump($postViews->qtd);
        
        dd($updateVP);
        
        return "OneToOne";
    }
    
    public function oneToMany() {
        
         $post = Post::find(6);
         var_dump($post->description);
         //duas opções
         /*
         $comment = CommentsPost::create([
             'name' =>'Fulano da Silva',
             'comments'=>'Novo comentário do post',
             'id_post'=>$post->id,
         ]);
          * 
          */
         
          $comment = new CommentsPost([
             'name' =>'Fulano da Silva',
             'comments'=>'Novo comentário do post id 6',
         ]);
         
         //dd($post->comments()->save($comment));
         
         dd($post->comments);
         
         
        
        return "OneToMany";
    }
    
    public function manyToOne() {
        
        $comment = CommentsPost::find(4);
        var_dump($comment->comments);
        
        $post = $comment->post;
        dd($post->description);
        return 'ManyToOne';
    }
    
    public function manyToMany() {
        
        
        return 'ManyToMany';
    }
    
}
