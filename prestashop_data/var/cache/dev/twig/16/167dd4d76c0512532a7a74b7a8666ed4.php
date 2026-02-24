<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @Modules/ps_distributionapiclient/src/Middleware/Cache.php */
class __TwigTemplate_12115dc6a18f51b9e13f08d8001d0680 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_distributionapiclient/src/Middleware/Cache.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_distributionapiclient/src/Middleware/Cache.php"));

        // line 1
        echo "<?php
/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License version 3.0
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License version 3.0
 */

declare(strict_types=1);

namespace PrestaShop\\Module\\DistributionApiClient\\Middleware;

use Closure;
use Doctrine\\Common\\Cache\\CacheProvider;
use GuzzleHttp\\Promise\\FulfilledPromise;
use GuzzleHttp\\Promise\\PromiseInterface;
use GuzzleHttp\\Psr7\\Response;
use Psr\\Http\\Message\\RequestInterface;
use Psr\\Http\\Message\\ResponseInterface;

class Cache
{
    /** @var CacheProvider */
    private \$cache;

    public function __construct(CacheProvider \$cache)
    {
        \$this->cache = \$cache;
    }

    public function __invoke(callable \$handler): Closure
    {
        return function (RequestInterface \$request, array \$options) use (\$handler): PromiseInterface {
            \$service = (string) \$request->getUri();
            if (!\$this->cache->contains(\$service)) {
                \$response = \$handler(\$request, \$options);

                return \$response->then(function (ResponseInterface \$response) use (\$service): ResponseInterface {
                    if (\$response->getStatusCode() === 200) {
                        \$this->cache->save(\$service, \$this->makeCachedResponse(\$response));
                    }

                    return \$response;
                });
            }

            return new FulfilledPromise(\$this->getCachedResponse(\$service));
        };
    }

    private function getCachedResponse(string \$cacheKey): Response
    {
        /** @var CachedResponse \$response */
        \$response = \$this->cache->fetch(\$cacheKey);

        return new Response(
            200,
            \$response->getHeaders(),
            \$response->getBody()
        );
    }

    private function makeCachedResponse(ResponseInterface \$response): CachedResponse
    {
        return new CachedResponse(\$response->getHeaders(), (string) \$response->getBody());
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_distributionapiclient/src/Middleware/Cache.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License version 3.0
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License version 3.0
 */

declare(strict_types=1);

namespace PrestaShop\\Module\\DistributionApiClient\\Middleware;

use Closure;
use Doctrine\\Common\\Cache\\CacheProvider;
use GuzzleHttp\\Promise\\FulfilledPromise;
use GuzzleHttp\\Promise\\PromiseInterface;
use GuzzleHttp\\Psr7\\Response;
use Psr\\Http\\Message\\RequestInterface;
use Psr\\Http\\Message\\ResponseInterface;

class Cache
{
    /** @var CacheProvider */
    private \$cache;

    public function __construct(CacheProvider \$cache)
    {
        \$this->cache = \$cache;
    }

    public function __invoke(callable \$handler): Closure
    {
        return function (RequestInterface \$request, array \$options) use (\$handler): PromiseInterface {
            \$service = (string) \$request->getUri();
            if (!\$this->cache->contains(\$service)) {
                \$response = \$handler(\$request, \$options);

                return \$response->then(function (ResponseInterface \$response) use (\$service): ResponseInterface {
                    if (\$response->getStatusCode() === 200) {
                        \$this->cache->save(\$service, \$this->makeCachedResponse(\$response));
                    }

                    return \$response;
                });
            }

            return new FulfilledPromise(\$this->getCachedResponse(\$service));
        };
    }

    private function getCachedResponse(string \$cacheKey): Response
    {
        /** @var CachedResponse \$response */
        \$response = \$this->cache->fetch(\$cacheKey);

        return new Response(
            200,
            \$response->getHeaders(),
            \$response->getBody()
        );
    }

    private function makeCachedResponse(ResponseInterface \$response): CachedResponse
    {
        return new CachedResponse(\$response->getHeaders(), (string) \$response->getBody());
    }
}
", "@Modules/ps_distributionapiclient/src/Middleware/Cache.php", "/var/www/html/modules/ps_distributionapiclient/src/Middleware/Cache.php");
    }
}
