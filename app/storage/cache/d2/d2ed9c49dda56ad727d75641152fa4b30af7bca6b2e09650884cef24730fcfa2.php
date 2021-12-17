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

/* index.twig */
class __TwigTemplate_73415d0b48fd136b53658e1563cb93f20f3c45337569f756f6e8b4ee34ddeb6b extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
<!-- START OF PAGE CONTENT -->
<div class=\"row\">
            <div id=\"content\" class=\"col-sm-12\">
\t\t\t
                <h2 style=\"margin-top: 0;\">Alle producten</h2>
                <hr>
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <div class=\"btn-group\">
                            <button type=\"button\" id=\"list-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"List\"><i class=\"fa fa-th-list\"></i></button>
                            <button type=\"button\" id=\"grid-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"Grid\"><i class=\"fa fa-th\"></i></button>
                        </div>
                    </div>
                </div>
                <br/>

                <div class=\"row\">
                ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 21
            echo "                    <!-- Start of product info -->
                    <div class=\"product-layout product-list col-xs-12\">
                        <div class=\"product-thumb\">
                            <div class=\"image\">
                                <a href=\"product.php?id=";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 25), "html", null, true);
            echo "\"><img src=\"image/";
            if ((twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 25) == ($context["empty"] ?? null))) {
                echo "notavailable.jpg
                                ";
            } else {
                // line 26
                echo "catalog/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 26), "html", null, true);
            }
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "title", [], "any", false, false, false, 26), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "title", [], "any", false, false, false, 26), "html", null, true);
            echo "\" class=\"img-responsive\" /></a>
                            </div>
                            <div>
                                <div class=\"caption\">
                                    <h4><a href=\"product.php?id=";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 30), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "title", [], "any", false, false, false, 30), "html", null, true);
            echo "</a></h4>
                                    <p>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 31), "html", null, true);
            echo "</p>
                                    <p class=\"price\">
                                        <span class=\"price\">€ ";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 33), "html", null, true);
            echo " incl. BTW</span>
                                        <br>
                                            ";
            // line 35
            if ((twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 35) == 0)) {
                echo "<strong>Tijdelijk uitverkocht</strong>
                                        ";
            } else {
                // line 36
                echo " 
                                    <span>Voorraad: ";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 37), "html", null, true);
                echo "</span>
                                        <div class=\"button-group\">
\t\t\t\t\t\t\t\t\t<form action=\"#\" method=\"post\">
                                        <input type=\"hidden\" name=\"action\" value=\"add\">
\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" title=\"Bestel nu\" name=\"product_id\" value=\"";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 41), "html", null, true);
                echo "\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">Bestel nu</span></button>
\t\t\t\t\t\t\t\t\t</form>
                                </div>
                                        ";
            }
            // line 44
            echo " 
                                    </p>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <!-- End of product info -->
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "\t\t\t\t</div>\t\t\t\t\t
\t
\t\t\t</div>
\t\t</div>
    ";
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 53,  137 => 44,  130 => 41,  123 => 37,  120 => 36,  115 => 35,  110 => 33,  105 => 31,  99 => 30,  86 => 26,  79 => 25,  73 => 21,  69 => 20,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index.twig", "/var/www/resources/templates/index.twig");
    }
}
