#include "tokoElektronik.cpp"
#include <vector>

int main() {
    vector<TokoElektronik> data = {
        TokoElektronik("Andi","12345","Jakarta","Toko Andi",5000000,"09.00-17.00","Laptop","B001",7500000),
        TokoElektronik("Budi","67890","Bandung","Budi Elektronik",3000000,"10.00-18.00","HP","B002",2500000),
        TokoElektronik("Citra","54321","Surabaya","Citra Jaya",4000000,"08.00-16.00","TV","B003",3500000),
        TokoElektronik("Dewi","98765","Medan","Dewi Elektronik",6000000,"09.00-19.00","Kulkas","B004",5500000),
        TokoElektronik("Eko","19283","Bali","Eko Elektronik",4500000,"11.00-20.00","Mesin Cuci","B005",3000000)

    };

    int pilihan;
    do {
        cout << "\n=== MENU TOKO ELEKTRONIK ===\n";
        cout << "1. Tampilkan Data\n";
        cout << "2. Tambah Data\n";
        cout << "3. Keluar\n";
        cout << "Pilih: ";
        cin >> pilihan;

        if (pilihan == 1) {
            tampilkanData(data);
        }
        else if (pilihan == 2) {
            string pemilik, nib, lokasi, namaToko, jam, namaBarang, idBarang;
            double penghasilan, harga;
            cout << "Masukkan Nama Pemilik: "; cin >> pemilik;
            cout << "Masukkan NIB: "; cin >> nib;
            cout << "Masukkan Lokasi: "; cin >> lokasi;
            cout << "Masukkan Nama Toko: "; cin >> namaToko;
            cout << "Masukkan Penghasilan: "; cin >> penghasilan;
            cout << "Masukkan Jam Operasional: "; cin >> jam;
            cout << "Masukkan Nama Barang: "; cin >> namaBarang;
            cout << "Masukkan ID Barang: "; cin >> idBarang;
            cout << "Masukkan Harga Barang: "; cin >> harga;
            data.push_back(TokoElektronik(pemilik,nib,lokasi,namaToko,penghasilan,jam,namaBarang,idBarang,harga));
            cout << "Data berhasil ditambahkan!\n";
        }
    } while (pilihan != 3);

    cout << "Program selesai.\n";
}
