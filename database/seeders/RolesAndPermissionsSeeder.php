<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
	public function run(): void
	{
		// it's just for test
		// toDO: change to main roles and permissions
		app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

		$permissions = [
			'users.view', 'users.create', 'users.edit', 'users.delete',
			'coaches.verify',
			'plans.manage',
			'classes.manage',
			'finance.view',
			'settings.edit',
			'blog.manage',
		];

		foreach ($permissions as $permission) {
			Permission::create(['name' => $permission]);
		}


		$customerRole = Role::create(['name' => 'customer']);
		$coachRole = Role::create(['name' => 'coach']);
		$superAdminRole = Role::create(['name' => 'super_admin']);

		$contentManager = Role::create(['name' => 'content_manager']);
		$contentManager->givePermissionTo(['blog.manage']);


		$financeManager = Role::create(['name' => 'finance_manager']);
		$financeManager->givePermissionTo(['finance.view', 'plans.manage']);
	}
}
