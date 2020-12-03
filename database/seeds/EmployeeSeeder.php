<?php

use Illuminate\Database\Seeder;
use App\Employee;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $emp = Employee::firstOrCreate([
            'name' => 'Joko Wahono',
        ],[
            'position' => 'Admin',
            'address' => 'JL kenangan 123 Bali',
        ]);

        $emp = Employee::firstOrCreate([
            'name' => 'Agil Sayekti',
        ],[
            'position' => 'HRD',
            'address' => 'JL Pahlawan 321 Surabaya Jawa Timur',
        ]);

        $emp = Employee::firstOrCreate([
            'name' => 'Sri',
        ],[
            'position' => 'Admin',
            'address' => 'JL askdfjasd Jawa Tengah',
        ]);

        $emp = Employee::firstOrCreate([
            'name' => 'Rina',
        ],[
            'position' => 'Finance',
            'address' => 'JL Brajamusti Jawa Timur',
        ]);
    }
}
