<?php
namespace ByTorsten\GraphQLTest\Resolver;

use ByTorsten\GraphQLTest\Type\Airplane;
use ByTorsten\GraphQLTest\Type\VehicleInterface;
use Wwwision\GraphQL\Resolver;

class QueryResolver extends Resolver
{
    /**
     * @return VehicleInterface
     */
    public function myVehicle(): VehicleInterface
    {
        return new Airplane(999);
    }
}
