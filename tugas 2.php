<?php
// Ganti YOUR_NRP dengan tiga digit terakhir NRP Anda yang sebenarnya
$nrp_last_three_digits = 139; // Contoh: ganti ini ke tiga digit terakhir Anda yang sebenarnya

$category_code = $nrp_last_three_digits % 5;
$category = "";
$data = []; // Inisialisasi array data

if ($category_code == 1) {
    $category = "Budaya Daerah di Indonesia";
    $data = [
        // Isi dengan data 10 entri untuk Budaya Daerah di Indonesia
        ["Nama" => "Tari Saman", "Asal" => "Aceh", "Deskripsi" => "Tarian Suku Gayo.", "Gambar" => "images/tari_saman.jpg", "Tahun Ditetapkan" => "2011"],
        ["Nama" => "Batik", "Asal" => "Jawa", "Deskripsi" => "Kain bergambar dengan motif khas.", "Gambar" => "images/batik.jpg", "Jenis" => "Kain Tradisional"],
        ["Nama" => "Rumah Gadang", "Asal" => "Sumatera Barat", "Deskripsi" => "Rumah adat Minangkabau.", "Gambar" => "images/rumah_gadang.jpg", "Arsitektur" => "Khas Minangkabau"],
        ["Nama" => "Wayang Kulit", "Asal" => "Jawa", "Deskripsi" => "Seni pertunjukan tradisional.", "Gambar" => "images/wayang_kulit.jpg", "Dalang Terkenal" => "Ki Narto Sabdo"],
        ["Nama" => "Reog Ponorogo", "Asal" => "Jawa Timur", "Deskripsi" => "Kesenian budaya dari Ponorogo.", "Gambar" => "images/reog.jpg", "Jumlah Penari" => "Puluhan"],
        ["Nama" => "Angklung", "Asal" => "Jawa Barat", "Deskripsi" => "Alat musik dari bambu.", "Gambar" => "images/angklung.jpg", "Terbuat Dari" => "Bambu"],
        ["Nama" => "Keris", "Asal" => "Jawa", "Deskripsi" => "Senjata tikam tradisional.", "Gambar" => "images/keris.jpg", "Bahan" => "Logam Campuran"],
        ["Nama" => "Kebaya", "Asal" => "Jawa", "Deskripsi" => "Busana tradisional wanita.", "Gambar" => "images/kebaya.jpg", "Dipakai Pada" => "Acara Resmi"],
        ["Nama" => "Gamelan", "Asal" => "Jawa dan Bali", "Deskripsi" => "Ansambel musik tradisional.", "Gambar" => "images/gamelan.jpg", "Jenis Alat Musik" => "Perkusi"],
        ["Nama" => "Subak", "Asal" => "Bali", "Deskripsi" => "Sistem irigasi tradisional.", "Gambar" => "images/subak.jpg", "Sistem Irigasi" => "Tradisional"],
    ];
} elseif ($category_code == 2) {
    $category = "Penemu-penemu terkenal di dunia";
    $data = [
        // Isi dengan data 10 entri untuk Penemu-penemu terkenal di dunia
        ["Nama" => "Thomas Edison", "Penemuan" => "Bola Lampu", "Tahun" => "1879", "Negara Asal" => "Amerika Serikat", "Gambar" => "images/edison.jpg"],
        ["Nama" => "Alexander Graham Bell", "Penemuan" => "Telepon", "Tahun" => "1876", "Negara Asal" => "Skotlandia-Amerika", "Gambar" => "images/bell.jpg"],
        ["Nama" => "Marie Curie", "Penemuan" => "Polonium dan Radium", "Tahun" => "1898", "Negara Asal" => "Polandia-Prancis", "Gambar" => "images/curie.jpg"],
        ["Nama" => "Isaac Newton", "Penemuan" => "Hukum Gravitasi", "Tahun" => "1687", "Negara Asal" => "Inggris", "Gambar" => "images/newton.jpg"],
        ["Nama" => "Albert Einstein", "Penemuan" => "Teori Relativitas", "Tahun" => "1905", "Negara Asal" => "Jerman-Amerika", "Gambar" => "images/einstein.jpg"],
        ["Nama" => "Nikola Tesla", "Penemuan" => "Arus Bolak-balik (AC)", "Tahun" => "Akhir 1800-an", "Negara Asal" => "Serbia-Amerika", "Gambar" => "images/tesla.jpg"],
        ["Nama" => "Wright Bersaudara", "Penemuan" => "Pesawat Terbang", "Tahun" => "1903", "Negara Asal" => "Amerika Serikat", "Gambar" => "images/wright.jpg"],
        ["Nama" => "Johannes Gutenberg", "Penemuan" => "Mesin Cetak", "Tahun" => "1440-an", "Negara Asal" => "Jerman", "Gambar" => "images/gutenberg.jpg"],
        ["Nama" => "Charles Darwin", "Penemuan" => "Teori Evolusi", "Tahun" => "1859", "Negara Asal" => "Inggris", "Gambar" => "images/darwin.jpg"],
        ["Nama" => "Galileo Galilei", "Penemuan" => "Teleskop Modern", "Tahun" => "1609", "Negara Asal" => "Italia", "Gambar" => "images/galileo.jpg"],
    ];
} elseif ($category_code == 3) {
    $category = "Flora dan Fauna terancam punah";
    $data = [
        // Isi dengan data 10 entri untuk Flora dan Fauna terancam punah
        ["Nama" => "Harimau Sumatra", "Status Konservasi" => "Kritis", "Habitat" => "Sumatra", "Ancaman Utama" => "Perburuan", "Gambar" => "images/harimau_sumatra.jpg"],
        ["Nama" => "Orangutan Kalimantan", "Status Konservasi" => "Kritis", "Habitat" => "Kalimantan", "Ancaman Utama" => "Hilangnya Hutan", "Gambar" => "images/orangutan.jpg"],
        ["Nama" => "Badak Jawa", "Status Konservasi" => "Kritis", "Habitat" => "Ujung Kulon", "Ancaman Utama" => "Perburuan", "Gambar" => "images/badak_jawa.jpg"],
        ["Nama" => "Rafflesia Arnoldii", "Status Konservasi" => "Rentan", "Habitat" => "Sumatra", "Ancaman Utama" => "Perusakan Habitat", "Gambar" => "images/rafflesia.jpg"],
        ["Nama" => "Gajah Sumatra", "Status Konservasi" => "Kritis", "Habitat" => "Sumatra", "Ancaman Utama" => "Konflik Manusia", "Gambar" => "images/gajah_sumatra.jpg"],
        ["Nama" => "Elang Jawa", "Status Konservasi" => "Terancam", "Habitat" => "Jawa", "Ancaman Utama" => "Perburuan", "Gambar" => "images/elang_jawa.jpg"],
        ["Nama" => "Komodo", "Status Konservasi" => "Rentan", "Habitat" => "Komodo, Rinca", "Ancaman Utama" => "Perburuan Mangsa", "Gambar" => "images/komodo.jpg"],
        ["Nama" => "Anoa", "Status Konservasi" => "Terancam", "Habitat" => "Sulawesi", "Ancaman Utama" => "Perburuan", "Gambar" => "images/anoa.jpg"],
        ["Nama" => "Pohon Damar", "Status Konservasi" => "Rentan", "Habitat" => "Asia Tenggara", "Ancaman Utama" => "Penebangan", "Gambar" => "images/pohon_damar.jpg"],
        ["Nama" => "Bekantan", "Status Konservasi" => "Terancam", "Habitat" => "Kalimantan", "Ancaman Utama" => "Perusakan Hutan", "Gambar" => "images/bekantan.jpg"],
    ];
} elseif ($category_code == 4) {
    $category = "Pahlawan Nasional Indonesia";
    $data = [
        // Isi dengan data 10 entri untuk Pahlawan Nasional Indonesia
        ["Nama" => "Soekarno", "Peran" => "Proklamator", "Tahun Wafat" => "1970", "Gambar" => "sukarno.jpg", "Lahir" => "Surabaya"],
        ["Nama" => "Mohammad Hatta", "Peran" => "Wakil Presiden", "Tahun Wafat" => "1980", "Gambar" => "hatta.jpg", "Asal" => "Bukittinggi"],
        ["Nama" => "Cut Nyak Dien", "Peran" => "Pejuang Aceh", "Tahun Wafat" => "1908", "Gambar" => "cut nyak dien.jpeg", "Asal" => "Aceh"],
        ["Nama" => "Pangeran Diponegoro", "Peran" => "Pemimpin Perang Jawa", "Tahun Wafat" => "1855", "Gambar" => "diponogoro.jpg", "Asal" => "Yogyakarta"],
        ["Nama" => "R.A. Kartini", "Peran" => "Pelopor Emansipasi Wanita", "Tahun Wafat" => "1904", "Gambar" => "kartini.jpg", "Asal" => "Jepara"],
        ["Nama" => "Jenderal Soedirman", "Peran" => "Panglima Besar TNI", "Tahun Wafat" => "1950", "Gambar" => "soedirman.jpg", "Asal" => "Purbalingga"],
        ["Nama" => "Imam Bonjol", "Peran" => "Pemimpin Perang Padri", "Tahun Wafat" => "1864", "Gambar" => "imam bonjol.jpg", "Asal" => "Pasaman"],
        ["Nama" => "Kapitan Pattimura", "Peran" => "Pejuang Maluku", "Tahun Wafat" => "1817", "Gambar" => "pattimura.jpg", "Asal" => "Maluku"],
        ["Nama" => "Ki Hajar Dewantara", "Peran" => "Bapak Pendidikan Nasional", "Tahun Wafat" => "1959", "Gambar" => "ki hajar dewantara.jpg", "Asal" => "Yogyakarta"],
        ["Nama" => "Bung Tomo", "Peran" => "Orator Perjuangan", "Tahun Wafat" => "1981", "Gambar" => "bung tomo.jpg", "Asal" => "Surabaya"],
    ];
} else { // $category_code == 0
    $category = "Perusahaan Teknologi";
    $data = [
        // Isi dengan data 10 entri untuk Perusahaan Teknologi
        ["Nama" => "Apple Inc.", "Didirikan" => "1976", "CEO" => "Tim Cook", "Produk Utama" => "iPhone, Mac", "Gambar" => "images/apple.png"],
        ["Nama" => "Microsoft Corp.", "Didirikan" => "1975", "CEO" => "Satya Nadella", "Produk Utama" => "Windows, Office", "Gambar" => "images/microsoft.png"],
        ["Nama" => "Google LLC", "Didirikan" => "1998", "CEO" => "Sundar Pichai", "Produk Utama" => "Search, Android", "Gambar" => "images/google.png"],
        ["Nama" => "Amazon.com Inc.", "Didirikan" => "1994", "CEO" => "Andy Jassy", "Produk Utama" => "E-commerce, AWS", "Gambar" => "images/amazon.png"],
        ["Nama" => "Meta Platforms", "Didirikan" => "2004", "CEO" => "Mark Zuckerberg", "Produk Utama" => "Facebook, Instagram", "Gambar" => "images/facebook.png"],
        ["Nama" => "Samsung Electronics", "Didirikan" => "1938", "CEO" => "J.Y. Lee", "Produk Utama" => "Smartphones, TV", "Gambar" => "images/samsung.png"],
        ["Nama" => "Tesla Inc.", "Didirikan" => "2003", "CEO" => "Elon Musk", "Produk Utama" => "Mobil Listrik", "Gambar" => "images/tesla_logo.png"],
        ["Nama" => "NVIDIA Corp.", "Didirikan" => "1993", "CEO" => "Jensen Huang", "Produk Utama" => "GPU, AI", "Gambar" => "images/nvidia.png"],
        ["Nama" => "Intel Corp.", "Didirikan" => "1968", "CEO" => "Pat Gelsinger", "Produk Utama" => "Prosesor", "Gambar" => "images/intel.png"],
        ["Nama" => "Sony Group Corp.", "Didirikan" => "1946", "CEO" => "Kenichiro Yoshida", "Produk Utama" => "PlayStation, Elektronik", "Gambar" => "images/sony.png"],
    ];
}

echo "<h2>Kategori: " . $category . "</h2>";

echo "<table border='1'>";
echo "<thead>";
echo "<tr>";
// Menghasilkan header tabel secara dinamis dari kunci entri data pertama
if (!empty($data)) {
    foreach (array_keys($data[0]) as $key) {
        echo "<th>" . $key . "</th>";
    }
}
echo "</tr>";
echo "</thead>";
echo "<tbody>";

foreach ($data as $item) {
    echo "<tr>";
    foreach ($item as $key => $value) {
        if ($key == "Gambar") {
            echo "<td><img src='" . $value . "' alt='" . $item["Nama"] . "' width='100'></td>";
        } else {
            echo "<td>" . $value . "</td>";
        }
    }
    echo "</tr>";
}

echo "</tbody>";
echo "</table>";
?>