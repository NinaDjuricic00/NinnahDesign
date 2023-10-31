<?php 

include_once("korisnici.php");


class Model{
	public function getKorisniciLista(){ 
		
		// sql connection
		$server = "sql200.epizy.com";
		$user = "epiz_31121671";
		$pass = "7XhEahxb5zgcPgN";
		$database = "epiz_31121671_db1";
		
		$conn = new mysqli ($server, $user, $pass, $database);
		
		if ($conn -> connect_error){
			die ("Connection fail" . $conn -> connect_error);
		}
		
		
		// if connection success //
		
		$sql = "SELECT * FROM nina2_korisnici";
		$result = $conn -> query($sql);
		$rezultat = array();
		
		if($result -> num_rows > 0){
			while($row = $result -> fetch_assoc()){
				$rezultat[] = new Korisnici($row['Ime'], $row['Prezime'], $row['Email'], $row['Lozinka']);
			}
		}
		else{
			echo "Nema rezultata.";
		}
		
		$conn -> close();
		
		 // var_dump($rezultat);
		 
		 return $rezultat;
	}
	
	
	
	public function getKorisnici($email){
		$sviKorisnici = $this -> getKorisniciLista();
		return $sviKorisnici[$email];
	}
	
	public function dodajKorisnika($ime, $prezime, $email, $lozinka){
		$server = "sql200.epizy.com";
		$user = "epiz_31121671";
		$pass = "7XhEahxb5zgcPgN";
		$database = "epiz_31121671_db1";
		
		$conn = new mysqli ($server, $user, $pass, $database);
		
		if ($conn -> connect_error){
			die ("Connection fail" . $conn -> connect_error);
		}
		

		$sql = "INSERT INTO nina2_korisnici (Ime, Prezime, Email, Lozinka) VALUES ('".$ime."', '".$prezime."', '".$email."', '".$lozinka."')";
		
		if($conn -> query($sql) === TRUE){
			echo "Uspešno ste se registrovali, vratite se nazad da bi nastavili korišćenje našeg sajta.";
			
		}
		else{
			echo "Greska: " .$sql . "</br>" . $conn->error;
		}
		$conn -> close();
	
	
    }

	public function ulogujkorisnika($email, $lozinka){
// sql connection
		$server = "sql200.epizy.com";
		$user = "epiz_31121671";
		$pass = "7XhEahxb5zgcPgN";
		$database = "epiz_31121671_db1";
		
		$conn = new mysqli ($server, $user, $pass, $database);
		
		if ($conn -> connect_error){
			die ("Connection fail" . $conn -> connect_error);
		}
        

        $sql = "select * from nina2_korisnici where email = '".$email."' and lozinka = '".$lozinka."'";
        $result = mysqli_query($conn, $sql);

        if($row = $result->fetch_assoc()){
			header ("location:index.php");
			
		}
		else{
			echo "Greska: " .$sql . "</br>" . $conn->error;
		}
		$conn -> close();
  
        
    }
	

     public function dodajmodel($target_file){
		$server = "sql200.epizy.com";
		$user = "epiz_31121671";
		$pass = "7XhEahxb5zgcPgN";
		$database = "epiz_31121671_db1";
		
		$conn = new mysqli ($server, $user, $pass, $database);
		if ($conn -> connect_error){
			die ("Connection fail" . $conn -> connect_error);
		}
		
        $status = $statusMsg = '';
        if(isset($_POST["submit"])){
            $status = 'error';
            if(!empty($_FILES["slika"]["name"])){
                $fileName = basename($_FILES["slika"]["name"]);
                $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
                $vrsta = $conn ->real_escape_string($_POST["vrsta"]);
                $model = $conn ->real_escape_string($_POST["model"]);
                $cena = $conn ->real_escape_string($_POST["cena"]);

             $allowTypes = array('jpg','png','jpeg','gif', 'webp'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['slika']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image));  


               $insert = $conn->query("INSERT into nina2_ponuda (vrsta, model, cena, slika) VALUES ('".$vrsta."', '".$model."', '".$cena."', '".$imgContent."')"); 

               if ($insert){
                   $status = 'success';
                   $statusMsg = "File uploaded successfully";
               }else{
                   $statusMsg = "File upload failed, please try again.";
               }
            }else{
                 $statusMsg = 'Sorry, only   JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
            }
        }else{
            $statusMsg = 'Please select an image file to upload.'; 
        }
    
}

    }

		
	
    
    


    public function modelispis($vrsta, $model, $cena, $slika){
// sql connection
		$server = "sql200.epizy.com";
		$user = "epiz_31121671";
		$pass = "7XhEahxb5zgcPgN";
		$database = "epiz_31121671_db1";
		
		$conn = new mysqli ($server, $user, $pass, $database);
		
		if ($conn -> connect_error){
			die ("Connection fail" . $conn -> connect_error);
		}
        
/*
        $sql = "select * from djuro5023_model";
        $result = mysqli_query($conn, $sql);

        if($row = $result->fetch_assoc()){
			include "welcome.php";
			
		}
		else{
			echo "Greska: " .$sql . "</br>" . $conn->error;
		}       
		$conn -> close();
  */
        
    }
	
}