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

/* search.twig */
class __TwigTemplate_54700cd18279fddb12ae75258ef8becc0a48c3abcb14898bf5ef31fbf566759f extends Template
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
        $this->parent = $this->loadTemplate("layout.twig", "search.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
<!-- START OF PAGE CONTENT -->
";
        // line 4
        if ((twig_length_filter($this->env, ($context["formErrors"] ?? null)) > 0)) {
            // line 5
            echo "<div class=\"alert alert-danger\">
\t\t\t<i class=\"fa fa-exclamation-circle\"></i>
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>\t\t\t
\t\t\tVolgende fout(en) zijn opgetreden:
\t\t\t<ul>
                ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["formErrors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 11
                echo "                    <li>";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "            </ul>
        </div>
        ";
        }
        // line 15
        echo "\t
<div class=\"row\">
\t\t\t<div id=\"content\" class=\"col-sm-12\">
\t\t\t\t <h1>Zoeken</h1>
\t\t\t\t <form action=\"search.php\" method=\"POST\">
\t\t\t\t\t <label class=\"control-label\" for=\"input-search\">Zoekcriteria</label>
\t\t\t\t\t <div class=\"row\">
\t\t\t\t\t\t <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">
\t\t\t\t\t\t    <input type=\"text\" name=\"term\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, ($context["term"] ?? null), "html", null, true);
        echo "\" placeholder=\"Zoekterm\" id=\"input-search\" class=\"form-control\"/>
\t\t\t\t\t\t </div>
\t\t\t\t\t\t <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-12\">
\t\t\t\t\t\t   <select name=\"color_id\" class=\"form-control\">
\t\t\t\t\t\t\t  <option value=\"0\">Alle kleuren</option>
                              ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["kleuren"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["kleur"]) {
            // line 29
            echo "                                                <option option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["kleur"], "id", [], "any", false, false, false, 29), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, $context["kleur"], "id", [], "any", false, false, false, 29) == ($context["color_id"] ?? null))) {
                echo "selected=\"selected\"";
            }
            echo ">
                                                    ";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["kleur"], "name", [], "any", false, false, false, 30), "html", null, true);
            echo "
                                                </option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['kleur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "   
\t\t\t\t\t\t   </select>
\t\t\t\t\t\t </div>
\t\t\t\t\t\t <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12\">
\t\t\t\t\t\t\t Prijs (in €) tussen <input type=\"number\" name=\"minprice\" min=\"0\" max=\"1000\" step=\"50\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, ($context["minprice"] ?? null), "html", null, true);
        echo "\" class=\"form-control\" style=\"width: auto;display: inline;\">
\t\t\t\t\t\t\t en
\t\t\t\t\t\t\t <input type=\"number\" name=\"maxprice\" min=\"0\" max=\"1000\" step=\"50\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, ($context["maxprice"] ?? null), "html", null, true);
        echo "\" class=\"form-control\" style=\"width: auto;display: inline;\">
\t\t\t\t\t\t </div>
\t\t\t\t\t </div>
\t\t\t\t\t<br/>
\t\t\t\t\t <input type=\"submit\" name=\"moduleAction\" value=\"Zoeken\" id=\"button-search\" class=\"btn btn-primary\"/>
\t\t\t\t </form>
\t\t\t\t ";
        // line 44
        if ((($context["products"] ?? null) == ($context["empty"] ?? null))) {
            // line 45
            echo "\t\t\t\t <p>Geen producten gevonden.</p>
                ";
        } else {
            // line 47
            echo "            <h2>Producten die aan de zoekcriteria voldoen</h2>
                <div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t   <div class=\"btn-group\">
\t\t\t\t\t\t  <button type=\"button\" id=\"list-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"List\"><i class=\"fa fa-th-list\"></i></button>
\t\t\t\t\t\t  <button type=\"button\" id=\"grid-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"Grid\"><i class=\"fa fa-th\"></i></button>
\t\t\t\t\t   </div>
\t\t\t\t\t</div>
\t\t\t\t </div>
\t\t\t\t <br/>
\t\t\t\t <div class=\"row\">
                ";
        }
        // line 59
        echo "\t\t\t</div>
\t\t</div>
\t\t<!-- END OF PAGE CONTENT -->
        ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 63
            echo "                    <!-- Start of product info -->
                    <div class=\"product-layout product-list col-xs-12\">
                        <div class=\"product-thumb\">
                            <div class=\"image\">
                                <a href=\"product.php?id=";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 67), "html", null, true);
            echo "\"><img src=\"image/";
            if ((twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 67) == ($context["empty"] ?? null))) {
                echo "notavailable.jpg
                                ";
            } else {
                // line 68
                echo "catalog/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 68), "html", null, true);
            }
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "title", [], "any", false, false, false, 68), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "title", [], "any", false, false, false, 68), "html", null, true);
            echo "\" class=\"img-responsive\" /></a>
                            </div>
                            <div>
                                <div class=\"caption\">
                                    <h4><a href=\"product.php?id=";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 72), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "title", [], "any", false, false, false, 72), "html", null, true);
            echo "</a></h4>
                                    <p>";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 73), "html", null, true);
            echo "</p>
                                    <p class=\"price\">
                                        <span class=\"price\">€ ";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 75), "html", null, true);
            echo " incl. BTW</span>
                                        <br>
                                            ";
            // line 77
            if ((twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 77) == 0)) {
                echo "<strong>Tijdelijk uitverkocht</strong>
                                        ";
            } else {
                // line 78
                echo " 
                                    <span>Voorraad: ";
                // line 79
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 79), "html", null, true);
                echo "</span>
                                        <div class=\"button-group\">
\t\t\t\t\t\t\t\t\t<form action=\"#\" method=\"post\">
                                        <input type=\"hidden\" name=\"action\" value=\"add\">
\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" title=\"Bestel nu\" name=\"product_id\" value=\"";
                // line 83
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 83), "html", null, true);
                echo "\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">Bestel nu</span></button>
\t\t\t\t\t\t\t\t\t</form>
                                </div>
                                        ";
            }
            // line 86
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
        // line 95
        echo "    ";
    }

    public function getTemplateName()
    {
        return "search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 95,  233 => 86,  226 => 83,  219 => 79,  216 => 78,  211 => 77,  206 => 75,  201 => 73,  195 => 72,  182 => 68,  175 => 67,  169 => 63,  165 => 62,  160 => 59,  146 => 47,  142 => 45,  140 => 44,  131 => 38,  126 => 36,  120 => 32,  111 => 30,  102 => 29,  98 => 28,  90 => 23,  80 => 15,  75 => 13,  66 => 11,  62 => 10,  55 => 5,  53 => 4,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "search.twig", "/var/www/resources/templates/search.twig");
    }
}
