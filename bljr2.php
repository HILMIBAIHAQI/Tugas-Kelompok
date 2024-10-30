<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tanding MMA</title>
</head>
<body>
    <h1>Pilih Petarung</h1>
    <form method="POST">
        <label for="petarung_timA">Petarung dari Tim A:</label>
        <select name="petarung_timA" id="">
            <option value="Andre">Andre</option>
            <option value="Berli">Berli</option>
            <option value="Charlie">Charlie</option>
            <option value="Desmond">Desmond</option>
            <option value="Elina">Elina</option>
        </select><br>
        
        <label for="petarung_timB">Petarung dari Tim B:</label>
        <select name="petarung_timB" id="">
            <option value="Farah">Farah</option>
            <option value="Gerry">Gerry</option>
            <option value="Hesti">Hesti</option>
            <option value="Indra">Indra</option>
            <option value="Jordan">Jordan</option>
        </select><br>
        <input type="submit" value="Adu Petarung">
    </form>

    <?php
    if(isset($_POST['petarung_timA']) && isset($_POST['petarung_timB'])) {
        $timA = [
            'Andre' => 80,
            'Berli' => 75,
            'Charlie' => 67,
            'Desmond' => 88,
            'Elina' => 95
        ];
        
        $timB = [
            'Farah' => 75,
            'Gerry' => 88,
            'Hesti' => 76,
            'Indra' => 66,
            'Jordan' => 96
        ];

        $petarungA = $_POST['petarung_timA'];
        $petarungB = $_POST['petarung_timB'];

        $kekuatanA = $timA[$petarungA];
        $kekuatanB = $timB[$petarungB];

        if ($kekuatanA > $kekuatanB) {
            $pemenang = $petarungA;
            $sisa_kekuatan = $kekuatanA - $kekuatanB;
        } else if ($kekuatanA < $kekuatanB) {
            $pemenang = $petarungB;
            $sisa_kekuatan = $kekuatanB - $kekuatanA;
        } else {
            $pemenang = "Seri";
            $sisa_kekuatan = 0;
        }

        echo "<h1>Hasil Pertarungan</h1>";
        echo "<p>Petarung Tim A: $petarungA dengan kekuatan $kekuatanA</p>";
        echo "<p>Petarung Tim B: $petarungB dengan kekuatan $kekuatanB</p>";

    if ($pemenang == "Seri") {
        echo "<p>Pertarungan berakhir seri<p>";        
    } else {
    echo "<p>Pemenang: $pemenang dengan sisa kekuatan $sisa_kekuatan</p>";
    }
}
    ?>

</body>
</html>