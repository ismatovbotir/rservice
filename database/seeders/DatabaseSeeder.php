<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $roles=[
            ['id'=>1,'name'=>'Admin'],
            ['id'=>2,'name'=>'Manager'],
            ['id'=>3,'name'=>'Accountant'],
            ['id'=>4,'name'=>'Operator'],
            ['id'=>5,'name'=>'Owner'],
            ['id'=>6,'name'=>'Client']


        ];
        

            Role::upsert(
                $roles,
                ['id'],
                ['name']
            );
    
        User::create([
            'role_id'=>1,
            'email'=>'info@pos.uz',
            'name'=>'Admin',
            'password'=>'123456789'
        ]);
    }
}
