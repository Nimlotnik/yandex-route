<?php

/* @gothick_recaptcha2/recaptcha_scripts.html */
class __TwigTemplate_5e9687b26d07d5162d260d02c072d492b4e0e029c6155f134ded9ebb10902407 extends Twig_Template
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
        echo "\t";
        if (0) {
            // line 2
            echo "
\t\tGoogle's default reCAPTCHA initialisation doesn't cope with multiple reCAPTCHAs per page. We may have multiple reCAPTCHAs. For
\t\texample, the QuickLogin extension reproduces the login form on most pages, which adds an additional reCAPTCHA to pages which
\t\talready have one, e.g. the Topic Reply page for guest users.

\t\tI'm therefore using this trick: http://stackoverflow.com/a/33535769/300836 to initialise each of the multiple reCAPTCHAs, along
\t\twith template code to make sure our reCAPTCHA script, etc. only gets used once. The template code is here, and the reCAPTCHA
\t\tinitialisation code is in init_recaptcha.js.

\t\tSee GitHub issue #18.

\t";
        }
        // line 14
        echo "\t";
        if ( !$this->getAttribute(($context["definition"] ?? null), "GOTHICK_RECAPTCHA2_INCLUDED", array())) {
            // line 15
            echo "\t\t";
            $asset_file = (("https://www.google.com/recaptcha/api.js?onload=gothick_recaptcha2_callback&render=explicit&hl=" . ($context["L_GOTHICK_RECAPTCHA2_LANG"] ?? null)) . "");
            $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
            if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                $asset_path = $asset->get_path();                $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                if (!file_exists($local_file)) {
                    $local_file = $this->getEnvironment()->findTemplate($asset_path);
                    $asset->set_path($local_file, true);
                }
                $asset->add_assets_version('7');
            }
            $this->getEnvironment()->get_assets_bag()->add_script($asset);            // line 16
            echo "\t\t";
            $asset_file = "@gothick_recaptcha2/js/init_recaptcha.js";
            $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
            if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                $asset_path = $asset->get_path();                $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                if (!file_exists($local_file)) {
                    $local_file = $this->getEnvironment()->findTemplate($asset_path);
                    $asset->set_path($local_file, true);
                }
                $asset->add_assets_version('7');
            }
            $this->getEnvironment()->get_assets_bag()->add_script($asset);            // line 17
            echo "\t\t<script>var gothick_recaptcha2_sitekey = '";
            echo ($context["RECAPTCHA2_SITEKEY"] ?? null);
            echo "';</script>
\t\t";
            // line 18
            $value = true;
            $context['definition']->set('GOTHICK_RECAPTCHA2_INCLUDED', $value);
            // line 19
            echo "\t";
        }
    }

    public function getTemplateName()
    {
        return "@gothick_recaptcha2/recaptcha_scripts.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 19,  68 => 18,  63 => 17,  51 => 16,  39 => 15,  36 => 14,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@gothick_recaptcha2/recaptcha_scripts.html", "");
    }
}
