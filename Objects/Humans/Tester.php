<?php

namespace Objects\Humans;

class Tester extends Employee implements \DepartmentNameInterface, \SpecializationInterface, \PostInterface
{
    private const POST = 'tester';
    private const SPECIALIZATION = 'testing code';
    private const PAYMENT = 20;

    public function setDepartment(string $departmentValue): void    // setter
    {
        if ($departmentValue != '') {
            $this->department = $departmentValue;
        }
    }

    public function getDepartmentName(): string    // getter
    {
        return $this->department;
    }

    public function getPost(): string // static-getter
    {
        return self::POST;
    }

    public function getSpecialization(): string // static-getter
    {
        return self::SPECIALIZATION;
    }

    public function getPayment(): int // static-getter
    {
        return self::PAYMENT;
    }
}