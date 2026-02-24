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

/* @Modules/ps_emailalerts/mails/fr/order_changed.txt */
class __TwigTemplate_013793807811591d9f3fbdcf5bcb325b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_emailalerts/mails/fr/order_changed.txt"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_emailalerts/mails/fr/order_changed.txt"));

        // line 1
        echo " 

{shop_url}

Bonjour {firstname} {lastname},

Identifiant de commande {order_name} - Commande modifiée

Votre commande ayant pour référence {order_name} sur {shop_name} a été modifiée par le marchand.

Pour en savoir plus, rendez-vous sur votre compte client.

Si vous avez un compte invité, vous pouvez suivre votre commande via la section [Suivi de commande]({guest_tracking_url}) sur notre boutique.

[{shop_name}]({shop_url})

Powered by [PrestaShop](https://www.prestashop-project.org/)
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_emailalerts/mails/fr/order_changed.txt";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" 

{shop_url}

Bonjour {firstname} {lastname},

Identifiant de commande {order_name} - Commande modifiée

Votre commande ayant pour référence {order_name} sur {shop_name} a été modifiée par le marchand.

Pour en savoir plus, rendez-vous sur votre compte client.

Si vous avez un compte invité, vous pouvez suivre votre commande via la section [Suivi de commande]({guest_tracking_url}) sur notre boutique.

[{shop_name}]({shop_url})

Powered by [PrestaShop](https://www.prestashop-project.org/)
", "@Modules/ps_emailalerts/mails/fr/order_changed.txt", "/var/www/html/modules/ps_emailalerts/mails/fr/order_changed.txt");
    }
}
