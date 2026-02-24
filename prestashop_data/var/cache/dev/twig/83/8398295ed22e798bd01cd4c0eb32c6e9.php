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

/* @Modules/ps_emailalerts/mails/en/return_slip.html */
class __TwigTemplate_98130826db3ef959360f1a7c8f432752 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_emailalerts/mails/en/return_slip.html"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_emailalerts/mails/en/return_slip.html"));

        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.01//EN\" \"http://www.w3.org/TR/1999/REC-html401-19991224/strict.dtd\">
<html>
\t<head>
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0\" />
\t\t<title>Message from {shop_name}</title>
\t\t
\t\t
\t\t<style>\t@media only screen and (max-width: 300px){ 
\t\t\t\tbody {
\t\t\t\t\twidth:218px !important;
\t\t\t\t\tmargin:auto !important;
\t\t\t\t}
\t\t\t\t.table {width:195px !important;margin:auto !important;}
\t\t\t\t.logo, .titleblock, .linkbelow, .box, .footer, .space_footer{width:auto !important;display: block !important;}\t\t
\t\t\t\tspan.title{font-size:20px !important;line-height: 23px !important}
\t\t\t\tspan.subtitle{font-size: 14px !important;line-height: 18px !important;padding-top:10px !important;display:block !important;}\t\t
\t\t\t\ttd.box p{font-size: 12px !important;font-weight: bold !important;}
\t\t\t\t.table-recap table, .table-recap thead, .table-recap tbody, .table-recap th, .table-recap td, .table-recap tr { 
\t\t\t\t\tdisplay: block !important; 
\t\t\t\t}
\t\t\t\t.table-recap{width: 200px!important;}
\t\t\t\t.table-recap tr td, .conf_body td{text-align:center !important;}\t
\t\t\t\t.address{display: block !important;margin-bottom: 10px !important;}
\t\t\t\t.space_address{display: none !important;}\t
\t\t\t}
\t@media only screen and (min-width: 301px) and (max-width: 500px) { 
\t\t\t\tbody {width:308px!important;margin:auto!important;}
\t\t\t\t.table {width:285px!important;margin:auto!important;}\t
\t\t\t\t.logo, .titleblock, .linkbelow, .box, .footer, .space_footer{width:auto!important;display: block!important;}\t
\t\t\t\t.table-recap table, .table-recap thead, .table-recap tbody, .table-recap th, .table-recap td, .table-recap tr { 
\t\t\t\t\tdisplay: block !important; 
\t\t\t\t}
\t\t\t\t.table-recap{width: 295px !important;}
\t\t\t\t.table-recap tr td, .conf_body td{text-align:center !important;}
\t\t\t\t
\t\t\t}
\t@media only screen and (min-width: 501px) and (max-width: 768px) {
\t\t\t\tbody {width:478px!important;margin:auto!important;}
\t\t\t\t.table {width:450px!important;margin:auto!important;}\t
\t\t\t\t.logo, .titleblock, .linkbelow, .box, .footer, .space_footer{width:auto!important;display: block!important;}\t\t\t
\t\t\t}
\t@media only screen and (max-device-width: 480px) { 
\t\t\t\tbody {width:308px!important;margin:auto!important;}
\t\t\t\t.table {width:285px;margin:auto!important;}\t
\t\t\t\t.logo, .titleblock, .linkbelow, .box, .footer, .space_footer{width:auto!important;display: block!important;}
\t\t\t\t
\t\t\t\t.table-recap{width: 295px!important;}
\t\t\t\t.table-recap tr td, .conf_body td{text-align:center!important;}\t
\t\t\t\t.address{display: block !important;margin-bottom: 10px !important;}
\t\t\t\t.space_address{display: none !important;}\t
\t\t\t}
</style>

\t</head>
\t<body style=\"-webkit-text-size-adjust:none;background-color:#fff;width:650px;font-family:Open-sans, sans-serif;color:#555454;font-size:13px;line-height:18px;margin:auto\" >
\t\t<table class=\"table table-mail\" style=\"width:100%;margin-top:10px;-moz-box-shadow:0 0 5px #afafaf;-webkit-box-shadow:0 0 5px #afafaf;-o-box-shadow:0 0 5px #afafaf;box-shadow:0 0 5px #afafaf;filter:progid:DXImageTransform.Microsoft.Shadow(color=#afafaf,Direction=134,Strength=5)\">
\t\t\t<tr>
\t\t\t\t<td class=\"space\" style=\"width:20px;padding:7px 0\">&nbsp;</td>
\t\t\t\t<td align=\"center\" style=\"padding:7px 0\">
\t\t\t\t\t<table class=\"table\" bgcolor=\"#ffffff\" style=\"width:100%\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td align=\"center\" class=\"logo\" style=\"border-bottom:4px solid #333333;padding:7px 0\">
\t\t\t\t\t\t\t\t<a title=\"{shop_name}\" href=\"{shop_url}\" style=\"color:#337ff1\">
\t\t\t\t\t\t\t\t\t<img src=\"{shop_logo}\" alt=\"{shop_name}\" />
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>

<tr>
\t<td align=\"center\" class=\"titleblock\" style=\"padding:7px 0\">
\t\t<font size=\"2\" face=\"Open-sans, sans-serif\" color=\"#555454\">
\t\t\t<span class=\"title\" style=\"font-weight:500;font-size:28px;text-transform:uppercase;line-height:33px\">Hi,</span>
\t\t</font>
\t</td>
</tr>
<tr>
\t<td class=\"space_footer\" style=\"padding:0!important\">&nbsp;</td>
</tr>
<tr>
\t<td class=\"linkbelow\" style=\"border:none;padding:7px 0\">
\t\t<span>You have received a new return request for {shop_name}.</span>
\t</td>
</tr>
<tr>
\t<td class=\"space_footer\" style=\"padding:0!important\">&nbsp;</td>
</tr>
<tr>
\t<td class=\"box\" colspan=\"3\" style=\"background-color:#f8f8f8;border:1px solid #d6d4d4!important;padding:7px 0\">
\t\t<p style=\"margin:3px 0 7px;text-transform:uppercase;font-weight:500;font-size:18px;border-bottom:1px solid #d6d4d4!important;padding-bottom:10px\">
\t\t\tReturn details\t\t</p>
\t\t<span style=\"color:#777\">
\t\t\t<span style=\"color:#333\"><strong>Order:</strong></span> {order_name} Placed on {date}<br />
\t\t\t<span style=\"color:#333\"><strong>Customer:</strong></span> {firstname} {lastname}, ({email})
\t\t</span>
\t</td>
</tr>
<tr>
\t<td style=\"border:none;padding:7px 0\">
\t\t<table class=\"table table-recap\" bgcolor=\"#ffffff\" style=\"width:100%;background-color:#fff;border-collapse:collapse\"><!-- Title -->
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th style=\"border:1px solid #DDD!important;background-color:#fbfbfb;font-family:Arial;color:#333;font-size:13px;padding:10px\">Reference</th>
\t\t\t\t\t<th style=\"border:1px solid #DDD!important;background-color:#fbfbfb;font-family:Arial;color:#333;font-size:13px;padding:10px\">Product</th>
\t\t\t\t\t<th style=\"border:1px solid #DDD!important;background-color:#fbfbfb;font-family:Arial;color:#333;font-size:13px;padding:10px\">Quantity</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"5\" style=\"color:#777;padding:7px 0;border:1px solid #DDD!important\">
\t\t\t\t\t\t{items}
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</tbody>
\t\t</table>
\t</td>
</tr>
<tr>
\t<td class=\"space_footer\" style=\"padding:0!important;border:none\">&nbsp;</td>
</tr>
<tr>
\t<td style=\"border:none;padding:7px 0\">
\t\t<table class=\"table\" style=\"width:100%;background-color:#fff\">
\t\t\t<tr>
\t\t\t\t<td class=\"box address\" width=\"310\" style=\"background-color:#f8f8f8;border:1px solid #d6d4d4!important;padding:7px 0\">
\t\t\t\t\t<p style=\"margin:3px 0 7px;text-transform:uppercase;font-weight:500;font-size:18px;border-bottom:1px solid #d6d4d4!important;padding-bottom:10px\">Delivery address</p>
\t\t\t\t\t<span style=\"color:#777\">
\t\t\t\t\t\t{delivery_block_html}
\t\t\t\t\t</span>
\t\t\t\t</td>
\t\t\t\t<td width=\"20\" class=\"space_address\" style=\"border:none;padding:7px 0\">&nbsp;</td>
\t\t\t\t<td class=\"box address\" width=\"310\" style=\"background-color:#f8f8f8;border:1px solid #d6d4d4!important;padding:7px 0\">
\t\t\t\t\t<p style=\"margin:3px 0 7px;text-transform:uppercase;font-weight:500;font-size:18px;border-bottom:1px solid #d6d4d4!important;padding-bottom:10px\">Billing address</p>
\t\t\t\t\t<span style=\"color:#777\">
\t\t\t\t\t\t{invoice_block_html}
\t\t\t\t\t</span>
\t\t\t\t</td>
\t\t\t</tr>
\t\t</table>
\t</td>
</tr>
<tr>
\t<td class=\"space_footer\" style=\"padding:0!important;border:none\">&nbsp;</td>
</tr>
<tr>
\t<td class=\"box\" colspan=\"3\" style=\"background-color:#f8f8f8;border:1px solid #d6d4d4!important;padding:7px 0\">
\t\t<p style=\"margin:3px 0 7px;text-transform:uppercase;font-weight:500;font-size:18px;border-bottom:1px solid #d6d4d4!important;padding-bottom:10px\">
\t\t\tCustomer message:\t\t</p>
\t\t<span style=\"color:#777\">
\t\t\t{message}
\t\t</span>
\t</td>
</tr>

\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"space_footer\" style=\"padding:0!important\">&nbsp;</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"footer\" style=\"border-top:4px solid #333333;padding:7px 0\">
\t\t\t\t\t\t\t\t<span><a href=\"{shop_url}\" style=\"color:#337ff1\">{shop_name}</a> powered by <a href=\"http://www.prestashop.com/\" style=\"color:#337ff1\">PrestaShop&trade;</a></span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t</td>
\t\t\t\t<td class=\"space\" style=\"width:20px;padding:7px 0\">&nbsp;</td>
\t\t\t</tr>
\t\t</table>
\t</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_emailalerts/mails/en/return_slip.html";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.01//EN\" \"http://www.w3.org/TR/1999/REC-html401-19991224/strict.dtd\">
<html>
\t<head>
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0\" />
\t\t<title>Message from {shop_name}</title>
\t\t
\t\t
\t\t<style>\t@media only screen and (max-width: 300px){ 
\t\t\t\tbody {
\t\t\t\t\twidth:218px !important;
\t\t\t\t\tmargin:auto !important;
\t\t\t\t}
\t\t\t\t.table {width:195px !important;margin:auto !important;}
\t\t\t\t.logo, .titleblock, .linkbelow, .box, .footer, .space_footer{width:auto !important;display: block !important;}\t\t
\t\t\t\tspan.title{font-size:20px !important;line-height: 23px !important}
\t\t\t\tspan.subtitle{font-size: 14px !important;line-height: 18px !important;padding-top:10px !important;display:block !important;}\t\t
\t\t\t\ttd.box p{font-size: 12px !important;font-weight: bold !important;}
\t\t\t\t.table-recap table, .table-recap thead, .table-recap tbody, .table-recap th, .table-recap td, .table-recap tr { 
\t\t\t\t\tdisplay: block !important; 
\t\t\t\t}
\t\t\t\t.table-recap{width: 200px!important;}
\t\t\t\t.table-recap tr td, .conf_body td{text-align:center !important;}\t
\t\t\t\t.address{display: block !important;margin-bottom: 10px !important;}
\t\t\t\t.space_address{display: none !important;}\t
\t\t\t}
\t@media only screen and (min-width: 301px) and (max-width: 500px) { 
\t\t\t\tbody {width:308px!important;margin:auto!important;}
\t\t\t\t.table {width:285px!important;margin:auto!important;}\t
\t\t\t\t.logo, .titleblock, .linkbelow, .box, .footer, .space_footer{width:auto!important;display: block!important;}\t
\t\t\t\t.table-recap table, .table-recap thead, .table-recap tbody, .table-recap th, .table-recap td, .table-recap tr { 
\t\t\t\t\tdisplay: block !important; 
\t\t\t\t}
\t\t\t\t.table-recap{width: 295px !important;}
\t\t\t\t.table-recap tr td, .conf_body td{text-align:center !important;}
\t\t\t\t
\t\t\t}
\t@media only screen and (min-width: 501px) and (max-width: 768px) {
\t\t\t\tbody {width:478px!important;margin:auto!important;}
\t\t\t\t.table {width:450px!important;margin:auto!important;}\t
\t\t\t\t.logo, .titleblock, .linkbelow, .box, .footer, .space_footer{width:auto!important;display: block!important;}\t\t\t
\t\t\t}
\t@media only screen and (max-device-width: 480px) { 
\t\t\t\tbody {width:308px!important;margin:auto!important;}
\t\t\t\t.table {width:285px;margin:auto!important;}\t
\t\t\t\t.logo, .titleblock, .linkbelow, .box, .footer, .space_footer{width:auto!important;display: block!important;}
\t\t\t\t
\t\t\t\t.table-recap{width: 295px!important;}
\t\t\t\t.table-recap tr td, .conf_body td{text-align:center!important;}\t
\t\t\t\t.address{display: block !important;margin-bottom: 10px !important;}
\t\t\t\t.space_address{display: none !important;}\t
\t\t\t}
</style>

\t</head>
\t<body style=\"-webkit-text-size-adjust:none;background-color:#fff;width:650px;font-family:Open-sans, sans-serif;color:#555454;font-size:13px;line-height:18px;margin:auto\" >
\t\t<table class=\"table table-mail\" style=\"width:100%;margin-top:10px;-moz-box-shadow:0 0 5px #afafaf;-webkit-box-shadow:0 0 5px #afafaf;-o-box-shadow:0 0 5px #afafaf;box-shadow:0 0 5px #afafaf;filter:progid:DXImageTransform.Microsoft.Shadow(color=#afafaf,Direction=134,Strength=5)\">
\t\t\t<tr>
\t\t\t\t<td class=\"space\" style=\"width:20px;padding:7px 0\">&nbsp;</td>
\t\t\t\t<td align=\"center\" style=\"padding:7px 0\">
\t\t\t\t\t<table class=\"table\" bgcolor=\"#ffffff\" style=\"width:100%\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td align=\"center\" class=\"logo\" style=\"border-bottom:4px solid #333333;padding:7px 0\">
\t\t\t\t\t\t\t\t<a title=\"{shop_name}\" href=\"{shop_url}\" style=\"color:#337ff1\">
\t\t\t\t\t\t\t\t\t<img src=\"{shop_logo}\" alt=\"{shop_name}\" />
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>

<tr>
\t<td align=\"center\" class=\"titleblock\" style=\"padding:7px 0\">
\t\t<font size=\"2\" face=\"Open-sans, sans-serif\" color=\"#555454\">
\t\t\t<span class=\"title\" style=\"font-weight:500;font-size:28px;text-transform:uppercase;line-height:33px\">Hi,</span>
\t\t</font>
\t</td>
</tr>
<tr>
\t<td class=\"space_footer\" style=\"padding:0!important\">&nbsp;</td>
</tr>
<tr>
\t<td class=\"linkbelow\" style=\"border:none;padding:7px 0\">
\t\t<span>You have received a new return request for {shop_name}.</span>
\t</td>
</tr>
<tr>
\t<td class=\"space_footer\" style=\"padding:0!important\">&nbsp;</td>
</tr>
<tr>
\t<td class=\"box\" colspan=\"3\" style=\"background-color:#f8f8f8;border:1px solid #d6d4d4!important;padding:7px 0\">
\t\t<p style=\"margin:3px 0 7px;text-transform:uppercase;font-weight:500;font-size:18px;border-bottom:1px solid #d6d4d4!important;padding-bottom:10px\">
\t\t\tReturn details\t\t</p>
\t\t<span style=\"color:#777\">
\t\t\t<span style=\"color:#333\"><strong>Order:</strong></span> {order_name} Placed on {date}<br />
\t\t\t<span style=\"color:#333\"><strong>Customer:</strong></span> {firstname} {lastname}, ({email})
\t\t</span>
\t</td>
</tr>
<tr>
\t<td style=\"border:none;padding:7px 0\">
\t\t<table class=\"table table-recap\" bgcolor=\"#ffffff\" style=\"width:100%;background-color:#fff;border-collapse:collapse\"><!-- Title -->
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th style=\"border:1px solid #DDD!important;background-color:#fbfbfb;font-family:Arial;color:#333;font-size:13px;padding:10px\">Reference</th>
\t\t\t\t\t<th style=\"border:1px solid #DDD!important;background-color:#fbfbfb;font-family:Arial;color:#333;font-size:13px;padding:10px\">Product</th>
\t\t\t\t\t<th style=\"border:1px solid #DDD!important;background-color:#fbfbfb;font-family:Arial;color:#333;font-size:13px;padding:10px\">Quantity</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"5\" style=\"color:#777;padding:7px 0;border:1px solid #DDD!important\">
\t\t\t\t\t\t{items}
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</tbody>
\t\t</table>
\t</td>
</tr>
<tr>
\t<td class=\"space_footer\" style=\"padding:0!important;border:none\">&nbsp;</td>
</tr>
<tr>
\t<td style=\"border:none;padding:7px 0\">
\t\t<table class=\"table\" style=\"width:100%;background-color:#fff\">
\t\t\t<tr>
\t\t\t\t<td class=\"box address\" width=\"310\" style=\"background-color:#f8f8f8;border:1px solid #d6d4d4!important;padding:7px 0\">
\t\t\t\t\t<p style=\"margin:3px 0 7px;text-transform:uppercase;font-weight:500;font-size:18px;border-bottom:1px solid #d6d4d4!important;padding-bottom:10px\">Delivery address</p>
\t\t\t\t\t<span style=\"color:#777\">
\t\t\t\t\t\t{delivery_block_html}
\t\t\t\t\t</span>
\t\t\t\t</td>
\t\t\t\t<td width=\"20\" class=\"space_address\" style=\"border:none;padding:7px 0\">&nbsp;</td>
\t\t\t\t<td class=\"box address\" width=\"310\" style=\"background-color:#f8f8f8;border:1px solid #d6d4d4!important;padding:7px 0\">
\t\t\t\t\t<p style=\"margin:3px 0 7px;text-transform:uppercase;font-weight:500;font-size:18px;border-bottom:1px solid #d6d4d4!important;padding-bottom:10px\">Billing address</p>
\t\t\t\t\t<span style=\"color:#777\">
\t\t\t\t\t\t{invoice_block_html}
\t\t\t\t\t</span>
\t\t\t\t</td>
\t\t\t</tr>
\t\t</table>
\t</td>
</tr>
<tr>
\t<td class=\"space_footer\" style=\"padding:0!important;border:none\">&nbsp;</td>
</tr>
<tr>
\t<td class=\"box\" colspan=\"3\" style=\"background-color:#f8f8f8;border:1px solid #d6d4d4!important;padding:7px 0\">
\t\t<p style=\"margin:3px 0 7px;text-transform:uppercase;font-weight:500;font-size:18px;border-bottom:1px solid #d6d4d4!important;padding-bottom:10px\">
\t\t\tCustomer message:\t\t</p>
\t\t<span style=\"color:#777\">
\t\t\t{message}
\t\t</span>
\t</td>
</tr>

\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"space_footer\" style=\"padding:0!important\">&nbsp;</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"footer\" style=\"border-top:4px solid #333333;padding:7px 0\">
\t\t\t\t\t\t\t\t<span><a href=\"{shop_url}\" style=\"color:#337ff1\">{shop_name}</a> powered by <a href=\"http://www.prestashop.com/\" style=\"color:#337ff1\">PrestaShop&trade;</a></span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</table>
\t\t\t\t</td>
\t\t\t\t<td class=\"space\" style=\"width:20px;padding:7px 0\">&nbsp;</td>
\t\t\t</tr>
\t\t</table>
\t</body>
</html>", "@Modules/ps_emailalerts/mails/en/return_slip.html", "/var/www/html/modules/ps_emailalerts/mails/en/return_slip.html");
    }
}
