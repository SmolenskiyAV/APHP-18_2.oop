<?php

namespace Objects\Humans;

// Class Employee

abstract class Employee {

    public int $age;
    public string $name;
    public string $surname;
    protected string $department;
    protected const COMPANY = 'Netology';

    public function __construct(int $age, string $name, string $surname) {
        $this->age = $age;
        $this->name = $name;
        $this->surname = $surname;
    }

    abstract public function getDepartmentName(): string;

    public function getCompanyName(): string // static-getter
    {
        return self::COMPANY;
    }
}
