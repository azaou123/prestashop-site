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

/* @Modules/ps_emailalerts/mails/fr/new_order.txt */
class __TwigTemplate_4a251037f11432ac5928ebb234caf8fa extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_emailalerts/mails/fr/new_order.txt"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_emailalerts/mails/fr/new_order.txt"));

        // line 1
        echo " 

{shop_url}

Bravo !

Une nouvelle commande a été effectuée sur {shop_name} par le client suivant : {firstname} {lastname} ({email})

Détails de la commande

Commande : {order_name} passée le {date}

Paiement : {payment}

Référence\tProduit\tPrix unitaire\tQuantité\tPrix total   {items}
Produits\t{total_products}
Réductions\t{total_discounts}
Paquet cadeau\t{total_wrapping}
Livraison\t{total_shipping}
Incluant un total de taxes\t{total_tax_paid}
Total payé\t{total_paid}

Transporteur

Transporteur : {carrier}

Paiement : {payment}

Adresse de livraison

{delivery_block_html}

Adresse de facturation

{invoice_block_html}

Message du client :

{message}

[{shop_name}]({shop_url})

Powered by [PrestaShop](https://www.prestashop-project.org/)
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_emailalerts/mails/fr/new_order.txt";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" 

{shop_url}

Bravo !

Une nouvelle commande a été effectuée sur {shop_name} par le client suivant : {firstname} {lastname} ({email})

Détails de la commande

Commande : {order_name} passée le {date}

Paiement : {payment}

Référence\tProduit\tPrix unitaire\tQuantité\tPrix total   {items}
Produits\t{total_products}
Réductions\t{total_discounts}
Paquet cadeau\t{total_wrapping}
Livraison\t{total_shipping}
Incluant un total de taxes\t{total_tax_paid}
Total payé\t{total_paid}

Transporteur

Transporteur : {carrier}

Paiement : {payment}

Adresse de livraison

{delivery_block_html}

Adresse de facturation

{invoice_block_html}

Message du client :

{message}

[{shop_name}]({shop_url})

Powered by [PrestaShop](https://www.prestashop-project.org/)
", "@Modules/ps_emailalerts/mails/fr/new_order.txt", "/var/www/html/modules/ps_emailalerts/mails/fr/new_order.txt");
    }
}
