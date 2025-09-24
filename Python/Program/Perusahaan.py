class Perusahaan:
    def __init__(self, pemilik, nib, lokasi):
        self._pemilik = pemilik
        self._nib = nib
        self._lokasi = lokasi

    # Setter
    def setPemilik(self, pemilik): self._pemilik = pemilik
    def setNib(self, nib): self._nib = nib
    def setLokasi(self, lokasi): self._lokasi = lokasi

    # Getter
    def getPemilik(self): return self._pemilik
    def getNib(self): return self._nib
    def getLokasi(self): return self._lokasi
