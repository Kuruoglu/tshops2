<?php

use Illuminate\Database\Seeder;
use App\Category;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category1 = new Category();
        $category1->name = 'Одежда';
        $category1->parent_id = 0;
        $category1->slug = Str::slug($new->name, '-' );
        $category1->save();

        $category2 = new Category();
        $category2->name = 'Обувь';
        $category2->parent_id = 0;
        $category2->slug = Str::slug($new->name, '-' );
        $category2->save();

        $category3 = new Category();
        $category3->name = 'Сумки';
        $category3->parent_id = 0;
        $category3->slug = Str::slug($new->name, '-' );
        $category3->save();

        $category4 = new Category();
        $category4->name = 'Аксессуары';
        $category4->parent_id = 0;
        $category4->slug = Str::slug($new->name, '-' );
        $category4->save();

        $category5 = new Category();
        $category5->name = 'Косметика';
        $category5->parent_id = 0;
        $category5->slug = Str::slug($new->name, '-' );
        $category5->save();


    }
}
