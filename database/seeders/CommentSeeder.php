<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comment;
use App\Models\Event;
use App\Models\User;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $event = Event::first();
        $user = User::first();

        if ($event && $user) {
            Comment::create([
                'event_id' => $event->id,
                'user_id' => $user->id,
                'comment' => 'これはテストコメントです。'
            ]);
        }
    }
}
