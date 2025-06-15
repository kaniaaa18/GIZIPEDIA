<?php

namespace App\Filament\Widgets;

use App\Models\Food;
use App\Models\User;
use App\Models\Article;
use App\Models\Category;
use App\Models\Recipe;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class StatsTypeOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Users', User::count()),
            Stat::make('Articles', Article::count()),
            Stat::make('Categories', Category::count()),
            Stat::make('Foods', Food::count()),
            Stat::make('Recipes', Recipe::count()),
        ];
    }
}
