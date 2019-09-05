<?php

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
        for ($i=0; $i < 10; $i++) {
            factory(App\Category::class)->create()->each(function ($u) {
                for ($x=0; $x < 5; $x++) {
                    factory(App\Song::class)->create(['category_id'=> $u->id]);
                }
            });;
        }
    }
}
