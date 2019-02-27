<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Post extends Model
{
    use Sortable;

    protected $dates = ['publish_date'];
    protected $sortable = ['title', 'author', 'publish', 'publish_date', 'created_at'];
    protected $fillable = ['title', 'body', 'slug', 'author'];

    public function getDisplayPublishDateAttribute() 
    {
        
        if (is_null($this->publish_date))
        {
            return '';
        }
        else
        {
            return $this->publish_date->toDateString();
        }
    }
}
