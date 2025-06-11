<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Harian Andi</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 20px;
            background: pink;
            min-height: 100vh;
        }
        
        .container {
            max-width: 900px;
            margin: 0 auto;
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
        }
        
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 10px;
            font-size: 2.2em;
        }
        
        .subtitle {
            text-align: center;
            color: #666;
            margin-bottom: 30px;
            font-style: italic;
        }
        
        .schedule {
            background: #f8f9fa;
            border-radius: 10px;
            padding: 25px;
            margin-bottom: 30px;
        }
        
        .schedule h2 {
            color: #495057;
            border-bottom: 3px solid #007bff;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        
        .time-slot {
            display: flex;
            align-items: center;
            padding: 12px 15px;
            margin: 8px 0;
            background: white;
            border-radius: 8px;
            border-left: 4px solid #28a745;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        
        .time {
            font-weight: bold;
            color: #007bff;
            min-width: 80px;
            margin-right: 15px;
        }
        
        .activity {
            flex: 1;
            color: #333;
        }
        
        .checker {
            background: #e9ecef;
            border-radius: 10px;
            padding: 25px;
            margin-bottom: 20px;
        }
        
        .checker h3 {
            color: #495057;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }
        
        .checker h3::before {
            content: "🔍";
            margin-right: 10px;
        }
        
        .form-group {
            margin-bottom: 15px;
        }
        
        label {
            display: block;
            font-weight: bold;
            color: #495057;
            margin-bottom: 5px;
        }
        
        input, select {
            width: 100%;
            padding: 10px;
            border: 2px solid #dee2e6;
            border-radius: 5px;
            font-size: 16px;
            box-sizing: border-box;
        }
        
        input:focus, select:focus {
            outline: none;
            border-color: #007bff;
        }
        
        button {
            background: linear-gradient(45deg, #007bff, #0056b3);
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            transition: transform 0.2s;
        }
        
        button:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,123,255,0.3);
        }
        
        .result {
            margin-top: 20px;
            padding: 15px;
            border-radius: 8px;
            font-weight: bold;
            text-align: center;
        }
        
        .result.success {
            background: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
        
        .result.info {
            background: #d1ecf1;
            color: #0c5460;
            border: 1px solid #bee5eb;
        }
        
        .authors {
            text-align: center;
            margin-top: 30px;
            padding: 20px;
            background: linear-gradient(45deg, #f8f9fa, #e9ecef);
            border-radius: 10px;
            border: 2px dashed #6c757d;
        }
        
        .authors h3 {
            color: #495057;
            margin-bottom: 10px;
        }
        
        .discussion {
            background: #fff3cd;
            border: 1px solid #ffeaa7;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
        }
        
        .discussion h3 {
            color: #856404;
            margin-bottom: 15px;
        }
        
        .discussion ol {
            color: #856404;
        }
        
        .discussion li {
            margin-bottom: 10px;
            line-height: 1.6;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>📅 Jadwal Harian Andi</h1>
        <p class="subtitle">Persiapan Festival Kesenian Budaya</p>
        
        <div class="schedule">
            <h2>🕐 Jadwal Harian Andi yang Efisien</h2>
            
            <div class="time-slot">
                <span class="time">15:30</span>
                <span class="activity">Pulang sekolah</span>
            </div>
            
            <div class="time-slot">
                <span class="time">15:45</span>
                <span class="activity">Tiba di rumah</span>
            </div>
            
            <div class="time-slot">
                <span class="time">15:45</span>
                <span class="activity">Mandi (persiapan mengaji)</span>
            </div>
            
            <div class="time-slot">
                <span class="time">16:00</span>
                <span class="activity">Mengaji (30 menit)</span>
            </div>
            
            <div class="time-slot">
                <span class="time">16:30</span>
                <span class="activity">Menghafalkan dialog festival (30 menit)</span>
            </div>
            
            <div class="time-slot">
                <span class="time">17:00</span>
                <span class="activity">Membeli bumbu masakan</span>
            </div>
            
            <div class="time-slot">
                <span class="time">17:30</span>
                <span class="activity">Chatting dengan Raya di Arab (30 menit) - Waktu Arab: 21:30</span>
            </div>
            
            <div class="time-slot">
                <span class="time">18:00</span>
                <span class="activity">Sholat Maghrib + Makan malam</span>
            </div>
            
            <div class="time-slot">
                <span class="time">19:00</span>
                <span class="activity">Mengerjakan tugas sekolah (2 jam tanpa terputus)</span>
            </div>
            
            <div class="time-slot">
                <span class="time">21:00</span>
                <span class="activity">Mengobrol bersama keluarga (30 menit)</span>
            </div>
            
            <div class="time-slot">
                <span class="time">21:30</span>
                <span class="activity">Waktu luang / persiapan tidur</span>
            </div>
            
            <div class="time-slot">
                <span class="time">22:00</span>
                <span class="activity">Tidur</span>
            </div>
            
            <div class="time-slot">
                <span class="time">04:00</span>
                <span class="activity">Bangun</span>
            </div>
        </div>
        
        <div class="checker">
            <h3>Cek Aktivitas Andi Berdasarkan Waktu</h3>
            
            <div class="form-group">
                <label for="timeInput">Masukkan Waktu (format: HH:MM):</label>
                <input type="time" id="timeInput" value="18:20">
            </div>
            
            <div class="form-group">
                <label for="homeworkStatus">Status Tugas Sekolah:</label>
                <select id="homeworkStatus">
                    <option value="ada">Ada tugas sekolah</option>
                    <option value="tidak">Tidak ada tugas sekolah</option>
                </select>
            </div>
            
            <button onclick="checkActivity()">Cek Aktivitas Andi</button>
            
            <div id="result"></div>
        </div>
        
        <div class="discussion">
            <h3>🤔 Bahan Diskusi & Jawaban</h3>
            <ol>
                <li><strong>Hal yang perlu diperhatikan:</strong> Waktu sholat, durasi setiap kegiatan, perbedaan zona waktu dengan Arab (4 jam lebih cepat), dan kegiatan yang tidak boleh terputus seperti tugas sekolah.</li>
                
                <li><strong>Alasan urutan kegiatan:</strong> 
                    - Mandi dulu sebelum mengaji sesuai ketentuan
                    - Mengaji dan menghafalkan dialog dilakukan saat masih segar setelah pulang sekolah
                    - Belanja bumbu sebelum makan malam
                    - Chatting dengan Raya saat waktu yang tepat di Arab (21:30 waktu Arab)
                    - Tugas sekolah dikerjakan setelah makan malam dalam kondisi kenyang
                    - Mengobrol keluarga setelah tugas selesai sebelum tidur</li>
                
                <li><strong>Waktu chatting dengan Raya:</strong> Pukul 17:30 waktu lokal Andi = 21:30 waktu lokal Arab</li>
                
                <li><strong>Waktu luang Andi:</strong> 21:30 - 22:00 (30 menit) untuk waktu luang/persiapan tidur</li>
                
                <li><strong>Jika tidak ada tugas sekolah:</strong> Andi memiliki waktu luang 19:00 - 22:00 (3 jam) karena mengobrol keluarga bisa dimajukan dan ada waktu tambahan dari tidak mengerjakan tugas.</li>
            </ol>
        </div>
        
        <div class="authors">
            <h3>👥 Tim Diskusi</h3>
            <p><strong>Nama:</strong> Muhammad Rizqy Ramadhan 23</p>
            <p><strong>Partner Diskusi:</strong> Alden Fathin Hanif 2</p>
        </div>
    </div>

    <script>
        function checkActivity() {
            const timeInput = document.getElementById('timeInput').value;
            const homeworkStatus = document.getElementById('homeworkStatus').value;
            const resultDiv = document.getElementById('result');
            
            if (!timeInput) {
                resultDiv.innerHTML = '<div class="result" style="background: #f8d7da; color: #721c24;">Mohon masukkan waktu!</div>';
                return;
            }
            
            const time = timeInput.split(':');
            const hour = parseInt(time[0]);
            const minute = parseInt(time[1]);
            const totalMinutes = hour * 60 + minute;
            
            let activity = '';
            let activityClass = 'info';
            
            // Nested if-else berdasarkan jadwal
            if (totalMinutes >= 4*60 && totalMinutes < 15*60 + 30) {
                activity = 'Andi sedang tidur atau belum pulang sekolah';
            } else if (totalMinutes >= 15*60 + 30 && totalMinutes < 15*60 + 45) {
                activity = 'Andi sedang dalam perjalanan pulang sekolah';
            } else if (totalMinutes >= 15*60 + 45 && totalMinutes < 16*60) {
                activity = 'Andi sedang mandi (persiapan mengaji)';
            } else if (totalMinutes >= 16*60 && totalMinutes < 16*60 + 30) {
                activity = 'Andi sedang mengaji';
            } else if (totalMinutes >= 16*60 + 30 && totalMinutes < 17*60) {
                activity = 'Andi sedang menghafalkan dialog untuk festival kesenian budaya';
            } else if (totalMinutes >= 17*60 && totalMinutes < 17*60 + 30) {
                activity = 'Andi sedang membeli bumbu masakan';
            } else if (totalMinutes >= 17*60 + 30 && totalMinutes < 18*60) {
                activity = 'Andi sedang chatting dengan Raya di Arab membahas persiapan festival kesenian budaya';
            } else if (totalMinutes >= 18*60 && totalMinutes < 19*60) {
                if (homeworkStatus === 'tidak') {
                    activity = 'Andi makan malam bersama keluarga (tidak ada tugas sekolah)';
                    activityClass = 'success';
                } else {
                    activity = 'Andi sedang sholat maghrib dan makan malam';
                }
            } else if (totalMinutes >= 19*60 && totalMinutes < 21*60) {
                if (homeworkStatus === 'tidak') {
                    activity = 'Andi sedang mengobrol bersama keluarga atau waktu luang (tidak ada tugas sekolah)';
                    activityClass = 'success';
                } else {
                    activity = 'Andi sedang mengerjakan tugas sekolah';
                }
            } else if (totalMinutes >= 21*60 && totalMinutes < 21*60 + 30) {
                if (homeworkStatus === 'tidak') {
                    activity = 'Waktu luang Andi (tidak ada tugas sekolah)';
                    activityClass = 'success';
                } else {
                    activity = 'Andi sedang mengobrol bersama keluarga';
                }
            } else if (totalMinutes >= 21*60 + 30 && totalMinutes < 22*60) {
                activity = 'Waktu luang Andi / persiapan tidur';
                activityClass = 'success';
            } else if (totalMinutes >= 22*60 || totalMinutes < 4*60) {
                activity = 'Andi sedang tidur';
            } else {
                activity = 'Waktu tidak valid dalam jadwal harian Andi';
            }
            
            resultDiv.innerHTML = `<div class="result ${activityClass}">Jam ${timeInput}: ${activity}</div>`;
        }
        
        // Auto check dengan contoh
        window.onload = function() {
            checkActivity();
        }
    </script>
</body>
</html>