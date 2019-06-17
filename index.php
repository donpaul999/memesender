<!DOCTYPE html>
<html>
  <head>
      <title> Sign Up </title>
  </head>
  <style>
    +{
      margin: 0;
      padding: 0;
    }
    body {
      background-image: url("bg.jpg");
        }
    .form-wrap{
      width: 320px; background: #8c8c8c; padding: 40px 20px; box-sizing: border-box;
      position: fixed; left: 50%; top: 50%; transform: translate(-50%, -50%);}
    h1{
      text-align: center; color:#fff; font-weight: normal;
      margin-bottom: 20px;
      }
    input{
      width: 100%; background: none; border: 1px solid #fff; border-radius: 3px; padding: 6px 20px;
      box-sizing: border-box; margin-bottom: 20px;
      font-size: 20px;
    }
    input[type="submit"]{background: #2db300; border: 0; cursor: pointer; color: #000000;
    }
    input[type="submit"]:hover{background:#39e600; transition: .3s;}
    ::placeholder{color: #fff;}
  </style>
  <body>
    <div class="form-wrap">
      <form method="POST" action="signup.php">
          <h1>Sign Up</h1>
          <input type="text" name="FirstName" placeholder="First Name">
          <input type="text" name="LastName" placeholder="Last Name">
          <input type="number" name="Age" placeholder="Age(For NSFW Memes)">
          <input type="email" name="email" placeholder="Email">
          <input type="submit" value="Sign Up">
       </form>
    </div>
  </body>
</html>
