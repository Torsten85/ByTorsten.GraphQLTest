<?php
namespace ByTorsten\GraphQLTest\Type;

class Airplane implements VehicleInterface
{
    const DEFAULT_WINGSPAN = 120;

    /**
     * @var int
     */
    protected $maxSpeed;

    /**
     * @param int $maxSpeed
     */
    public function __construct(int $maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;
    }

    /**
     * @return Int
     */
    public function getMaxSpeed(): Int
    {
        return $this->maxSpeed;
    }

    /**
     * @return Int
     */
    public function getWingspan(): Int
    {
        return static::DEFAULT_WINGSPAN;
    }
}
