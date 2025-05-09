<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cuancuanin.id</title>
    <link rel="stylesheet" href="login.css" />
    <link rel="stylesheet" href="common.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
      integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body>
    <div id="slider-container"></div>
    <div class="form-container" id="signup">
      <h1>Daftar</h1>
      <div class="auth-link">
        <p>Sudah memilik akun? <a href="login.php">Masuk</a></p>
      </div>
      <form id="signupForm" action="proses-signup.php" method="POST">
        <div class="form-group">
          <i class="fa-solid fa-envelope" id="ic"></i>
          <input type="text" id="email" name="email" placeholder="" required />
          <label for="email">Email</label>
        </div>
        <span class="error" id="errorEmail"></span>
        <div class="form-group">
          <i class="fa-solid fa-user" id="ic"></i>
          <input
            type="text"
            id="username"
            name="username"
            placeholder=""
            required
          />
          <label for="username">Username</label>
        </div>
        <span class="error" id="errorUsername"></span>
        <div class="form-group">
          <i class="fa-solid fa-lock" id="ic"></i>
          <input
            type="password"
            id="password"
            name="password"
            placeholder=""
            required
          />
          <i
            class="fa-sharp fa-solid fa-eye"
            id="toggleIcon"
            data-target="password"
          ></i>
          <label for="password">Password</label>
        </div>
        <span class="error" id="errorPassword"></span>
        <div class="form-group">
          <i class="fa-solid fa-lock-open" id="ic"></i>
          <input
            type="password"
            id="confirmPassword"
            name="confirmPassword"
            placeholder=""
            required
          />
          <i
            class="fa-sharp fa-solid fa-eye"
            id="toggleIcon"
            data-target="confirmPassword"
          ></i>
          <label for="confirmPassword">Confirm password</label>
        </div>
        <span class="error" id="errorMsg"></span>
        <div class="options"></div>
        <span class="error" id="errorTerm"></span>
        <button type="submit">Daftar</button>
      </form>
    </div>
    <script src="auth.js"></script>
    <script src="common.js"></script>
  </body>
</html>
