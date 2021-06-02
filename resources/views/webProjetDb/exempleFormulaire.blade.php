<!doctype html>
        <html>
		<head>
		</head>

		<body>
			<form name = "myform1" action = "/test/containtPhpFile/formulaireInscription.php" method = "POST">
				<fieldset>  
					<legend> Inscription </legend>

					<table>
						<p> 
							<tr>
								<td>
									<label for = "nom">Nom</label>
								</td>
								<td>
									<input type = "text" name = "first" values = "" required pattern ="[A-Z' ]+" ></input>
								</td>
							</tr>
						</p>
						<p>
							<tr>
								<td>
									<label for = "prenom">Prenom</label>
								</td>
								<td>
									<input type = "text" name = "last" values = "" required pattern = "[A-Z][A-Za-z ]+"></input>
								</td>
							</tr>
						</p>
						<p>
							<tr>
								<td>
									<label for = "Age" >Age</label>
								</td>
								<td>
									<input type = "number" name = "age" values = "" maxlength = "10" required pattern = "[0-9]{3}"></input>
								</td>
							</tr>
						</p>
						<p>
							<tr>
								<td>
									<label for = "codFiliere" >Code Filiere</label>
				 				</td>
				 				<td>
									<select name = "codfiliere">
										<?php
											$servername = "localhost";
											$username   = "root" ;
											$password   = "" ;
											$dbname     = "bd_inscription";

											$getconnect = mysqli_connect($servername,$username,$password,$dbname);

											if(!$getconnect){
												die("Connection failed:".mysqli_connect_error());
											}

											$sqlcodFiliere = "select codFiliere from filiere";
											$resultcodFiliere = mysqli_query($getconnect,$sqlcodFiliere);

											while($rowsfiliere = mysqli_fetch_assoc($resultcodFiliere)){
										?>	
												<option value = " <?php echo $rowsfiliere['codFiliere'];?> " >  <?php echo $rowsfiliere['codFiliere'];?>  </option>
										<?php
											}
										?>
									</select>
								</td>
							</tr>
							<tr>
								<td>
									<label for = "numSeminaire" >Numero Seminaire</label>
								</td>
								<td>
									<select name = "numseminaire">
						
										<?php
											$servername = "localhost";
											$username   = "root";
											$password   = "";
											$dbname     = "bd_inscription";

											$connection = mysqli_connect($servername, $username, $password, $dbname);
											if(!$connection){
												die("Connection failed:".mysqli_connect_error());
											}

											$sqlSem ="select numSeminaire from Seminaire";
											/*$sqlFiliere = "select codFiliere from filiere";

											$resultFiliere = mysqli_query($connection,$sqlFiliere); */
											$resultSem = mysqli_query($connection, $sqlSem);

											/*if(mysqli_num_rows($resultSem) > 0){*/
											while($rows = mysqli_fetch_assoc($resultSem)){
									
										?>
												<option value = " <?php echo $rows['numSeminaire'];?> " > <?php echo $rows['numSeminaire'];?> </option>
										<?php	
											}
										?>
											/*}
	 						 			?>*/
	 						 		</select>

	 							</td>
							</tr>
					
						</p>

						<p>
							<tr>
								<td>
									<input type = "submit" name = "submit" value = "Enregistrer"></input>
								</td>
								<td>
									<input type = "reset" value = "Annuler"></input>
								</td>
							</tr>
						</p>
					</table>
				</fieldset>
			</form>
		</body>
	</html>
