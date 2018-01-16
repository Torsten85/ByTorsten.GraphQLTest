<?php
namespace ByTorsten\GraphQLTest\Type;

interface VehicleInterface
{
    /**
     * @return Int
     */
    public function getMaxSpeed(): Int;
}
