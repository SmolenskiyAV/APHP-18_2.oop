<?php

namespace Objects\Humans;

// Class Student

class Student {

    public int $age;
    public string $name;
    public string $surname;
    public string $currentModule;
    public const EDUCATIONAL_INSTITUTION = 'Netology';

    public function __construct(int $age, string $name, string $surname) {
        $this->age = $age;
        $this->name = $name;
        $this->surname = $surname;
    }

    public function setModule(string $module): void {    // setter
        if ($module != '') {
            $this->currentModule = $module;
        }
    }

    public function getAge(): int {     // getter
        return $this->age;
    }

    public static function getInstitution(): string // static-getter
    {
        return self::EDUCATIONAL_INSTITUTION;

    }
}

