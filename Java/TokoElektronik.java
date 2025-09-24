import java.util.*;

public class TokoElektronik extends Toko {
    private String namaBarang;
    private String idBarang;
    private double hargaBarang;

    public TokoElektronik(String pemilik, String nib, String lokasi,
                          String namaToko, double penghasilan, String jamOperasional,
                          String namaBarang, String idBarang, double hargaBarang) {
        super(pemilik, nib, lokasi, namaToko, penghasilan, jamOperasional);
        this.namaBarang = namaBarang;
        this.idBarang = idBarang;
        this.hargaBarang = hargaBarang;
    }

    // Setter
    public void setNamaBarang(String v) { namaBarang = v; }
    public void setIdBarang(String v) { idBarang = v; }
    public void setHargaBarang(double v) { hargaBarang = v; }

    // Getter
    public String getNamaBarang() { return namaBarang; }
    public String getIdBarang() { return idBarang; }
    public double getHargaBarang() { return hargaBarang; }

    public List<String> getRow() {
        return Arrays.asList(
            getPemilik(), getNib(), getLokasi(), getNamaToko(),
            String.valueOf((long)getPenghasilan()), getJamOperasional(),
            getNamaBarang(), getIdBarang(), String.valueOf((long)getHargaBarang())
        );
    }

    public static List<String> getHeader() {
        return Arrays.asList("Pemilik","NIB","Lokasi","Nama Toko","Omset","Jam","Barang","ID","Harga");
    }
}
