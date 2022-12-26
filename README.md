# Lab12Web
## Ananda Fachri Reynaldi
## 312110248
## TI.21.B1
<br>
<b>XAMPP</b>

Buka XAMPP Control Lalu Klik `Start` untuk menjalankan MySQL Server. Pastikan web server Apache dan MySQL Server sudah dijalankan.
![Step1](SS/SS1.png)<br>

<b> Membuat Pencarian Data</b>

Pada data awal, query untuk menampilkan semua data adalah : 
```
$sql = “SELECT * FROM data_barang”;
```
Nah untuk menambahkan pencarian, maka query tersebut harus ditambahkan klausa WHERE sebagai 
filter, sehingga menjadi:
```
$sql = “SELECT * FROM data_barang WHERE nama = ‘{$var_nama}’”;
```
Atau dapat juga menggunakan LIKE seperti berikut:
```
$sql = “SELECT * FROM data_barang WHERE nama LIKE ‘{$var_nama}%’”;
```

Mengubah Query dan tambahkan filter pencarian pada Query tersebut
![Step2](SS/SS2.png)<br>

Membuat Form Pencarian
![Step3](SS/SS3.png)<br>

Setelah itu uji coba gunakan URL :
```
http://localhost/lab12_php_cari/index.php
```
![Step4](SS/SS4.png)<br>

Mencoba untuk mencari barang dengan keyword `HP`<br>
![Step5](SS/SS5.png)<br>

Hasilnya :<br>
![Step6](SS/SS6.png)<br>