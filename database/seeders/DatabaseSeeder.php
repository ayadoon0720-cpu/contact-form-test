<?php

namespace Database\Seeders;

use App\Models\Conatct;
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
       $this->call(ContactsTableSeeder::class);
}
}