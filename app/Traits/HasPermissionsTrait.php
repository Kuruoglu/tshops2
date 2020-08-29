<?php
namespace App\Traits;

use App\Permission;
use App\Role;

trait HasPermissionsTrait {

    public function roles() {

        return $this->belongsToMany(Role::class,'users_roles');

    }

    public function permissions() {

        return $this->belongsToMany(Permission::class,'users_permissions');

    }

    public function hasRole( ... $roles ) {

        foreach ($roles as $role) {
            if ($this->roles->contains('slug', $role)) {
                return true;
            }
        }
        return false;
    }

    protected function hasPermission($permission) {

        return (bool) $this->permissions->where('slug', $permission->slug)->count();
    }

    public function hasPermissionTo($permission) {

    return $this->hasPermissionThroughRole($permission) || $this->hasPermission($permission);
    }

        public function hasPermissionThroughRole($permission) {

//        return $this->hasRole($permission->roles);
//        $permission = Permission::where('slug',$p)->first();
        foreach ($permission->roles() as $role){
            if($this->roles->contains($role)) {
                return true;
            }
        }
        return false;
    }

    protected function getAllPermissions(array $permissions) {

    return Permission::whereIn('slug',$permissions)->get();

    }

    public function givePermissionsTo(... $permissions) {

    $permissions = $this->getAllPermissions($permissions);
    if($permissions === null) {
        return $this;
    }
    $this->permissions()->saveMany($permissions);
    return $this;
    }

    public function deletePermissions(... $permissions )
    {
        $permissions = $this->getAllPermissions($permissions);
        $this->permissions()->detach($permissions);
        return $this;
    }

    public function refreshPermissions( ... $permissions ) {

    $this->permissions()->detach();
    return $this->givePermissionsTo($permissions);
    }




}
