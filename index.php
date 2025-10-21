<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Portal Teknologi | Legiman Samosir</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body {
    font-family: 'Poppins', sans-serif;
    background: #e9e9e9;
    color: #333;
}
.wrapper {
    max-width: 1100px;
    background: #fff;
    margin: 25px auto;
    box-shadow: 0 0 8px rgba(0,0,0,0.1);
    border-radius: 6px;
    overflow: hidden;
}
header {
    background: url('img/bckatas.jpg') no-repeat center;
    background-size: cover;
    min-height: 100px;
    text-align: center;
    color: white;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 30px 10px;
}
header h1 {
    font-size: 30px;
    font-weight: 700;
    letter-spacing: 1px;
    text-transform: uppercase;
    text-shadow: 1px 1px 3px rgba(0,0,0,0.4);
}
header p {
    font-size: 14px;
    color: #f0f0f0;
    margin-top: 4px;
    text-shadow: 1px 1px 2px rgba(0,0,0,0.4);
}
nav {
    background: #5004c2;
    text-align: center;
}
nav a {
    display: inline-block;
    padding: 12px 18px;
    text-decoration: none;
    color: white;
    font-size: 15px;
    font-weight: 500;
}
nav a:hover {
    background: #3a0291;
}
main {
    display: flex;
    gap: 25px;
    padding: 20px;
    flex-wrap: wrap;
}
.content {
    flex: 3;
}
.news-card {
    background: #fff;
    display: flex;
    gap: 18px;
    padding: 15px;
    border-radius: 6px;
    margin-bottom: 18px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}
.news-card img {
    width: 180px;
    height: 130px;
    object-fit: cover;
    border-radius: 4px;
}
.news-content h2 {
    color: #5004c2;
    font-size: 19px;
    margin-bottom: 8px;
    font-weight: 600;
}
.news-content p {
    font-size: 14px;
    line-height: 1.7;
    text-align: justify;
    color: #444;
    font-weight: 400;
}
.read-more {
    display: inline-block;
    margin-top: 8px;
    background: #5004c2;
    color: white;
    padding: 8px 14px;
    border-radius: 4px;
    text-decoration: none;
    font-size: 13px;
    font-weight: 500;
}
.read-more:hover {
    background: #3a0291;
}
aside {
    flex: 1;
    display: flex;
    flex-direction: column;
    gap: 20px;
}
.sidebar-box {
    background: #fff;
    padding: 14px;
    border-radius: 6px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}
.sidebar-box h3 {
    color: #5004c2;
    font-size: 15px;
    margin-bottom: 8px;
    border-bottom: 1px solid #ccc;
    padding-bottom: 4px;
    font-weight: 600;
}
.sidebar-box ul {
    list-style: none;
    margin-top: 6px;
}
.sidebar-box ul li {
    margin: 6px 0;
}
.sidebar-box ul li a {
    text-decoration: none;
    color: #333;
    font-size: 13px;
    font-weight: 400;
}
.sidebar-box ul li a:hover {
    color: #5004c2;
}
.sidebar-box p {
    font-size: 13px;
    line-height: 1.6;
    color: #444;
    text-align: justify;
    font-weight: 400;
}
footer {
    background: #5004c2;
    color: white;
    text-align: center;
    padding: 14px;
    font-size: 13px;
}
@media (max-width: 768px) {
    main { flex-direction: column; }
    .news-card { flex-direction: column; }
    .news-card img { width: 100%; height: 200px; }
}
</style>
</head>
<body>

<div class="wrapper">
<header>
    <h1></h1>
    <p></p>
</header>

<nav>
    <a href="index.html">Beranda</a>
    <a href="berita.html">Berita</a>
    <a href="teknologi.html">Teknologi</a>
    <a href="proyek.html">Proyek</a>
    <a href="kontak.html">Kontak</a>
</nav>

<main> 	
    <div class="content">
        <article class="news-card">
            <img src="img/news1.jpg" alt="Berita Teknologi 1">
            <div class="news-content">
                <h2>Quantum Computing Mengubah Arah Revolusi Digital</h2> 
                <p>Kecerdasan buatan (Artificial Intelligence / AI) kini berkembang pesat dan mulai menjadi bagian penting dalam hampir setiap aspek kehidupan manusia. Dalam beberapa tahun ke depan, AI diprediksi tidak hanya membantu dalam bidang industri dan bisnis, tetapi juga menjadi asisten personal yang memahami kebiasaan, emosi, bahkan pola pikir penggunanya. Dengan kemajuan teknologi machine learning dan deep learning, sistem AI mampu memprediksi keputusan dengan akurasi tinggi, membantu tenaga medis dalam diagnosis penyakit, serta mendukung transportasi otonom yang lebih aman. Meskipun demikian, para ahli tetap menyoroti pentingnya regulasi dan etika dalam penerapan AI agar teknologi ini tidak menimbulkan dampak negatif terhadap privasi dan lapangan pekerjaan manusia.</p>
                <a href="berita1.html" class="read-more">Baca Selengkapnya</a>
            </div>
        </article>

        <article class="news-card">
            <img src="img/news2.jpg" alt="Berita Teknologi 2">
            <div class="news-content">
                <h2>Kecerdasan Buatan Meningkatkan Peran dalam Kehidupan Sehari-hari</h2>
                <p>Kecerdasan buatan (Artificial Intelligence / AI) kini berkembang pesat dan mulai menjadi bagian penting dalam hampir setiap aspek kehidupan manusia. Dalam beberapa tahun ke depan, AI diprediksi tidak hanya membantu dalam bidang industri dan bisnis, tetapi juga menjadi asisten personal yang memahami kebiasaan, emosi, bahkan pola pikir penggunanya. Dengan kemajuan teknologi machine learning dan deep learning, sistem AI mampu memprediksi keputusan dengan akurasi tinggi, membantu tenaga medis dalam diagnosis penyakit, serta mendukung transportasi otonom yang lebih aman. Meskipun demikian, para ahli tetap menyoroti pentingnya regulasi dan etika dalam penerapan AI agar teknologi ini tidak menimbulkan dampak negatif terhadap privasi dan lapangan pekerjaan manusia.</p>
                <a href="berita2.html" class="read-more">Baca Selengkapnya</a>
            </div>
        </article>

        <article class="news-card">
            <img src="img/news3.jpg" alt="Berita Teknologi 3">
            <div class="news-content">
                <h2>Antarmuka Otak-Komputer Membuka Era Baru Interaksi Manusia dan Mesin</h2>
                <p>Salah satu inovasi paling menakjubkan dari teknologi masa depan adalah pengembangan Brain-Computer Interface (BCI) atau antarmuka otak-komputer, yang memungkinkan manusia berinteraksi langsung dengan mesin menggunakan sinyal otak. Teknologi ini berpotensi membantu penyandang disabilitas untuk mengendalikan perangkat elektronik hanya dengan pikiran, serta membuka kemungkinan baru dalam dunia medis, komunikasi, dan hiburan digital. Perusahaan seperti Neuralink sedang mengembangkan implan saraf yang dapat mentransfer data antara otak dan komputer secara real time, memberikan kemampuan kognitif tambahan bagi manusia. Meski menjanjikan, teknologi ini juga menimbulkan perdebatan etis tentang batasan privasi pikiran dan kemungkinan penyalahgunaan data neurologis di masa depan.</p>
                <a href="berita3.html" class="read-more">Baca Selengkapnya</a>
            </div>
        </article>
    </div>

    <aside>
        <div class="sidebar-box">
            <h3>Berita Populer</h3>
            <ul>
                <li><a href="#">Chip Otak untuk Kendali Pikiran</a></li>
                <li><a href="#">Robot Rumah Tangga Pintar</a></li>
                <li><a href="#">AI dalam Dunia Medis</a></li>
                <li><a href="#">Metaverse untuk Edukasi</a></li>
            </ul>
        </div>

        <div class="sidebar-box">
            <h3>Artikel Terbaru</h3>
            <ul>
                <li><a href="#">Komputasi Kuantum: Masa Depan Data</a></li>
                <li><a href="#">Smart City dan Keamanan Digital</a></li>
                <li><a href="#">Inovasi Energi Terbarukan</a></li>
            </ul>
        </div>

        <div class="sidebar-box">
            <h3>Tentang</h3>
            <p>Website ini dibuat oleh <strong>Legiman Samosir</strong> sebagai media berbagi berita dan perkembangan terbaru seputar teknologi digital dan inovasi masa depan.</p>
        </div>
    </aside>
</main>

<footer>
    <p>&copy; 2025 Portal Teknologi | Legiman Samosir</p>
    <p>Hubungi kami: 
        <a href="legiman0701221018@.ac.id" style="color:#fff; text-decoration:underline;">
            legiman0701221018@.ac.id
        </a> 
        | Telp: 
        <a href="tel:+62 858-3110-3652" style="color:#fff; text-decoration:underline;">
            +62 858-3110-3652
        </a>
    </p>
</footer>

</div>

</body>
</html>
