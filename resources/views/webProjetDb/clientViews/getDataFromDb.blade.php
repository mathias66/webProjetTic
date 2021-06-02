<!doctype html>
	<html>
		<head></head>
		<body>
			<?php
				/*$cmpt = 2 ; */
					function showData(){
						/*foreach($_POST as $x => $x_value){
							echo "Key= ".$x."        Value = ".$x_value ;
							echo "<br>";
						}*/
							
						$servername = "localhost";
						$username = "mathias";
						$password = "we@b";
						$dbname = "webprojetdb";

						$conn = pgsql_connect($servername,$username,$password,$dbname);

						/*$sqlSem = "insert into web_projet_models("."name,last_name,phone,email,address,job) values("."'".$_POST['name']."','".$_POST['last_name']."','".$_POST['phone']."','".$_POST['email']."','".$_POST['address']."','".$_POST['job']."')";*/
						$sqlSelect = "select * from web_projet_models";
/*
						if( mysqli_query($conn,$sqlSem) ){
							echo "New record created successfully <br>" ;
							/**$GLOBALS['cmpt'] += 1 ;	*						
						}else{
							echo "Error:".$sqlSem."<br>".mysqli_error($conn);
						}
*/
						$resultTable = pgsql_query($conn,$sqlSelect);

						if(  pgsql_num_rows($resultTable) > 0  ){
							while($rows = pgsql_fetch_assoc($resultTable)){
								foreach($rows as $key => $key_value){
									echo $key_value."  ";
								}
								echo "<br>";
							}
			?>
						<table border = "1" width = 50%>
            <?php
							while($rows = pgsql_fetch_assoc($resultTable)){
			?>
								<tr>
									<td> <?php echo $rows['name'];?>  </td>
									<td> <?php echo $rows['last_name'];?>  </td>
									<td> <?php echo $rows['phone'];?>  </td>
									<td> <?php echo $rows['email'];?>  </td>
									<td> <?php echo $rows['address'];?>  </td>
									<td> <?php echo $rows['job'];?>  </td>
                                    <td> <?php echo $rows['updated_at'];?>  </td>
                                    <td> <?php echo $rows['created_at'];?>  </td>
                                    <td> <?php echo $rows['id'];?>  </td>
								</tr>
			<?php					
							}
			?>
						</table>
			<?php
						}

						pgsql_close($conn);
			}

				showData();
				
			?>
		</body>
	</html>
