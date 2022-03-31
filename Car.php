<?php

class Car
{
  private int $nbWheels = 4;
  private int $currentSpeed = 0;
  // private string $color;
  // private int $nbSeats;
  // private string $gasType;
  private int $gasLeft = 10;

  public function __construct(private string $color, private int $nbSeats, private string $gasType)
  {
    $this->color = $color;
    $this->nbSeats = $nbSeats;
    $this->gasType = $gasType;
  }

  public function start(): string
  {
    return "C'est parti let's goooooooo" . PHP_EOL;
  }

  public function forward(): string
  {
    $sentence = "";
    while ($this->gasLeft > 0) {
      $this->gasLeft--;
      $sentence .= "Vrooooom ";
    }
    $sentence .= "<br> Oh nooooo no more gas in the f***ing tank !";
    return $sentence;
  }

  public function brake(): string
  {
    $sentence = "";
    while ($this->currentSpeed > 0) {
      $this->currentSpeed--;
      $sentence .= "Brake !!!";
    }
    $sentence .= "I'm stopped !";
    return $sentence;
  }

  public function setCurrentSpeed(int $currentSpeed)
  {
    $this->currentSpeed = $currentSpeed;
  }

  public function setGasLeft(int $gasLeft)
  {
    $this->gasLeft = $gasLeft + $this->gasLeft;
  }

  public function getGasLeft()
  {
    return $this->gasLeft;
  }
}






















  
