<?php

namespace Database\Seeders;

use App\Data\Categories;
use App\Data\Services;
use App\Models\Category;
use App\Models\Service;
use App\Models\Subcategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CatalogSeeder extends Seeder
{
    public function run(): void
    {
        $subcategories = [];

        foreach (Categories::all() as $categoryIndex => $categoryData) {
            $category = Category::updateOrCreate(
                ['slug' => $categoryData['id']],
                ['name' => $categoryData['name'], 'icon' => $categoryData['icon'], 'sort_order' => $categoryIndex, 'is_active' => true]
            );

            foreach ($categoryData['items'] as $subcategoryIndex => $subcategoryData) {
                $subcategories[$subcategoryData['id']] = Subcategory::updateOrCreate(
                    ['slug' => $subcategoryData['id']],
                    [
                        'category_id' => $category->id,
                        'name' => $subcategoryData['name'],
                        'icon' => $subcategoryData['icon'],
                        'sort_order' => $subcategoryIndex,
                        'is_active' => true,
                    ]
                );
            }
        }

        foreach (Services::all() as $serviceIndex => $serviceData) {
    $subcategory = $subcategories[$serviceData['subcategory']] ?? null;

    if (! $subcategory) {
        continue;
    }

    Service::updateOrCreate(
        ['slug' => Str::slug($serviceData['subcategory'].'-'.$serviceData['name'])],
        [
            'subcategory_id' => $subcategory->id,
            'name' => $serviceData['name'],
            'description' => $serviceData['description'],
            'image' => $serviceData['image'],
            'duration_minutes' => $this->durationToMinutes($serviceData['time']),
            'price_cents' => $this->priceToCents($serviceData['price']),
            'sort_order' => $serviceIndex,
            'is_active' => true,
        ]
    );
}
    }

    private function durationToMinutes(string $duration): int
    {
        if (str_contains($duration, 'min')) {
            return (int) $duration;
        }

        if (preg_match('/^(?P<hours>\d+)h(?P<minutes>\d+)?$/', $duration, $matches)) {
            return ((int) $matches['hours'] * 60) + (int) ($matches['minutes'] ?? 0);
        }

        return (int) $duration;
    }

    private function priceToCents(string $price): int
    {
        return (int) preg_replace('/\D+/', '', $price) * 100;
    }
}