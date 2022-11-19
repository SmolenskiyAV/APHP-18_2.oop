<?php

namespace Objects\Humans;

class Manager extends Employee implements \DepartmentNameInterface, \PostInterface, \SpecializationInterface
{
    private const POST = 'head of team';
    private const SPECIALIZATION = 'team lead';
    private const PAYMENT = 50;

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