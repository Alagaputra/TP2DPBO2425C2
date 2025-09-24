#include "perusahaan.cpp"

// ================== CLASS TOKO ==================
class Toko : public Perusahaan {
private:
    string namaToko;
    double penghasilan;
    string jamOperasional;

public:
    Toko(string pemilik, string nib, string lokasi,
         string namaToko, double penghasilan, string jamOperasional)
        : Perusahaan(pemilik, nib, lokasi) {
        this->namaToko = namaToko;
        this->penghasilan = penghasilan;
        this->jamOperasional = jamOperasional;
    }

    // Setter & Getter
    void setNamaToko(string namaToko) { this->namaToko = namaToko; }
    string getNamaToko() { return namaToko; }

    void setPenghasilan(double penghasilan) { this->penghasilan = penghasilan; }
    double getPenghasilan() { return penghasilan; }

    void setJamOperasional(string jamOperasional) { this->jamOperasional = jamOperasional; }
    string getJamOperasional() { return jamOperasional; }
};