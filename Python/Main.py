from TokoElektronik import TokoElektronik

def tampilkanData(data):
    if not data:
        print("Data masih kosong!")
        return

    header = TokoElektronik.getHeader()
    widths = [len(h) for h in header]

    for t in data:
        row = t.getRow()
        for i in range(len(row)):
            widths[i] = max(widths[i], len(row[i]))

    for i, h in enumerate(header):
        print(h.ljust(widths[i] + 2), end="")
    print()

    for i in range(len(header)):
        print("-" * (widths[i] + 2), end="")
    print()

    for t in data:
        row = t.getRow()
        for i, val in enumerate(row):
            print(val.ljust(widths[i] + 2), end="")
        print()

def main():
    data = [
        TokoElektronik("Andi","12345","Jakarta","Toko Andi",5000000,"09.00-17.00","Laptop","B001",7500000),
        TokoElektronik("Budi","67890","Bandung","Budi Elektronik",3000000,"10.00-18.00","HP","B002",2500000),
        TokoElektronik("Citra","54321","Surabaya","Citra Jaya",4000000,"08.00-16.00","TV","B003",3500000),
        TokoElektronik("Dewi","98765","Medan","Dewi Elektronik",6000000,"09.00-19.00","Kulkas","B004",5500000),
        TokoElektronik("Eko","19283","Bali","Eko Elektronik",4500000,"11.00-20.00","Mesin Cuci","B005",3000000)
    ]

    while True:
        print("\n=== MENU TOKO ELEKTRONIK ===")
        print("1. Tampilkan Data")
        print("2. Tambah Data")
        print("3. Keluar")
        pilihan = input("Pilih: ")

        if pilihan == "1":
            tampilkanData(data)
        elif pilihan == "2":
            pemilik = input("Masukkan Nama Pemilik: ")
            nib = input("Masukkan NIB: ")
            lokasi = input("Masukkan Lokasi: ")
            namaToko = input("Masukkan Nama Toko: ")
            penghasilan = float(input("Masukkan Penghasilan: "))
            jam = input("Masukkan Jam Operasional: ")
            namaBarang = input("Masukkan Nama Barang: ")
            idBarang = input("Masukkan ID Barang: ")
            harga = float(input("Masukkan Harga Barang: "))
            data.append(TokoElektronik(pemilik,nib,lokasi,namaToko,penghasilan,jam,namaBarang,idBarang,harga))
            print("Data berhasil ditambahkan!")
        elif pilihan == "3":
            print("Program selesai.")
            break

if __name__ == "__main__":
    main()
