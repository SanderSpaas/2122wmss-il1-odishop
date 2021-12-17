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

/* product.twig */
class __TwigTemplate_02000c9567378b82c4ddc98250a0e11af4a67f19c7f13563cde1e276f1bdb536 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout.twig", "product.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 4
            echo "<!-- START OF PAGE CONTENT -->
<div class=\"row\">
            <div class=\"col-sm-8\">
                <ul class=\"thumbnails\">
                    <li>
                        <a class=\"thumbnail\" href=\"#\" title=\"DeLonghi Icona Vintage Blauw Broodrooster\">
                            <img src=\"image/";
            // line 10
            if ((twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 10) == ($context["empty"] ?? null))) {
                echo "notavailable.jpg
                                ";
            } else {
                // line 11
                echo "catalog/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 11), "html", null, true);
            }
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "title", [], "any", false, false, false, 11), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "title", [], "any", false, false, false, 11), "html", null, true);
            echo "\">
                        </a>
                    </li>
                </ul>
                <ul class=\"nav nav-tabs\">
                    <li class=\"active\"><a href=\"#tab-description\" data-toggle=\"tab\">Beschrijving</a></li>
                </ul>
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"tab-description\">
                        <p class=\"intro\">
                        ";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 21), "html", null, true);
            echo "
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-4\">
                <h1 style=\"margin-top:0;\">";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "title", [], "any", false, false, false, 27), "html", null, true);
            echo "</h1>
                <ul class=\"list-unstyled\">
                    <li><strong>Productcode:</strong> OD00000";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 29), "html", null, true);
            echo "</li>
                    <li><strong>Kleur:</strong> ";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 30), "html", null, true);
            echo "</li>
                    <li><strong>Aantal items beschikbaar:</strong> ";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 31), "html", null, true);
            echo "</li>
                </ul>
                <ul class=\"list-unstyled\">
                    <li>
                        <h2>€ ";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 35), "html", null, true);
            echo "</h2>
                    </li>
                    <li>Excl. BTW: € ";
            // line 37
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 37) / 1.21), "html", null, true);
            echo "</li>
                </ul>
                <div id=\"product\">
                    <div class=\"form-group\">
                        <form action=\"#\" method=\"post\">
                            <input type=\"hidden\" name=\"action\" value=\"add\">
                            <button type=\"submit\" title=\"Bestel nu\" name=\"product_id\" value=\"5\" id=\"button-cart\" class=\"btn btn-primary btn-lg btn-block\">Bestellen</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
\t\t<!-- END OF PAGE CONTENT -->
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "    ";
    }

    public function getTemplateName()
    {
        return "product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 51,  122 => 37,  117 => 35,  110 => 31,  106 => 30,  102 => 29,  97 => 27,  88 => 21,  69 => 11,  64 => 10,  56 => 4,  52 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "product.twig", "/var/www/resources/templates/product.twig");
    }
}
