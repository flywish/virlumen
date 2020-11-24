<?php

namespace Database\Seeders;

use App\Models\Excel;
use Illuminate\Database\Seeder;

class ExcelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Excel::factory()
            ->times(100000)
            ->create();
    }
}
