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

/* layout.twig */
class __TwigTemplate_286c58f36a9c14be704e4a42fd25ec3b05abadb8dee908a44700e732b5230a15 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('head', $context, $blocks);
    }

    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "<!DOCTYPE html>
<html dir=\"ltr\" lang=\"nl\">
<head>
    <meta charset=\"UTF-8\" />
    <!-- ODISHOP (C) 2019 -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Odishop &mdash; Een winkelkar die jij vult</title>
    <meta name=\"description\" content=\"Example of category description\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <link href=\"image/cart.png\" rel=\"icon\" />
    <script src=\"javascript/jquery/jquery-2.1.1.min.js\" type=\"text/javascript\"></script>
    <link href=\"javascript/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\" />
    <script src=\"javascript/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>
    <link href=\"javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"stylesheet/stylesheet.css\" rel=\"stylesheet\">
    <script src=\"javascript/common.js\" type=\"text/javascript\"></script>
</head>
<body class=\"product-category-20\">
    <nav id=\"top\">
        <div class=\"container\">
            <div id=\"top-links\" class=\"nav pull-right\">
                <ul class=\"list-inline\">
                    <li>
                        <a href=\"login.php\">
                            <i class=\"fa fa-user\"></i>&nbsp;
                            <span>Inloggen</span>
                        </a>
                    </li>
                    <li><a href=\"#\" title=\"Afrekenen\"><i class=\"fa fa-share\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">Afrekenen</span></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-4\">
                    <div id=\"logo\">
                        <a href=\"index.php\">
\t\t\t\t\t\t\t<img src=\"image/odishop.png\" title=\"Odishop\" alt=\"Odishop\" class=\"img-responsive\" />
\t\t\t\t\t\t</a>
                    </div>
                </div>
                <div class=\"col-sm-5\">
                    <form action=\"search.php\" method=\"get\" id=\"search\" class=\"input-group\">
                        <input type=\"text\" name=\"term\" value=\"\" placeholder=\"Zoeken\" class=\"form-control input-lg\" />
                        <span class=\"input-group-btn\">
\t\t\t\t\t\t\t<button type=\"submit\" title=\"Zoeken\" value=\"Zoeken\" class=\"btn btn-default btn-lg\"><i class=\"fa fa-search\"></i></button>
\t\t\t\t\t\t</span>
                    </form>
                </div>
                <div class=\"col-sm-3\">
                    <!-- START OF SHOPPING CART -->
                    <div id=\"cart\" class=\"btn-group btn-block\">
                        <button type=\"button\" data-toggle=\"dropdown\" data-loading-text=\"Loading...\" class=\"btn btn-inverse btn-block btn-lg dropdown-toggle\"><i class=\"fa fa-shopping-cart\"></i>&nbsp;<span id=\"cart-total\"> 0 item(s) - € 0</span></button>
                        <ul class=\"dropdown-menu pull-right\">
                            <li>
                                <p class=\"text-center\">Jouw winkelkar is leeg</p>
                            </li>
                        </ul>
                    </div>
                    <!-- END OF SHOPPING CART -->
                </div>
            </div>
        </div>
    </header>
    <div class=\"container\">
        <nav id=\"menu\" class=\"navbar\">
            <div class=\"navbar-header\"><span id=\"category\" class=\"visible-xs\">Meer informatie</span>
                <button type=\"button\" class=\"btn btn-navbar navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\"><i class=\"fa fa-bars\"></i></button>
            </div>
            <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
                <ul class=\"nav navbar-nav\">
                    <li><a href=\"page.php?id=2\">Contact</a></li>
                    <li><a href=\"page.php?id=1\">Openingsuren</a></li>
                </ul>
            </div>
        </nav>
    </div>
    <div class=\"container\">
    ";
        // line 83
        $this->displayBlock('content', $context, $blocks);
        // line 85
        echo "\t\t<!-- END OF PAGE CONTENT -->
    </div>
    <footer>
        <div class=\"container\">

            <p>Examen Webscripting &mdash; Server-side Scripting &copy; 2019 &bullet; Design by <a href=\"http://www.opencart.com\">OpenCart</a></p>
\t\t\t<hr>
        </div>
\t\t
    </footer>
</body>
</html>
";
    }

    // line 83
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
    ";
    }

    public function getTemplateName()
    {
        return "layout.twig";
    }

    public function getDebugInfo()
    {
        return array (  147 => 83,  131 => 85,  129 => 83,  46 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout.twig", "/var/www/resources/templates/layout.twig");
    }
}
