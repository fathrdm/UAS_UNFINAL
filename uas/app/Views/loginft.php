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
      <img loading="lazy" srcset="<?= base_url('image/image.png') ?>" class="img" />
    </div>
    <div class="column-2">
      <div class="div-3">
        <div class="login-container">
          <header class="header">
            <img loading="lazy"
              src="https://cdn.builder.io/api/v1/image/assets/TEMP/88ab69615b8e442d7d0f950b50a30db75c89ce55693f71473c3a009e97ea7972?apiKey=e72ded3b641e48ceb0e36e65e1fc6345&"
              class="logo" alt="Faculty of Engineering logo" />
            <div class="header-text">
              <h1 class="faculty-name">Fakultas Teknik</h1>
              <p class="university-name">Universitas Lambung Mangkurat</p>
            </div>
          </header>
          <main class="main-content">
            <h2 class="login-title">Login ke Akun Anda</h2>
            <p class="login-subtitle">Masukkan Username dan password untuk login!</p>
            <!-- FORM ACTION -->
            <form action="login/auth" method="post">
              <div class="form-group">
                <label for="nama" class="form-label">Username</label>
                <span class="required">*</span>
              </div>
              <input type="text" id="nama" class="form-input" placeholder="Masukkan Username" name="nama"
                 />
              <?php if (session()->getFlashdata('msg')): ?>
                <div class="alert"><?= session()->getFlashdata('msg') ?>
                </div> <?php endif; ?>

              <div class="form-group">
                <label for="password" class="form-label">Password</label>
                <span class="required">*</span>
              </div>
              <input type="password" id="password" class="form-input" placeholder="Masukkan Password" name="password"
                 />
              <?php if (session()->getFlashdata('msg')): ?>
                <div class="alert"><?= session()->getFlashdata('msg') ?>
                </div> <?php endif; ?>

              <a href="#" class="forgot-password">Lupa password?</a>
              <button type="submit" class="login-button">Login</button>
            </form>
            <div class="signup-section">
              <div class="signup-text">
                <p class="signup-question">Belum Mempunyai Akun?</p>
                <a href="<?= base_url('register') ?>" class="signup-link">Daftar</a>
              </div>
            </div>
          </main>
        </div>
      </div>
    </div>
  </div>
</div>

</html>