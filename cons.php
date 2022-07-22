<form action="" method="post">
 Name:<br>
 <input type="text" name="name" placeholder="Your Name">
 <br>
 Message:<br>
 <textarea name="message" placeholder="Your Message Here" rows="6" cols="33"></textarea>
 <br><br>
 <input type="submit" name="submit" value="Submit">
</form>

<?php
if (isset($_POST['submit'])) {
echo "ok";
define ('url',"https://api.telegram.org/bot5497601225:AAEyD1M-cDER4x1OMKZE1CLxNHYFjpo-KPk/");
$name = $_POST['name'];
$message = $_POST['message'];
$chat_id = '@rsd4gamers';
$message = urlencode("Name:".$name."\n Message : ".$message);
file_get_contents(url."sendmessage?text=".$message."&chat_id=".$chat_id."&parse_mode=HTML");
}
?>