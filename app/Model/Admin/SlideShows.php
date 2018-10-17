<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class SlideShows extends Model
{
    //连接表名
    protected $table = "slideshows";

    //时间戳
    public $timestamps = false;

    //黑名单
    public $guarded = [];

}
