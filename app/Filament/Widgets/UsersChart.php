<?php

namespace App\Filament\Widgets;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Filament\Widgets\ChartWidget;

class UsersChart extends ChartWidget
{
    protected static ?string $heading = 'Registrasi Pengguna per Bulan';
    protected static ?int $sort = 2;

    protected function getData(): array
    {
        // Ambil jumlah user yang mendaftar tiap bulan
        $data = User::selectRaw('MONTH(created_at) as month, COUNT(*) as total')
            ->groupBy('month')
            ->orderBy('month')
            ->pluck('total', 'month');

        // Nama bulan (1 => Januari, dst.)
        $labels = collect(range(1, 12))->map(function ($m) {
            return \Carbon\Carbon::create()->month($m)->translatedFormat('F');
        });

        // Data jumlah user, pastikan urut dari Januari–Desember
        $values = $labels->map(fn($_, $i) => $data->get($i + 1, 0)); // +1 karena index mulai dari 0

        return [
            'datasets' => [
                [
                    'label' => 'Jumlah Pengguna',
                    'data' => $values,
                    'backgroundColor' => [
                        '#3b82f6', '#ef4444', '#10b981', '#f59e0b',
                        '#8b5cf6', '#ec4899', '#22d3ee', '#14b8a6',
                        '#a3e635', '#f472b6', '#fb923c', '#6366f1'
                    ],
                ],
            ],
            'labels' => $labels,
        ];
    }

    protected function getType(): string
    {
        return 'pie';
    }
}
