<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\Client;
use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Client::factory()->count(10)->create()->each(function ($client) {
            foreach (range(1, 20) as $v) {
                $address = Address::factory()->make();
                $client->addresses()->save($address);
            }
        });

        // factory(\App\Client::class, 10)->create()->each(function ($client) {
        //     foreach (range(1, 20) as $v) {
        //         $client->addresses()->save(factory(\App\Address::class)->make());
        //     }
        // });
    }
}
