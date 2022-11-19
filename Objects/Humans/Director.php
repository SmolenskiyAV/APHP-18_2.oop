<?php

namespace Objects\Humans;

class Director extends Employee implements \DepartmentNameInterface, \PostInterface, \SpecializationInterface
{
    private const POST = 'head of department';
    private const SPECIALIZATION = 'management';
    private const PAYMENT = 100;

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

    public function getPost(): string // getter
    {
        return self::POST;
    }

    public function getSpecialization(): string // getter
    {
        return self::SPECIALIZATION;
    }

    public function getPayment(): int // getter
    {
        return self::PAYMENT;
    }

}