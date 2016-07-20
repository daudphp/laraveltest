<?php

use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            'hotel_id' => '1',
            'comment' => 'Lore m ipsumis nisi ut m ipsumis nisi ut m ipsumis nisi ut m ipsumis nisi utm ipsumis nisi utommodoconsequat. Drum.'
        ]);
        DB::table('comments')->insert([
            'hotel_id' => '1',
            'comment' => 'L1t m ipsumis nisi ut m ipsumis nisi ut m ipsumis nisi utm ipsumis nisi utommodoconsequat. Drum.'
        ]);
        DB::table('comments')->insert([
            'hotel_id' => '1',
            'comment' => 'Lore m ipsumis nisi ut m ipsumis nisi ut m ipsumis nisi ut m ipsumis nisi utm ipsum Lore m ipsumis nisi ut m ipsumis nisi ut m ipsumis nisi ut m ipsumis nisi utm ipsumis nisi utommodoconseqis nisi utommodoconsequat. Drum.'
        ]);
        DB::table('comments')->insert([
            'hotel_id' => '2',
            'comment' => 'Ldfgdfg dfg dfg dfgum.'
        ]);

        DB::table('comments')->insert([
            'hotel_id' => '1',
            'comment' => 'Lore m ipsumis nisi ut m ipsumis nisi ut m ipsumis nisi ut m ipsumis nisi utm ipsumis nisi utommodoconsequat. Drum.'
        ]);
        DB::table('comments')->insert([
            'hotel_id' => '1',
            'comment' => 'L1t m ipsumis nisi ut m ipsumis nisi ut m ipsumis nisi utm ipsumis nisi utommodoconsequat. Drum.'
        ]);
        DB::table('comments')->insert([
            'hotel_id' => '2',
            'comment' => 'Lore m ipsumis nisi ut m ipsumis nisi ut m ipsumis nisi ut m ipsumis nisi utm ipsum Lore m ipsumis nisi ut m ipsumis nisi ut m ipsumis nisi ut m ipsumis nisi utm ipsumis nisi utommodoconseqis nisi utommodoconsequat. Drum.'
        ]);
        DB::table('comments')->insert([
            'hotel_id' => '2',
            'comment' => 'Ldfgdfg dfg dfg dfgum.'
        ]);

    }
}
