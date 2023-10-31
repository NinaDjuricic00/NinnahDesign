<?php 

include_once("model/Model.php");

class Controller{
	public $model;

    
	public function __construct(){
		$this -> model = new Model();
	}
	
	public function invoke(){
		if(isset($_POST['Korisnici'])){
			$korisnici = $this -> model -> getKorisnici($_POST['Korisnici']);
			include "view/ninnahdesign.php";
		}
		
		elseif(isset($_POST['ime'])){
			$this -> model -> dodajkorisnika($_POST['ime'], $_POST['prezime'], $_POST['email'], $_POST['lozinka']);
			$korisnici = $this -> model -> getKorisniciLista();
			//include "index.php";
		}

        elseif(isset($_POST['email'])){
            $this -> model-> ulogujkorisnika($_POST['email'], $_POST['lozinka']);
            $korisnici = $this -> model -> getKorisniciLista();
            //include "index.php";
        }
		
		elseif(isset($_POST['obrisikorisnika'])){
			$this -> model -> obrisikorisnika($_POST['obrisikorisnika']);
			$korisnici = $this -> model -> getKorisniciLista();
			//include "index.php";
		}
		
        elseif(isset($_POST['vrsta'])){
            $this->model->dodajmodel($_POST['vrsta'], $_POST['model'], $_POST['cena'], $_POST['fileToUpload']);
            $ponuda = $this -> model -> getKorisniciLista();
            //include "index.php";
        }
		
		else{
			$korisnici = $this -> model -> getKorisniciLista();
			include "view/ninnahdesign.php";
			//include "index.php";
		}
	}
}