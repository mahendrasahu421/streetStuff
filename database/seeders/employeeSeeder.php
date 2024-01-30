<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Employee;
use Illuminate\Http\Request;
use Faker\Factory as Faker;

class employeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Request $request)
    {
        $faker = Faker::create();
        for ($i = 1; $i <= 30; $i++) {
            $employee = new Employee;
            $employee->name = $faker->name;
            $employee->age = $faker->numberBetween(18, 60);
            $employee->email = $faker->unique()->safeEmail;
            $employee->contect_number = $faker->phoneNumber;
            $employee->sallry = $faker->numberBetween(30000, 80000);
            $employee->address = $faker->address;
            $employee->id_proof = 'id_proofs/LtoqKBpbTCEViGsbMKlgcgDS5A4BXxtwrKtmsHzi.pdf';
            $employee->save();
        }
    }
}
