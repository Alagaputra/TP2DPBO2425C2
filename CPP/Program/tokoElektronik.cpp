#include "toko.cpp"

#include <iostream>
#include <string>
#include <vector>
#include <iomanip> // buat setw & left
using namespace std;


class TokoElektronik {
private:
    string pemilik, nib, lokasi, namaToko, jamOperasional, namaBarang, idBarang;
    double penghasilan, hargaBarang;

public:
    // Constructor
    TokoElektronik(string pemilik, string nib, string lokasi,
                   string namaToko, double penghasilan, string jamOperasional,
                   string namaBarang, string idBarang, double hargaBarang) {
        setPemilik(pemilik);
        setNib(nib);
        setLokasi(lokasi);
        setNamaToko(namaToko);
        setPenghasilan(penghasilan);
        setJamOperasional(jamOperasional);
        setNamaBarang(namaBarang);
        setIdBarang(idBarang);
        setHargaBarang(hargaBarang);
    }

    // Setter
    void setPemilik(string v) { pemilik = v; }
    void setNib(string v) { nib = v; }
    void setLokasi(string v) { lokasi = v; }
    void setNamaToko(string v) { namaToko = v; }
    void setPenghasilan(double v) { penghasilan = v; }
    void setJamOperasional(string v) { jamOperasional = v; }
    void setNamaBarang(string v) { namaBarang = v; }
    void setIdBarang(string v) { idBarang = v; }
    void setHargaBarang(double v) { hargaBarang = v; }

    // Getter
    string getPemilik() const { return pemilik; }
    string getNib() const { return nib; }
    string getLokasi() const { return lokasi; }
    string getNamaToko() const { return namaToko; }
    double getPenghasilan() const { return penghasilan; }
    string getJamOperasional() const { return jamOperasional; }
    string getNamaBarang() const { return namaBarang; }
    string getIdBarang() const { return idBarang; }
    double getHargaBarang() const { return hargaBarang; }

    // Ambil data per baris (pakai getter)
    vector<string> getRow() const {
        return {
            getPemilik(), getNib(), getLokasi(), getNamaToko(),
            to_string((long long)getPenghasilan()),
            getJamOperasional(), getNamaBarang(), getIdBarang(),
            to_string((long long)getHargaBarang())
        };
    }

    static vector<string> getHeader() {
        return {"Pemilik","NIB","Lokasi","Nama Toko","Omset","Jam","Barang","ID","Harga"};
    }
};

// Fungsi tampilkan tabel dinamis
void tampilkanData(vector<TokoElektronik> &data) {
    if (data.empty()) {
        cout << "Data masih kosong!\n";
        return;
    }

    auto header = TokoElektronik::getHeader();
    vector<size_t> widths(header.size(), 0);

    for (size_t i = 0; i < header.size(); i++)
        widths[i] = header[i].size();

    for (auto &t : data) {
        auto row = t.getRow();
        for (size_t i = 0; i < row.size(); i++)
            widths[i] = max(widths[i], row[i].size());
    }

    for (size_t i = 0; i < header.size(); i++)
        cout << left << setw(widths[i]+2) << header[i];
    cout << endl;

    for (size_t i = 0; i < header.size(); i++)
        cout << string(widths[i]+2,'-');
    cout << endl;

    for (auto &t : data) {
        auto row = t.getRow();
        for (size_t i = 0; i < row.size(); i++)
            cout << left << setw(widths[i]+2) << row[i];
        cout << endl;
    }
}

