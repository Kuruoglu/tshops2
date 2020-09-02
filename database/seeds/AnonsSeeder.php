<?php

use Illuminate\Database\Seeder;
use App\Anons;
use App\User;
class AnonsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('id', 3)->first();


        $anons1 = new Anons();
        $anons1->category_id = '1';
        $anons1->url = 'Http://google.com';
        $anons1->brand_id = '2';
        $anons1->service_tax = '10';
        $anons1->price_off = '70';
        $anons1->additional_off = '20';
        $anons1->need_cart = '200';
        $anons1->user_id = '2';
        $anons1->date_purchase = '01.09.2020';
        $anons1->save();


        $anons2 = new Anons();
        $anons2->category_id = '2';
        $anons2->url = 'Http://google.com';
        $anons2->brand_id = '4';
        $anons2->service_tax = '15';
        $anons2->price_off = '70';
        $anons2->additional_off = '10';
        $anons2->need_cart = '200';
        $anons2->user_id = '2';
        $anons2->date_purchase = '01.09.2020';
        $anons2->save();
        $anons2->users()->sync($user->id);
    }
}
