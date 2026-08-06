<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Service;
use Illuminate\View\View;

class AgendamentoController extends Controller
{
    public function __invoke(): View
    {
        return view('pages.agendamento', [
            'categories' => Category::query()
                ->where('is_active', true)
                ->with(['subcategories' => fn ($query) => $query->where('is_active', true)])
                ->orderBy('sort_order')
                ->orderBy('name')
                ->get(),
            'services' => Service::query()
                ->where('is_active', true)
                ->with('subcategory.category')
                ->orderBy('sort_order')
                ->orderBy('name')
                ->get(),
        ]);
    }
}