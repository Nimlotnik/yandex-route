<?php

/* @vse_abbc3/event/acp_bbcodes_actions_prepend.html */
class __TwigTemplate_9f3ff22d9fd47a88396d5d6fbc5d562e234a2e58036d2835d88003433b216516 extends Twig_Template
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
        echo "<span class=\"up-disabled\" style=\"display: none;\">";
        echo ($context["ICON_MOVE_UP_DISABLED"] ?? null);
        echo "</span>
<span class=\"up\"><a href=\"";
        // line 2
        echo $this->getAttribute(($context["bbcodes"] ?? null), "U_MOVE_UP", array());
        echo "\" data-ajax=\"row_up\">";
        echo ($context["ICON_MOVE_UP"] ?? null);
        echo "</a></span>
<span class=\"down-disabled\" style=\"display:none;\">";
        // line 3
        echo ($context["ICON_MOVE_DOWN_DISABLED"] ?? null);
        echo "</span>
<span class=\"down\"><a href=\"";
        // line 4
        echo $this->getAttribute(($context["bbcodes"] ?? null), "U_MOVE_DOWN", array());
        echo "\" data-ajax=\"row_down\">";
        echo ($context["ICON_MOVE_DOWN"] ?? null);
        echo "</a></span>
";
    }

    public function getTemplateName()
    {
        return "@vse_abbc3/event/acp_bbcodes_actions_prepend.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 4,  30 => 3,  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@vse_abbc3/event/acp_bbcodes_actions_prepend.html", "");
    }
}
