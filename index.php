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

    public function __construct($_nomeFilm, $_prezzoCinema, $_dataUscita)
    {
        $this->nomeFilm = $_nomeFilm;
        $this->prezzoCinema = $_prezzoCinema;
        $this->dataUscita = $_dataUscita;
    }

    public function getNomeFilm()
    {
        return $this->nomeFilm;
    }

    public function setPrezzoCinema($_prezzoCinema)
    {
        $this->prezzoCinema = $_prezzoCinema;
    }

    public function getPrezzoCinema()
    {
        return $this->prezzoCinema;
    }

    public function getDataUscita()
    {
        return $this->dataUscita;
    }
}

$movieFury = new Movie('Fury', '15', '17- 2-2020');
$movieFury->setPrezzoCinema(20);
var_dump($movieFury);
