<?php

namespace Database\Seeders;

use AhmedAliraqi\Ui\Facades\Ui;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (glob(__DIR__.'/pages/*.php') as $page) {
            include $page;
        }
    }
}
