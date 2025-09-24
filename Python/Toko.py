from Perusahaan import Perusahaan

class Toko(Perusahaan):
    def __init__(self, pemilik, nib, lokasi, namaToko, penghasilan, jamOperasional):
        super().__init__(pemilik, nib, lokasi)
        self._namaToko = namaToko
        self._penghasilan = penghasilan
        self._jamOperasional = jamOperasional

    # Setter
    def setNamaToko(self, v): self._namaToko = v
    def setPenghasilan(self, v): self._penghasilan = v
    def setJamOperasional(self, v): self._jamOperasional = v

    # Getter
    def getNamaToko(self): return self._namaToko
    def getPenghasilan(self): return self._penghasilan
    def getJamOperasional(self): return self._jamOperasional
