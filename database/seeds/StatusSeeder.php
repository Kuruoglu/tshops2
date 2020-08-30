<?php

use Illuminate\Database\Seeder;
use App\Status;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $new = new Status();
        $new->name = 'Новый';
        $new->slug = Str::slug($new->name, '-' );
        $new->save();

        $process = new Status();
        $process->name = 'В процессе';
        $process->slug = Str::slug($process->name, '-' );
        $process->save();

        $complete = new Status();
        $complete->name = 'Завершенный';
        $complete->slug = Str::slug($complete->name, '-' );
        $complete->save();

        $tosend = new Status();
        $tosend->name = 'На отправку';
        $tosend->slug = Str::slug($tosend->name, '-' );
        $tosend->save();

        $canceled = new Status();
        $canceled->name = 'Отменненый';
        $canceled->slug = Str::slug($canceled->name, '-' );
        $canceled->save();
    }
}
