 <?php 
 try
{
	$pdo= new PDO('mysql:host=localhost;dbname=work_db;charset=utf8','mysql','mysql');
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	if(empty($_POST['name3']))exit("Поле не заполнено");
	$FID_Projects1=$_POST['name3'];
	echo "$name3";
	$date1=$_POST['name4'];
	$sql = "SELECT description From work WHERE name = :namepro and date = :date1";
	$result=$pdo->prepare($sql);
	$result->execute(['namepro'=>$FID_Projects1,'date1'=>$date1]);
	while ($row=$result->fetch(PDO::FETCH_BOTH)) 
	{
		echo "Информация о выполненных задачах по выбранному проекту на указанную дату: ".$row[0];
	}
}
catch(PDOException $e)
{
	echo $e->getMessage();
}
//,'date1'=>$date1
?>