<?php

namespace Database\Seeders;

use App\Models\AppSettings;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AppSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AppSettings::create([
            'name' => 'default layout' ,
            'data'=>[
                'card_header'=>1,
                'card_footer'=>1,
                'sidebar_collapse'=>null,
                'dark_mode'=>null,
            ],
            'description' => 'app des' ,'parent'=>'layout', 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
        AppSettings::create([
            'name' => 'default action' ,
            'data'=>[
                'default_status'=>1,
                'default_time_zone'=>1,
            ],
            'description' => 'app des' ,'parent'=>'layout', 'status' => '1' , 'created_by' => '1' , 'updated_by' => '1']);
    }
}
