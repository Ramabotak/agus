<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penentuan Waktu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            background:#fff;
            min-height: 100vh;
        }
        .card {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
        }
        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
            color: #555;
        }
        input[type="time"] {
            width: 100%;
            padding: 15px;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
            margin-bottom: 20px;
            box-sizing: border-box;
        }
        button {
            width: 100%;
            padding: 15px;
            background: #667eea;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s;
        }
        button:hover {
            background: #5a67d8;
        }
        .result {
            margin-top: 25px;
            padding: 20px;
            background: #f0f8ff;
            border-radius: 8px;
            border-left: 4px solid #667eea;
        }
        .result h3 {
            margin: 0 0 10px 0;
            color: #667eea;
        }
        .result p {
            margin: 0;
            font-size: 18px;
            color: #333;
        }
        .authors {
            text-align: center;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #eee;
            color: #666;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>🕐 Cek Waktu</h1>
        
        <form method="post" action="">
            <label for="jam">Masukkan Jam:</label>
            <input type="time" id="jam" name="jam" required>
            <button type="submit">Cek Waktu</button>
        </form>

        <?php
        function getTimeDescription($jam) {
            // Konversi ke format yang bisa dibandingkan
            $hour = (int)substr($jam, 0, 2);
            $minute = (int)substr($jam, 3, 2);
            $totalMinutes = $hour * 60 + $minute;
            
            // Dini hari: 00:00 - 03:59
            if ($totalMinutes >= 0 && $totalMinutes < 240) {
                return "Dini hari";
            }
            // Pagi: 04:00 - 09:59
            elseif ($totalMinutes >= 240 && $totalMinutes < 600) {
                return "Pagi";
            }
            // Siang: 10:00 - 14:59
            elseif ($totalMinutes >= 600 && $totalMinutes < 900) {
                return "Siang";
            }
            // Sore: 15:00 - 17:29
            elseif ($totalMinutes >= 900 && $totalMinutes < 1050) {
                return "Sore";
            }
            // Petang: 17:30 - 18:29
            elseif ($totalMinutes >= 1050 && $totalMinutes < 1110) {
                return "Petang";
            }
            // Malam: 18:30 - 23:59
            elseif ($totalMinutes >= 1110 && $totalMinutes < 1440) {
                return "Malam";
            }
            else {
                return "dunia lain";
            }
        }

        // Proses form jika sudah disubmit
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['jam'])) {
            $jam = $_POST['jam'];
            $description = getTimeDescription($jam);
            
            echo '<div class="result">';
            echo '<h3>📅 Hasil:</h3>';
            echo '<p>Jam <strong>' . $jam . '</strong> adalah waktu <strong>' . $description . '</strong></p>';
            echo '</div>';
        }
        ?>

        <div class="authors">
            <h4>👥 PASANGAN</h4>
            <p>Alden Fathin Hanif / 2</p>
            <p>Muhammad Rizqy Ramadhan / 23</p>
        </div>
    </div>
</body>
</html>