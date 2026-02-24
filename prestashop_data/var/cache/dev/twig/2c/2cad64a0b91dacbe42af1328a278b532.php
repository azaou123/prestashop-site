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

/* @Modules/ps_brandlist/views/templates/_partials/brand_text.tpl */
class __TwigTemplate_0f83f339a166cc3e9cb3c575072be479 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_brandlist/views/templates/_partials/brand_text.tpl"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_brandlist/views/templates/_partials/brand_text.tpl"));

        // line 1
        echo "<ul>
  {foreach from=\$brands item=brand name=brand_list}
    {if \$smarty.foreach.brand_list.iteration <= \$text_list_nb}
      <li>
        <a href=\"{\$brand['link']}\" title=\"{\$brand['name']}\">
          {\$brand['name']}
        </a>
      </li>
    {/if}
  {/foreach}
</ul>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_brandlist/views/templates/_partials/brand_text.tpl";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<ul>
  {foreach from=\$brands item=brand name=brand_list}
    {if \$smarty.foreach.brand_list.iteration <= \$text_list_nb}
      <li>
        <a href=\"{\$brand['link']}\" title=\"{\$brand['name']}\">
          {\$brand['name']}
        </a>
      </li>
    {/if}
  {/foreach}
</ul>
", "@Modules/ps_brandlist/views/templates/_partials/brand_text.tpl", "/var/www/html/modules/ps_brandlist/views/templates/_partials/brand_text.tpl");
    }
}
