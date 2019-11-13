<?php

use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Str;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('categories')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        Category::create([
            'name' => 'Đồng hồ Casio',
            'slug' => Str::slug('Đồng hồ Casio', '-'),
            'description' => 'Đồng hồ Casio'
        ]);

        Category::create([
            'name' => 'Đồng hồ Epos Swiss',
            'slug' => Str::slug('Đồng hồ Epos Swiss', '-'),
            'description' => 'Đồng hồ Epos Swiss'
        ]);

        Category::create([
            'name' => 'Đồng hồ Diamond D',
            'slug' => Str::slug('Đồng hồ Diamond D', '-'),
            'description' => 'Đồng hồ Diamond D'
        ]);
        
    }
}
