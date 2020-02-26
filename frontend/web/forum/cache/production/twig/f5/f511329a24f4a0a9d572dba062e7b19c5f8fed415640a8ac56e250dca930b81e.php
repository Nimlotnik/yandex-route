<?php

/* @vse_abbc3/event/acp_overall_footer_after.html */
class __TwigTemplate_6bdaac641e397c6213739413493b01a68715e6cefffb7ea1e42e86c8dfabab48 extends Twig_Template
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
        // line 2
        if (($context["bbcodes"] ?? null)) {
            // line 3
            echo "
\t";
            // line 4
            $asset_file = "@vse_abbc3/acp_abbc3.css";
            $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
            if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                $asset_path = $asset->get_path();                $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                if (!file_exists($local_file)) {
                    $local_file = $this->getEnvironment()->findTemplate($asset_path);
                    $asset->set_path($local_file, true);
                }
                $asset->add_assets_version('7');
            }
            $this->getEnvironment()->get_assets_bag()->add_stylesheet($asset);            // line 5
            echo "\t";
            $asset_file = "@vse_abbc3/js/tablednd.min.js";
            $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper(), $this->getEnvironment()->get_filesystem());
            if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                $asset_path = $asset->get_path();                $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                if (!file_exists($local_file)) {
                    $local_file = $this->getEnvironment()->findTemplate($asset_path);
                    $asset->set_path($local_file, true);
                }
                $asset->add_assets_version('7');
            }
            $this->getEnvironment()->get_assets_bag()->add_script($asset);            // line 6
            echo "
\t<div style=\"display: none;\" id=\"abbc3-successbox\" class=\"successbox\">
\t\t<h3>";
            // line 8
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("INFORMATION");
            echo "</h3>
\t\t<p>";
            // line 9
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ABBC3_BBCODE_ORDERED");
            echo "</p>
\t</div>

\t<script>
\t\t(function(\$) {  // Avoid conflicts with other libraries
\t\t\t'use strict';
\t\t\t\$(function() {
\t\t\t\tvar msgTimer,
\t\t\t\t\tbbcodeTable = \$('#down'),
\t\t\t\t\tmsgSuccessBox = \$('#abbc3-successbox');
\t\t\t\t// Get BBCode ids from the delete button,
\t\t\t\t// and create tr row IDs on the fly for use by tableDnD
\t\t\t\tbbcodeTable.find('tbody').find('tr').each(function() {
\t\t\t\t\tvar url = \$(this).find('a').last().attr('href');
\t\t\t\t\tif (url) \$(this).attr('id', 'bbcode_' + url.split('bbcode=')[1]);
\t\t\t\t});
\t\t\t\t// Enable table row drag-drop
\t\t\t\tbbcodeTable.tableDnD({
\t\t\t\t\tonDragClass: 'row3',
\t\t\t\t\tonDrop: function(table, row) {
\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\ttype: 'POST',
\t\t\t\t\t\t\turl: '";
            // line 31
            echo ($context["UA_DRAG_DROP"] ?? null);
            echo "&tablename=' + \$(table).attr('id'),
\t\t\t\t\t\t\tdata: \$.tableDnD.serialize(),
\t\t\t\t\t\t\tsuccess: function(res) {
\t\t\t\t\t\t\t\t// Show the message
\t\t\t\t\t\t\t\tif (res.success) {
\t\t\t\t\t\t\t\t\tclearTimeout(msgTimer);
\t\t\t\t\t\t\t\t\tmsgSuccessBox.stop(true, true).hide().fadeIn(500);
\t\t\t\t\t\t\t\t\tmsgTimer = setTimeout(function() {
\t\t\t\t\t\t\t\t\t\tmsgSuccessBox.fadeOut(500);
\t\t\t\t\t\t\t\t\t}, 3000);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t});
\t\t\t});
\t\t})(jQuery);
\t</script>

";
        }
    }

    public function getTemplateName()
    {
        return "@vse_abbc3/event/acp_overall_footer_after.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 31,  55 => 9,  51 => 8,  47 => 6,  35 => 5,  24 => 4,  21 => 3,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@vse_abbc3/event/acp_overall_footer_after.html", "");
    }
}
