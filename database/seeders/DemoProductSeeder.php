<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Webkul\Product\Repositories\ProductRepository;
use Webkul\Category\Repositories\CategoryRepository;

class DemoProductSeeder extends Seeder
{
    public function run()
    {
        $categoryRepo = app(CategoryRepository::class);
        $productRepo = app(ProductRepository::class);

        // Get the root category
        $rootCategory = $categoryRepo->findWhere(['parent_id' => null])->first();
        if (! $rootCategory) {
            $rootCategory = $categoryRepo->create([
                'name' => 'Root',
                'slug' => 'root',
                'position' => 1,
                'status' => 1,
                'display_mode' => 'products_and_description',
                'description' => 'Root category',
                'meta_title' => 'Root',
                'meta_description' => 'Root',
                'meta_keywords' => 'root',
            ]);
        }

        // Add demo products
        for ($i = 1; $i <= 5; $i++) {
            $productRepo->create([
                'type' => 'simple',
                'attribute_family_id' => 1,
                'sku' => 'DEMO-PROD-' . $i,
                'name' => 'Demo Product ' . $i,
                'url_key' => 'demo-product-' . $i,
                'price' => 10 * $i,
                'status' => 1,
                'visible_individually' => 1,
                'categories' => [$rootCategory->id],
                'channels' => [1],
                'description' => 'This is demo product ' . $i,
                'short_description' => 'Short description for demo product ' . $i,
                'weight' => 1,
                'inventories' => [1 => 100],
            ]);
        }
    }
} 