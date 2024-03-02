<?php

namespace Database\Seeders;

use App\Models\Tenant;
use App\Models\User;
use Illuminate\Database\Seeder;

class MerchantSeeder extends Seeder
{
    public function run()
    {
        //this for supper admin
        Tenant::create([
            'name' => 'supperadmin',
            'domain' => 'supperadmin.localhost',
        ]);
        Tenant::create([
            'name' => 'Merchant 1',
            'domain' => 'merchant1.localhost',
        ]);

        Tenant::create([
            'name' => 'Merchant 2',
            'domain' => 'merchant2.localhost',
        ]);
        Tenant::factory()
            ->count(30)
            ->has(User::factory()->count(100))
            ->create();

    }
}
