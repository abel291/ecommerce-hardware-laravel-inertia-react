<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Page::truncate();
        $home = Page::factory()->create(['type' => 'home', 'title' => 'Home']);
        $offers = Page::factory()->create(['type' => 'offers', 'title' => 'Ofetas']);

        $contact = Page::factory()->create(['type' => 'contact', 'title' => 'Contáctenos']);
        $search = Page::factory()->create(['type' => 'search', 'title' => 'Busqueda']);
        $blog = Page::factory()->create(['type' => 'blog', 'title' => 'Desde el blog']);

        $images =
            [
                [
                    'img' => '/img/banners/banner-carousel-1.jpg',
                    'alt' => 'banner-1',
                    'title' => 'banner-1',
                    'type' => 'carousel',
                    'sort' => 1,
                    'position' => 'top',
                    'link' => route('search', ['categories' => ['portatiles']]),
                    'model_id' => $home->id,
                    'model_type' => 'App\Models\Page',

                ],
                [
                    'img' => '/img/banners/banner-carousel-2.jpg',
                    'alt' => 'banner-2',
                    'title' => 'banner-2',
                    'type' => 'carousel',
                    'sort' => 2,
                    'position' => 'top',
                    'link' => route('search', ['categories' => ['portatiles']]),
                    'model_id' => $home->id,
                    'model_type' => 'App\Models\Page',

                ],
                [
                    'img' => '/img/banners/banner-carousel-3.jpg',
                    'alt' => 'banner-3',
                    'title' => 'banner-3',
                    'type' => 'carousel',
                    'sort' => 3,
                    'position' => 'top',
                    'link' => route('search', ['categories' => ['portatiles']]),
                    'model_id' => $home->id,
                    'model_type' => 'App\Models\Page',

                ],

                ///
                [
                    'img' => '/img/banners/banner-home-9.jpg',
                    'alt' => 'banner-3',
                    'title' => 'banner-3',
                    'type' => 'banner',
                    'position' => 'top',
                    'link' => route('search', ['categories' => ['pantalones']]),
                    'model_id' => $home->id,
                    'model_type' => 'App\Models\Page',

                ],
                [
                    'img' => '/img/banners/banner-home-10.jpg',
                    'alt' => 'banner-3',
                    'title' => 'banner-3',
                    'type' => 'banner',
                    'position' => 'top',
                    'link' => route('search', ['categories' => ['placas-base']]),
                    'model_id' => $home->id,
                    'model_type' => 'App\Models\Page',

                ],
                ///
                [
                    'img' => '/img/banners/banner-section-1.jpg',
                    'alt' => 'banner-3',
                    'title' => 'banner-3',
                    'type' => 'banner',
                    'position' => 'middle',
                    'link' => route('search', ['categories' => 'fuentes-de-alimentacion']),
                    'model_id' => $home->id,
                    'model_type' => 'App\Models\Page',

                ],
                [
                    'img' => '/img/banners/banner-section-2.jpg',
                    'alt' => 'banner-3',
                    'title' => 'banner-3',
                    'type' => 'banner',
                    'position' => 'below',
                    'link' => route('search', ['categories' => ['ratones']]),
                    'model_id' => $home->id,
                    'model_type' => 'App\Models\Page',

                ],

                [
                    'img' => '/img/banners/banner-sidebar-search.jpg',
                    'alt' => 'banner-3',
                    'title' => 'banner-3',
                    'type' => 'banner',
                    'position' => 'middle',
                    'link' => route('search', ['categories' => ['portatiles']]),
                    'model_id' => $search->id,
                    'model_type' => 'App\Models\Page',

                ],
                //
                [
                    'img' => '/img/banners/banner-blog.jpg',
                    'alt' => 'banner-3',
                    'title' => 'banner-3',
                    'type' => 'banner',
                    'position' => 'middle',
                    'link' => route('offers'),
                    'model_id' => $blog->id,
                    'model_type' => 'App\Models\Page',

                ],

            ];
        foreach ($images as $key => $image) {
            Image::factory()->create($image);
        }
    }
}
