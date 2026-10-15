<?php
class Rental {
    private $hargaSewaPerHari;
    public function setHargaSewa($harga) {
        $this->hargaSewaPerHari = $harga;
    }
    public function getHargaSewa() {
        return $this->hargaSewaPerHari;
    }
    public function hitungDiskon($lamaSewa) {
        return 0;
    }
}

class RentalMobil extends Rental {
    public function hitungDiskon($lamaSewa) {
        if ($lamaSewa > 3) {
            return 0.10; 
        }
        return 0;
    }
}

class RentalMotor extends Rental {
    public function hitungDiskon($lamaSewa) {
        if ($lamaSewa > 3) {
            return 0.05; 
        }
        return 0;
    }
}

$mobil = new RentalMobil();
$mobil->setHargaSewa(300000);
$lamaSewaMobil = 4; 

$hargaPerHariMobil = $mobil->getHargaSewa();
$diskonMobil = $mobil->hitungDiskon($lamaSewaMobil);
$totalSebelumDiskonMobil = $hargaPerHariMobil * $lamaSewaMobil;
$totalBayarMobil = $totalSebelumDiskonMobil - ($totalSebelumDiskonMobil * $diskonMobil);

echo "--- RENTAL MOBIL ---<br>";
echo "Harga per Hari: Rp " . number_format($hargaPerHariMobil) . "<br>";
echo "Lama Sewa: " . $lamaSewaMobil . " hari<br>";
echo "Diskon: " . ($diskonMobil * 100) . "%<br>";
echo "Total Bayar: Rp " . number_format($totalBayarMobil) . "<br><br>";

$motor = new RentalMotor();
$motor->setHargaSewa(80000);
$lamaSewaMotor = 2;

$hargaPerHariMotor = $motor->getHargaSewa();
$diskonMotor = $motor->hitungDiskon($lamaSewaMotor);
$totalSebelumDiskonMotor = $hargaPerHariMotor * $lamaSewaMotor;
$totalBayarMotor = $totalSebelumDiskonMotor - ($totalSebelumDiskonMotor * $diskonMotor);

echo "--- RENTAL MOTOR ---<br>";
echo "Harga per Hari: Rp " . number_format($hargaPerHariMotor) . "<br>";
echo "Lama Sewa: " . $lamaSewaMotor . " hari<br>";
echo "Diskon: " . ($diskonMotor * 100) . "%<br>";
echo "Total Bayar: Rp " . number_format($totalBayarMotor) . "<br>";