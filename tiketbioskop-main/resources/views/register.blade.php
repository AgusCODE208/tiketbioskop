<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form Login</title>
    <link rel="stylesheet" href="{{asset('css/login.css')}}" />
  </head>
  <body>
    <video src="{{asset('images/ok.mp4')}}" autoplay loop muted></video>
    <div class="login-box">
      <form action="">
        <h2>Register</h2>
        <div class="user-box">
          <input type="text" required />
          <label for="">Username</label>
        </div>

        <div class="user-box">
          <input type="email" required />
          <label for="">Email Addres</label>
        </div>

        <div class="user-box">
          <input type="password" required />
          <label for="">Password</label>
        </div>

        <div class="remember">
          <input type="checkbox" />
          Remember me
        </div>
        <div class="btn-submit">
          <a href="#">Submit</a>
        </div>
      </form>
    </div>
  </body>
</html>
