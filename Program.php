<?php

namespace Application;

use DevNet\Web\Extensions\ApplicationBuilderExtensions;
use DevNet\Web\Extensions\ServiceCollectionExtensions;
use DevNet\Web\Hosting\WebHost;

class Program
{
    public static function main(array $args = [])
    {
        $builder = WebHost::createDefaultBuilder($args);
        $configuration = $builder->configuration;

        $builder->register(function ($services) {
            $services->addMvc();
            $services->addAntiforgery();
            $services->addAuthentication(function ($builder) {
                $builder->addCookie();
            });

            $services->addAuthorization();
        });

        $host = $builder->build();

        $host->start(function ($app) use ($configuration) {
            if ($configuration->getValue('environment') != 'development') {
                $app->UseExceptionHandler();
            } else {
                $app->UseExceptionHandler("/home/error");
            }

            $app->useRouter();
            $app->useAuthentication();

            $app->useEndpoint(function ($routes) {
                $routes->map("/user/{controller=Account}/{action=Index}/{id?}");
                $routes->map("{controller=Home}/{action=Index}/{id?}");
            });
        });
    }
}
