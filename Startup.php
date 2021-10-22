<?php

namespace Application;

use DevNet\Core\Configuration\IConfiguration;
use DevNet\Core\Dependency\IServiceCollection;
use DevNet\Core\Dispatcher\IApplicationBuilder;
use DevNet\Core\Extensions\ServiceCollectionExtensions;
use DevNet\Core\Extensions\ApplicationBuilderExtensions;

class Startup
{
    private IConfiguration $Configuration;

    public function __construct(IConfiguration $configuration)
    {
        $this->Configuration = $configuration;
    }

    public function configureServices(IServiceCollection $services)
    {
        $services->addMvc();

        $services->addAntiforgery();

        $services->addAuthentication(function ($options) {
            $options->LoginPath = '/user/account/login';
        });

        $services->addAuthorisation();
    }

    public function configure(IApplicationBuilder $app)
    {
        if ($this->Configuration->getValue('environment') == 'development') {
            $app->UseExceptionHandler();
        } else {
            $app->UseExceptionHandler("/home/error");
        }

        $app->useRouter();

        $app->useAuthentication();

        $app->useAuthorization();

        $app->useEndpoint(function ($routes) {
            $routes->mapRoute("user", "/user/{controller=Account}/{action=Index}/{id?}");
            $routes->mapRoute("default", "{controller=Home}/{action=Index}/{id?}");
        });
    }
}
