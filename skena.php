<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Penilaian</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: pink;
            min-height: 100vh;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
            overflow: hidden;
        }

        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 30px;
            text-align: center;
        }

        h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
            font-weight: 700;
        }

        .subtitle {
            font-size: 1.1rem;
            opacity: 0.9;
        }

        .content {
            padding: 30px;
        }

        .grade-table {
            width: 100%;
            border-collapse: collapse;
            margin: 30px 0;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .grade-table th {
            background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
            color: white;
            padding: 20px;
            font-size: 1.1rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .grade-table td {
            padding: 15px 20px;
            text-align: center;
            font-size: 1rem;
            border-bottom: 1px solid #f0f0f0;
        }

        .grade-table tr:nth-child(even) td {
            background-color: #f8f9ff;
        }

        .grade-table tr:hover td {
            background-color: #e8f4fd;
            transform: scale(1.01);
            transition: all 0.3s ease;
        }

        .grade-a { color: #22c55e; font-weight: bold; }
        .grade-b { color: #3b82f6; font-weight: bold; }
        .grade-c { color: #f59e0b; font-weight: bold; }
        .grade-d { color: #ef4444; font-weight: bold; }
        .grade-error { color: #dc2626; font-weight: bold; }

        .form-section {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            padding: 30px;
            border-radius: 15px;
            margin: 30px 0;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .form-title {
            color: white;
            font-size: 1.5rem;
            margin-bottom: 20px;
            text-align: center;
            font-weight: 600;
        }

        .input-group {
            display: flex;
            flex-direction: column;
            gap: 15px;
            max-width: 400px;
            margin: 0 auto;
        }

        .input-group label {
            color: white;
            font-weight: 500;
            font-size: 1.1rem;
        }

        .input-field {
            padding: 15px 20px;
            border: none;
            border-radius: 10px;
            font-size: 1.1rem;
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
        }

        .input-field:focus {
            outline: none;
            background: white;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            transform: translateY(-2px);
        }

        .submit-btn {
            padding: 15px 30px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .submit-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(102, 126, 234, 0.4);
        }

        .result {
            margin: 30px 0;
            padding: 25px;
            border-radius: 15px;
            text-align: center;
            font-size: 1.3rem;
            font-weight: 600;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .result.success {
            background: linear-gradient(135deg, #d4edda 0%, #c3e6cb 100%);
            color: #155724;
            border: 2px solid #c3e6cb;
        }

        .result.error {
            background: linear-gradient(135deg, #f8d7da 0%, #f5c6cb 100%);
            color: #721c24;
            border: 2px solid #f5c6cb;
        }

        .team-info {
            background: linear-gradient(135deg, #ffecd2 0%, #fcb69f 100%);
            padding: 25px;
            border-radius: 15px;
            text-align: center;
            margin-top: 30px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .team-title {
            font-size: 1.3rem;
            color: #8b4513;
            margin-bottom: 15px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .team-member {
            color: #d2691e;
            font-size: 1.1rem;
            margin: 8px 0;
            font-weight: 500;
        }

        @media (max-width: 768px) {
            .container {
                margin: 10px;
                border-radius: 15px;
            }

            h1 {
                font-size: 2rem;
            }

            .content {
                padding: 20px;
            }

            .grade-table th,
            .grade-table td {
                padding: 10px;
                font-size: 0.9rem;
            }

            .form-section {
                padding: 20px;
            }
        }

        .animation-fade-in {
            animation: fadeIn 0.8s ease-in;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <div class="container animation-fade-in">
        <div class="header">
            <h1> Kalkulator Penilaian</h1>
            <p class="subtitle">Sistem Evaluasi Akademik Modern</p>
        </div>

        <div class="content">
            <table class="grade-table">
                <thead>
                    <tr>
                        <th>📊 RENTANG NILAI</th>
                        <th>🏆 GRADE</th>
                        <th>📝 KETERANGAN</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>90 - 100</td>
                        <td class="grade-a">A</td>
                        <td>Sangat Baik</td>
                    </tr>
                    <tr>
                        <td>80 - 89</td>
                        <td class="grade-b">B</td>
                        <td>Baik</td>
                    </tr>
                    <tr>
                        <td>70 - 79</td>
                        <td class="grade-c">C</td>
                        <td>Cukup</td>
                    </tr>
                    <tr>
                        <td>0 - 69</td>
                        <td class="grade-d">D</td>
                        <td>Kurang</td>
                    </tr>
                    <tr>
                        <td>< 0 atau > 100</td>
                        <td class="grade-error">❌</td>
                        <td>Nilai Tidak Valid</td>
                    </tr>
                </tbody>
            </table>

            <div class="form-section">
                <h2 class="form-title">✨ Masukkan Nilai Anda</h2>
                <form method="post" action="">
                    <div class="input-group">
                        <label for="nilai">📋 Nilai (0-100):</label>
                        <input 
                            type="number" 
                            id="nilai" 
                            name="nilai" 
                            class="input-field"
                            min="0" 
                            max="100" 
                            step="0.1"
                            placeholder="Masukkan nilai Anda..."
                            required
                        >
                        <button type="submit" class="submit-btn">🚀 Hitung Grade</button>
                    </div>
                </form>
            </div>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Validasi input
                if (isset($_POST['nilai']) && $_POST['nilai'] !== '') {
                    $nilai = floatval($_POST['nilai']);
                    
                    echo '<div class="result ';
                    
                    if ($nilai < 0 || $nilai > 100) {
                        echo 'error">';
                        echo '<h3>❌ Nilai Tidak Valid!</h3>';
                        echo "<p>Nilai <strong>$nilai</strong> tidak valid. Silakan masukkan nilai antara 0-100.</p>";
                    } else {
                        echo 'success">';
                        echo '<h3>🎯 Hasil Penilaian</h3>';
                        echo "<p>Nilai: <strong>$nilai</strong></p>";
                        echo "<p>Grade: <strong>";
                        
                        if ($nilai >= 90) {
                            echo '<span class="grade-a">A</span> - Sangat Baik! 🌟';
                        } else if ($nilai >= 80) {
                            echo '<span class="grade-b">B</span> - Baik! 👍';
                        } else if ($nilai >= 70) {
                            echo '<span class="grade-c">C</span> - Cukup 👌';
                        } else {
                            echo '<span class="grade-d">D</span> - Perlu Perbaikan 📚';
                        }
                        echo "</strong></p>";
                    }
                    echo '</div>';
                } else {
                    echo '<div class="result error">';
                    echo '<h3>⚠️ Input Kosong!</h3>';
                    echo '<p>Silakan masukkan nilai terlebih dahulu.</p>';
                    echo '</div>';
                }
            }
            ?>

            <div class="team-info">
                <h4 class="team-title">👥 Tim Pengembang</h4>
                <p class="team-member">🎓 Alden Fathin Hanif - No. 2</p>
                <p class="team-member">🎓 Muhammad Rizqy Ramadhan - No. 23</p>
            </div>
        </div>
    </div>

    <script>
        // Animasi untuk form submission
        document.querySelector('form').addEventListener('submit', function(e) {
            const button = document.querySelector('.submit-btn');
            button.innerHTML = '⏳ Memproses...';
            button.disabled = true;
        });

        // Reset button jika ada error
        window.addEventListener('load', function() {
            const button = document.querySelector('.submit-btn');
            if (button.innerHTML === '⏳ Memproses...') {
                button.innerHTML = '🚀 Hitung Grade';
                button.disabled = false;
            }
        });
    </script>
</body>
</html>