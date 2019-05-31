<?php
 


                                            	$servername = "localhost";
                                                $username = "root";
                                                $password = "";
                                                $dbname = "budicop";

                                                // Create connection
                                            	$conn = new mysqli($servername, $username, $password, $dbname);
                                            	// Check connection
                                                if ($conn->connect_error) {
                                                die("Connection failed: " . $conn->connect_error);
                                                }  
                                            	$sql="SELECT nom,marque,prix FROM produit ";
                                            	$result = $conn->query($sql) or die ("Erreur requête");
                                            	
                                            	while($row = mysqli_fetch_array($result)){

                                            	
                                            	 
                                                  
                                                      
                                                 	

                                           	

echo'
           <div class="card float-left" style="width:338px;height:100%;margin:50px;margin-left:60px;">
            <div class="card-body" style="width:100%;height:300px;">
                <h4 class="card-title">'.$row["marque"].'&nbsp'.$row["nom"].'</h4><img src="assets/img/iol_specifications.jpg" style="width:200px;height:150px;">
                <h6 class="text-muted card-subtitle mb-2" style="margin-top:5px;">Prix :&nbsp'.$row["prix"].'&nbspDA </h6>
                <button class="btn btn-primary" type="button" style="margin-top:10px;background-color:#0b417b;">Acheter</button></div>
        </div>
        ';

        }
        
?>