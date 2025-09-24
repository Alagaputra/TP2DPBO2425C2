import java.util.*;

public class Main {
    public static void tampilkanData(List<TokoElektronik> data) {
        if (data.isEmpty()) {
            System.out.println("Data masih kosong!");
            return;
        }

        List<String> header = TokoElektronik.getHeader();
        int[] widths = new int[header.size()];

        for (int i = 0; i < header.size(); i++) {
            widths[i] = header.get(i).length();
        }

        for (TokoElektronik t : data) {
            List<String> row = t.getRow();
            for (int i = 0; i < row.size(); i++) {
                widths[i] = Math.max(widths[i], row.get(i).length());
            }
        }

        for (int i = 0; i < header.size(); i++) {
            System.out.print(String.format("%-" + (widths[i] + 2) + "s", header.get(i)));
        }
        System.out.println();

        for (int i = 0; i < header.size(); i++) {
            System.out.print("-".repeat(widths[i] + 2));
        }
        System.out.println();

        for (TokoElektronik t : data) {
            List<String> row = t.getRow();
            for (int i = 0; i < row.size(); i++) {
                System.out.print(String.format("%-" + (widths[i] + 2) + "s", row.get(i)));
            }
            System.out.println();
        }
    }

    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        List<TokoElektronik> data = new ArrayList<>();
        data.add(new TokoElektronik("Andi","12345","Jakarta","Toko Andi",5000000,"09.00-17.00","Laptop","B001",7500000));
        data.add(new TokoElektronik("Budi","67890","Bandung","Budi Elektronik",3000000,"10.00-18.00","HP","B002",2500000));
        data.add(new TokoElektronik("Citra","54321","Surabaya","Citra Jaya",4000000,"08.00-16.00","TV","B003",3500000));
        data.add(new TokoElektronik("Dewi","98765","Medan","Dewi Elektronik",6000000,"09.00-19.00","Kulkas","B004",5500000));
        data.add(new TokoElektronik("Eko","19283","Bali","Eko Elektronik",4500000,"11.00-20.00","Mesin Cuci","B005",3000000));
        int pilihan;
        do {
            System.out.println("\n=== MENU TOKO ELEKTRONIK ===");
            System.out.println("1. Tampilkan Data");
            System.out.println("2. Tambah Data");
            System.out.println("3. Keluar");
            System.out.print("Pilih: ");
            pilihan = sc.nextInt();
            sc.nextLine();

            if (pilihan == 1) {
                tampilkanData(data);
            } else if (pilihan == 2) {
                System.out.print("Masukkan Nama Pemilik: "); String pemilik = sc.nextLine();
                System.out.print("Masukkan NIB: "); String nib = sc.nextLine();
                System.out.print("Masukkan Lokasi: "); String lokasi = sc.nextLine();
                System.out.print("Masukkan Nama Toko: "); String namaToko = sc.nextLine();
                System.out.print("Masukkan Penghasilan: "); double penghasilan = sc.nextDouble(); sc.nextLine();
                System.out.print("Masukkan Jam Operasional: "); String jam = sc.nextLine();
                System.out.print("Masukkan Nama Barang: "); String namaBarang = sc.nextLine();
                System.out.print("Masukkan ID Barang: "); String idBarang = sc.nextLine();
                System.out.print("Masukkan Harga Barang: "); double harga = sc.nextDouble(); sc.nextLine();

                data.add(new TokoElektronik(pemilik,nib,lokasi,namaToko,penghasilan,jam,namaBarang,idBarang,harga));
                System.out.println("Data berhasil ditambahkan!");
            }
        } while (pilihan != 3);

        System.out.println("Program selesai.");
    }
}
