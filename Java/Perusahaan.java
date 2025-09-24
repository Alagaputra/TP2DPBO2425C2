public class Perusahaan {
    private String pemilik;
    private String nib;
    private String lokasi;

    public Perusahaan(String pemilik, String nib, String lokasi) {
        this.pemilik = pemilik;
        this.nib = nib;
        this.lokasi = lokasi;
    }

    // Setter
    public void setPemilik(String v) { pemilik = v; }
    public void setNib(String v) { nib = v; }
    public void setLokasi(String v) { lokasi = v; }

    // Getter
    public String getPemilik() { return pemilik; }
    public String getNib() { return nib; }
    public String getLokasi() { return lokasi; }
}
