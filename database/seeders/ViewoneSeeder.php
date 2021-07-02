<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ViewoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('viewone')->insert([
        	'name'=>'MaxInvoices',
        	'description'=>'Save time and get paid faster with invoice and send automatic payment reminders to secure your cashflow.',
        	'gallery'=>'public/img/one.png'
        	]);
    }
}
