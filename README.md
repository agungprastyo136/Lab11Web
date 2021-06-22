# Praktikum ke-11 Dan Praktikum ke-12

* Sebelum Memulai praktikum anda harus mengaktifkan (Start) terlebih dahulu Apache dan MySQL pada Xampp . Setelah selesai maka jangan Lupa membuka text editor misalnya yang saya gunakan yaitu : Sublime text
* Nah kali ini berbeda dengan Praktikum yang lainnya kali ini kita praktikum tentang PHP Framework, yaitu pertama-tama Buka
xampp Apache kemudian config lalu pilih "`Php.ini`"

![xampp_config](https://user-images.githubusercontent.com/56245855/122659605-fd088300-d1a3-11eb-9c27-b3650012ca42.PNG)


![config](https://user-images.githubusercontent.com/56245855/122659701-af404a80-d1a4-11eb-8cf0-285ea201b88c.PNG)

* Kemudian hilangkan titik koma "`;`" pada baris yang di blok seperti di atas. Lalu simpan file dan aktifkan kembali module apache pada control panel dengan menekan tombol "start".

* langkah selanjutnya unduh codeigniter, extrack filenya dan masukan ke dalam xampp/htdocs

![download_codelgniter4](https://user-images.githubusercontent.com/56245855/122659756-2d045600-d1a5-11eb-94c7-db40f1ce206f.PNG)


* Kemudian akses folder  "`lab11_php_ci/ci4/public/`" maka hasilnya seperti ini


![tampilan_codelgniter](https://user-images.githubusercontent.com/56245855/122659810-c6cc0300-d1a5-11eb-8e98-1581090a2a40.PNG)


* Kemudian Codeigniter 4 menyediakan CLI untuk mempermudah proses development. Untuk 
mengakses CLI buka terminal/command prompt.

* Arahkan lokasi direktori sesuai dengan direktori kerja project dibuat ( "`xampp/htdocs/lab11_php_ci/ci4/public/`")

* Perintah yang dapat dijalankan untuk memanggil CLI Codeigniter adalah: "`php spark`"


![cmd_PhpSpark](https://user-images.githubusercontent.com/56245855/122659873-583b7500-d1a6-11eb-94de-6c154ff79a54.PNG)


# Mengaktifkan Mode Debugging

* Codeigniter 4 menyediakan fitur debugging untuk memudahkan developer untuk mengetahui pesan error apabila terjadi kesalahan dalam membuat kode program.Secara default fitur ini belum aktif. Ketika terjadi error pada aplikasi akan ditampilkan 
pesan kesalahan seperti berikut.


![whoops](https://user-images.githubusercontent.com/56245855/122659914-c718ce00-d1a6-11eb-9714-8eb938254e49.PNG)


* Semua jenis error akan ditampilkan sama. Untuk memudahkan mengetahui jenis errornya, maka perlu diaktifkan mode debugging dengan mengubah nilai konfigurasi pada environment variable "`CI_ENVIRINMENT menjadi development.`"


* Ubah nama file env menjadi .env kemudian buka file tersebut dan ubah nilai variable "`CI_ENVIRINMENT menjadi development.`"


![environment](https://user-images.githubusercontent.com/56245855/122659944-1a8b1c00-d1a7-11eb-8146-f7c95d719d27.PNG)


* Setelah Mengaktifkan Mode Debugging maka hasilnya seperti ini : 
* Contoh error yang terjadi. Untuk mencoba error tersebut, ubah kode pada file 
app/Controller/Home.php hilangkan titik koma pada akhir kode "`('welcome_message') ; `"


![debugging](https://user-images.githubusercontent.com/56245855/122659994-91281980-d1a7-11eb-8126-9ee48e7d19b8.PNG)


* Pada Codeigniter, request yang diterima oleh file index.php akan diarahkan ke Router untuk meudian oleh router tesebut diarahkan ke Controller. Router terletak pada file app/config/Routes.php

* Membuat Route Baru.
Tambahkan kode berikut di dalam Routes.php
"`$routes->get('/about', 'Page::about'); `"
"`$routes->get('/contact', 'Page::contact'); `"
"`$routes->get('/faqs', 'Page::faqs'); `"

![RoutesST](https://user-images.githubusercontent.com/56245855/122660088-7c985100-d1a8-11eb-8828-dbc789e2475e.PNG)


* Untuk mengetahui route yang ditambahkan sudah benar, buka CLI dan jalankan 
perintah berikut. "`php spark routes`"


![php_sparkRoutes](https://user-images.githubusercontent.com/56245855/122660148-2677dd80-d1a9-11eb-844a-d6b9f95a7277.PNG)


* Selanjutnya coba akses route yang telah dibuat dengan mengakses alamat url 
http://localhost:8080/about


![filenotfound](https://user-images.githubusercontent.com/56245855/122660157-41e2e880-d1a9-11eb-8e98-8b803a3da5ae.PNG)


* Ketika diakses akan mucul tampilan error 404 file not found, itu artinya file/page tersebut tidak ada. Untuk dapat mengakses halaman tersebut, harus dibuat terlebih dahulu Contoller yang sesuai dengan routing yang dibuat yaitu Contoller Page.

* Membuat Controller
Selanjutnya adalah membuat Controller Page. Buat file baru dengan nama page.php 
pada direktori Controller kemudian isi kodenya seperti berikut


![5_ST](https://user-images.githubusercontent.com/56245855/122660219-01d03580-d1aa-11eb-91ff-be8525f83ad4.PNG)


* Selanjutnya refresh Kembali browser, maka akan ditampilkan hasilnya yaotu halaman 
sudah dapat diakses


![halamanAbout 1](https://user-images.githubusercontent.com/56245855/122660242-2d532000-d1aa-11eb-96bc-0c04aff613e1.PNG)



# Auto Routing
* Secara default fitur autoroute pada Codeiginiter sudah aktif. Untuk mengubah status autoroute dapat mengubah nilai variabelnya. Untuk menonaktifkan ubah nilai truemenjadi false.
 "`$routes->setAutoRoute(true);  `"
Tambahkan method baru pada Controller Page seperti berikut.
 "`public function tos() `"
 "`{ `"
  "`echo "ini halaman Term of Services";  `"
 "`}`"

* Method ini belum ada pada routing, sehingga cara mengaksesnya dengan menggunakan 
alamat: http://localhost:8080/page/tos


![5](https://user-images.githubusercontent.com/56245855/122660244-36dc8800-d1aa-11eb-85ef-a2db0634594a.PNG)



# Membuat View
* Selanjutnya adalam membuat view untuk tampilan web agar lebih menarik. Buat file baru dengan nama about.php pada direktori view (app/view/about.php) kemudian isi 
kodenya seperti berikut.


![membuatView](https://user-images.githubusercontent.com/56245855/122660263-5ffd1880-d1aa-11eb-997f-265e99ee40e8.PNG)


* Ubah method about pada class Controller Page menjadi seperti berikut:


![mengubahMethod_aboutST](https://user-images.githubusercontent.com/56245855/122660308-a94d6800-d1aa-11eb-833b-54b665d1f8e1.PNG)


* Kemudian lakukan refresh pada halaman tersebut.


![6](https://user-images.githubusercontent.com/56245855/122660323-cd10ae00-d1aa-11eb-931a-9689f98605a7.PNG)



# Membuat Layout Web dengan CSS

* Pada dasarnya layout web dengan css dapat diimplamentasikan dengan mudah pada codeigniter. Yang perlu diketahui adalah, pada Codeigniter 4 file yang menyimpan asset css dan javascript terletak pada direktori public. 

* Buat file css pada direktori public dengan nama style.css (copy file dari praktikum 
lab4_layout. Kita akan gunakan layout yang pernah dibuat pada praktikum 4.


![membuatStyle css](https://user-images.githubusercontent.com/56245855/122660380-47413280-d1ab-11eb-9a3a-624c20471ace.PNG)


* Kemudian buat folder template pada direktori view kemudian buat file header.php dan footer.php

* File app/view/template/header.php


![headerST](https://user-images.githubusercontent.com/56245855/122660425-a010cb00-d1ab-11eb-93a8-774f4869183e.PNG)


* File app/view/template/footer.php


![footerST](https://user-images.githubusercontent.com/56245855/122660437-c0d92080-d1ab-11eb-8acf-9b20e8842ffb.PNG)


* Kemudian ubah file app/view/about.php seperti berikut.


![aboutST](https://user-images.githubusercontent.com/56245855/122660440-d3535a00-d1ab-11eb-8ee6-719a0c9bc2ab.PNG)



* Selanjutnya refresh tampilan pada alamat http://localhost:8080/about


![hasilAkhir_about](https://user-images.githubusercontent.com/56245855/122660459-f0882880-d1ab-11eb-9b28-328135270696.PNG)



# Pertanyaan dan Tugas

* Lengkapi kode program untuk menu lainnya yang ada pada Controller Page, sehingga semua link pada navigasi header dapat menampilkan tampilan dengan layout yang sama.


# tambahkan beberapa controller


* Seperti about, artikel dan contact


![stukturFile](https://user-images.githubusercontent.com/56245855/122660616-13ffa300-d1ad-11eb-8750-56f6e8de10e4.PNG)



![tugasPage](https://user-images.githubusercontent.com/56245855/122660553-950a6a80-d1ac-11eb-8638-f18cc48d53c8.PNG)



* Kemudian isi file about.php


![tugas_aboutST](https://user-images.githubusercontent.com/56245855/122660589-d3a02500-d1ac-11eb-855b-a97235944807.PNG)



# kemudian hasil dari Halaman about.php, artikel.php, dan contact.php


![tugas_aboutPNG](https://user-images.githubusercontent.com/56245855/122660677-53c68a80-d1ad-11eb-89da-1a1360181924.PNG)


![halamanArtikel](https://user-images.githubusercontent.com/56245855/122660697-6640c400-d1ad-11eb-96f4-cafcf6cac32e.PNG)


![halamanKontak](https://user-images.githubusercontent.com/56245855/122660706-79539400-d1ad-11eb-933c-b8b586d2313f.PNG)






# Praktikum ke-12 (Lanjutan dari Praktikum ke-11)

# Membuat Database

* Pertama-tama buatlah database dan juga tabel pada `http://localhost/phpmyadmin/` sebagai contoh databasenya `lab_ci4`
dan tabelenya `artikel` .

![StrukturTable](https://user-images.githubusercontent.com/56245855/122969363-bfc80f00-d3b6-11eb-9b50-da6f81adcadf.PNG)


* Kemudian Konfigurasi untuk menghubungkan database server, pada file `.env` ,  dibawah ini adalah konfigurasi database yang belum di ubah.


![configurasiDatabase](https://user-images.githubusercontent.com/56245855/122969828-50065400-d3b7-11eb-8237-7f5ad5d9111f.PNG)



![ubahconfigDatabase](https://user-images.githubusercontent.com/56245855/122970001-817f1f80-d3b7-11eb-9f25-b2e9e8c39f05.PNG)



* Yang di ubah adalah `#` , kemudian pada `database = lab_ci4` ( database yang tadi dibuat di `http://localhost/phpmyadmin/`)
kemudian password pada konfigurasi database kita hilangkan kemudian simpan.



# Membuat Model

* Kemudian membuat Model untuk memproses data Artikel, buatlah file pada direktori app/Models dengan nama ArtikelModel.php


![6_ST](https://user-images.githubusercontent.com/56245855/122971180-f737bb00-d3b8-11eb-9f61-3bf0093e54b9.PNG)



# Membuat Controller

* Membuat file controller baru dengan nama Artikel.php pada direktori app/Controllers, kemudian isi file tersebut seperti ini :


![7_ST](https://user-images.githubusercontent.com/56245855/122971729-8d6be100-d3b9-11eb-983a-606c9b947f81.PNG)



# Membuat View 

* Buatlah folder baru dalam direktori view dengan nama "artikel" dan membuat file baru dengan nama "index.php", kemudian isi file tersebut seperti ini :


![8_ST](https://user-images.githubusercontent.com/56245855/122972195-13882780-d3ba-11eb-9096-a1fed0392b85.PNG)


* Buka browser kembali, dengan mengakses url `http://localhost:8080/artikel` maka akan muncul seperti ini :


![belumadaData_Artikel](https://user-images.githubusercontent.com/56245855/122972905-d83a2880-d3ba-11eb-89e8-84295b6b219e.PNG)


* belum ada data yang muncul, Kemudian coba tambahkan beberapa data pada database agar dapat ditampilkan datanya.


![menambahkanData_Database](https://user-images.githubusercontent.com/56245855/122973563-9362c180-d3bb-11eb-8923-a21dda15048e.PNG)



* Refresh kembali browser `http://localhost:8080/artikel` dan lihat perubahannya :


![sudahadaData](https://user-images.githubusercontent.com/56245855/122973774-cc9b3180-d3bb-11eb-9435-130f3f84b293.PNG)



# Membuat Tampilan Detail Artikel

* Tampilan pada saat judul berita di klik maka akan diarahkan ke halaman yang berbeda. Tambahkan fungsi baru pada Controller Artikel dengan nama view(), Kemudian masukan method berikut kedalam controller artikel.php :


![9_ViewST](https://user-images.githubusercontent.com/56245855/122974417-7b3f7200-d3bc-11eb-9707-6bc48fd58fb0.PNG)



# Membuat View Detail

* Buat view baru untuk halaman detail dengan nama app/views/artikel/detail.php.


![10_detailST](https://user-images.githubusercontent.com/56245855/122974826-f143d900-d3bc-11eb-9e69-6181c6c42d1a.PNG)



# Membuat Routing untuk artikel detail

* Buka Kembali file app/config/Routes.php, kemudian tambahkan routing untuk artikel detail.


![11_routesST](https://user-images.githubusercontent.com/56245855/122975234-58618d80-d3bd-11eb-8758-3331fd99957f.PNG)


* Ketika meng-klik sebuah artikel berita Maka hasilnya seperti ini :


![artikel_pertama](https://user-images.githubusercontent.com/56245855/122975411-834be180-d3bd-11eb-9b12-da093dbf02b8.PNG)


![artikel_kedua](https://user-images.githubusercontent.com/56245855/122975455-8e9f0d00-d3bd-11eb-931a-b73447a36a60.PNG)



# Membuat Menu Admin

* Menu admin disini untuk memproses CRUD data artikel. tambahkan method baru pada Controller Artikel dengan nama admin_index(). 


![12_ST](https://user-images.githubusercontent.com/56245855/122976004-200e7f00-d3be-11eb-9902-dac0a37b340b.PNG)


* Selanjutnya buat file pada view untuk tampilan admin dengan nama admin_index.php


![13_adminIndexST 1](https://user-images.githubusercontent.com/56245855/122976401-7ed3f880-d3be-11eb-9682-88fbb633738d.PNG)


![13_adminindexST 2](https://user-images.githubusercontent.com/56245855/122976476-96ab7c80-d3be-11eb-89e8-9552ca7c9858.PNG)


* Kemudian tambahkan routing untuk menu admin seperti berikut:


![14_routesAdminST](https://user-images.githubusercontent.com/56245855/122976560-b17df100-d3be-11eb-8299-ae5ed55d8ebb.PNG)


* Kemudian buka browser `localhost:8080/admin/artikel.`


![halamanAdmin](https://user-images.githubusercontent.com/56245855/122976879-0f123d80-d3bf-11eb-8c7d-990e8f516ff3.PNG)



# Menambah Data Artikel

* Tambahkan fungsi/method baru pada Controller Artikel dengan nama add(). 


![15_ST](https://user-images.githubusercontent.com/56245855/122977390-8b0c8580-d3bf-11eb-8470-448acd50e9d2.PNG)


* Kemudian buat sebuah file pada folder view untuk form tambah dengan nama form_add.php


![16_formaddST](https://user-images.githubusercontent.com/56245855/122977597-cc9d3080-d3bf-11eb-9982-2a1cf2f90657.PNG)


* Maka Outputnya : 


![tambahArtikel](https://user-images.githubusercontent.com/56245855/122977713-ecccef80-d3bf-11eb-9ed1-81aed3c08e4b.PNG)



# Mengubah Data

* Tambahkan fungsi/method baru pada Controller Artikel dengan nama edit().


![17_ST](https://user-images.githubusercontent.com/56245855/122978143-5e0ca280-d3c0-11eb-8906-4b337625f3de.PNG)


* Kemudian buat file pada folder view untuk form ubah dengan nama form_edit.php


![18_formaddST](https://user-images.githubusercontent.com/56245855/122978262-85fc0600-d3c0-11eb-9722-a2b47caa47d3.PNG)


* Maka Outputnya :


![EditArtikel](https://user-images.githubusercontent.com/56245855/122978461-bb085880-d3c0-11eb-87c1-70981b24f4ae.PNG)


![halamanArtkelUbah](https://user-images.githubusercontent.com/56245855/122978529-cf4c5580-d3c0-11eb-8fe3-1ce50ba8f373.PNG)



# Menghapus Data

* Tambahkan fungsi/method baru pada Controller Artikel dengan nama delete().


![19_ST](https://user-images.githubusercontent.com/56245855/122978628-eab76080-d3c0-11eb-8014-fb04c6e71b0f.PNG)


* Jika ingin Menghapus sebuah artikel Klik OK


![hapusArtikel](https://user-images.githubusercontent.com/56245855/122978789-120e2d80-d3c1-11eb-9ca6-a75a8932dae3.PNG)





                      # Sekian, Trimakasih


