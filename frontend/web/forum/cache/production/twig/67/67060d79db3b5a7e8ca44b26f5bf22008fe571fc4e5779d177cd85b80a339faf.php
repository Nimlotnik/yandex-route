<?php

/* @gothick_recaptcha2/captcha_recaptcha2.html */
class __TwigTemplate_77db89eac025848483d3139b2ee57ce18d9163b020fd441cc7df4493c29ca4b3 extends Twig_Template
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
        if (($context["S_RECAPTCHA_AVAILABLE"] ?? null)) {
            // line 2
            echo "\t";
            $asset_file = (("https://www.google.com/recaptcha/api.js?hl=" . ($context["L_GOTHICK_RECAPTCHA2_LANG"] ?? null)) . "");
            $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
            if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                $asset_path = $asset->get_path();                $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                if (!file_exists($local_file)) {
                    $local_file = $this->getEnvironment()->findTemplate($asset_path);
                    $asset->set_path($local_file, true);
                }
                $asset->add_assets_version('7');
            }
            $this->getEnvironment()->get_assets_bag()->add_script($asset);            // line 3
            echo "\t<dl>
\t<dd>
\t<div class=\"g-recaptcha\" data-sitekey=\"";
            // line 5
            echo ($context["RECAPTCHA2_SITEKEY"] ?? null);
            echo "\" ></div>
\t<noscript>
\t<div>
\t\t";
            // line 8
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GOTHICK_RECAPTCHA2_NOSCRIPT");
            echo "
\t</div>
\t</noscript>

\t</dd>
\t</dl>
";
        } else {
            // line 15
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RECAPTCHA_NOT_AVAILABLE");
            echo "
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
        return array (  53 => 15,  43 => 8,  37 => 5,  33 => 3,  21 => 2,  19 => 1,);
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
