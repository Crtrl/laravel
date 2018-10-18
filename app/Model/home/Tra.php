<?php

namespace App\model\home;

use Illuminate\Database\Eloquent\Model;

class tra extends Model
{
   	 //指定表名
	protected $table = 'tra';

	//指定主键
	protected $primaryKey = 'id';

	//是否开启时间戳
	protected $timestamps = false;
}
