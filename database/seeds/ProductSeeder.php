<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $obg=new Product;
        $obg->category_id= 1;
        $obg->name='Дисплей';
        $obg->price= '200';
        $obg->body='описание';
        $obg->status='new';
        $obg->picture='photo.png';
        $obg->save();

    }
}
