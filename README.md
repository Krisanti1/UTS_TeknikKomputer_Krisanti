# UTS_TeknikKomputer_Krisanti

# NongkrongId - UTS (Admin Login & CRUD Menu Kantin)

- Nama   : Krisanti
- NIM    : 25110048 
- Prodi  : Teknik Komputer

## Fitur
1. Login Admin berbasis UI (session + `password_verify`).
2. Dashboard admin (redirect otomatis setelah login berhasil) dengan:
   - **Create** menu baru
   - **Update** menu yang sudah ada
   - **Delete** menu yang tidak lagi dijual / discontinued
   - Pencarian menu berdasarkan nama/kategori
   - Ringkasan: total menu, total stok, jumlah kategori
3. Data dummy **25 menu kantin** (Makanan Berat, Mie & Bakso, Gorengan, Camilan, Minuman) di `database.sql`.
4. Halaman admin diproteksi: tanpa login akan diarahkan ke `login.php`.

## Teknologi
PHP Native (PDO), MySQL, Bootstrap 5 (CDN), custom CSS (`assets/style.css`), XAMPP.

## Struktur Folder
```
nongkrongid/
├── admin/
│   ├── _top.php / _bottom.php / _form.php   (layout & form)
│   ├── index.php    (daftar menu / Read)
│   ├── create.php   (tambah menu)
│   ├── edit.php     (ubah menu)
│   └── delete.php   (hapus menu)
├── assets/style.css (tema oranye NongkrongId)
├── screenshoot/     (bukti screenshot hasil kerja)
├── config.php       (koneksi database & helper)
├── database.sql     (struktur tabel + 25 data dummy + akun admin)
├── login.php
├── logout.php
└── README.md
```

## Cara Menjalankan
1. Jalankan **Apache** dan **MySQL** di XAMPP.
2. Salin folder project ke `C:\xampp\htdocs\nongkrongid`.
3. Buka `http://localhost/phpmyadmin`, lalu **Import** file `database.sql`.
4. Buka `http://localhost/nongkrongid/login.php`.
5. Login dengan akun:
   - Username: `admin`
   - Password: `password`

## Screenshot
Lihat folder `screenshoot/`:
- `01-login.png` - halaman login
- `02-dashboard.png` - dashboard daftar menu (25 data)
- `03-create.png` - form tambah menu
- `04-update.png` - form edit menu
- `05-delete.png` - konfirmasi hapus menu
