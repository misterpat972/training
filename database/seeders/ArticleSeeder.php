<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {         
        
        for ($i=0; $i < 10; $i++) { 
            $article =new Article();
            $article->title = 'Titre numero '.$i.'';
            $article->content = 'lorem ipsum';
            $article->save();
        }         
    }
}
