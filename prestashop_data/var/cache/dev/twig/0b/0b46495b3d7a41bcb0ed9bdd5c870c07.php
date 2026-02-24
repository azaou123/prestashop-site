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

/* @Modules/ps_emailalerts/mails/en/new_order.txt */
class __TwigTemplate_4b88de22f109008cf90b83906b162415 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_emailalerts/mails/en/new_order.txt"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_emailalerts/mails/en/new_order.txt"));

        // line 1
        echo "
[{shop_url}] 

Congratulations! 

A new order was placed on {shop_name} by the following customer:
{firstname} {lastname} ({email}) 

ORDER: {order_name} Placed on {date}

PAYMENT: {payment} \t\t 

REFERENCE

PRODUCT

UNIT PRICE

QUANTITY

TOTAL PRICE

{items} 

PRODUCTS 

{total_products} 

DISCOUNTS 

{total_discounts} 

GIFT-WRAPPING 

{total_wrapping} 

SHIPPING 

{total_shipping} 

TOTAL TAX PAID 

{total_tax_paid} 

TOTAL PAID 

{total_paid} 

{carrier} 

{delivery_block_html} 

{invoice_block_html} 

{message} 

{shop_name} [{shop_url}] powered by
PrestaShop(tm) [http://www.prestashop.com/] 

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_emailalerts/mails/en/new_order.txt";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
[{shop_url}] 

Congratulations! 

A new order was placed on {shop_name} by the following customer:
{firstname} {lastname} ({email}) 

ORDER: {order_name} Placed on {date}

PAYMENT: {payment} \t\t 

REFERENCE

PRODUCT

UNIT PRICE

QUANTITY

TOTAL PRICE

{items} 

PRODUCTS 

{total_products} 

DISCOUNTS 

{total_discounts} 

GIFT-WRAPPING 

{total_wrapping} 

SHIPPING 

{total_shipping} 

TOTAL TAX PAID 

{total_tax_paid} 

TOTAL PAID 

{total_paid} 

{carrier} 

{delivery_block_html} 

{invoice_block_html} 

{message} 

{shop_name} [{shop_url}] powered by
PrestaShop(tm) [http://www.prestashop.com/] 

", "@Modules/ps_emailalerts/mails/en/new_order.txt", "/var/www/html/modules/ps_emailalerts/mails/en/new_order.txt");
    }
}
