<?php

/* abbc3_pipes_wizard.html */
class __TwigTemplate_a725a66494b15aa2188bf8eb6c1c9d5afbc0d8ee2348f34b0148fb25b212ea1f extends Twig_Template
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
\t\t\t<h2>";
        // line 4
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ABBC3_PIPE_TABLES");
        echo "</h2>
\t\t\t<p>";
        // line 5
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ABBC3_PIPE_TABLES_EXPLAIN");
        echo " <a href=\"http://pandoc.org/MANUAL.html#extension-pipe_tables\"><i class=\"fa fa-external-link fa-fw\" aria-hidden=\"true\"></i><span>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ABBC3_PIPE_DOCUMENTATION");
        echo "</span></a>.</p>
\t\t\t<h3>";
        // line 6
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ABBC3_PIPE_SIMPLE");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</h3>
\t\t\t<pre>";
        // line 7
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ABBC3_PIPE_SIMPLE_EX");
        echo "</pre>
\t\t\t<br />
\t\t\t<h3>";
        // line 9
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ABBC3_PIPE_COMPACT");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</h3>
\t\t\t<p>";
        // line 10
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ABBC3_PIPE_COMPACT_EXPLAIN");
        echo "</p>
\t\t\t<pre>";
        // line 11
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ABBC3_PIPE_COMPACT_EX");
        echo "</pre>
\t\t\t<br />
\t\t\t<h3>";
        // line 13
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ABBC3_PIPE_ALIGNMENT");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</h3>
\t\t\t<pre>";
        // line 14
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ABBC3_PIPE_ALIGNMENT_EX");
        echo "</pre>
\t\t</div>
\t</div>
\t<div class=\"panel\" style=\"margin-bottom: 0;\">
\t\t<div class=\"inner\">
\t\t\t<fieldset class=\"submit-buttons\">
\t\t\t\t<input type=\"button\" name=\"bbcode_wizard_cancel\" id=\"bbcode_wizard_cancel\" value=\"";
        // line 20
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CLOSE_WINDOW");
        echo "\" class=\"button2 button button-form\" />
\t\t\t</fieldset>
\t\t</div>
\t</div>
</form>
";
    }

    public function getTemplateName()
    {
        return "abbc3_pipes_wizard.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 20,  63 => 14,  58 => 13,  53 => 11,  49 => 10,  44 => 9,  39 => 7,  34 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "abbc3_pipes_wizard.html", "");
    }
}
