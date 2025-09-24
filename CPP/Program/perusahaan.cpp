#include <iostream>
#include <iomanip>
#include <string>
using namespace std;

class Perusahaan {
private:
    string pemilik;
    string nib;
    string lokasi;

public:
    Perusahaan(string pemilik, string nib, string lokasi) {
        this->pemilik = pemilik;
        this->nib = nib;
        this->lokasi = lokasi;
    }

    // Setter & Getter
    void setPemilik(string pemilik) { this->pemilik = pemilik; }
    string getPemilik() { return pemilik; }

    void setNib(string nib) { this->nib = nib; }
    string getNib() { return nib; }

    void setLokasi(string lokasi) { this->lokasi = lokasi; }
    string getLokasi() { return lokasi; }
};
