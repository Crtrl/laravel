<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /**
     * 与模型关联的数据表
     *
     * @var string
     */
    protected $table = 'role';


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
     * 定义与App\Model\Users的关联。
     *
     * @var function
     */    
    public function users()
    {
        return $this->belongsToMany(Users::class,'admin_users_role','users_id','role_id');
    }

    /**
     * 定义与App\Model\Permission的关联。
     *
     * @var function
     */    
    public function permission()
    {
        return $this->belongsToMany(Permission::class,'role_permission','role_id','permission_id');
    }
}
