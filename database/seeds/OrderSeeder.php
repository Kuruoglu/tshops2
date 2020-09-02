<?php

use Illuminate\Database\Seeder;
use App\Order;
class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $order1 = new Order();
       $order1->url = "#";
       $order1->qty = "5";
       $order1->color = "#ffffff";
       $order1->price = '10';
       $order1->currency = 'usd';
       $order1->size = '15';
       $order1->comment = 'skjdfhsldfjls;dfks;';
       $order1->post_office = 'новая почта';
       $order1->post_office_number = '42';
       $order1->status_id = '1';
       $order1->user_id = '2';
       $order1->anons_id = '2';
       $order1->save();

        $order2 = new Order();
        $order2->url = "#";
        $order2->qty = "5";
        $order2->color = "#ffffff";
        $order2->price = '10';
        $order2->currency = 'usd';
        $order2->size = '15';
        $order2->comment = 'skjdfhsldfjls;dfks;';
        $order2->post_office = 'новая почта';
        $order2->post_office_number = '42';
        $order2->status_id = '2';
        $order2->user_id = '2';
        $order2->anons_id = '2';

        $order2->save();

        $order3 = new Order();
        $order3->url = "#";
        $order3->qty = "5";
        $order3->color = "#ffffff";
        $order3->price = '10';
        $order3->currency = 'usd';
        $order3->size = '15';
        $order3->comment = 'skjdfhsldfjls;dfks;';
        $order3->post_office = 'новая почта';
        $order3->post_office_number = '42';
        $order3->status_id = '3';
        $order3->user_id = '2';
        $order3->anons_id = '2';

        $order3->save();

        $order4 = new Order();
        $order4->url = "#";
        $order4->qty = "5";
        $order4->color = "#ffffff";
        $order4->price = '10';
        $order4->currency = 'usd';
        $order4->size = '15';
        $order4->comment = 'skjdfhsldfjls;dfks;';
        $order4->post_office = 'новая почта';
        $order4->post_office_number = '42';
        $order4->status_id = '4';
        $order4->user_id = '2';
        $order4->anons_id = '2';

        $order4->save();

        $order5 = new Order();
        $order5->url = "#";
        $order5->qty = "5";
        $order5->color = "#ffffff";
        $order5->price = '10';
        $order5->currency = 'usd';
        $order5->size = '15';
        $order5->comment = 'skjdfhsldfjls;dfks;';
        $order5->post_office = 'новая почта';
        $order5->post_office_number = '42';
        $order5->status_id = '5';
        $order5->user_id = '2';
        $order5->anons_id = '2';

        $order5->save();

        $order6 = new Order();
        $order6->url = "#";
        $order6->qty = "5";
        $order6->color = "#ffffff";
        $order6->price = '10';
        $order6->currency = 'usd';
        $order6->size = '15';
        $order6->comment = 'skjdfhsldfjls;dfks;';
        $order6->post_office = 'новая почта';
        $order6->post_office_number = '42';
        $order6->status_id = '1';
        $order6->user_id = '2';
        $order6->anons_id = '2';

        $order6->save();

        $order7 = new Order();
        $order7->url = "#";
        $order7->qty = "5";
        $order7->color = "#ffffff";
        $order7->price = '10';
        $order7->currency = 'usd';
        $order7->size = '15';
        $order7->comment = 'skjdfhsldfjls;dfks;';
        $order7->post_office = 'новая почта';
        $order7->post_office_number = '42';
        $order7->status_id = '2';
        $order7->user_id = '2';
        $order7->anons_id = '2';

        $order7->save();

        $order8 = new Order();
        $order8->url = "#";
        $order8->qty = "5";
        $order8->color = "#ffffff";
        $order8->price = '10';
        $order8->currency = 'usd';
        $order8->size = '15';
        $order8->comment = 'skjdfhsldfjls;dfks;';
        $order8->post_office = 'новая почта';
        $order8->post_office_number = '42';
        $order8->status_id = '3';
        $order8->user_id = '2';
        $order8->anons_id = '2';

        $order8->save();

        $order9 = new Order();
        $order9->url = "#";
        $order9->qty = "5";
        $order9->color = "#ffffff";
        $order9->price = '10';
        $order9->currency = 'usd';
        $order9->size = '15';
        $order9->comment = 'skjdfhsldfjls;dfks;';
        $order9->post_office = 'новая почта';
        $order9->post_office_number = '42';
        $order9->status_id = '4';
        $order9->user_id = '2';
        $order9->anons_id = '2';

        $order9->save();

        $order10 = new Order();
        $order10->url = "#";
        $order10->qty = "5";
        $order10->color = "#ffffff";
        $order10->price = '10';
        $order10->currency = 'usd';
        $order10->size = '15';
        $order10->comment = 'skjdfhsldfjls;dfks;';
        $order10->post_office = 'новая почта';
        $order10->post_office_number = '42';
        $order10->status_id = '5';
        $order10->user_id = '2';
        $order10->anons_id = '2';

        $order10->save();

        $order11 = new Order();
        $order11->url = "#";
        $order11->qty = "5";
        $order11->color = "#ffffff";
        $order11->price = '10';
        $order11->currency = 'usd';
        $order11->size = '15';
        $order11->comment = 'skjdfhsldfjls;dfks;';
        $order11->post_office = 'новая почта';
        $order11->post_office_number = '42';
        $order11->status_id = '1';
        $order11->anons_id = '2';
        $order11->user_id = '2';

        $order11->save();

        $order12 = new Order();
        $order12->url = "#";
        $order12->qty = "5";
        $order12->color = "#ffffff";
        $order12->price = '10';
        $order12->currency = 'usd';
        $order12->size = '15';
        $order12->comment = 'skjdfhsldfjls;dfks;';
        $order12->post_office = 'новая почта';
        $order12->post_office_number = '42';
        $order12->status_id = '1';
        $order12->user_id = '2';
        $order12->anons_id = '2';

        $order12->save();

        $order13 = new Order();
        $order13->url = "#";
        $order13->qty = "5";
        $order13->color = "#ffffff";
        $order13->price = '10';
        $order13->currency = 'usd';
        $order13->size = '15';
        $order13->comment = 'skjdfhsldfjls;dfks;';
        $order13->post_office = 'новая почта';
        $order13->post_office_number = '42';
        $order13->status_id = '1';
        $order13->anons_id = '2';
        $order13->user_id = '2';

        $order13->save();

        $order14 = new Order();
        $order14->url = "#";
        $order14->qty = "5";
        $order14->color = "#ffffff";
        $order14->price = '10';
        $order14->currency = 'usd';
        $order14->size = '15';
        $order14->comment = 'skjdfhsldfjls;dfks;';
        $order14->post_office = 'новая почта';
        $order14->post_office_number = '42';
        $order14->status_id = '1';
        $order14->user_id = '2';
        $order14->anons_id = '2';

        $order14->save();


    }
}

