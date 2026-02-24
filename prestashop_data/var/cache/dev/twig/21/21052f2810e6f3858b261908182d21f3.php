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

/* @Modules/ps_reminder/mails/fr/followup_3.txt */
class __TwigTemplate_48d36e975cd3b428f564ff377ce68cc8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_reminder/mails/fr/followup_3.txt"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_reminder/mails/fr/followup_3.txt"));

        // line 1
        echo " 

{shop_url}

Bonjour {firstname} {lastname},

Merci pour votre confiance.

Nous avons le plaisir de vous offrir une réduction de {amount}% sur votre prochaine commande. Cette offre est valable {days} jours alors n'attendez plus !

Voici votre BON DE REDUCTION : {voucher_num}

Saisissez ce code dans votre panier pour bénéficier de la réduction.

[{shop_name}]({shop_url})

Powered by [PrestaShop](https://www.prestashop-project.org/)
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_reminder/mails/fr/followup_3.txt";
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

Merci pour votre confiance.

Nous avons le plaisir de vous offrir une réduction de {amount}% sur votre prochaine commande. Cette offre est valable {days} jours alors n'attendez plus !

Voici votre BON DE REDUCTION : {voucher_num}

Saisissez ce code dans votre panier pour bénéficier de la réduction.

[{shop_name}]({shop_url})

Powered by [PrestaShop](https://www.prestashop-project.org/)
", "@Modules/ps_reminder/mails/fr/followup_3.txt", "/var/www/html/modules/ps_reminder/mails/fr/followup_3.txt");
    }
}
