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

/* default/template/extension/module/latestcategory.twig */
class __TwigTemplate_e05d6f65a36dc21058153365fe40397ae4dedea479c9a6f8e7bf4cc33deea51a extends \Twig\Template
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
        // line 1
        echo "<h3>";
        echo ($context["heading_title"] ?? null);
        echo "</h3>
<div class=\"row\">
 ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["latestcategorys"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["latestcategory"]) {
            // line 4
            echo "  <div class=\"product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12\">
    <div class=\"product-thumb transition\">
      <div class=\"image\"><a href=\"";
            // line 6
            echo twig_get_attribute($this->env, $this->source, $context["latestcategory"], "href", [], "any", false, false, false, 6);
            echo "\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["latestcategory"], "thumb", [], "any", false, false, false, 6);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["latestcategory"], "name", [], "any", false, false, false, 6);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["latestcategory"], "name", [], "any", false, false, false, 6);
            echo "\" class=\"img-responsive\" /></a></div>
      <div class=\"caption\">
        <h4><a href=\"";
            // line 8
            echo twig_get_attribute($this->env, $this->source, $context["latestcategory"], "href", [], "any", false, false, false, 8);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["latestcategory"], "name", [], "any", false, false, false, 8);
            echo "</a></h4>
      </div>
    </div>
  </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['latestcategory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/latestcategory.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 13,  62 => 8,  51 => 6,  47 => 4,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/latestcategory.twig", "");
    }
}
