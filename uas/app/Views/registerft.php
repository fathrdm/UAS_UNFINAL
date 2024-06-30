<!DOCTYPE html>
<html>

<head>
<link href="<?= base_url('css/style.css') ?>" rel="stylesheet">
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<div class="div">
  <div class="div-2">
    <div class="column">
      <img loading="lazy" srcset="<?= base_url('image/image.png')?>"  class="img" />
    </div>
    <div class="column-2">
      <div class="div-3">
        <div class="registration-container">
          <header class="header">
            <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/88ab69615b8e442d7d0f950b50a30db75c89ce55693f71473c3a009e97ea7972?apiKey=e72ded3b641e48ceb0e36e65e1fc6345&" class="logo" alt="Faculty of Engineering logo" />
            <div class="header-text">
              <h1 class="faculty-name">Fakultas Teknik</h1>
              <p class="university-name">Universitas Lambung Mangkurat</p>
            </div>
          </header>
          
          <main class="form-container">
            <h2 class="form-title">Buat Sebuah Akun</h2>
            <p class="form-subtitle">isi data diri dengan benar!</p>
            
            <form action="register/save" method="post">
              <div class="form-group">
                <label for="nama" class="form-label">Nama Lengkap</label>
                <span class="required">*</span>
              </div>
              <input type="text" id="nama" class="form-input" placeholder="Masukkan Nama Lengkap" name="nama" required />
        
              <div class="form-group">
                <label for="no_hanphone" class="form-label">No. Handphone</label>
                <span class="required">*</span>
              </div>
              <input type="text" id="no_hanphone" class="form-input" placeholder="Masukkan No. Handphone" name="no_hanphone" required />
        
              <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <span class="required">*</span>
              </div>
              <input type="text" id="email" class="form-input" placeholder="Masukkan Email" name="email" required />
        
              <div class="form-group">
                <label for="masuk_sebagai" class="form-label">Masuk Sebagai</label>
                <span class="required">*</span>
              </div>
              <input type="text" id="masuk_sebagai" class="form-input" placeholder="Masukkan Email" name="masuk_sebagai" required />
              <div class="form-group">
                <label for="password" class="form-label">Password</label>
                <span class="required">*</span>
              </div>
              <input type="password" id="password" class="form-input" placeholder="Masukkan Email" name="password" required />
              <div class="form-group">
                <label for="confpassword" class="form-label">Konfirmasi Password</label>
                <span class="required">*</span>
              </div>
              <input type="password" id="confpassword" class="form-input" placeholder="Masukkan Email" name="confpassword" required />
              <button type="submit" class="login-button">Daftar</button>
            </form>
        
            <div class="signup-section">
              <div class="signup-text">
                <p class="signup-question">Belum Mempunyai Akun?</p>
                <a href="#" class="signup-link">Daftar</a>
              </div>
            </div>
          </main>
        </div>
      
      
      
      </div>
    </div>
  </div>
</div>

</html>