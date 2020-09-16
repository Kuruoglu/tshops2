<?php

use Illuminate\Database\Seeder;
use App\Brand;
use Illuminate\Support\Str;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $b1 = new Brand();
        $b1->name = 'Gucci';
        $b1->slug = Str::slug($b1->name, '-');

        $b1->save();

        $b2 = new Brand();
        $b2->name = 'Puma';
        $b2->slug = Str::slug($b2->name, '-');

        $b2->save();

        $b3 = new Brand();
        $b3->name = 'Michael Kors';
        $b3->slug = Str::slug($b3->name, '-');

        $b3->save();

        $b4 = new Brand();
        $b4->name = 'Adidas';
        $b4->slug = Str::slug($b4->name, '-');

        $b4->save();

        $b5 = new Brand();
        $b5->name = 'Nike';
        $b5->slug = Str::slug($b5->name, '-');
        $b5->save();

        $b6 = new Brand();
        $b6->name = 'George';
        $b6->slug = Str::slug($b6->name, '-');
        $b6->save();

        $b7 = new Brand();
        $b7->name = 'Zara';
        $b7->slug = Str::slug($b7->name, '-');
        $b7->save();

        $b8 = new Brand();
        $b8->name = 'H&M';
        $b8->slug = Str::slug($b8->name, '-');
        $b8->save();

        $b9 = new Brand();
        $b9->name = 'Gap';
        $b9->slug = Str::slug($b9->name, '-');
        $b9->save();

        $b10 = new Brand();
        $b10->name = 'Skip Hop';
        $b10->slug = Str::slug($b10->name, '-');
        $b10->save();

        $b11 = new Brand();
        $b11->name = 'Carter`s';
        $b11->slug = Str::slug($b11->name, '-');
        $b11->save();
    }
}
