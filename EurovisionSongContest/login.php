<?php

session_start();

include 'include/meta.php';
include 'include/header.php';
?>
<div id="wrapper">
	<div id="page">
		<div class="5grid-layout">
			<div class="row">
				<div class="9u mobileUI-main-content" id="content">
					<section>
					<div class="post">
					<div id="login_form"> 
                 <h3>Login!</h3>
                <form id="frm_login" method="post" action="">
                    <p id="greska" >
                            <?php echo $error; ?>
                        </p>
                    <fieldset>
                        
                        <div>
                            <input type="text" name="username" id="username" class="field required" title="Unesite korisničko ime" onclick="this.value=''"/>
                        </div>

                        <div>
                            <input type="password" name="password" id="password" class="field required" title="Lozinka je obavezna" onclick="this.value=''" />
                            <input type="submit" name="submit" id="submit" value="Login"/>
                        </div>
                    </fieldset>
                </form>
            </div>
	<?php
	
include 'konekcija1.php';					
if ($_SERVER["REQUEST_METHOD"] == "POST") {

// username and password sent from Form 
    $myusername = mysql_real_escape_string($_POST['username']);
    $mypassword = mysql_real_escape_string($_POST['password']);
	$sql = "SELECT id FROM login WHERE username='$myusername'   AND password='$mypassword'";
    $result = mysql_query($sql);
    $count = mysql_fetch_array($result);


// If result matched $myusername and $mypassword, table row must be 1 row
    if ($count["id"] == 1) {
        session_register("myusername");
        $_SESSION['login_user'] = $myusername;

	  //  $_SESSION['auth'] =hash("md5",$_SERVER['HTTP_USER_AGENT']); 
				//	$_SESSION['username'] = $myusername;
				//	setcookie("username",$myusername,time()+(3600*12),"/");
        header("location: admin.php");
    } 
	if($count["id"] == 2) {
        session_register("myusername");
        $_SESSION['login_user'] = $myusername;

        header("location: funpage.php");
    } 
	else {
        $error = '<style type="text/css">#greska{visibility: visible !important;}</style>Wrong username and password!';
    }
}
?>

 
						</div>
					</section>
				</div>
				<?php
include 'include/sidebar.php';
?>
			</div>
		</div>
	</div>
</div>


<?php
include 'include/footer.php';
?>
	