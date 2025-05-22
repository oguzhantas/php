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
    <form action="014 form2.php" method="POST">
        <label for="adi">Adı</label>
        <input type="text" name="adi"  id="adi" class="form-control" value="Ali">
        
        <label for="soyadi">Soyadı</label>
        <input type="text" name="soyadi"  id="soyadi" class="form-control" value="Can">

        <!-- Cinsiyet Radio Button -->
        <label for="cinsiyet">Cinsiyet</label> <br>
        <!-- erkek radio button-->
        <div class="form-check form-check-inline">
         <input type="radio" name="cinsiyet" value="erkek" id="erkek" checked class="form-check-input">
         <label class="form-check-label" for="erkek">Erkek</label>
        </div>
         <!-- kadin radio button-->
        <div class="form-check form-check-inline">
         <input type="radio" name="cinsiyet" id="kadin" value="kadin" class="form-check-input">
         <label class="form-check-label" for="kadin">Kadın</label>
        </div>
        <br>
        <!-- Doğum yeri  listeden seçilecek select ile-->
        <label for="dogumyeri">Doğum Yeri</label>
         <select name="dogumyeri" id="dogumyeri" class="form-control">
            <option value="İstanbul" selected>İstanbul</option>
            <option value="Ankara">Ankara</option>
         </select>     
        
         <!-- Doğum Tarihi - date nesnesi ile -->
         <label for="dogumtarihi">Doğum Tarihi</label>
         <input type="date" class="form-control" name="dogumtarihi" >

          <!-- İngilizce checkbox -->
        <label for="ydil">Yabancı Diller</label>
        <div class="form-check">
            <input type="checkbox" checked value="ingilizce" name="ingilizce" id="ingilizce" class="form-check-input">
            <label class="form-check-label" for="ingilizce">ingilizce</label>
        </div>
        <!-- Almanca checkbox -->
        <div class="form-check">
         <input type="checkbox" checked name="almanca" value="almanca" id="almanca" class="form-check-input">
         <label class="form-check-label" for="almanca">Almanca</label>
        </div>
        <!-- Fransızca checkbox -->
        <div class="form-check">
         <input type="checkbox" checked name="fransizca" value="fransizca" id="fransizca" class="form-check-input">
         <label class="form-check-label" for="fransizca">Fransızca</label>
        </div>
        <!-- TC -->
        <label for="tc">TC Kimlik No</label>
        <input type="text" name="tc" id="tc" class="form-control" value="12345678912">
        <!-- button -->
        <button type="submit" class="btn btn-primary mt-3">Kaydet</button>
    </form>
    </div>
    </div>
</body>
</html>