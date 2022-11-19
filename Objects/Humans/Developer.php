<?php

namespace Objects\Humans;

class Developer extends Employee implements \DepartmentNameInterface, \SpecializationInterface, \PostInterface
{
    private const POST = 'developer';
    private const SPECIALIZATION = 'coding';
    private const PAYMENT = 25;

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