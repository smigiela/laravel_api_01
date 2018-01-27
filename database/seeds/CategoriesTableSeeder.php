<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Programowanie',
            'description' => 'Kategoria dotyczy programowania',
            'keywords' => 'slowo kluczowe nr 1',
            'meta_content' => 'Jakis opis meta1'
        ]);

        DB::table('categories')->insert([
            'name' => 'Informacje',
            'description' => 'Kategoria dotyczy informacji',
            'keywords' => 'slowo kluczowe nr 1',
            'meta_content' => 'Jakis opis meta2'
        ]);

        DB::table('categories')->insert([
            'name' => 'Porady',
            'description' => 'Kategoria dotyczy porad',
            'keywords' => 'slowo kluczowe nr 1',
            'meta_content' => 'Jakis opis meta2'
        ]);
        DB::table('categories')->insert([
            'name' => 'Test',
            'description' => 'Kategoria test jeden',
            'keywords' => 'slowo kluczowe nr 1',
            'meta_content' => 'Jakis opis meta2'
        ]);
        DB::table('categories')->insert([
            'name' => 'Test2',
            'description' => 'Kategoria test 2',
            'keywords' => 'slowo kluczowe nr 1',
            'meta_content' => 'Jakis opis meta2'
        ]);
    }
}
