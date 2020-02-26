<?php

/* abbc3_url_wizard.html */
class __TwigTemplate_5a1b55c57390638f3700431cbd6da6ca9aa177499f302a38f716f95a2c95ac0f extends Twig_Template
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
        echo "<form>
\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t\t<fieldset>
\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"bbcode_wizard_example\">";
        // line 6
        echo ($this->env->getExtension('phpbb\template\twig\extension')->lang("ABBC3_BBCODE_WIZ_EXAMPLE") . $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON"));
        echo "</label></dt>
\t\t\t\t\t<dd>
\t\t\t\t\t\t<input type=\"text\" id=\"bbcode_wizard_example\" name=\"bbcode_wizard_example\" readonly=\"readonly\" value=\"";
        // line 8
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ABBC3_URL_EXAMPLE");
        echo "\" size=\"45\" class=\"inputbox disabled\" />
\t\t\t\t\t</dd>
\t\t\t\t</dl>
\t\t\t\t<hr />
\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"bbcode_wizard_link\">";
        // line 13
        echo ($this->env->getExtension('phpbb\template\twig\extension')->lang("ABBC3_URL_LINK") . $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON"));
        echo "</label></dt>
\t\t\t\t\t<dd>
\t\t\t\t\t\t<input type=\"text\" id=\"bbcode_wizard_link\" name=\"bbcode_wizard_link\" value=\"\" class=\"inputbox\" size=\"45\" />
\t\t\t\t\t</dd>
\t\t\t\t</dl>
\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"bbcode_wizard_description\">";
        // line 19
        echo ($this->env->getExtension('phpbb\template\twig\extension')->lang("ABBC3_URL_DESCRIPTION") . $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON"));
        echo "</label></dt>
\t\t\t\t\t<dd>
\t\t\t\t\t\t<input type=\"text\" id=\"bbcode_wizard_description\" name=\"bbcode_wizard_description\" value=\"\" class=\"inputbox\" size=\"45\" />
\t\t\t\t\t</dd>
\t\t\t\t</dl>
\t\t\t</fieldset>
\t\t</div>
\t</div>
\t<div class=\"panel\" style=\"margin-bottom: 0;\">
\t\t<div class=\"inner\">
\t\t\t<fieldset class=\"submit-buttons\">
\t\t\t\t<input type=\"button\" name=\"bbcode_wizard_submit\" id=\"bbcode_wizard_submit\" value=\"";
        // line 30
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ABBC3_BBCODE_WIZ_SUBMIT");
        echo "\" class=\"button1 button button-form\" data-bbcode=\"url\" />&nbsp;
\t\t\t\t<input type=\"button\" name=\"bbcode_wizard_cancel\" id=\"bbcode_wizard_cancel\" value=\"";
        // line 31
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CANCEL");
        echo "\" class=\"button2 button button-form\" />
\t\t\t</fieldset>
\t\t</div>
\t</div>
</form>
";
    }

    public function getTemplateName()
    {
        return "abbc3_url_wizard.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 31,  62 => 30,  48 => 19,  39 => 13,  31 => 8,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "abbc3_url_wizard.html", "");
    }
}
