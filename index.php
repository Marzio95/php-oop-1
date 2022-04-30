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
        return 'Il nome del film è:' . $this->nomeFilm;
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

    public function setSconto($età)
    {
        if ($età < 18) {
            $this->sconto = 50;
        } else if ($età > 60) {
            $this->sconto = 75;
        } else {
            $this->sconto = 0;
        }
    }

    public function getEtà($_età)
    {
        return $this->età = $_età;
    }

    public function setEtà()
    {
        return $this->età;
    }

    public function setPrezzoFinale()
    {
        return $this->PrezzoFinale = $this->prezzoCinema - ($this->prezzoCinema / 100 * $this->sconto);
    }
}

$movieFury = new Movie('Fury', '15', '17-2-2020');
$movieFury->setPrezzoCinema(20);
$movieFury->setSconto(16);
$movieFury->setEtà(20);
$movieFury->setPrezzoFinale();
$movieFury->setProtagonista('Brad Pitt');
var_dump($movieFury);

$movieIoSonoLeggenda = new Movie('I m Legend', '10', '21-12-2021');
$movieIoSonoLeggenda->setPrezzoCinema(20);
$movieIoSonoLeggenda->setSconto(20);
$movieIoSonoLeggenda->setPrezzoFinale();
$movieIoSonoLeggenda->setProtagonista('Will Smith');
$movieIoSonoLeggenda->setEtà(20);
var_dump($movieIoSonoLeggenda);

$movieIoSonoLeggenda = new Movie('Jumanji', '10', '01-01-2022');
$movieIoSonoLeggenda->setPrezzoCinema(30);
$movieIoSonoLeggenda->setSconto(61);
$movieIoSonoLeggenda->setPrezzoFinale();
$movieIoSonoLeggenda->setProtagonista('The Rock');
$movieIoSonoLeggenda->setEtà(30);
var_dump($movieIoSonoLeggenda);
