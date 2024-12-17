<?php
function diagnose($batuk, $pilek, $demam, $gejalaTambahan) {
    $diagnosis = "";

    // Kombinasi Batuk, Pilek, dan Demam
    if ($batuk && $pilek && $demam) {
        if ($gejalaTambahan['nyeriOtot'] && $gejalaTambahan['demamTinggi'] && $gejalaTambahan['kelelahan']) {
            $diagnosis = "Kemungkinan Anda mengalami Influenza (Flu).";
        } elseif ($gejalaTambahan['sesakNapas'] && $gejalaTambahan['batukBerdahak'] && $gejalaTambahan['demamTinggi']) {
            $diagnosis = "Kemungkinan Anda mengalami Bronkitis.";
        } elseif ($gejalaTambahan['batukDarah'] && $gejalaTambahan['kelelahan'] && $gejalaTambahan['demamTurunNaik']) {
            $diagnosis = "Kemungkinan Anda mengalami Tuberkulosis (TBC).";
        } elseif ($gejalaTambahan['pilekKuningHijau'] && $gejalaTambahan['nyeriWajah']) {
            $diagnosis = "Kemungkinan Anda mengalami Sinusitis.";
        } elseif ($gejalaTambahan['batukGatalTenggorokan'] && $gejalaTambahan['batukMalamHari']) {
            $diagnosis = "Kemungkinan Anda mengalami Faringitis.";
        } elseif ($gejalaTambahan['demamRuam'] && $gejalaTambahan['demamMalamHari']) {
            $diagnosis = "Kemungkinan Anda mengalami Campak.";
        } else {
            $diagnosis = "Gejala menunjukkan Infeksi Saluran Pernapasan Akut (ISPA).";
        }
    }
    // Kondisi Batuk Tanpa Pilek dan Demam
    elseif ($batuk && !$pilek && !$demam) {
        if ($gejalaTambahan['batukKering'] && $gejalaTambahan['batukMalamHari']) {
            $diagnosis = "Kemungkinan Anda mengalami Asma.";
        } elseif ($gejalaTambahan['batukBerdahak'] && $gejalaTambahan['sesakNapas']) {
            $diagnosis = "Kemungkinan Anda mengalami Pneumonia.";
        } else {
            $diagnosis = "Batuk ringan, mungkin disebabkan oleh iritasi tenggorokan.";
        }
    }
    // Kondisi Pilek Tanpa Batuk dan Demam
    elseif (!$batuk && $pilek && !$demam) {
        if ($gejalaTambahan['pilekPagiHari'] && $gejalaTambahan['pilekTenggorokan']) {
            $diagnosis = "Kemungkinan Anda mengalami Rhinitis Alergi.";
        } elseif ($gejalaTambahan['pilekKuningHijau'] && $gejalaTambahan['nyeriWajah']) {
            $diagnosis = "Kemungkinan Anda mengalami Sinusitis.";
        } else {
            $diagnosis = "Pilek ringan, mungkin disebabkan oleh alergi.";
        }
    }
    // Kondisi Demam Tanpa Batuk dan Pilek
    elseif (!$batuk && !$pilek && $demam) {
        if ($gejalaTambahan['demamTurunNaik'] && $gejalaTambahan['kelelahan']) {
            $diagnosis = "Kemungkinan Anda mengalami Demam Berdarah Dengue (DBD).";
        } elseif ($gejalaTambahan['demamRuam'] && $gejalaTambahan['demamMalamHari']) {
            $diagnosis = "Kemungkinan Anda mengalami Campak.";
        } else {
            $diagnosis = "Demam umum, mungkin disebabkan oleh infeksi virus atau bakteri.";
        }
    }
    // Kondisi Tanpa Gejala Utama
    else {
        $diagnosis = "Gejala tidak menunjukkan kondisi spesifik. Konsultasikan ke dokter untuk diagnosis lebih lanjut.";
    }

    return $diagnosis;
}

// Tangkap data dari form POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Menangkap gejala utama
    $batuk = isset($_POST['batuk']) ? true : false;
    $pilek = isset($_POST['pilek']) ? true : false;
    $demam = isset($_POST['demam']) ? true : false;

    // Menangkap gejala tambahan
    $additionalSymptoms = [
        'nyeriOtot' => isset($_POST['nyeriOtot']),
        'batukBerdahak' => isset($_POST['batukBerdahak']),
        'sesakNapas' => isset($_POST['sesakNapas']),
        'demamTinggi' => isset($_POST['demamTinggi']),
        'nyeriWajah' => isset($_POST['nyeriWajah']),
        'batukGatalTenggorokan' => isset($_POST['batukGatalTenggorokan']),
        'batukDarah' => isset($_POST['batukDarah']),
        'demamTurunNaik' => isset($_POST['demamTurunNaik']),
        'kelelahan' => isset($_POST['kelelahan']),
        'pilekKuningHijau' => isset($_POST['pilekKuningHijau']),
        'sakitGigi' => isset($_POST['sakitGigi']),
        'sakitKepalaBerat' => isset($_POST['sakitKepalaBerat']),
        'batukKering' => isset($_POST['batukKering']),
        'batukMalamHari' => isset($_POST['batukMalamHari']),
        'pilekPagiHari' => isset($_POST['pilekPagiHari']),
        'pilekTenggorokan' => isset($_POST['pilekTenggorokan']),
        'demamRuam' => isset($_POST['demamRuam']),
        'demamMalamHari' => isset($_POST['demamMalamHari']),
        'pilekHijau' => isset($_POST['pilekHijau']),
    ];

    // Dapatkan hasil diagnosis
    $diagnosis = diagnose($batuk, $pilek, $demam, $additionalSymptoms);
} else {
    $diagnosis = "";
}
?>

<!DOCTYPE html>
<html lang="id">
<style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #1abc9c, #2ecc71);
            color: #333;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 30px;
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }
        h2, h3 {
            text-align: center;
            color: #2c3e50;
        }
        .button-container {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            justify-content: center;
        }
        .button-container label {
            flex: 1 1 calc(33.333% - 10px);
            padding: 10px;
            text-align: center;
            background-color: #f1f1f1;
            border: 2px solid #ddd;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .button-container input {
            display: none;
        }
        .button-container input:checked + label {
            background-color: #3498db;
            color: white;
            border-color: #2980b9;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .btn-container {
            text-align: center;
            margin-top: 20px;
        }
        .btn {
            background-color: #e74c3c;
            color: white;
            border: none;
            padding: 15px 30px;
            font-size: 18px;
            font-weight: bold;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .btn:hover {
            background-color: #c0392b;
            transform: translateY(-2px);
        }
        .result {
            margin-top: 20px; /* Ruang di atas hasil */
            padding: 20px; /* Ruang dalam box */
            border: 2px solid #007BFF; /* Garis tegas berwarna biru */
            border-radius: 10px; /* Sudut membulat */
            background-color: #f8f9fa; /* Warna latar abu-abu terang */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Efek bayangan lembut */
            text-align: center; /* Pusatkan teks */
            font-size: 18px; /* Ukuran teks lebih besar */
            font-weight: bold; /* Teks tebal */
            color: #333; /* Warna teks gelap */
        }

        /* Pusatkan container hasil agar menarik perhatian */
        .result-container {
            display: flex;
            justify-content: center; /* Pusatkan secara horizontal */
            align-items: center; /* Pusatkan secara vertikal */
            margin-top: 30px;
        }

        .btn-back {
            display: inline-block;
            padding: 12px 24px;
            background-color: #3498db; 
            color: #fff;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            text-decoration: none;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s, transform 0.3s;
        }

        /* Efek hover saat kursor diarahkan ke tombol */
        .btn-back:hover {
            background-color: #2980b9; 
            transform: translateY(-3px); 
        }

        /* Efek saat tombol diklik */
        .btn-back:active {
            transform: translateY(1px); 
            background-color: #1c5980; /
        }

    </style>
</head>
<body>

<a href="index.php" class="btn-back">Back</a>

<div class="container">
    <h2>Diagnosis Berdasarkan Gejala</h2>
    <form method="POST">
        <div class="button-container">
            <input type="checkbox" id="batuk" name="batuk"><label for="batuk">Batuk</label>
            <input type="checkbox" id="pilek" name="pilek"><label for="pilek">Pilek</label>
            <input type="checkbox" id="demam" name="demam"><label for="demam">Demam</label>
        </div>

        <h3>Gejala Tambahan</h3>
        <div class="button-container">
            <input type="checkbox" id="nyeriOtot" name="nyeriOtot"><label for="nyeriOtot">Nyeri Otot</label>
            <input type="checkbox" id="batukBerdahak" name="batukBerdahak"><label for="batukBerdahak">Batuk Berdahak</label>
            <input type="checkbox" id="sesakNapas" name="sesakNapas"> <label for="sesakNapas">Sesak Nafas</label>
            <input type="checkbox" id="demamTinggi" name="demamTinggi"> <label for="demamTinggi">Demam Tinggi</label>
            <input type="checkbox" id="nyeriWajah" name="nyeriWajah"> <label for="nyeriWajah">Nyeri Wajah</label>
            <input type="checkbox" id="batukGatalTenggorokan" name="batukGatalTenggorokan"> <label for="batukGatalTenggorokan">Batuk Gatal Tenggorokan</label>
            <input type="checkbox" id="batukDarah" name="batukDarah"> <label for="batukDarah">Batuk Darah</label>
            <input type="checkbox" id="demamTurunNaik" name="demamTurunNaik"> <label for="demamTurunNaik">Demam Turun Naik</label>
            <input type="checkbox" id="kelelahan" name="kelelahan"> <label for="kelelahan">Kelelahan</label>
            <input type="checkbox" id="pilekKuningHijau" name="pilekKuningHijau"> <label for="pilekKuningHijau">Pilek kuning Hijau</label>
            <input type="checkbox" id="sakitGigi" name="sakitGigi"> <label for="sakitGigi">Sakit Gigi</label>
            <input type="checkbox" id="sakitKepalaBerat" name="sakitKepalaBerat"> <label for="sakitKepalaBerat">Sakit Kepala Berat</label>
            <input type="checkbox" id="batukKering" name="batukKering"> <label for="batukKering">Batuk Kering</label>
            <input type="checkbox" id="batukMalamHari" name="batukMalamHari"> <label for="batukMalamHari">Batuk Malam Hari</label>
            <input type="checkbox" id="pilekPagiHari" name="pilekPagiHari"> <label for="pilekPagiHari">Pilek Pagi Hari</label>
            <input type="checkbox" id="pilekTenggorokan" name="pilekTenggorokan"> <label for="pilekTenggorokan">Pilek Tenggorokan</label>
            <input type="checkbox" id="demamRuam" name="demamRuam"> <label for="demamRuam">Demam Ruam</label>
            <input type="checkbox" id="demamMalamHari" name="demamMalamHari"><label for="demamMalamHari">Demam Malam Hari</label>
            <input type="checkbox" id="pilekHijau" name="pilekHijau"><label for="pilekHijau">Pilek Hijau</label>
        </div>

        <div class="btn-container">
            <button class="btn btn-recheck" type="submit">Periksa Diagnosis</button>
        </div>
    </form>

    <div class="result-container">
        <div class="result" id="result">
            <?php echo $diagnosis; ?>
        </div>
    </div>
</div>

</body>
</html>
