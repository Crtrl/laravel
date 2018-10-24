<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
     /**
     * 与模型关联的数据表
     *
     * @var string
     */
    protected $table = 'permission';


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
     * 定义与App\Model\Role的关联。
     *
     * @var function
     */    
    public function role()
    {
        return $this->belongsToMany(Role::class,'role_permission','role_id','permisson_id');
    }
}
