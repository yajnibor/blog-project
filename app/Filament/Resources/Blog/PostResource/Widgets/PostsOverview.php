<?php

namespace App\Filament\Resources\Blog\PostResource\Widgets;

use App\Models\Post;
use Filament\Widgets\Concerns\InteractsWithPageFilters;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Database\Eloquent\Builder;

class PostsOverview extends BaseWidget
{
    use InteractsWithPageFilters;

    protected function getStats(): array
    {
        $startDate = $this->filters['startDate'] ?? null;
        $endDate = $this->filters['endDate'] ?? null;

        return [
            StatsOverviewWidget\Stat::make(
                label: 'Total Posts',
                value: Post::query()
                    ->when($startDate, fn (Builder $query) => $query->where('created_at', '>=', $startDate))
                    ->when($endDate, fn (Builder $query) => $query->where('created_at', '<=', $endDate))
                    ->count(),
            )
        ];
    }
}
