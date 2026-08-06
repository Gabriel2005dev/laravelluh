<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Service;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function categories(): JsonResponse
    {
        return response()->json(Category::query()
            ->where('is_active', true)
            ->with(['subcategories' => fn ($query) => $query->where('is_active', true)])
            ->orderBy('sort_order')
            ->get());
    }

    public function services(Request $request): JsonResponse
    {
        $services = Service::query()
            ->where('is_active', true)
            ->with('subcategory.category')
            ->when($request->string('category')->isNotEmpty(), fn ($query) => $query->whereHas('subcategory.category', fn ($category) => $category->where('slug', $request->string('category'))))
            ->when($request->string('subcategory')->isNotEmpty(), fn ($query) => $query->whereHas('subcategory', fn ($subcategory) => $subcategory->where('slug', $request->string('subcategory'))))
            ->orderBy('sort_order')
            ->get();

        return response()->json($services);
    }
}