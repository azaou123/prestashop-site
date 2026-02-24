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

/* @Modules/ps_socialfollow/config.xml */
class __TwigTemplate_844f7e025f290ec06d88009b6a88eb81 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_socialfollow/config.xml"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_socialfollow/config.xml"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>
<module>
    <name>ps_socialfollow</name>
    <displayName><![CDATA[Social media follow links]]></displayName>
    <version><![CDATA[2.3.2]]></version>
    <description><![CDATA[Allows you to add information about your brand&#039;s social networking accounts.]]></description>
    <author><![CDATA[PrestaShop]]></author>
    <tab><![CDATA[]]></tab>
    <is_configurable>1</is_configurable>
    <need_instance>1</need_instance>
    <limited_countries></limited_countries>
</module>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_socialfollow/config.xml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" encoding=\"UTF-8\" ?>
<module>
    <name>ps_socialfollow</name>
    <displayName><![CDATA[Social media follow links]]></displayName>
    <version><![CDATA[2.3.2]]></version>
    <description><![CDATA[Allows you to add information about your brand&#039;s social networking accounts.]]></description>
    <author><![CDATA[PrestaShop]]></author>
    <tab><![CDATA[]]></tab>
    <is_configurable>1</is_configurable>
    <need_instance>1</need_instance>
    <limited_countries></limited_countries>
</module>
", "@Modules/ps_socialfollow/config.xml", "/var/www/html/modules/ps_socialfollow/config.xml");
    }
}
