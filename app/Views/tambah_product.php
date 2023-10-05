<!-- <!DOCTYPE html>
<html>
<head>
    <title>Tambah Product</title>
</head>
<body>
    <h1>Tambah Product</h1>
    <form action="<?= base_url('insertproducts') ?>" method="post">
        <label for="nama_product">Nama Product:</label>
        <input type="text" name="nama_product" id="nama_product" required><br><br>
        
        <label for="description">Deskripsi:</label>
        <textarea name="description" id="description" required></textarea><br><br>
        
        <input type="submit" value="Tambah">
    </form>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Webleb</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <style>
    @import url(https://fonts.googleapis.com/css?family=Inter:300);

    body {
        padding: 0;
        margin: 0;
        font-family: 'Inter';
    }

    .bgvid.back {
        position: fixed;
        right: 0;
        bottom: 0;
        min-width: 100%;
        min-height: 100%;
        width: auto;
        height: auto;
        z-index: -100;
    }

    .inner {
        position: absolute;
    }

    .inner-container {
        width: 400px;
        height: 400px;
        position: absolute;
        top: calc(50vh - 200px);
        left: calc(50vw - 200px);
        overflow: hidden;
        border-radius: 7px;
    }

    .box {
        position: absolute;
        height: 100%;
        width: 100%;
        font-family: 'Inter';
        color: #fff;
        background: rgba(0, 0, 0, 28%);
        padding: 30px 0px;
        border-radius: 7px;
    }

    .box h1 {
        text-align: center;
        margin: 30px 0;
        font-size: 30px;
    }

    .box input {
        display: block;
        width: 300px;
        margin: 20px auto;
        padding: 15px;
        background: rgba(0, 0, 0, 0.2);
        color: #fff;
        border-radius: 7px;
        border: 0;
    }

    input::placeholder {
        color: rgb(182, 171, 163);
    }

    .signup {
        color: rgb(182, 171, 163) !important;
    }

    .box input:focus,
    .box input:active,
    .box button:focus,
    .box button:active {
        outline: none;
    }

    .box button {
        background: #2d2f36;
        border: 0;
        color: #fff;
        padding: 10px;
        font-size: 20px;
        width: 330px;
        margin: 20px auto;
        display: block;
        cursor: pointer;
        border-radius: 7px;
    }

    .box button:active {
        background: #000000;
    }

    .box p {
        font-size: 14px;
        text-align: center;
    }

    .box p span {
        cursor: pointer;
        color: #666;
    }

    @media screen and (max-width: 986px) {
        .bgvid {
            height: 100px !important;
        }
    }

    @media screen and (min-width: 986px) {
        .bgvid.back {
            width: 100%;
        }
    }
    </style>
</head>

<body>
    <form action="<?= base_url('insertproducts') ?>" method="post">
        <div class="vid-container">
            <div class="inner-container">
                <div class="box">
                    <h1>Tambah Data</h1>
                    <input type="text" name="nama_product" id="nama_product" placeholder="Nama Produk" required>
                    <input name="description" id="description" placeholder="Deskripsi" required></input>
                    <button type="submit">Tambah</button>
                </div>
            </div>
        </div>
    </form>
</body>

</html>