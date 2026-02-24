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

/* @Modules/referralprogram/mails/fr/referralprogram-invitation.txt */
class __TwigTemplate_c04aa84a225b8feea684f30fd2b499c1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/referralprogram/mails/fr/referralprogram-invitation.txt"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/referralprogram/mails/fr/referralprogram-invitation.txt"));

        // line 1
        echo " 

{shop_url}

{firstname_friend} {lastname_friend}, Rejoignez-nous !

Votre ami {firstname} {lastname} souhaite vous parrainer sur [{shop_name}]({shop_url}) !

Nous avons le plaisir de vous offrir un bon d'achat de {discount} à utiliser sur votre prochaine commande. Devenez son(sa) filleul(e) et remportez un bon d'achat de {discount} !

[Pour nous rejoindre, rien de plus simple, cliquez ici !]({link})

N'oubliez pas de renseigner l'adresse e-mail de l'ami qui vous parraine lors de votre inscription : {email}.

Bien cordialement,

[{shop_name}]({shop_url})

Powered by [PrestaShop](https://www.prestashop-project.org/)
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/referralprogram/mails/fr/referralprogram-invitation.txt";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" 

{shop_url}

{firstname_friend} {lastname_friend}, Rejoignez-nous !

Votre ami {firstname} {lastname} souhaite vous parrainer sur [{shop_name}]({shop_url}) !

Nous avons le plaisir de vous offrir un bon d'achat de {discount} à utiliser sur votre prochaine commande. Devenez son(sa) filleul(e) et remportez un bon d'achat de {discount} !

[Pour nous rejoindre, rien de plus simple, cliquez ici !]({link})

N'oubliez pas de renseigner l'adresse e-mail de l'ami qui vous parraine lors de votre inscription : {email}.

Bien cordialement,

[{shop_name}]({shop_url})

Powered by [PrestaShop](https://www.prestashop-project.org/)
", "@Modules/referralprogram/mails/fr/referralprogram-invitation.txt", "/var/www/html/modules/referralprogram/mails/fr/referralprogram-invitation.txt");
    }
}
