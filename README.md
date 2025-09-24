# TP2DPBO2425C2

/*saya Ajipati Alaga Putra dengan NIM 2409682
mengerjakan TP 1 dalam mata kuliah DPBO
untuk keberkahannya maka saya tidak akan melakukan kecurangan
sepertu yang telah di spesifikasikan Aamiin.*/

Design
![alt text](Design\Design.jpeg)

Atribut per Class

Perusahaan

NamaPemilik → nama pemilik usaha
NIB → Nomor Induk Berusaha sebagai identitas legal usaha
Lokasi → lokasi atau alamat usaha

Toko (turunan dari Perusahaan)

NamaToko → nama toko
Penghasilan → omset atau pendapatan toko
JamOperasional → jam buka toko

TokoElektronik (turunan dari Toko)

NamaBarang → nama barang elektronik yang dijual
IdBarang → kode unik barang
HargaBarang → harga barang

Method per Class

Perusahaan

__construct() / constructor → mengisi atribut dasar perusahaan
setNamaPemilik(), getNamaPemilik()
setNIB(), getNIB()
setLokasi(), getLokasi()

Toko

__construct() → memanggil constructor Perusahaan + mengisi atribut toko
setNamaToko(), getNamaToko()
setPenghasilan(), getPenghasilan()
setJamOperasional(), getJamOperasional()

TokoElektronik

__construct() → memanggil constructor Toko + mengisi atribut toko elektronik
setNamaBarang(), getNamaBarang()
setIdBarang(), getIdBarang()
setHargaBarang(), getHargaBarang()
setFotoBarang(), getFotoBarang() (khusus PHP)
tampilkanInfo() → mencetak data lengkap sesuai format tabel (C++, Java, Python pakai print/printf; PHP pakai echo dalam tabel HTML)


C++

Pada C++, seluruh data toko elektronik disimpan dalam sebuah vector<TokoElektronik> sehingga jumlah data dapat bertambah atau berkurang secara dinamis. User pertama-tama memilih menu yang tersedia, seperti menampilkan data atau menambahkan data baru. Saat menambah data, program meminta input dari user lalu membuat objek TokoElektronik baru menggunakan constructor yang akan mengisi atribut mulai dari NamaPemilik, NIB, Lokasi, hingga NamaBarang dan HargaBarang. Objek tersebut kemudian dimasukkan ke dalam vector. Saat menampilkan data, program menghitung lebar kolom secara dinamis dari panjang data, lalu mencetak tabel rapi dengan memanggil getter tiap atribut. Dengan pendekatan ini, penambahan, pengubahan, maupun penampilan data dapat dilakukan secara terstruktur.

Dokumentasi:[![Dokumentasi Video](https://raw.githubusercontent.com/Alagaputra/TP1DPBO2425C2/main)](https://youtu.be/D6xHh-HEA_E)

Java

Pada Java, program memanfaatkan ArrayList<TokoElektronik> untuk menampung data toko elektronik. Kelas Perusahaan, Toko, dan TokoElektronik dibuat terpisah, masing-masing berisi atribut privat dan dilengkapi setter serta getter. User dapat menambahkan data dummy atau data baru yang diinput melalui Scanner. Ketika data ditampilkan, program menghitung panjang maksimum setiap kolom, lalu mencetak tabel secara terformat menggunakan System.out.printf. Sama seperti di C++, konstruktor TokoElektronik secara otomatis memanggil konstruktor parent (Toko dan Perusahaan) sehingga data diturunkan berjenjang.

Dokumentasi:[![Dokumentasi Video](https://raw.githubusercontent.com/Alagaputra/TP1DPBO2425C2/main)](https://youtu.be/ZEaGRPlkwWs)




Python

Pada Python, program menggunakan list untuk menampung objek TokoElektronik. Kelas dibuat dengan struktur pewarisan yang sama: Perusahaan → Toko → TokoElektronik. Atribut bersifat privat (menggunakan konvensi underscore) dan diakses melalui property (getter dan setter). Untuk menampilkan data, program menghitung panjang maksimum setiap kolom, lalu membuat tabel teks yang proporsional. User dapat menambah data baru lewat input terminal, dan objek akan ditambahkan ke list. Proses pewarisan constructor berjalan otomatis dengan memanggil super().__init__, memastikan semua atribut dari Perusahaan dan Toko ikut terisi.

Dokumentasi:[![Dokumentasi Video](https://raw.githubusercontent.com/Alagaputra/TP1DPBO2425C2/main)](https://youtu.be/Bw-aW4tWwPk)


PHP

Pada PHP, program terdiri dari beberapa class (Perusahaan.php, Toko.php, TokoElektronik.php) dan satu file utama index.php untuk menampilkan form dan tabel. Data toko elektronik disimpan dalam file lokal JSON agar tetap persisten meski tanpa database. Atribut tambahan berupa FotoBarang digunakan khusus di PHP untuk menyimpan path foto barang. User dapat menambahkan data melalui form HTML yang sudah mendukung upload foto. File yang diupload dipindahkan ke folder uploads/ lalu path-nya disimpan dalam JSON bersama data lain. Tabel di halaman web menampilkan semua data termasuk gambar barang. Dengan cara ini, PHP tidak hanya mengelola data teks tetapi juga mendukung media visual.

Dokumentasi: [![Dokumentasi Video](https://raw.githubusercontent.com/Alagaputra/TP1DPBO2425C2/main)](https://youtu.be/7CXF7cTxL8g)


