<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Webkul\Theme\Models\ThemeCustomization;
use Webkul\Theme\Models\ThemeCustomizationTranslation;

class ThemeDemoBlocksSeeder extends Seeder
{
    public function run()
    {
        $channelId = 1;
        $themeCode = 'newTheme1';
        $locale = 'tr';

        // Remove previous demo blocks for this theme
        ThemeCustomization::where('theme_code', $themeCode)->delete();

        // 1. Static Content (Hero)
        $hero = ThemeCustomization::create([
            'type' => 'static_content',
            'name' => 'Demo Hero Block',
            'sort_order' => 1,
            'status' => 1,
            'channel_id' => $channelId,
            'theme_code' => $themeCode,
        ]);
        $hero->translations()->create([
            'locale' => $locale,
            'options' => [
                'html' => "<div class='hero'><h1>Hoşgeldiniz!</h1><p>Bu bir demo hero bloğudur.</p></div>",
                'css' => ".hero{background:#f5f5f5;padding:40px;text-align:center;}"
            ],
        ]);

        // 2. Image Carousel
        $carousel = ThemeCustomization::create([
            'type' => 'image_carousel',
            'name' => 'Demo Carousel',
            'sort_order' => 2,
            'status' => 1,
            'channel_id' => $channelId,
            'theme_code' => $themeCode,
        ]);
        $carousel->translations()->create([
            'locale' => $locale,
            'options' => [
                'images' => [
                    ['url' => '/themes/shop/newTheme1/images/demo1.jpg', 'title' => 'Demo Görsel 1'],
                    ['url' => '/themes/shop/newTheme1/images/demo2.jpg', 'title' => 'Demo Görsel 2'],
                ],
            ],
        ]);

        // 3. Category Carousel
        $catCarousel = ThemeCustomization::create([
            'type' => 'category_carousel',
            'name' => 'Demo Kategori Carousel',
            'sort_order' => 3,
            'status' => 1,
            'channel_id' => $channelId,
            'theme_code' => $themeCode,
        ]);
        $catCarousel->translations()->create([
            'locale' => $locale,
            'options' => [
                'title' => 'Popüler Kategoriler',
                'filters' => [],
            ],
        ]);

        // 4. Product Carousel
        $prodCarousel = ThemeCustomization::create([
            'type' => 'product_carousel',
            'name' => 'Demo Ürün Carousel',
            'sort_order' => 4,
            'status' => 1,
            'channel_id' => $channelId,
            'theme_code' => $themeCode,
        ]);
        $prodCarousel->translations()->create([
            'locale' => $locale,
            'options' => [
                'title' => 'Yeni Ürünler',
                'filters' => [],
            ],
        ]);
    }
} 