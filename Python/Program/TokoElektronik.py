from Toko import Toko

class TokoElektronik(Toko):
    def __init__(self, pemilik, nib, lokasi,
                 namaToko, penghasilan, jamOperasional,
                 namaBarang, idBarang, hargaBarang):
        super().__init__(pemilik, nib, lokasi, namaToko, penghasilan, jamOperasional)
        self._namaBarang = namaBarang
        self._idBarang = idBarang
        self._hargaBarang = hargaBarang

    # Setter
    def setNamaBarang(self, v): self._namaBarang = v
    def setIdBarang(self, v): self._idBarang = v
    def setHargaBarang(self, v): self._hargaBarang = v

    # Getter
    def getNamaBarang(self): return self._namaBarang
    def getIdBarang(self): return self._idBarang
    def getHargaBarang(self): return self._hargaBarang

    def getRow(self):
        return [
            self.getPemilik(), self.getNib(), self.getLokasi(),
            self.getNamaToko(), str(int(self.getPenghasilan())),
            self.getJamOperasional(), self.getNamaBarang(),
            self.getIdBarang(), str(int(self.getHargaBarang()))
        ]

    @staticmethod
    def getHeader():
        return ["Pemilik","NIB","Lokasi","Nama Toko","Omset","Jam","Barang","ID","Harga"]
