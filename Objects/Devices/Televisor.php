<?php
namespace Objects\Devices;

// Class Televisor

class Televisor {

    private const NICKNAME = 'ZOMBOYASHIK';
    public string $modelFactory;
    public string $modelIndex;

    public function __construct(?string $factory, ?int $index) {
        $this->modelFactory = $factory;
        $this->modelIndex = $index;
    }

    public function getFullModelIndex(): string {     // getter

        return $this->modelFactory.'-'.$this->modelIndex;
    }

    public static function getNickname(): string {    // static-getter

        return self::NICKNAME;
    }
}