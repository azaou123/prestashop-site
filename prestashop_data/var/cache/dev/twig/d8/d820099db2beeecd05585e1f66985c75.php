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

/* @Modules/ps_emailalerts/mails/en/order_changed.txt */
class __TwigTemplate_e26ba0dc5975c2688098b2439f2130b4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_emailalerts/mails/en/order_changed.txt"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_emailalerts/mails/en/order_changed.txt"));

        // line 1
        echo "
[{shop_url}]

Hi {firstname} {lastname},

Your order with the reference {order_name} from {shop_name} has
been modified.

You can review your order and download your invoice from the
\"Order history\" [{history_url}] section of your
customer account by clicking \"My account\"
[{my_account_url}] on our shop.

If you have a guest account, you can follow your order via the
\"Guest Tracking\"
[{guest_tracking_url}?id_order={order_name}] section
on our shop.

{shop_name} [{shop_url}] powered by
PrestaShop(tm) [http://www.prestashop.com/]

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_emailalerts/mails/en/order_changed.txt";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
[{shop_url}]

Hi {firstname} {lastname},

Your order with the reference {order_name} from {shop_name} has
been modified.

You can review your order and download your invoice from the
\"Order history\" [{history_url}] section of your
customer account by clicking \"My account\"
[{my_account_url}] on our shop.

If you have a guest account, you can follow your order via the
\"Guest Tracking\"
[{guest_tracking_url}?id_order={order_name}] section
on our shop.

{shop_name} [{shop_url}] powered by
PrestaShop(tm) [http://www.prestashop.com/]

", "@Modules/ps_emailalerts/mails/en/order_changed.txt", "/var/www/html/modules/ps_emailalerts/mails/en/order_changed.txt");
    }
}
