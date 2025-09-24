<?php
require_once "Perusahaan.php";
require_once "Toko.php";
require_once "TokoElektronik.php";

$dataFile = "data.json";

// Pastikan folder upload ada
if (!is_dir("uploads")) {
    mkdir("uploads", 0777, true);
}

// Load data dari file
if (file_exists($dataFile)) {
    $json = file_get_contents($dataFile);
    $listToko = json_decode($json, true);
} else {
    $listToko = [];
}

// Kalau kosong, isi dummy data
if (empty($listToko)) {
    $listToko = [
        [
            "pemilik"=>"Andi", "nib"=>"12345", "lokasi"=>"Jakarta", "namaToko"=>"Andi Elektronik",
            "penghasilan"=>5000000, "jamOperasional"=>"09.00-17.00", "namaBarang"=>"Laptop",
            "idBarang"=>"B001", "hargaBarang"=>7500000, "fotoBarang"=>"uploads/laptop.jpg"
        ],
        [
            "pemilik"=>"Budi", "nib"=>"67890", "lokasi"=>"Bandung", "namaToko"=>"Budi Elektronik",
            "penghasilan"=>3000000, "jamOperasional"=>"10.00-18.00", "namaBarang"=>"HP",
            "idBarang"=>"B002", "hargaBarang"=>2500000, "fotoBarang"=>"uploads/hp.jpg"
        ],
        [
            "pemilik"=>"Citra", "nib"=>"11111", "lokasi"=>"Surabaya", "namaToko"=>"Citra Store",
            "penghasilan"=>4500000, "jamOperasional"=>"08.00-16.00", "namaBarang"=>"TV",
            "idBarang"=>"B003", "hargaBarang"=>5000000, "fotoBarang"=>"uploads/tv.jpg"
        ],
        [
            "pemilik"=>"Doni", "nib"=>"22222", "lokasi"=>"Medan", "namaToko"=>"Doni Elektronik",
            "penghasilan"=>6000000, "jamOperasional"=>"09.00-20.00", "namaBarang"=>"Kulkas",
            "idBarang"=>"B004", "hargaBarang"=>5500000, "fotoBarang"=>"uploads/kulkas.jpg"
        ],
        [
            "pemilik"=>"Eka", "nib"=>"33333", "lokasi"=>"Makassar", "namaToko"=>"Eka Mart",
            "penghasilan"=>3500000, "jamOperasional"=>"07.00-15.00", "namaBarang"=>"Speaker",
            "idBarang"=>"B005", "hargaBarang"=>1200000, "fotoBarang"=>"uploads/speaker.jpg"
        ]
    ];
    file_put_contents($dataFile, json_encode($listToko, JSON_PRETTY_PRINT));
}

// Proses tambah data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fotoPath = "";
    if (isset($_FILES["fotoBarang"]) && $_FILES["fotoBarang"]["error"] == 0) {
        $fotoPath = "uploads/" . basename($_FILES["fotoBarang"]["name"]);
        move_uploaded_file($_FILES["fotoBarang"]["tmp_name"], $fotoPath);
    }

    $baru = [
        "pemilik"=>$_POST["pemilik"],
        "nib"=>$_POST["nib"],
        "lokasi"=>$_POST["lokasi"],
        "namaToko"=>$_POST["namaToko"],
        "penghasilan"=>$_POST["penghasilan"],
        "jamOperasional"=>$_POST["jamOperasional"],
        "namaBarang"=>$_POST["namaBarang"],
        "idBarang"=>$_POST["idBarang"],
        "hargaBarang"=>$_POST["hargaBarang"],
        "fotoBarang"=>$fotoPath
    ];
    $listToko[] = $baru;
    file_put_contents($dataFile, json_encode($listToko, JSON_PRETTY_PRINT));
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Manajemen Toko Elektronik</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        form { margin-bottom: 30px; }
        form input, .custom-file, button {
            display: block;
            margin: 8px 0;
            padding: 6px;
            width: 300px;
            max-width: 100%;
        }
        .custom-file { 
            position: relative; 
            display: inline-block; 
        }
        .custom-file input[type=file] { 
            display: none; 
        }
        .custom-file-label {
            background-color: #4CAF50; 
            color: white; 
            padding: 6px 12px; 
            border-radius: 4px; 
            cursor: pointer;
            font-size: 14px;
            display: inline-block;
        }
        table { border-collapse: collapse; width: 100%; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: center; }
        th { background: #f2f2f2; }
        img { max-width: 80px; max-height: 80px; }
    </style>
</head>
<body>
    <h2>Tambah Data Toko Elektronik</h2>
    <form method="post" enctype="multipart/form-data">
        <input type="text" name="pemilik" placeholder="Pemilik" required>
        <input type="text" name="nib" placeholder="NIB" required>
        <input type="text" name="lokasi" placeholder="Lokasi" required>
        <input type="text" name="namaToko" placeholder="Nama Toko" required>
        <input type="number" name="penghasilan" placeholder="Penghasilan" required>
        <input type="text" name="jamOperasional" placeholder="Jam Operasional" required>
        <input type="text" name="namaBarang" placeholder="Nama Barang" required>
        <input type="text" name="idBarang" placeholder="ID Barang" required>
        <input type="number" name="hargaBarang" placeholder="Harga Barang" required>

        <div class="custom-file">
            <label class="custom-file-label" for="fotoBarang">Tambah Foto</label>
            <input type="file" name="fotoBarang" id="fotoBarang" accept="image/*" required>
        </div>

        <button type="submit">Simpan</button>
    </form>

    <h2>Daftar Data</h2>
    <table>
        <tr>
            <th>Pemilik</th><th>NIB</th><th>Lokasi</th><th>Nama Toko</th>
            <th>Penghasilan</th><th>Jam Operasional</th>
            <th>Nama Barang</th><th>ID Barang</th><th>Harga</th><th>Foto</th>
        </tr>
        <?php foreach ($listToko as $t): ?>
        <tr>
            <td><?= htmlspecialchars($t["pemilik"]) ?></td>
            <td><?= htmlspecialchars($t["nib"]) ?></td>
            <td><?= htmlspecialchars($t["lokasi"]) ?></td>
            <td><?= htmlspecialchars($t["namaToko"]) ?></td>
            <td><?= htmlspecialchars($t["penghasilan"]) ?></td>
            <td><?= htmlspecialchars($t["jamOperasional"]) ?></td>
            <td><?= htmlspecialchars($t["namaBarang"]) ?></td>
            <td><?= htmlspecialchars($t["idBarang"]) ?></td>
            <td><?= htmlspecialchars($t["hargaBarang"]) ?></td>
            <td>
                <?php if (!empty($t["fotoBarang"])): ?>
                    <img src="<?= htmlspecialchars($t["fotoBarang"]) ?>">
                <?php else: ?>
                    Tidak ada
                <?php endif; ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
