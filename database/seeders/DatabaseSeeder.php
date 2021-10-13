<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Treatment;
use App\Models\Patient;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call([RolSeeder::class]);
        User::factory()->create([
            'email' => 'admin@smileclinic.com',
            'password' => bcrypt('123456'),
            'name' => 'Smile Clinic',
            'phone_number' => '123456789',
            'rol_id' => 1,
            'dni'=> '1',
        ]);

        User::factory(10)->create();

        Patient::factory(50)->create();
        $this->call([TreatmentSeeder::class]);
    }
}
