<?php
if (isset($_POST['name'])) $name = $_POST['name'];
else $name = "(Не введено)";
 echo <<<_END
 <html>
 <head>
 <title>Form Test</title>
 </head>
 <body>

 <div><form method="post" action="formtest.php">
Вас зовут: $name<br>
 <input type="text" name="name">
 <input type="submit" value="отправить запрос">
 </form>
 </div>
 </body>
 </html>
_END;
?>

