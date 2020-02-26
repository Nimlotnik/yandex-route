<?php

/* @vse_abbc3/event/posting_editor_buttons_after.html */
class __TwigTemplate_cf14460892cfac3cb10ff072e7cf37c471c3a65bcebdf1d5267522d0399eaa3d extends Twig_Template
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
        $asset_file = "@vse_abbc3/abbc3_posting.min.css";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
            $asset->add_assets_version('7');
        }
        $this->getEnvironment()->get_assets_bag()->add_stylesheet($asset);        // line 2
        $this->loadTemplate("@vse_abbc3/abbc3_posting_buttons.html", "@vse_abbc3/event/posting_editor_buttons_after.html", 2)->display($context);
    }

    public function getTemplateName()
    {
        return "@vse_abbc3/event/posting_editor_buttons_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@vse_abbc3/event/posting_editor_buttons_after.html", "");
    }
}
