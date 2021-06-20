# Praktikum ke-11

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





