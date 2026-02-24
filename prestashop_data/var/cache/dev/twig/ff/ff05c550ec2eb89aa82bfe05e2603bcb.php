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

/* @Modules/ps_faviconnotificationbo/Makefile */
class __TwigTemplate_604f7982d65dd6f46a243669ac1c65d4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_faviconnotificationbo/Makefile"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_faviconnotificationbo/Makefile"));

        // line 1
        echo "help:
\t@egrep \"^#\" Makefile

# target: docker-build|db               - Setup/Build PHP & (node)JS dependencies
db: docker-build
docker-build: build-back

build-back:
\tdocker-compose run --rm php sh -c \"composer install\"

build-back-prod:
\tdocker-compose run --rm php sh -c \"composer install --no-dev -o\"

build-zip:
\tcp -Ra \$(PWD) /tmp/ps_faviconnotificationbo
\trm -rf /tmp/ps_faviconnotificationbo/.env.test
\trm -rf /tmp/ps_faviconnotificationbo/.php_cs.*
\trm -rf /tmp/ps_faviconnotificationbo/composer.*
\trm -rf /tmp/ps_faviconnotificationbo/.gitignore
\trm -rf /tmp/ps_faviconnotificationbo/deploy.sh
\trm -rf /tmp/ps_faviconnotificationbo/.editorconfig
\trm -rf /tmp/ps_faviconnotificationbo/.git
\trm -rf /tmp/ps_faviconnotificationbo/.github
\trm -rf /tmp/ps_faviconnotificationbo/_dev
\trm -rf /tmp/ps_faviconnotificationbo/tests
\trm -rf /tmp/ps_faviconnotificationbo/docker-compose.yml
\trm -rf /tmp/ps_faviconnotificationbo/Makefile
\tmv -v /tmp/ps_faviconnotificationbo \$(PWD)/ps_faviconnotificationbo
\tzip -r ps_faviconnotificationbo.zip ps_faviconnotificationbo
\trm -rf \$(PWD)/ps_faviconnotificationbo

# target: build-zip-prod                   - Launch prod zip generation of the module (will not work on windows)
build-zip-prod: build-back-prod build-zip
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_faviconnotificationbo/Makefile";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("help:
\t@egrep \"^#\" Makefile

# target: docker-build|db               - Setup/Build PHP & (node)JS dependencies
db: docker-build
docker-build: build-back

build-back:
\tdocker-compose run --rm php sh -c \"composer install\"

build-back-prod:
\tdocker-compose run --rm php sh -c \"composer install --no-dev -o\"

build-zip:
\tcp -Ra \$(PWD) /tmp/ps_faviconnotificationbo
\trm -rf /tmp/ps_faviconnotificationbo/.env.test
\trm -rf /tmp/ps_faviconnotificationbo/.php_cs.*
\trm -rf /tmp/ps_faviconnotificationbo/composer.*
\trm -rf /tmp/ps_faviconnotificationbo/.gitignore
\trm -rf /tmp/ps_faviconnotificationbo/deploy.sh
\trm -rf /tmp/ps_faviconnotificationbo/.editorconfig
\trm -rf /tmp/ps_faviconnotificationbo/.git
\trm -rf /tmp/ps_faviconnotificationbo/.github
\trm -rf /tmp/ps_faviconnotificationbo/_dev
\trm -rf /tmp/ps_faviconnotificationbo/tests
\trm -rf /tmp/ps_faviconnotificationbo/docker-compose.yml
\trm -rf /tmp/ps_faviconnotificationbo/Makefile
\tmv -v /tmp/ps_faviconnotificationbo \$(PWD)/ps_faviconnotificationbo
\tzip -r ps_faviconnotificationbo.zip ps_faviconnotificationbo
\trm -rf \$(PWD)/ps_faviconnotificationbo

# target: build-zip-prod                   - Launch prod zip generation of the module (will not work on windows)
build-zip-prod: build-back-prod build-zip
", "@Modules/ps_faviconnotificationbo/Makefile", "/var/www/html/modules/ps_faviconnotificationbo/Makefile");
    }
}
