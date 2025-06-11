<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skenario 4 - Array dan Perulangan</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 20px;
            background: pink;
            min-height: 100vh;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .card {
            background: white;
            border-radius: 15px;
            padding: 25px;
            margin-bottom: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
        }
        
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 10px;
            font-size: 2.5em;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
        }
        
        .subtitle {
            text-align: center;
            color: #666;
            margin-bottom: 30px;
            font-style: italic;
            font-size: 1.2em;
        }
        
        .case-header {
            background: linear-gradient(45deg, #007bff, #0056b3);
            color: white;
            padding: 15px 25px;
            border-radius: 10px;
            margin-bottom: 20px;
            font-size: 1.3em;
            font-weight: bold;
            display: flex;
            align-items: center;
        }
        
        .case-header::before {
            content: "📋";
            margin-right: 10px;
            font-size: 1.5em;
        }
        
        .output-box {
            background: #f8f9fa;
            border: 2px solid #dee2e6;
            border-radius: 8px;
            padding: 20px;
            margin: 15px 0;
            font-family: 'Courier New', monospace;
            white-space: pre-wrap;
            font-size: 14px;
            max-height: 400px;
            overflow-y: auto;
        }
        
        .result-section {
            background: linear-gradient(135deg, #e8f5e8, #f0f8f0);
            border: 2px solid #28a745;
            border-radius: 10px;
            padding: 20px;
            margin: 15px 0;
        }
        
        .result-section h4 {
            color: #155724;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
        }
        
        .result-section h4::before {
            content: "✅";
            margin-right: 10px;
        }
        
        .music-box {
            background: linear-gradient(135deg, #fff3e0, #fce4ec);
            border: 2px solid #ff9800;
            border-radius: 10px;
            padding: 20px;
            margin: 15px 0;
        }
        
        .discussion {
            background: #fff3cd;
            border: 2px solid #ffc107;
            border-radius: 10px;
            padding: 20px;
            margin: 20px 0;
        }
        
        .discussion h3 {
            color: #856404;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }
        
        .discussion h3::before {
            content: "💡";
            margin-right: 10px;
        }
        
        .discussion ol, .discussion ul {
            color: #856404;
        }
        
        .discussion li {
            margin-bottom: 10px;
            line-height: 1.6;
        }
        
        .authors {
            text-align: center;
            margin-top: 30px;
            padding: 20px;
            background: linear-gradient(45deg, #f8f9fa, #e9ecef);
            border-radius: 10px;
            border: 2px dashed #6c757d;
        }
        
        .highlight {
            background: #fff9c4;
            padding: 2px 4px;
            border-radius: 3px;
            font-weight: bold;
        }
        
        .summary-box {
            background: linear-gradient(135deg, #e3f2fd, #f3e5f5);
            border: 2px solid #2196f3;
            border-radius: 10px;
            padding: 20px;
            margin: 15px 0;
        }
        
        .summary-box h4 {
            color: #1565c0;
            margin-bottom: 15px;
        }
        
        .case-description {
            background: #f8f9fa;
            border-left: 4px solid #007bff;
            padding: 15px;
            margin: 15px 0;
            font-style: italic;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <h1>🎯 Skenario 4</h1>
            <p class="subtitle">Array dan Perulangan PHP - Hasil Output</p>
        </div>
        
        <!-- Kasus 1: Barra -->
        <div class="card">
            <div class="case-header">
                📅 Kasus 1: Tanggal Barra (Senin, 10 - Mar - 2025)
            </div>
            
            <div class="case-description">
                <strong>Deskripsi:</strong> Barra ingin menuliskan tanggal dengan Array dan Looping menggunakan 4 jenis perulangan berbeda (for, foreach, while, do-while).
            </div>
            
            <div class="result-section">
                <h4>Output Kasus 1:</h4>
                <div class="output-box"><strong>Hari (menggunakan for):</strong>
Minggu Senin Selasa Rabu Kamis Jumat Sabtu 

<strong>Tanggal (menggunakan foreach):</strong>
1 2 3 4 5 6 7 8 9 10 11 12 13 14 15 16 17 18 19 20 21 22 23 24 25 26 27 28 29 30 31 

<strong>Bulan (menggunakan while):</strong>
Jan Feb Mar Apr Mei Jun Jul Ags Sep Okt Nov Des 

<strong>Tahun (menggunakan do while):</strong>
2024 2025 2026 

<strong>Tanggal Barra:</strong>
Senin, 10 - Mar - 2025</div>
            </div>
            
            <div class="summary-box">
                <h4>📊 Ringkasan Teknik:</h4>
                <ul>
                    <li><strong>For Loop:</strong> Menampilkan array hari dengan indeks</li>
                    <li><strong>Foreach:</strong> Menampilkan tanggal 1-31 tanpa indeks</li>
                    <li><strong>While:</strong> Menampilkan bulan dengan kondisi di awal</li>
                    <li><strong>Do-While:</strong> Menampilkan tahun dengan kondisi di akhir</li>
                </ul>
            </div>
        </div>
        
        <!-- Kasus 2: Zuyyina -->
        <div class="card">
            <div class="case-header">
                🐣 Kasus 2: Zuyyina - Anak Ayam Turun 30
            </div>
            
            <div class="case-description">
                <strong>Deskripsi:</strong> Zuyyina bernyanyi lagu "Anak Ayam Turun 30" dari 30 hingga tinggal induknya saja.
            </div>
            
            <div class="result-section">
                <h4>Output Kasus 2:</h4>
                <div class="output-box"><strong>🎵 Lagu Anak Ayam Turun 30:</strong>

Anak ayam turun 30, mati satu tinggal 29 🐣
Anak ayam turun 29, mati satu tinggal 28 🐣
Anak ayam turun 28, mati satu tinggal 27 🐣
Anak ayam turun 27, mati satu tinggal 26 🐣
Anak ayam turun 26, mati satu tinggal 25 🐣
...
Anak ayam turun 5, mati satu tinggal 4 🐣
Anak ayam turun 4, mati satu tinggal 3 🐣
Anak ayam turun 3, mati satu tinggal 2 🐣
Anak ayam turun 2, mati satu tinggal 1 🐣
Anak ayam turun 1, mati satu tinggal induknya 🐔</div>
            </div>
            
            <div class="summary-box">
                <h4>🎼 Pola Lagu:</h4>
                <ul>
                    <li><strong>Total Baris:</strong> 30 baris lagu</li>
                    <li><strong>Pola Decrement:</strong> Mulai dari 30, berkurang 1 setiap iterasi</li>
                    <li><strong>Kondisi Khusus:</strong> Baris terakhir menampilkan "induknya" bukan angka</li>
                </ul>
            </div>
        </div>
        
        <!-- Kasus 3: Sholeh -->
        <div class="card">
            <div class="case-header">
                🌹 Kasus 3: Mawar Sholeh untuk Ibunya
            </div>
            
            <div class="case-description">
                <strong>Deskripsi:</strong> Menampilkan mawar yang dimiliki Sholeh (21-10) dan mawar yang akan diberikan ke ibunya (dengan pola khusus).
            </div>
            
            <div class="result-section">
                <h4>Output Kasus 3:</h4>
                <div class="output-box"><strong>Mawar yang dimiliki Sholeh:</strong>
21,20,19,18,17,16,15,14,13,12,11,10,

<strong>Mawar yang akan diberikan ke ibunya:</strong>
21,17,13,

<strong>Analisis:</strong>
Jumlah mawar yang dimiliki Sholeh: 12 tangkai
Mawar nomor: 21, 20, 19, 18, 17, 16, 15, 14, 13, 12, 11, 10

Jumlah mawar untuk ibu: 3 tangkai  
Mawar nomor: 21, 17, 13</div>
            </div>
            
            <div class="summary-box">
                <h4>🌹 Analisis Mawar:</h4>
                <ul>
                    <li><strong>Total Mawar Dimiliki:</strong> 12 tangkai (21 → 10, decrement 1)</li>
                    <li><strong>Mawar untuk Ibu:</strong> 3 tangkai (21, 17, 13)</li>
                    <li><strong>Pola untuk Ibu:</strong> Dimulai dari 21, berkurang 4 setiap iterasi</li>
                    <li><strong>Sisa Mawar:</strong> 9 tangkai tetap dengan Sholeh</li>
                </ul>
            </div>
        </div>
        
        <!-- Kasus 4: Ambyar -->
        <div class="card">
            <div class="case-header">
                🎵 Kasus 4: Playlist Musik Ambyar
            </div>
            
            <div class="case-description">
                <strong>Deskripsi:</strong> Ambyar memiliki playlist musik berdasarkan suasana hati menggunakan multidimensional array.
            </div>
            
            <div class="music-box">
                <h4>🎵 Output Kasus 4:</h4>
                <div class="output-box"><strong>🎵 Playlist Musik Ambyar:</strong>

😢 Saat galau: Mesin Waktu - Budi Doremi
😊 Saat bersemangat: Selamat Pagi - Ran  
😠 Saat marah: Yang Patah Tumbuh, yang Hilang Berganti - Banda Neira

<strong>Daftar Suasana Hati Ambyar:</strong>
1. Galau
2. Bersemangat  
3. Marah</div>
            </div>
            
            <div class="summary-box">
                <h4>🎼 Struktur Playlist:</h4>
                <ul>
                    <li><strong>Format Data:</strong> Multidimensional array dengan 3 elemen</li>
                    <li><strong>Field per Lagu:</strong> suasana, lagu, artis</li>
                    <li><strong>Emoji Mapping:</strong> 😢 galau, 😊 bersemangat, 😠 marah</li>
                    <li><strong>Total Lagu:</strong> 3 lagu untuk 3 suasana berbeda</li>
                </ul>
            </div>
        </div>
        
        <!-- Bahan Diskusi -->
        <div class="card">
            <div class="discussion">
                <h3>💡 Bahan Diskusi & Analisis Hasil</h3>
                <ol>
                    <li><strong>Hasil Kasus 1 - Implementasi 4 Jenis Loop:</strong>
                        <ul>
                            <li><span class="highlight">FOR:</span> Berhasil menampilkan 7 hari dalam seminggu</li>
                            <li><span class="highlight">FOREACH:</span> Berhasil menampilkan 31 tanggal secara berurutan</li>
                            <li><span class="highlight">WHILE:</span> Berhasil menampilkan 12 bulan singkatan</li>
                            <li><span class="highlight">DO-WHILE:</span> Berhasil menampilkan 3 tahun (2024-2026)</li>
                            <li><span class="highlight">Target Tercapai:</span> Format "Senin, 10 - Mar - 2025" berhasil ditampilkan</li>
                        </ul>
                    </li>
                    
                    <li><strong>Hasil Kasus 2 - Lagu Anak Ayam:</strong>
                        <ul>
                            <li><span class="highlight">Total Output:</span> 30 baris lagu lengkap</li>
                            <li><span class="highlight">Pola Berhasil:</span> Decrement dari 30 ke 1</li>
                            <li><span class="highlight">Logika Kondisi:</span> Baris terakhir menampilkan "induknya"</li>
                            <li><span class="highlight">Visual Element:</span> Emoji 🐣 dan 🐔 mempercantik output</li>
                        </ul>
                    </li>
                    
                    <li><strong>Hasil Kasus 3 - Analisis Mawar Sholeh:</strong>
                        <ul>
                            <li><span class="highlight">Mawar Dimiliki:</span> 12 tangkai (21→10)</li>
                            <li><span class="highlight">Mawar untuk Ibu:</span> 3 tangkai (21, 17, 13)</li>
                            <li><span class="highlight">Pola Matematika:</span> -4 setiap iterasi untuk ibu</li>
                            <li><span class="highlight">Efisiensi:</span> Menggunakan array untuk menyimpan data</li>
                        </ul>
                    </li>
                    
                    <li><strong>Hasil Kasus 4 - Playlist Musik:</strong>
                        <ul>
                            <li><span class="highlight">Struktur Data:</span> Multidimensional array berhasil diakses</li>
                            <li><span class="highlight">Mapping Data:</span> 3 suasana dengan 3 lagu berbeda</li>
                            <li><span class="highlight">User Experience:</span> Emoji memberikan visual yang menarik</li>
                            <li><span class="highlight">Fleksibilitas:</span> Mudah menambah lagu dan suasana baru</li>
                        </ul>
                    </li>
                    
                    <li><strong>Pembelajaran dari Output:</strong>
                        <ul>
                            <li>📚 <strong>Array Handling:</strong> Semua jenis array berhasil diproses</li>
                            <li>🔄 <strong>Loop Mastery:</strong> 4 jenis loop menghasilkan output sesuai harapan</li>
                            <li>🎵 <strong>Complex Data:</strong> Nested array berhasil diakses dan ditampilkan</li>
                            <li>🧮 <strong>Mathematical Logic:</strong> Pola matematika terimplementasi dengan baik</li>
                            <li>🎨 <strong>User Interface:</strong> Output yang menarik dan mudah dibaca</li>
                        </ul>
                    </li>
                </ol>
            </div>
        </div>
        
        <!-- Authors -->
        <div class="card">
            <div class="authors">
                <h3>👥 Tim Coding</h3>
                <p><strong>Nama:</strong>Muhammad Rizqy Ramadhan</p>
                <p><strong>Partner Coding:</strong> Alden Fathin Hanif</p>
                <p><strong>Fokus:</strong> Hasil Output & Analisis Program</p>
            </div>
        </div>
    </div>
</body>
</html>