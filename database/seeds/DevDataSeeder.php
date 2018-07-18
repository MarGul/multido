<?php

use Illuminate\Database\Seeder;

class DevDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create two tenants
        $tenant1 = \App\Tenant::create(['name' => 'Tenant 1']);
        $tenant2 = \App\Tenant::create(['name' => 'Tenant 2']);

        // Create two users. One for each tenant.
        $user1 = \App\User::create(['tenant_id' => $tenant1->id, 'name' => 'User1', 'email' => 'user1@multido.test', 'password' => bcrypt('secret')]);
        $user2 = \App\User::create(['tenant_id' => $tenant2->id, 'name' => 'User2', 'email' => 'user2@multido.test', 'password' => bcrypt('secret')]);

        // Create a few todos
        \App\Todo::insert([
            ['tenant_id' => $tenant1->id, 'todo' => 'Todo 1'],
            ['tenant_id' => $tenant1->id, 'todo' => 'Todo 2'],
            ['tenant_id' => $tenant1->id, 'todo' => 'Todo 3'],
            ['tenant_id' => $tenant1->id, 'todo' => 'Todo 4'],
            ['tenant_id' => $tenant2->id, 'todo' => 'Todo 5'],
            ['tenant_id' => $tenant2->id, 'todo' => 'Todo 6'],
            ['tenant_id' => $tenant2->id, 'todo' => 'Todo 7'],
            ['tenant_id' => $tenant2->id, 'todo' => 'Todo 8']
        ]);
    }
}
