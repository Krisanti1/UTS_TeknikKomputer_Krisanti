CREATE DATABASE IF NOT EXISTS nongkrongid CHARACTER SET utf8mb4;
USE nongkrongid;

CREATE TABLE IF NOT EXISTS admins (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS products (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(150) NOT NULL,
  category VARCHAR(80) NOT NULL,
  price INT NOT NULL DEFAULT 0,
  stock INT NOT NULL DEFAULT 0,
  description TEXT,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Akun admin: username "admin", password "password"
INSERT INTO admins (username, password) VALUES
('admin', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi');

INSERT INTO products (name, category, price, stock, description) VALUES
('Nasi Goreng Spesial', 'Makanan Berat', 15000, 30, 'Nasi goreng telur, ayam suwir, dan kerupuk'),
('Nasi Ayam Geprek', 'Makanan Berat', 16000, 35, 'Ayam crispy sambal geprek level pedas'),
('Nasi Uduk Komplit', 'Makanan Berat', 14000, 25, 'Nasi uduk, ayam goreng, tempe orek, sambal'),
('Nasi Rames Kantin', 'Makanan Berat', 13000, 40, 'Nasi dengan lauk sayur, telur, dan tempe'),
('Soto Ayam', 'Makanan Berat', 13000, 28, 'Soto ayam kuah bening dengan nasi'),
('Ayam Bakar Madu', 'Makanan Berat', 18000, 20, 'Ayam bakar bumbu madu plus lalapan'),
('Nasi Telur Balado', 'Makanan Berat', 12000, 30, 'Telur balado pedas manis dan nasi hangat'),
('Mie Ayam Bakso', 'Mie & Bakso', 14000, 30, 'Mie ayam dengan dua butir bakso'),
('Bakso Urat Jumbo', 'Mie & Bakso', 15000, 25, 'Bakso urat besar dengan mie dan kuah gurih'),
('Mie Goreng Jawa', 'Mie & Bakso', 13000, 25, 'Mie goreng bumbu khas Jawa'),
('Indomie Rebus Telur', 'Mie & Bakso', 9000, 45, 'Indomie kuah dengan telur dan sawi'),
('Kwetiau Goreng', 'Mie & Bakso', 15000, 18, 'Kwetiau goreng udang dan sayuran'),
('Bakwan Sayur', 'Gorengan', 2000, 80, 'Bakwan renyah isi wortel dan kol'),
('Tahu Isi', 'Gorengan', 2500, 70, 'Tahu goreng isi sayuran'),
('Tempe Mendoan', 'Gorengan', 2000, 90, 'Tempe tipis berbalut tepung bumbu'),
('Pisang Goreng', 'Gorengan', 2500, 60, 'Pisang kepok goreng krispi'),
('Risoles Mayo', 'Camilan', 4000, 50, 'Risoles isi sayur, telur, dan saus mayo'),
('Siomay Bandung', 'Camilan', 10000, 22, 'Siomay, tahu, kentang dengan saus kacang'),
('Cilok Bumbu Kacang', 'Camilan', 6000, 40, 'Cilok kenyal dengan bumbu kacang pedas'),
('Roti Bakar Coklat Keju', 'Camilan', 9000, 30, 'Roti bakar topping coklat dan keju'),
('Es Teh Manis', 'Minuman', 4000, 100, 'Teh manis dingin segar'),
('Es Jeruk Peras', 'Minuman', 6000, 60, 'Jeruk peras asli dengan es batu'),
('Kopi Susu Gula Aren', 'Minuman', 12000, 50, 'Kopi susu dingin dengan gula aren'),
('Es Cendol Dawet', 'Minuman', 8000, 35, 'Cendol santan dan gula merah'),
('Air Mineral 600ml', 'Minuman', 3500, 120, 'Air mineral kemasan botol');
