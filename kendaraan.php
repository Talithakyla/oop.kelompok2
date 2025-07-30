<?php
class Motor {
    public $Merek;
    public $SeriMotor;
    public $Warna;
    public $Transmisi;

    public function __construct($Merek, $SeriMotor, $Warna, $Transmisi) {
        $this->Merek = $Merek;
        $this->SeriMotor = $SeriMotor;
        $this->Warna = $Warna;
        $this->Transmisi = $Transmisi;
    }

    public function gettransmisi() {
        $T = strtolower($this->Transmisi);
        if ($T == "ma" || $T == "manual") {
            return "Manual";
        } elseif ($T == "mt" || $T == "matic") {
            return "Matic";
        } else {
            return "Bukan Motor";
        }
    }

    public function profileMotor() {
        echo "<h2> Jenis Motor</h2>";
        echo "Merek: $this->Merek <br/>";
        echo "Seri Motor: $this->SeriMotor <br/>";
        echo "Warna: $this->Warna <br/>";
        echo "Transmisi: " . $this->gettransmisi() . "<br/><br/>";
    }
}

$Beat = new Motor("Honda", "110CC Navy", "Navy", "Matic");
$Beat = new Motor("Honda", "110CC Navy", "Navy", "Matic");
$Scoopy = new Motor("Honda", "100CC Red", "Merah", "Matic");
$Aerox= new Motor("Yamaha", "150CC Grey ", "Abu-abu", "Matic");
$Ninja = new Motor("Kawazaki", "260CC Green", "Hijau", "Manual");

$semuaMotor = [$Beat, $Scoopy, $Aerox, $Ninja];

foreach ($semuaMotor as $SM) {
    $SM->profileMotor();
}
?>