<?php

class Movie
{
    private $nomeFilm;
    private $prezzoCinema;
    private $dataUscita;

    private $regista;
    private $protagonista;
    private $antagonista;
    private $budgetFilm;

    public $sconto;
    public $PrezzoFinale;
    public $età;

    public function __construct($_nomeFilm, $_prezzoCinema, $_dataUscita)
    {
        $this->nomeFilm = $_nomeFilm;
        $this->prezzoCinema = $_prezzoCinema;
        $this->dataUscita = $_dataUscita;
    }

    public function setNomeFilm($_nomeFilm)
    {
        return $this->nomeFilm = $_nomeFilm;
    }

    public function getNomeFilm()
    {
        return 'Il nome del film è: ' . $this->nomeFilm;
    }

    public function getProtagonista()
    {
        return $this->protagonista;
    }

    public function setProtagonista($_protagonista)
    {
        return $this->protagonista = $_protagonista;
    }

    public function setPrezzoCinema($_prezzoCinema)
    {
        return $this->prezzoCinema = $_prezzoCinema;
    }

    public function getPrezzoCinema()
    {
        return $this->prezzoCinema;
    }

    public function getDataUscita()
    {
        return $this->dataUscita;
    }

    public function setSconto()
    {
        if ($this->età < 18) {
            $this->sconto = 50;
        } else if ($this->età > 60) {
            $this->sconto = 75;
        } else {
            $this->sconto = 0;
        }
    }

    public function setPrezzoFinale()
    {
        return $this->PrezzoFinale = $this->prezzoCinema - ($this->prezzoCinema / 100 * $this->sconto);
    }

    public function getEtà($_età)
    {
        return $this->età = $_età;
    }

    public function setEtà(int $età)
    {
        $this->età = $età;

        return $this;
    }
}

$movieFury = new Movie('Fury', '15', '17-2-2020');
$movieFury->setPrezzoCinema(20);
// $movieFury->setEtà();
$movieFury->età = 16;
$movieFury->setProtagonista('Brad Pitt');
$movieFury->setSconto();
$movieFury->setPrezzoFinale();
var_dump($movieFury);

$movieIoSonoLeggenda = new Movie('I m Legend', '10', '21-12-2021');
$movieIoSonoLeggenda->setPrezzoCinema(20);
$movieIoSonoLeggenda->setPrezzoFinale();
$movieIoSonoLeggenda->setProtagonista('Will Smith');
// $movieIoSonoLeggenda->setEtà(20);
$movieIoSonoLeggenda->età = 20;
$movieIoSonoLeggenda->setSconto();
var_dump($movieIoSonoLeggenda);



// DA NOTARE CHE SE IO METTO L ETA' SOPRA LO SCONTO, LO SCONTO NON FUNZIONA PERCHE' L INFORMAZIONE DELL ETA' ARRIVA DOPO ---- STESSA COSA PER PREZZO FINALE E SCONTO
// SE LO SCONTO E' SOTTO IL PREZZO FINALE, QUEST ULTIMO NON VIENE SCONTATO PERCHE' L INFORMAZIONE DELLO SCONTO ARRIVA DOPO 
$movieJumanji = new Movie('Jumanji', '10', '01-01-2022');
$movieJumanji->setPrezzoCinema(30);
// $movieJumanji->età = 61;
$movieJumanji->setProtagonista('The Rock');
$movieJumanji->setPrezzoFinale();
$movieJumanji->setSconto();
$movieJumanji->setEtà(61);
var_dump($movieJumanji);


echo "<h1>{$movieFury->getNomeFilm()}</h1>";
?>
<h1> <?= $movieFury->getProtagonista() ?></h1>