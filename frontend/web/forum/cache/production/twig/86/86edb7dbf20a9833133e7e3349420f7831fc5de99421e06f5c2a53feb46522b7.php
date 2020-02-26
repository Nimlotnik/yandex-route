<?php

/* @shredder_sitemap/event/overall_footer_copyright_append.html */
class __TwigTemplate_80a7a81ef8f1cec3e88d0c09c39f8ce549b783763ac895dd70ab49620868787b extends Twig_Template
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
        if (($context["PHPBB_WORK_SITEMAP"] ?? null)) {
            echo "<br /><a href=\"http://www.phpbb-work.ru/\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEOMAP_COPYRIGHT");
            echo "</a>";
        }
    }

    public function getTemplateName()
    {
        return "@shredder_sitemap/event/overall_footer_copyright_append.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@shredder_sitemap/event/overall_footer_copyright_append.html", "");
    }
}
