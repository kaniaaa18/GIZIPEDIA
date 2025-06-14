<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function index()
    {
        return view('app.calculator', [
            'kalori' => null,
            'bmi' => null,
            'kategoriBmi' => null,
            'karbo' => null,
            'protein' => null,
            'lemak' => null,
        ]);
    }

    public function hitung(Request $request)
    {
        $request->validate([
            'gender' => 'required',
            'usia' => 'required|integer|min:1',
            'berat' => 'required|numeric|min:1',
            'tinggi' => 'required|numeric|min:1',
            'aktivitas' => 'required',
        ]);

        $gender = $request->input('gender');
        $usia = $request->input('usia');
        $berat = $request->input('berat');
        $tinggi = $request->input('tinggi');
        $aktivitas = $request->input('aktivitas');

        $tinggiM = $tinggi / 100; // konversi cm ke m
        $bmi = $berat / ($tinggiM * $tinggiM);
        
        if ($bmi < 18.5) {
            $kategoriBmi = 'Kurus';
        } elseif ($bmi < 24.9) {
            $kategoriBmi = 'Normal';
        } elseif ($bmi < 29.9) {
            $kategoriBmi = 'Kelebihan Berat Badan';
        } else {
            $kategoriBmi = 'Kegemukan';
        }

        if ($gender == 'Laki-laki') {
            $kalori = (10 * $berat) + (6.25 * $tinggi) - (5 * $usia) + 5;
        } else {
            $kalori = (10 * $berat) + (6.25 * $tinggi) - (5 * $usia) - 161;
        }

        switch ($aktivitas) {
            case 'sedentari':
                $kalori *= 1.2;
                break;
            case 'ringan':
                $kalori *= 1.375;
                break;
            case 'sedang':
                $kalori *= 1.55;
                break;
            case 'berat':
                $kalori *= 1.725;
                break;
        }

        $karbo = $kalori * 0.55 / 4; // 55% dari kalori
        $protein = $kalori * 0.15 / 4; // 15% dari kalori
        $lemak = $kalori * 0.30 / 9; // 30% dari kalori

        return view('app.calculator', compact('kalori', 'bmi', 'kategoriBmi', 'karbo', 'protein', 'lemak'));
    }
}
