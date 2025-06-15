<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CalculatorController extends Controller
{
    public function index()
    {
        return view('app.calculator');
    }

    public function hitung(Request $request)
    {
        $validated = $request->validate([
            'gender' => 'required|in:Laki-laki,Perempuan',
            'usia' => 'required|numeric|min:1',
            'berat' => 'required|numeric|min:1',
            'tinggi' => 'required|numeric|min:1',
            'aktivitas' => 'required|in:sedentari,ringan,sedang,berat',
        ]);

        $berat = $request->berat;
        $tinggi = $request->tinggi / 100; // cm ke meter
        $usia = $request->usia;
        $gender = $request->gender;
        $aktivitas = $request->aktivitas;

        // Hitung BMR (Basal Metabolic Rate) menggunakan rumus Mifflin-St Jeor
        if ($gender == 'Laki-laki') {
            $bmr = 10 * $berat + 6.25 * ($tinggi * 100) - 5 * $usia + 5;
        } else {
            $bmr = 10 * $berat + 6.25 * ($tinggi * 100) - 5 * $usia - 161;
        }

        // Faktor aktivitas
        $faktorAktivitas = match ($aktivitas) {
            'sedentari' => 1.2,
            'ringan' => 1.375,
            'sedang' => 1.55,
            'berat' => 1.725,
        };

        // Total Energy Expenditure (TEE)
        $kalori = round($bmr * $faktorAktivitas);

        // Hitung BMI
        $bmi = round($berat / ($tinggi ** 2), 1);
        $kategoriBmi = match (true) {
            $bmi < 18.5 => 'Kurus',
            $bmi < 25 => 'Normal',
            $bmi < 30 => 'Kelebihan berat',
            default => 'Obesitas',
        };

        // Hitung makronutrien (asumsi)
        $karbo = round(($kalori * 0.55) / 4); // 1g karbo = 4 kcal
        $protein = round(($kalori * 0.15) / 4);
        $lemak = round(($kalori * 0.30) / 9); // 1g lemak = 9 kcal

        return view('calculator.result', compact(
            'kalori', 'bmi', 'kategoriBmi', 'karbo', 'protein', 'lemak'
        ));
    }
}
