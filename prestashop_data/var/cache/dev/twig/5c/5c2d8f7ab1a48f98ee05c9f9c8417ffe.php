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

/* @Modules/followup/mails/fr/followup_1.txt */
class __TwigTemplate_79b2927e8d5b1ae07fbaf6e5d5e98e19 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/followup/mails/fr/followup_1.txt"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/followup/mails/fr/followup_1.txt"));

        // line 1
        echo " 

{shop_url}

Bonjour {firstname} {lastname},

Votre panier chez {shop_name}

Merci de votre visite. Cependant, vous n'avez pas finalisé votre commande.

Vous panier a été conservé, vous pouvez reprendre votre commande depuis notre boutique : {shop_url}

Nous avons le plaisir de vous offrir une réduction de {amount}% sur votre prochaine commande. Cette offre est valable {days} jours alors n'attendez plus !

Votre bon de réduction sur {shop_name}

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
        return "@Modules/followup/mails/fr/followup_1.txt";
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

Merci de votre visite. Cependant, vous n'avez pas finalisé votre commande.

Vous panier a été conservé, vous pouvez reprendre votre commande depuis notre boutique : {shop_url}

Nous avons le plaisir de vous offrir une réduction de {amount}% sur votre prochaine commande. Cette offre est valable {days} jours alors n'attendez plus !

Votre bon de réduction sur {shop_name}

Voici votre BON DE REDUCTION : {voucher_num}

Saisissez ce code dans votre panier pour bénéficier de la réduction.

[{shop_name}]({shop_url})

Powered by [PrestaShop](https://www.prestashop-project.org/)
", "@Modules/followup/mails/fr/followup_1.txt", "/var/www/html/modules/followup/mails/fr/followup_1.txt");
    }
}
