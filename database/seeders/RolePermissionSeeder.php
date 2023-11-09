<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name' => 'tambah-user']);
        Permission::create(['name' => 'lihat-user']);
        Permission::create(['name' => 'edit-user']);
        Permission::create(['name' => 'hapus-user']);

        Permission::create(['name' => 'tambah-labor']);
        Permission::create(['name' => 'lihat-labor']);
        Permission::create(['name' => 'edit-labor']);
        Permission::create(['name' => 'hapus-labor']);

        Permission::create(['name' => 'pengajuan-labor']);
        Permission::create(['name' => 'lihat-pengajuan']);
        Permission::create(['name' => 'edit-pengajuan']);
        Permission::create(['name' => 'hapus-pengajuan']);


        Permission::create(['name' => 'pinjam-labor']);
        Permission::create(['name' => 'jadwal-labor']);

        Role::create(['name' => 'admin']);
        Role::create(['name' => 'asisten']);

        $roleAdmin = Role::findByName('admin');
        $roleAdmin->givePermissionTo(Permission::all());

        $roleAsisten = Role::findByName('asisten');
        $roleAsisten->givePermissionTo('lihat-labor');
        $roleAsisten->givePermissionTo('tambah-labor');
        $roleAsisten->givePermissionTo('edit-labor');
        $roleAsisten->givePermissionTo('hapus-labor');
    }
}
