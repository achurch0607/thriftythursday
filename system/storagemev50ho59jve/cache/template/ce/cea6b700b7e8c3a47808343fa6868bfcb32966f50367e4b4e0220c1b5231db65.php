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

/* nou/template/extension/captcha/google.twig */
class __TwigTemplate_628d69dec4791a3d904751415346839ae465a8420abcc90f7f36d4e0987a3e61 extends \Twig\Template
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
        echo "<script src=\"//www.google.com/recaptcha/api.js\" type=\"text/javascript\"></script>
<fieldset>
  <legend>";
        // line 3
        echo ($context["text_captcha"] ?? null);
        echo "</legend>
  <div class=\"form-group required\">";
        // line 4
        if ((twig_slice($this->env, ($context["route"] ?? null), 0, 9) == "checkout/")) {
            // line 5
            echo "    <label class=\"control-label\" for=\"input-payment-captcha\">";
            echo ($context["entry_captcha"] ?? null);
            echo "</label>
    <div id=\"input-payment-captcha\" class=\"g-recaptcha\" data-sitekey=\"";
            // line 6
            echo ($context["site_key"] ?? null);
            echo "\"></div>
    ";
            // line 7
            if (($context["error_captcha"] ?? null)) {
                // line 8
                echo "    <div class=\"text-danger\">";
                echo ($context["error_captcha"] ?? null);
                echo "</div>
    ";
            }
            // line 10
            echo "    ";
        } else {
            // line 11
            echo "    <label class=\"col-sm-2 control-label\">";
            echo ($context["entry_captcha"] ?? null);
            echo "</label>
    <div class=\"col-sm-10\">
      <div class=\"g-recaptcha\" data-sitekey=\"";
            // line 13
            echo ($context["site_key"] ?? null);
            echo "\"></div>
      ";
            // line 14
            if (($context["error_captcha"] ?? null)) {
                // line 15
                echo "      <div class=\"text-danger\">";
                echo ($context["error_captcha"] ?? null);
                echo "</div>
      ";
            }
            // line 16
            echo "</div>
    ";
        }
        // line 17
        echo "</div>
</fieldset>
";
    }

    public function getTemplateName()
    {
        return "nou/template/extension/captcha/google.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 17,  85 => 16,  79 => 15,  77 => 14,  73 => 13,  67 => 11,  64 => 10,  58 => 8,  56 => 7,  52 => 6,  47 => 5,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "nou/template/extension/captcha/google.twig", "");
    }
}
