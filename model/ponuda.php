    <?php 
        class Ponuda{
			public $vrsta;
			public $model;
			public $cena;
			public $slika;
			
			public function __construct($vrsta, $model, $cena, $slika){
				$this -> vrsta = $vrsta;
				$this -> model = $model;
				$this -> cena = $cena;
				$this -> slika = $slika;
			}
		}

    ?>
