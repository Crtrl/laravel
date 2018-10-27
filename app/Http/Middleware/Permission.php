<?php

namespace App\Http\Middleware;

use Closure;
use App\Model\Admin\Users;
use App\Model\Admin\Role;

class Permission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // dd($this->getPermissionsByAdminId(session('user.id')));
        if(!in_array(\Route::current()->getActionName(), $this->getPermissionsByAdminId(session('user.id')))){
            return $next($request);
        }
        return abort('403');
    }



    public function getPermissionsByAdminId($adminId)
    {

        $permissions = [];
        // 获取所有的角色
        foreach ($this->getRolesByAdminId($adminId) as $role) {
            // 获取所有的权限
            foreach ($this->getPermissionsByRoleId($role->id) as $perm) {
                $permissions[] = \Route::current()->getAction()['namespace'].'\\'.'admin'.'\\'.$perm->permission;
            }
        }

        return $permissions;
    }



    /*
     * 根据用户id查询出用户所有的角色
    */
    public function getRolesByAdminId($adminId)
    {
        return Users::find($adminId)->role()->get();
    }

    /*
     * 根据角色id查询出用户所有的权限
    */
    public function getPermissionsByRoleId ($roleId)
    {
        return Role::find($roleId)->permission()->get();
    }






}
