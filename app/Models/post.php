<?php 

namespace App\Models;

use Illuminate\Support\Arr;

class  post {
    public static function all ()
    {
        return [
            [
                'id' => 1,
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'Author' => 'Naufal Zul Faza',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Expedita voluptate perspiciatis corporis, ipsam necessitatibus,
                nulla culpa eveniet aperiam cupiditate fugiat natus accusamus officiis minima sunt placeat amet tempore ut est?'
            ],
            [
                'id' => 2,
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'Author' => 'Naufal Zul Faza',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Expedita voluptate perspiciatis corporis, ipsam necessitatibus,
                nulla culpa eveniet aperiam cupiditate fugiat natus accusamus officiis minima sunt placeat amet tempore ut est?'
            ]
            ];
    }

    public static function find($slug)
    {        
        $post = Arr::first(static::all(),fn ($post) => $post['slug'] == $slug);
            
        if(! $post) {
            abort(404);
        }

        return $post;
    }

}