<?php

/* @javiexin_chgposttime/event/mcp_post_additional_options.html */
class __TwigTemplate_913bcc123e875b1cc90b0b46b0e58f315e08a619144fb6b9cde2eb7a6a1a72b4 extends Twig_Template
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
        if (($context["S_JX_CAN_CHGPOSTTIME"] ?? null)) {
            // line 2
            echo "\t<form method=\"post\" id=\"mcp_chgposttime\" action=\"";
            echo ($context["U_POST_ACTION"] ?? null);
            echo "\">

\t<fieldset>
\t<dl>
\t\t<dt><label>";
            // line 6
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JX_CHANGE_POST_TIME");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label></dt>
\t\t<dd style=\"margin-top:3px;\">
\t\t\t\t<input type=\"text\" class=\"inputbox autowidth\" size=\"4\" maxlength=\"4\" name=\"jx_year\" value=\"";
            // line 8
            echo ($context["JX_POST_DATE_YEAR"] ?? null);
            echo "\" /> -
\t\t\t\t<input type=\"text\" class=\"inputbox autowidth\" size=\"2\" maxlength=\"2\" name=\"jx_month\" value=\"";
            // line 9
            echo ($context["JX_POST_DATE_MONTH"] ?? null);
            echo "\" /> -
\t\t\t\t<input type=\"text\" class=\"inputbox autowidth\" size=\"2\" maxlength=\"2\" name=\"jx_day\" value=\"";
            // line 10
            echo ($context["JX_POST_DATE_DAY"] ?? null);
            echo "\" />&nbsp;<span><strong>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JX_CHANGE_POST_TIME_DATE");
            echo "</strong></span><br />
\t\t</dd>
\t\t<dd style=\"margin-top:3px;\">
\t\t\t\t<input type=\"text\" class=\"inputbox autowidth\" size=\"2\" maxlength=\"2\" name=\"jx_hour\" value=\"";
            // line 13
            echo ($context["JX_POST_TIME_HOUR"] ?? null);
            echo "\" /> :
\t\t\t\t<input type=\"text\" class=\"inputbox autowidth\" size=\"2\" maxlength=\"2\" name=\"jx_minute\" value=\"";
            // line 14
            echo ($context["JX_POST_TIME_MINUTE"] ?? null);
            echo "\" />&nbsp;<span><strong>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JX_CHANGE_POST_TIME_TIME");
            echo "</strong></span><br />
\t\t</dd>
\t\t<dd style=\"margin-top:3px;\">
\t\t\t<input type=\"submit\" class=\"button2\" name=\"action[chgposttime]\" value=\"";
            // line 17
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
            echo "\" />
\t\t\t<br />
\t\t</dd>
\t</dl>
\t";
            // line 21
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t</fieldset>
\t</form>
";
        }
    }

    public function getTemplateName()
    {
        return "@javiexin_chgposttime/event/mcp_post_additional_options.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 21,  63 => 17,  55 => 14,  51 => 13,  43 => 10,  39 => 9,  35 => 8,  29 => 6,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@javiexin_chgposttime/event/mcp_post_additional_options.html", "");
    }
}
