<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Insurance;
use App\Models\Resource;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::factory()
            ->count(50)
            ->create();
    }
}
