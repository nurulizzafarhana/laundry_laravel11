<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KalkulatorController extends Controller
{
    public function index(){
        return view('kalkulator.index');
    }


    public function kali() {
        $title = "Form Perkalian";
        $hasilKali = 0;
        return view('kalkulator.kali', compact('title', 'hasilKali'));
    }
    public function storeKali(Request $request) {
        $angka1 = $request -> angka1;
        $angka2 = $request -> angka2;
        $hasilKali = $angka1 * $angka2;
        $title = "Hasil dari " . $angka1 . "*" . $angka2 . " adalah " . $hasilKali;
        return view('kalkulator.kali', compact('hasilKali', 'title'));
    }

    public function bagi() {
        $title = "Form Pembagian";
        $hasilBagi = 0;
        return view('kalkulator.bagi', compact('title', 'hasilBagi'));
    }

    public function storeBagi(Request $request) {
        $angka1 = $request -> angka1;
        $angka2 = $request -> angka2;
        $hasilBagi = $angka1 / $angka2;
        $title = "Hasil dari " . $angka1 . "/" . $angka2 . " adalah " . $hasilBagi;
        return view('kalkulator.bagi', compact('hasilBagi', 'title'));
    }


    public function tambah() {
        $title = "Form Penjumlahan";
        $jumlah = 0;
        return view('kalkulator.tambah', compact('title', 'jumlah'));
    }

    public function storeTambah(Request $request){
        $angka1 = $request -> angka1;
        $angka2 = $request -> angka2;
        $jumlah = $angka1 + $angka2;
        $title = "Hasil dari " . $angka1 . "+" . $angka2 . " adalah " . $jumlah;
        return view('kalkulator.tambah', compact('jumlah', 'title'));
    }


    public function kurang() {
        $title = "Form Pengurangan";
        $minus = 0;
        return view('kalkulator.kurang', compact('title', 'minus'));
    }

    public function storeKurang(Request $request) {
        $angka1 = $request -> angka1;
        $angka2 = $request -> angka2;
        $minus = $angka1 - $angka2;
        $title = "Hasil dari " . $angka1 . "-" . $angka2 . " adalah " . $minus;
        return view('kalkulator.kurang', compact('minus', 'title'));
    }
}
