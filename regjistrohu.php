<!DOCTYPE html>
<head>
<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="regjistrohu.css" type="text/css">
</head>
<body>
<div class="body-content">
  <div class="module">
    <h1>Regjistrohu</h1>
    <form class="form" action="form.php" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error"></div>
      <input type="text" placeholder="Emri" name="username" required />
      <input type="email" placeholder="Email" name="email" required />
      <input type="password" placeholder="Password" name="password" autocomplete="new-password" required />
      <input type="password" placeholder="Konfirmoni Password-in" name="confirmpassword" autocomplete="new-password" required />
      <div class="avatar"><label>Select your profile: </label><input type="file" name="avatar" accept="image/*" required /></div>
      <input type="submit" value="Regjistrohu" name="register" class="btn btn-block btn-primary" />
    </form>
  </div>
</div>
</body>
</html>