<?php

use Illuminate\Support\Facades\Route;


use Spatie\Permission\Models\Permission;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\PermissionController;
use Illuminate\Support\Facades\Auth;




Route::get('roles', [RoleController::class,'index'])->name('admin.roles');
Route::post('roles', [RoleController::class,'store'])->name('admin.roles');
//

Route::get('permissions', [PermissionController::class,'index'])->name('admin.permissions');
Route::post('permissions', [PermissionController::class,'store'])->name('admin.create.permissions');
Route::post('assyncpermissionstorole', [PermissionController::class,'assyncPermissionstoRole'])->name('admin.sync.permissionstorole');
Route::post('assyncroletopermissions', [RoleController::class,'assyncRoletoPermissions'])->name('admin.sync.permissionstorole');

Route::post('asyncroletouser',[RoleController::class,'asyncRoletouser'])->name('admin.sync.roletouser');