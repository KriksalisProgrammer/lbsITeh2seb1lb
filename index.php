<?php
include('connect.php');
?>
<!DOCTYPE html>
<html>
 <head>
   <title>labs1</title>
   <meta charset="utf-8">
   <link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
 	<div class="Zapros1"> 
  	<form action="Zap1.php" method="POST">
  		<P>Число сотрудников отдела выбраного руководителя</P>
  		<select name="name1">
  			<?php
  			try 
  			{
  				$result=$pdo->query('SELECT chief FROM department');
  				while ($row=$result->fetch(PDO::FETCH_BOTH)) 
				{
					$lite=$row[0];
					print"<option value='$lite'>$lite</option>";
				}
  			} 
  			catch (Exception $e) 
  			{
  				print("Error");
  			}
  			?>
  		</select>
  		<input type="submit" name="Получить">
  	</form>
  </div>
  	<div class="Zapros2">
  		<form action="Zap2.php" method="POST">
  		<P>Общее время работы над выбранным проектом</P>
  		<select name="name2">
  			<?php
  			try 
  			{
  				$result=$pdo->query('SELECT name FROM projects');
  				while ($row=$result->fetch(PDO::FETCH_BOTH)) 
				{
					$lite=$row[0];
					print"<option value='$lite'>$lite</option>";
				}
  			} 
  			catch (Exception $e) 
  			{
  				print("Error");
  			}
  			?>
  		</select>
  		<input type="submit" name="Получить">
  			</form>
  	</div>	
  <div class="Zapros3">
  		<form action="Zap3.php" method="POST">
  		<P>Информация о выполненных задачах по выбранному проекту на указанную дату</P>
  		<select name="name3">
  			<?php
  			try 
  			{
  				$result=$pdo->query('SELECT name FROM projects');
  				while ($row=$result->fetch(PDO::FETCH_BOTH)) 
				{
					$lite=$row[0];
					print"<option value='$lite'>$lite</option>";
				}
  			} 
  			catch (Exception $e) 
  			{
  				print("Error");
  			}
  			?>
  		</select>
  		<input type="date" name="name4" value="2021-01-20">
  		<input type="submit" name="Получить">
  	</form>
  	</div>
 </body> 
</html>