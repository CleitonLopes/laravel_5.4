<?php

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Toda vez que roda essa tabela ele zera os registros
        DB::statement('truncate pages');

        // Chamo a factorie criada
        factory(App\Page::class, 100)->create();



    }
}
