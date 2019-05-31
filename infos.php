
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
                                            	$sql="SELECT * FROM user  ";
                                            	$result = $conn->query($sql) or die ("Erreur requête");
                                            	
                                            	while($row = mysqli_fetch_array($result)){

echo'
  <div class="d-inline float-right" style="width:15%;height:100%;background-image:url(&quot;assets/img/content.png&quot;);">
        <div class="card" style="height:100%;width:100%;">
            <div class="card-body" style="height:2000px;">
                <h4 class="card-title">informations&nbsp;</h4>
                <h5 class="text-muted card-subtitle mb-2">Nom :&nbsp;</h5>
                <h5 class="text-dark card-subtitle mb-2">'.$row["nom"].'</h5></br>
                <h5 class="text-muted card-subtitle mb-2">Prenom :&nbsp;</h5>
                <h5 class="text-dark card-subtitle mb-2">'.$row["prenom"].'</h5></br>
                <h5 class="text-muted card-subtitle mb-2">e-mail:&nbsp;</h5>
                <h5 class="text-dark card-subtitle mb-2">'.$row["e-mail"].'</h5></br>
                <h5 class="text-muted card-subtitle mb-2">téléphone :&nbsp;</h5>
                <h5 class="text-dark card-subtitle mb-2">'.$row["tel"].'</h5></br>
            </div>
        </div>
    </div>
';
}
?>