<?php

class Money
{
    private $rubles;
    private $kopecks;


    public function __construct($rubles, $kopecks) {
        if ($rubles < 0 || $kopecks < 0) {
            throw new RuntimeException("Rubles or kopecks cannot be negative");
        } // Насколько знаю, не самая лучшая практика добавлять ограничения в конструктор, но не помню как сделать точнее
        $this->rubles = $rubles;
        $this->kopecks = $kopecks;
    }

    public function getRubles() {
        return $this->rubles;
    }

    public function setRubles($rubles): void {
        $this->rubles = $rubles;
    }

    public function getKopecks() {
        return $this->kopecks;
    }

    public function setKopecks($kopecks): void {
        $this->kopecks = $kopecks;
    }

    public function __toString(): string {
        return "Рублей: {$this->rubles}" . PHP_EOL . "Копеек: {$this->kopecks}" . PHP_EOL;
    }

    // Задача № 2 Перевод рублей в копейки
    function rubles_to_kopecks($rubles, $kopecks): void{
        if ($rubles < 0 || $kopecks < 0) {
            throw new RuntimeException("Rubles or kopecks cannot be negative");
        }
        $this->rubles =  0;
        $this->kopecks = $rubles * 100 + $kopecks;
    }

    // Задача №7 Перевод копеек в рубли
    function kopecks_to_rubles($kopecks) : void {
        if ($kopecks < 0) {
            throw new RuntimeException("Kopecks cannot be negative");
        }
        $this->rubles = (int)($kopecks / 100);
        $this->kopecks = $kopecks % 100;
    }
}