<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İş Başvuru Formu</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <div class="container">
       
        <div class="col-md-4 row">
        <h3>Ürün Kayıt Formu</h3>

    <form action="ekle2.php" method="POST" enctype="multipart/form-data">
        <!-- Ürün adı-->
        <label for="urunadi">Ürün Adı</label>
        <input type="text" name="urunadi"  id="urunadi" class="form-control" value="LG TV">

        <!-- Üretim Tarihi - date nesnesi ile -->
        <label for="uretimtarihi">Üretim Tarihi</label>
         <input type="date" class="form-control" name="uretimtarihi" >
        
         <!-- Barkod-->
        <label for="barkod">Barkod</label>
        <input type="text" name="barkod"  id="barkod" class="form-control" value="8691234567812">

        <!-- Kategori-->
        <label for="kategori">Kategori</label>
        <select name="kategori" class="form-control" id="kategori">
            <option value="Bilgisayar">Bilgisayar</option>
            <option value="Elektronik">Elektronik</option>
            <option value="Beyaz Eşya">Beyaz Eşya</option>

        </select>

        <!-- Boyut-->
        <label for="urunboyutu">Ürün Boyutu</label>
        <select name="boyut" class="form-control" id="kategori">
            <option value="XS">XS</option>
            <option value="S">S</option>
            <option value="M">M</option>
            <option value="L">L</option>
            <option value="XL">XL</option>
            <option value="XXL">XXL</option>
            <option value="XXXL">XXXL</option>
        </select>

        <!-- Renk-->
        <label for="renk">Renk</label>
        <select name="renk" class="form-control" id="renk">
            <option value="Beyaz">Beyaz</option>
            <option value="Siyah">Siyah</option>
            <option value="Kırmızı">Kırmızı</option>
            <option value="Mavi">Mavi</option>
            <option value="Yeşil">Yeşil</option>
        </select>
        
        <!-- Fiyat-->
        <label for="Fiyat">Fiyat</label>
        <input type="text" name="fiyat" id="fiyat" class="form-control" value="12500">

         <!-- Taksitli Fiyat-->
         <label for="TaksitliFiyat">Taksitli Fiyat</label>
        <input type="text" name="taksitlifiyat" id="taksitlifiyat" class="form-control" value="13500">
        
        <input type="file" name="urunresim">
        <!-- button -->
        <button type="submit" class="btn btn-primary mt-3">Kaydet</button>
    </form>
    </div>
    </div>
</body>
</html>