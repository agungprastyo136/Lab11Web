<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
    <style>     
        form label { 
            display: inline-block;
            width: 100px;
            padding: 33px;
        }     
        form input[type="text"], form textarea {
            border: 1px solid #1f5faa;
        }     
        form input[type="submit"] {
            border: 1px solid #1f5faa;
            background-color: #1f5faa;
            color: #ffffff;
            font-weight: bold; 
            padding: 5px 15px;
            margin: 10px 20px;
        } 
    </style>
</head>
<body>
    <?= $this->include('template/header'); ?>
    <div id="container">
        <form style="padding: 30px;">
            <fieldset>
                <legend style="margin: 20px 10px;"></legend>
                <label for="nama">Nama</label>
                <input type="text" id="nama" name="nama" placeholder="">
                <br />
                <label for="email">Email</label>
                <input style="border: 1px solid #1f5faa;" type="email" name="email" id="email" placeholder="Masukan Email"/>
                <br />
                <br />
                <label for="message">Pesan</label>
                <textarea name="message" placeholder="Tinggalkan pesan anda" id="message" rows="4" cols="80"></textarea>
                <br />
                <br />
                <input type="submit" value="Kirim" />
            </fieldset>
        </form>
    </div>
    <?= $this->include('template/footer'); ?>
</body>
</html>