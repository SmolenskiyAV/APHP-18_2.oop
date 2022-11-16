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

    public static function getPost(): string // static-getter
    {
        return self::POST;
    }

    public static function getSpecialization(): string // static-getter
    {
        return self::SPECIALIZATION;
    }

    public static function getPayment(): int // static-getter
    {
        return self::PAYMENT;
    }

}