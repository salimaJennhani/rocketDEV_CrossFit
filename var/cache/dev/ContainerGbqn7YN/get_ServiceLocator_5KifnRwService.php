<?php

namespace ContainerGbqn7YN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_5KifnRwService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.5KifnRw' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.5KifnRw'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'competition' => ['privates', '.errored..service_locator.5KifnRw.App\\Entity\\Competition', NULL, 'Cannot autowire service ".service_locator.5KifnRw": it references class "App\\Entity\\Competition" but no such service exists.'],
            'competitionRepository' => ['privates', 'App\\Repository\\CompetitionRepository', 'getCompetitionRepositoryService', true],
        ], [
            'competition' => 'App\\Entity\\Competition',
            'competitionRepository' => 'App\\Repository\\CompetitionRepository',
        ]);
    }
}
