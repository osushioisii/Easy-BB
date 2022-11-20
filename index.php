<?php
$pdo = new PDO(
    "mysql:dbname=bb;host=localhost","root","",array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET `utf8`")
);
if ($pdo) {
    echo "";
} else {
    echo "";
}
$regist = $pdo->prepare("SELECT * FROM post");
$regist->execute();
if ($regist) {
    echo "";
} else {
    echo "";
}
?>

<!DOCTYPE html>
<meta charset="UTF-8">
<title>BB</title>
<h1>BB</h1>
<section>
    <h2>投稿</h2>
    <form action="send.php" method="post">
        名前 : <input type="text" name="name" value=""><br>
        投稿内容: <input type="text" name="contents" value=""><br>
        <button type="submit">投稿</button>
    </form>
</section>

<section>
	<h2>コメント</h2>
		<?php foreach($regist as $loop):?>
			<div>id:<?php echo $loop['id']?></div>
			<div>名前：<?php echo $loop['name']?></div>
			<div>コメント：<?php echo $loop['contents']?></div>
		<?php endforeach;?>
	
</section>
