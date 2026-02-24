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

/* @Modules/followup/mails/fr/followup_4.txt */
class __TwigTemplate_8e8d0662516bcbedc75e254fb74f3b67 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/followup/mails/fr/followup_4.txt"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/followup/mails/fr/followup_4.txt"));

        // line 1
        echo " 

{shop_url}

Bonjour {firstname} {lastname},

Votre panier chez {shop_name}

Félicitations, vous faites partie de nos meilleurs clients ! Cependant, vous n'avez pas commandé depuis {days_threshold} jours.

Vous panier a été enregistré, vous pouvez reprendre votre commande en vous rendant sur notre boutique : {shop_url}

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
        return "@Modules/followup/mails/fr/followup_4.txt";
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

Votre panier chez {shop_name}

Félicitations, vous faites partie de nos meilleurs clients ! Cependant, vous n'avez pas commandé depuis {days_threshold} jours.

Vous panier a été enregistré, vous pouvez reprendre votre commande en vous rendant sur notre boutique : {shop_url}

Nous avons le plaisir de vous offrir une réduction de {amount}% sur votre prochaine commande. Cette offre est valable {days} jours alors n'attendez plus !

Voici votre BON DE REDUCTION : {voucher_num}

Saisissez ce code dans votre panier pour bénéficier de la réduction.

[{shop_name}]({shop_url})

Powered by [PrestaShop](https://www.prestashop-project.org/)
", "@Modules/followup/mails/fr/followup_4.txt", "/var/www/html/modules/followup/mails/fr/followup_4.txt");
    }
}
