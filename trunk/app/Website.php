<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Website extends Model
{
	protected $fillable = [
        'url',
        'user_id',
        'cost',
        'currency',
        'categories',
        'language',
        'f_n',
        'da',
        'tf',
        'sr_traffic',
        'pa',
        'moz_rank',
        'linkedin',
        'equity',
        'alexa_rank',
        'a_links',
        'a_cnt',
        'a_cnt_rank',
        'sem_rush_domain',
        'sr_rank',
        'sr_keywords',
        'sr_costs',
        'sr_ulinks',
        'sr_hlinks',
        'sr_dlinks',
        'sf',
        'ebl',
        'ref_domains',
        'processing_time',
        'example',
        'note'

    ];

	public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function publishers(){
      return $this->belongsToMany('App\Publisher')->withTimestamps();
    }
    public function categories() {
        return $this->belongsToMany('App\Category')->withTimestamps();
    }
}
