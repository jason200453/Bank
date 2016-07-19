<?php
require_once "bootstrap.php";
require_once 'src/message2.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
$query = $em->getRepository('Message2')->find($id);
$row = [
    'email' => $query->getEmail(),
    'name' => $query->getName(),
    'title' => $query->getTitle(),
    'content' => $query->getContent()
]

?>
<html>
    <head>
        <title>我要留言</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    </head>
    <body>
        <form id="form" name="form" method="post" action="do_alter.php">
            <input type="hidden" name="writeid" id="writeid" value="<?php echo $id?>" readonly/><br>
            <label>標題:</label>
            <input type="text" name="writetitle" id="writetitle" value="<?php echo $row['title']?>"/><br>
            <label>暱稱:</label>
            <input type="text" name="writename" id="writename" value="<?php echo $row['name']?>"/><br>
            <label>E-mail:</label>
            <input type="text" name="writeemail" id="writeemail" value="<?php echo $row['email']?>"/><br>
            <label>內容:</label>
            <input type="text"  name="writecontent" id="writecontent" rows="5" value="<?php echo $row['content']?>"/><br>
            <input type="submit" name="button" id="button" value="確認修改"/>
            <a href="admin.php"><button type="button">不修改了</button></a>
        </form>
    </body>
</html>
