<?php include "header.php";
session_start();
if (isset($_SESSION['SESS_NAME'])!="") {
	header("Location: voter.php");
}
?>
<?php global $msg; echo $msg;?>

<p><center><legend><font color='#008000' size='18'>Using this online voting system , one can register their votes to the party they wish to vote</p>
<p>Register first then login to vote.</font></legend></center>
    <p>&nbsp;&nbsp;</p>
<?php include "footer.php";?>
