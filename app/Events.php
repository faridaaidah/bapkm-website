<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Events extends Model implements Searchable
{
    protected $primaryKey = 'id';
	public $incrementing = true;
    protected $table = 'events';

    protected $fillable = [
        'title',
        'dateOfEvent',
        'fromTime',
        'toTime',
        'place'
    ];

    public function getSearchResult(): SearchResult
    {
        $url = route('welcome') ;

        return new SearchResult(
            $this,
            $this->title,
            $url,
            $this->description,
            $this->type
         );
    }
}
