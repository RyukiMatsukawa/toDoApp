<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
      // dd($this);

      $this->call([
        FoldersTableSeeder::class,
        TaskTableSeeder::class,
      ]);
    }
}
