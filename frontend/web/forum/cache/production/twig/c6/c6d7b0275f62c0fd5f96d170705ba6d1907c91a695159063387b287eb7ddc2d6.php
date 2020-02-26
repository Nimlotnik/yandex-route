<?php

/* @gothick_recaptcha2/captcha_recaptcha2.html */
class __TwigTemplate_877aedddae4f68eded6c6ef8ae8776248dd0fe92e25f8231355e605e6d42acfe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!-- gothick/recaptcha2 prosilver captcha_recaptcha2 -->
";
        // line 2
        if ((($context["S_TYPE"] ?? null) == 1)) {
            // line 3
            echo "<div class=\"panel captcha-panel\">
\t<div class=\"inner\">

\t<h3 class=\"captcha-title\">";
            // line 6
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CONFIRMATION");
            echo "</h3>
\t<p>";
            // line 7
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CONFIRM_EXPLAIN");
            echo "</p>

\t<fieldset class=\"fields2\">
";
        }
        // line 11
        echo "
";
        // line 12
        if (($context["S_RECAPTCHA_AVAILABLE"] ?? null)) {
            // line 13
            echo "\t";
            $location = "recaptcha_scripts.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("recaptcha_scripts.html", "@gothick_recaptcha2/captcha_recaptcha2.html", 13)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 14
            echo "\t<dl>
\t<dt><label>";
            // line 15
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GOTHICK_RECAPTCHA2_CONFIRM_HUMAN");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GOTHICK_RECAPTCHA2_EXPLAIN");
            echo "</span></dt>
\t<dd class=\"captcha\">
\t\t<div class=\"g-recaptcha\" data-sitekey=\"";
            // line 17
            echo ($context["RECAPTCHA2_SITEKEY"] ?? null);
            echo "\" ></div>
\t\t<noscript>
\t\t\t<div>
\t\t\t\t";
            // line 20
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GOTHICK_RECAPTCHA2_NOSCRIPT");
            echo "
\t\t\t</div>
\t\t</noscript>
\t</dd>
\t</dl>
";
        } else {
            // line 26
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GOTHICK_RECAPTCHA2_NOT_AVAILABLE");
            echo "
";
        }
        // line 28
        echo "
";
        // line 29
        if ((($context["S_TYPE"] ?? null) == 1)) {
            // line 30
            echo "\t</fieldset>
\t</div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@gothick_recaptcha2/captcha_recaptcha2.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 30,  92 => 29,  89 => 28,  84 => 26,  75 => 20,  69 => 17,  61 => 15,  58 => 14,  45 => 13,  43 => 12,  40 => 11,  33 => 7,  29 => 6,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@gothick_recaptcha2/captcha_recaptcha2.html", "");
    }
}
