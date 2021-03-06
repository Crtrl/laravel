<?php

namespace App\Model\home;

use Illuminate\Database\Eloquent\Model;

class Front_users extends Model
{
    //
     //
     /**
     * 与模型关联的数据表
     *
     * @var string
     */
    protected $table = 'front_users';

    //主键
    protected $primaryKey = 'fid';

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

    //关联帖子模型
    public function posts()
    {
        return $this->hasMany('App\Model\Admin\Post','id','favorite');
    }
}
