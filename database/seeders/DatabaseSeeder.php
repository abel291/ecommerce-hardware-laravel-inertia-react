<?php

namespace Database\Seeders;

use App\Helpers\Helpers;
use App\Models\Category;
use App\Models\Department;
use App\Models\Image;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Cache::flush();
        Schema::disableForeignKeyConstraints();

        $this->call([
            // JsonDataSeeder::class,
            UserSeeder::class,
            PageSeeder::class,
            CategorySeeder::class,
            BrandSeeder::class,
            BlogSeeder::class,
            ProductSeeder::class,
            // OrderSeeder::class,

        ]);
        Schema::enableForeignKeyConstraints();
    }
}
