<?php

namespace App\Model\home;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
     /**
     * 与模型关联的数据表
     *
     * @var string
     */
    protected $table = 'post';

    //主键
    protected $primaryKey = 'id';

    /**
     * 该模型是否被自动维护时间戳
     *
     * @var bool
     */
    public $timestamps = false;

     /**
	 * 不可被批量赋值的属性。
	 *
	 * @var array
	 */
	protected $guarded = [];




    /**
    一对多关联评论表
     **/
    public function comments () {
         return $this->hasMany(\App\Model\home\Comments::class, 'post_id', 'id');
    }

}

