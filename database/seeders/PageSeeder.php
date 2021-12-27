<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'title' => 'Sayfa 1',
                'body' => 'Sayfa 1 içerik',
                'slug' => 'sayfa-1-slug',
            ],
            [
                'title' => 'Sayfa 2',
                'body' => 'Sayfa 2 içerik',
                'slug' => 'sayfa-2-slug',
            ],
            [
                'title' => 'Sayfa 3',
                'body' => 'Sayfa 3 içerik',
                'slug' => 'sayfa-3-slug',
            ],
            [
                'title' => 'Sayfa 4',
                'body' => 'Sayfa 4 içerik',
                'slug' => 'sayfa-4-slug',
            ],
        ];

        foreach ($data as $item) {
            Page::create($item);
        }

    }
}
