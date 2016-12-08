<?php

namespace site;

use Illuminate\Database\Eloquent\Model;

class ArticleCategory extends Model
{
    //
    protected $table = 'article_category';
    
    public $subCategories = array();
    
    public $articles = array();
}
