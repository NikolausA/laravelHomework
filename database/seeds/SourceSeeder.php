<?php

use Illuminate\Database\Seeder;

class SourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('source')->insert($this->getUrl());
    }

    public function getUrl()
    {
        $objFaker = Faker\Factory::create();
        $url = [];
        for ($i=0; $i<10; $i++) {
            $url[] = [
                'news_source' => $objFaker->url
            ];
        }
        return $url;
    }
}
