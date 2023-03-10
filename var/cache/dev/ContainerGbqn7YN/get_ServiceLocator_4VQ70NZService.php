<?php

namespace ContainerGbqn7YN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_4VQ70NZService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.4VQ70NZ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.4VQ70NZ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'ticket' => ['privates', '.errored..service_locator.4VQ70NZ.App\\Entity\\Ticket', NULL, 'Cannot autowire service ".service_locator.4VQ70NZ": it references class "App\\Entity\\Ticket" but no such service exists.'],
            'ticketRepository' => ['privates', 'App\\Repository\\TicketRepository', 'getTicketRepositoryService', true],
        ], [
            'ticket' => 'App\\Entity\\Ticket',
            'ticketRepository' => 'App\\Repository\\TicketRepository',
        ]);
    }
}
