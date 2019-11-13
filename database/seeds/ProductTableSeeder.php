<?php

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('products')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        Product::create([
            'category_id' => 1,
            'name' => 'ĐỒNG HỒ CASIO EQB-510D-1ADR',
            'price' => 12.308,
            'sale' => 0.1,
            'quantity' => 100,
            'description' => 'Hãng sản xuất: Đồng hồ Casio
                Kiểu dáng: Đồng hồ nam
                Máy: Pin
                Chất liệu vỏ: Thép không gỉ hay còn gọi là inox (All Stainless Steel)
                Chất liệu dây: Thép không gỉ'
        ]);
        
        Product::create([
            'category_id' => 2,
            'name' => 'ĐỒNG HỒ EPOS SWISS E-7000.701.20.98.25',
            'price' => 13.000,
            'sale' => 0.1,
            'quantity' => 100,
            'description' => 'Thương hiệu: Thụy Sỹ
                Xuất xứ: Thụy Sỹ
                Kiểu dáng: Đồng hồ Nam
                Năng lượng: Quartz (Điện tử )
                Độ chịu nước: 5ATM
             '
        ]);

        Product::create([
            'category_id' => 3,
            'name' => 'ĐỒNG HỒ DIAMOND D DM6305B5',
            'price' => 3.080,
            'sale' => 0.1,
            'quantity' => 100,
            'description' => 'Thương hiệu: Thụy Sỹ
                Xuất xứ: Thụy Sỹ
                Kiểu dáng: Đồng hồ Nam
                Năng lượng: Quartz (Điện tử)
                Độ chịu nước: 5ATM
             '
        ]);
    }
}