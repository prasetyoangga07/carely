<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diagnosis Berdasarkan Gejala</title>
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
    </style>
</head>
<body>
<?php
// Diagnosis Function
function diagnose($batuk, $pilek, $demam, $gejalaTambahan) {
    // Your diagnosis function remains here
    $result = "Hasil diagnosis belum dikirim.";
    if ($batuk && $pilek && $demam) {
        $result = "Kemungkinan besar Anda mengalami Influenza. Jika parah, konsultasikan ke dokter.";
    } else if ($batuk && !$pilek) {
        $result = "Anda mungkin mengalami batuk ringan atau infeksi saluran napas.";
    } else {
        $result = "Gejala tidak spesifik. Konsultasikan lebih lanjut.";
    }
    return $result;
}

$result = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $batuk = isset($_POST['batuk']);
    $pilek = isset($_POST['pilek']);
    $demam = isset($_POST['demam']);

    $additionalSymptoms = [
        'nyeriOtot' => isset($_POST['nyeriOtot']),
        'batukBerdahak' => isset($_POST['batukBerdahak']),
    ];

    $result = diagnose($batuk, $pilek, $demam, $additionalSymptoms);
}
?>
<div class="container">
    <h2>Diagnosis Berdasarkan Gejala</h2>
    <form method="POST" onsubmit="showAlert()">
        <h3>Gejala Utama</h3>
        <div class="button-container">
            <input type="checkbox" id="batuk" name="batuk"><label for="batuk">Batuk</label>
            <input type="checkbox" id="pilek" name="pilek"><label for="pilek">Pilek</label>
            <input type="checkbox" id="demam" name="demam"><label for="demam">Demam</label>
        </div>
        <h3>Gejala Tambahan</h3>
        <div class="button-container">
            <input type="checkbox" id="nyeriOtot" name="nyeriOtot"><label for="nyeriOtot">Nyeri Otot</label>
            <input type="checkbox" id="batukBerdahak" name="batukBerdahak"><label for="batukBerdahak">Batuk Berdahak</label>
        </div>
        <div class="btn-container">
            <button class="btn" type="submit">Periksa Diagnosis</button>
        </div>
    </form>
</div>
<?php if ($result): ?>
    <script>
        function showAlert() {
            alert("<?php echo addslashes($result); ?>");
        }
        window.onload = showAlert;
    </script>
<?php endif; ?>
</body>
</html>
