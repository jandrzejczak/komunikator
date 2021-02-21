<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ChatRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chat_rooms')->insert([
            'name' => 'Main'
        ]);

        DB::table('chat_rooms')->insert([
            'name' => 'Work'
        ]);

        DB::table('chat_rooms')->insert([
            'name' => 'Funny'
        ]);
    }
}
