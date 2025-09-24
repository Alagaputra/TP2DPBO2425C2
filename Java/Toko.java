public class Toko extends Perusahaan {
    private String namaToko;
    private double penghasilan;
    private String jamOperasional;

    public Toko(String pemilik, String nib, String lokasi,
                String namaToko, double penghasilan, String jamOperasional) {
        super(pemilik, nib, lokasi);
        this.namaToko = namaToko;
        this.penghasilan = penghasilan;
        this.jamOperasional = jamOperasional;
    }

    // Setter
    public void setNamaToko(String v) { namaToko = v; }
    public void setPenghasilan(double v) { penghasilan = v; }
    public void setJamOperasional(String v) { jamOperasional = v; }

    // Getter
    public String getNamaToko() { return namaToko; }
    public double getPenghasilan() { return penghasilan; }
    public String getJamOperasional() { return jamOperasional; }
}
