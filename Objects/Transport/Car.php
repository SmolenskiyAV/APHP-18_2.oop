<?php

namespace Objects\Transport;

// Class Car

class Car {

    public const WHEEL_FORMULA_1 = '4x4';
    public const WHEEL_FORMULA_2 = '4x2';
    private const COUNTRY_1 = 'Russia';
    private const COUNTRY_2 = 'Germany';
    private const HOMEWORK_CODE = 'APHP-18_1.exercise';
    public string $modelFactory;
    public string $modelIndex;
    public string $nameOwner;
    public string $surnameOwner;
    private string $formula;
    private string $country;

    public function __construct(?string $factory, ?int $index) {
        $this->modelFactory = $factory;
        $this->modelIndex = $index;
    }

    public function setOwner(string $name, string $surname): void {    // setter
        if ($name != '') {
            $this->nameOwner = $name;
        }
        if ($surname != '') {
            $this->surnameOwner = $surname;
        }
    }

    public function getFullModelIndex(): string {     // getter

        if ($this->modelFactory === 'UAZ') {
            $this->formula = self::WHEEL_FORMULA_1;
            $this->country = self::COUNTRY_1;
        }
        if ($this->modelFactory === 'BMW') {
            $this->formula = self::WHEEL_FORMULA_2;
            $this->country = self::COUNTRY_2;
        }
        return $this->modelFactory.'-'.$this->modelIndex.' wheel-formula: '.$this->formula.' country: '.$this->country;
    }

    public static function getHomeWorkCode(): string {    // static-getter

        return self::HOMEWORK_CODE;
    }
}