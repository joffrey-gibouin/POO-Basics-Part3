<?php

require_once 'Vehicle.php';
class Truck extends Vehicle
{
    private string $energy;
    private int $storageCapacity;
    private int $storage;
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    public function __construct(string $color, int $nbSeats, string $energy, int $storageCapacity) {
        parent::__construct($color,$nbSeats);
        $this->setEnergy($energy);
        $this->storageCapacity = $storageCapacity;
    }
    public function start():string
    {
        $this->currentSpeed;
        return "Come On!<br>";
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Truck
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }


    public function getStorageCapacity(): int
    {
        return $this->storageCapacity;
    }


    public function setStorageCapacity(int $storageCapacity): void
    {
        $this->storageCapacity = $storageCapacity;
    }


    public function getStorage(): int
    {
        return $this->storage;
    }


    public function setStorage(int $storage): void
    {
        $this->storage = $storage;
    }

    public function storageLevel():string
    {
        if ($this->storage >= $this->storageCapacity) {
            return "full";
        } else {
            return "in filling";
        }
    }
}