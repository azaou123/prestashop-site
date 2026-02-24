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

/* @Modules/referralprogram/mails/fr/referralprogram-voucher.txt */
class __TwigTemplate_ee9f345b4f5467375060ed6c5ea81f99 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/referralprogram/mails/fr/referralprogram-voucher.txt"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/referralprogram/mails/fr/referralprogram-voucher.txt"));

        // line 1
        echo " 

{shop_url}

Bonjour {firstname} {lastname},

Programme de parrainage

Nous vous informons de la génération d'un bon de réduction à votre nom relatif à votre parrainage.
Voici le numéro de votre bon de réduction : {voucher_num}, d'un montant total de {voucher_num}

Copiez-collez ce numéro dans le panier de votre prochain achat avant de régler la commande.

[{shop_name}]({shop_url})

Powered by [PrestaShop](https://www.prestashop-project.org/)
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/referralprogram/mails/fr/referralprogram-voucher.txt";
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

Programme de parrainage

Nous vous informons de la génération d'un bon de réduction à votre nom relatif à votre parrainage.
Voici le numéro de votre bon de réduction : {voucher_num}, d'un montant total de {voucher_num}

Copiez-collez ce numéro dans le panier de votre prochain achat avant de régler la commande.

[{shop_name}]({shop_url})

Powered by [PrestaShop](https://www.prestashop-project.org/)
", "@Modules/referralprogram/mails/fr/referralprogram-voucher.txt", "/var/www/html/modules/referralprogram/mails/fr/referralprogram-voucher.txt");
    }
}
