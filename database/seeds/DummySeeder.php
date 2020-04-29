<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DummySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dummy = array(
			 array('id' => '1','name' => 'sagar','created_at' => '2020-04-08 09:21:25','updated_at' => '2020-04-22 06:15:18'),
			  array('id' => '2','name' => 'snfjksdjf','created_at' => '2020-04-06 04:13:13','updated_at' => '2020-04-29 03:08:11')
			);
        DB::table('dummy')->insert($dummy);
    }
}
