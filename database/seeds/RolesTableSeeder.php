<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $role1=App\Role::firstOrcreate(["name"=>"Agent"],["uuid"=>Str::uuid()]);
        $role2=App\Role::firstOrcreate(["name"=>"Client"],["uuid"=>Str::uuid()]);
        $role3=App\Role::firstorcreate(["name"=>"Gestionnaire"],["uuid"=>Str::uuid()]);
        $role4=App\Role::firstOrcreate(["name"=>"Comptable"],["uuid"=>Str::uuid()]);
        $role5=App\Role::firstOrcreate(["name"=>"Administration"],["uuid"=>Str::uuid()]);
    }
}
