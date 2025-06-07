CREATE DATABASE volunteer_db;

USE volunteer_db;

CREATE TABLE volunteer (
  id_nama INT AUTO_INCREMENT PRIMARY KEY,
  nama_vol VARCHAR(50),
  pass_vol VARCHAR(50),
  cek_skor INT
);

INSERT INTO volunteer (nama_vol, pass_vol, cek_skor) VALUES
('ais', '123456', 70),
('gigiz', '123456', 70),
('dhea', '123456', 70),
('pia', '123456', 70);
