<?php

namespace App\Filament\Widgets;

use App\Models\Article;
use App\Models\Category;
use App\Models\Food;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class StatsTypeOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Articles', Article::query()->where('title')->count()),
            Stat::make('Categories', Category::query()->where('name')->count()),
            Stat::make('Food', Food::query()->where('name')->count()),
        ];
    }
}
