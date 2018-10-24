<?php

namespace App\Model\home;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    //
     /**
     * 与模型关联的数据表
     *
     * @var string
     */
    protected $table = 'comments';

    //主键
    protected $primaryKey = 'cid';

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
     多对一关联帖子表
    ***/
    public function posts()
    {
        return $this->belongsTo(\App\Model\home\Post::class, 'post_id', 'id');
    }

    /** 
     多对一关联用户表
    ***/
    public function users()
    {
        return $this->belongsTo(\App\Model\home\Front_users::class, 'user_id', 'fid');
    }


}
