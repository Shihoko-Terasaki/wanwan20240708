<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Event::create([
            'name' => 'テストイベント',
            'description' => 'これはテストイベントです。',
            'event_date' => '2024-08-01',
            'location' => '東京',
            'area' => '関東',
            'breed' => 'すべての犬種'
        ]);
    }
}
