<?php include 'header.php'; ?>

<!-- Login Section Section Starts Here -->
<div class="login-section padding-tb">
    <div class=" container">
        <div class="account-wrapper">
            <h3 class="title">Login</h3>
            <form class="account-form" method="post">
                <div class="form-group">
                    <input type="text" placeholder="User Name" name="username">
                </div>
                <div class="form-group">
                    <input type="password" placeholder="Password" name="password">
                </div>
                <div class="form-group">
                    <div class="d-flex justify-content-between flex-wrap pt-sm-2">
                        <div class="checkgroup">
                            <input type="checkbox" name="remember" id="remember">
                            <label for="remember">Remember Me</label>
                        </div>

                    </div>
                </div>
                <div class="form-group">
                    <button class="d-block lab-btn" type="submit" name="login"><span>Submit Now</span></button>
                </div>
            </form>
            <div class="account-bottom">
                <span class="d-block cate pt-10">Don’t Have any Account? <a href="registration.html"> Sign
                Up</a></span>
                <span class="or"><span>or</span></span>
                <h5 class="subtitle">Login With Social Media</h5>
                <ul class="social-media social-color lab-ul d-flex justify-content-center">
                    <li>
                        <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li>
                        <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
                    </li>
                    <li>
                        <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
                    </li>
                    <li>
                        <a href="#" class="pinterest"><i class="fab fa-pinterest"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Login Section Section Ends Here -->
<?php include 'footer.php'; ?>

<?php 
if (isset($_POST['login'])) 
{
  $ambil=$koneksi->query("SELECT * FROM tb_admin where username='$_POST[username]' AND password='$_POST[password]'");
  $cocok= $ambil->num_rows;
  if ($cocok==1)
  {
    session_start();
    $data=$_SESSION['admin']=$ambil->fetch_assoc();
    echo "<script>alert('login berhasil');</script>";
    echo "<script>location='admin/index.php';</script>";
}
else {
    echo "<script>alert('login gagal, periksa username dan password anda');</script>";
    echo "<script>location='login.php';</script>";
}



}
?>
