<?php

/* acp_sitemap.html */
class __TwigTemplate_44d94aa6b0f7a0b4d178769bff9d0353b38f696337affc8eb9cff0d45f2c092a extends Twig_Template
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
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "acp_sitemap.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a name=\"maincontent\"></a>

<h1>";
        // line 5
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEOMAP");
        echo "</h1>

<p>";
        // line 7
        echo ($context["SEOMAP_VERSION"] ?? null);
        echo "</p>
<p>";
        // line 8
        echo ($context["SEOMAP_URL"] ?? null);
        echo "</p>
<p>";
        // line 9
        echo ($context["SEOMAP_URL_COUNT"] ?? null);
        echo "</p>
<p>";
        // line 10
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEOMAP_EXPLAIN");
        echo "</p>

";
        // line 12
        if (($context["S_ERROR"] ?? null)) {
            // line 13
            echo "\t<div class=\"errorbox\">
\t\t<h3>";
            // line 14
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WARNING");
            echo "</h3>
\t\t<p>";
            // line 15
            echo ($context["ERROR_MSG"] ?? null);
            echo "</p>
\t</div>
";
        }
        // line 18
        echo "
<form id=\"acp_seo_sitemap\" method=\"post\" action=\"";
        // line 19
        echo ($context["U_ACTION"] ?? null);
        echo "\">
\t<fieldset>
\t\t<legend>";
        // line 21
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEOMAP_SETTINGS");
        echo "</legend>
\t\t<dl>
\t\t\t<dt><label for=\"sitemap_seo_cache\">";
        // line 23
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEOMAP_CACHE_TIME");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEOMAP_CACHE_TIME_EXPLAIN");
        echo "</span></dt>
\t\t\t<dd><input type=\"text\" name=\"sitemap_seo_cache\" size=\"3\" value=\"";
        // line 24
        echo ($context["SEOMAP_CACHE_TIME"] ?? null);
        echo "\" />&nbsp;";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("HOURS");
        echo "</dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"sitemap_seo_url_limit\">";
        // line 27
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEOMAP_URL_LIMIT");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEOMAP_URL_LIMIT_EXPLAIN");
        echo "</span></dt>
\t\t\t<dd><input type=\"text\" name=\"sitemap_seo_url_limit\" size=\"5\" value=\"";
        // line 28
        echo ($context["SEOMAP_URL_LIMIT"] ?? null);
        echo "\" /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"sitemap_seo_batch_size\">";
        // line 31
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEOMAP_BATCH_SIZE");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEOMAP_BATCH_SIZE_EXPLAIN");
        echo "</span></dt>
\t\t\t<dd>
\t\t\t\t<select name=\"sitemap_seo_batch_size\" id=\"sitemap_seo_batch_size\">
\t\t\t\t\t<option value=\"5000\"";
        // line 34
        if ((($context["SEOMAP_BATCH_SIZE"] ?? null) == "5000")) {
            echo " selected=\"selected\"";
        }
        echo ">5000</option>
\t\t\t\t\t<option value=\"10000\"";
        // line 35
        if ((($context["SEOMAP_BATCH_SIZE"] ?? null) == "10000")) {
            echo " selected=\"selected\"";
        }
        echo ">10000</option>
\t\t\t\t\t<option value=\"20000\"";
        // line 36
        if ((($context["SEOMAP_BATCH_SIZE"] ?? null) == "20000")) {
            echo " selected=\"selected\"";
        }
        echo ">20000</option>
\t\t\t\t\t<option value=\"30000\"";
        // line 37
        if ((($context["SEOMAP_BATCH_SIZE"] ?? null) == "30000")) {
            echo " selected=\"selected\"";
        }
        echo ">30000</option>
\t\t\t\t\t<option value=\"40000\"";
        // line 38
        if ((($context["SEOMAP_BATCH_SIZE"] ?? null) == "40000")) {
            echo " selected=\"selected\"";
        }
        echo ">40000</option>
\t\t\t\t\t<option value=\"50000\"";
        // line 39
        if ((($context["SEOMAP_BATCH_SIZE"] ?? null) == "50000")) {
            echo " selected=\"selected\"";
        }
        echo ">50000</option>
\t\t\t\t</select>
\t\t\t</dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"sitemap_seo_excluded\">";
        // line 44
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEOMAP_EXCLUDED");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEOMAP_EXCLUDED_EXPLAIN");
        echo "</span></dt>
\t\t\t<dd><select id=\"sitemap_seo_excluded\" name=\"sitemap_seo_excluded[]\" multiple=\"multiple\" size=\"10\">";
        // line 45
        echo ($context["SEOMAP_EXCLUDED_FORUMS"] ?? null);
        echo "</select></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"sitemap_seo_prior_0\">";
        // line 48
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEOMAP_PRIORITY_0");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label></dt>
\t\t\t<dd><input type=\"text\" name=\"sitemap_seo_prior_0\" value=\"";
        // line 49
        echo ($context["SEOMAP_PRIORITY_0"] ?? null);
        echo "\" size=\"3\" /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"sitemap_seo_prior_1\">";
        // line 52
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEOMAP_PRIORITY_1");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label></dt>
\t\t\t<dd><input type=\"text\" name=\"sitemap_seo_prior_1\" value=\"";
        // line 53
        echo ($context["SEOMAP_PRIORITY_1"] ?? null);
        echo "\" size=\"3\" /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"sitemap_seo_prior_2\">";
        // line 56
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEOMAP_PRIORITY_2");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label></dt>
\t\t\t<dd><input type=\"text\" name=\"sitemap_seo_prior_2\" value=\"";
        // line 57
        echo ($context["SEOMAP_PRIORITY_2"] ?? null);
        echo "\" size=\"3\" /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"sitemap_seo_prior_3\">";
        // line 60
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEOMAP_PRIORITY_3");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label></dt>
\t\t\t<dd><input type=\"text\" name=\"sitemap_seo_prior_3\" value=\"";
        // line 61
        echo ($context["SEOMAP_PRIORITY_3"] ?? null);
        echo "\" size=\"3\" /></dd>
\t\t</dl>
\t\t";
        // line 63
        if (($context["S_ARTICLE"] ?? null)) {
            // line 64
            echo "\t\t\t<dl>
\t\t\t\t<dt><label for=\"sitemap_seo_prior_4\">";
            // line 65
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEOMAP_PRIORITY_4");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label></dt>
\t\t\t\t<dd><input type=\"text\" name=\"sitemap_seo_prior_4\" value=\"";
            // line 66
            echo ($context["SEOMAP_PRIORITY_4"] ?? null);
            echo "\" size=\"3\" /></dd>
\t\t\t</dl>
\t\t";
        }
        // line 69
        echo "\t\t<dl>
\t\t\t<dt><label for=\"sitemap_seo_prior_f\">";
        // line 70
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEOMAP_PRIORITY_F");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label></dt>
\t\t\t<dd><input type=\"text\" name=\"sitemap_seo_prior_f\" value=\"";
        // line 71
        echo ($context["SEOMAP_PRIORITY_F"] ?? null);
        echo "\" size=\"3\" /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"sitemap_seo_freq_0\">";
        // line 74
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEOMAP_FREQ_0");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label></dt>
\t\t\t<dd>
\t\t\t\t<select name=\"sitemap_seo_freq_0\" id=\"sitemap_seo_freq_0\">
\t\t\t\t\t<option value=\"0\"";
        // line 77
        if ((($context["SEOMAP_FREQ_0"] ?? null) == "0")) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DISABLED");
        echo "</option>
\t\t\t\t\t<option value=\"never\"";
        // line 78
        if ((($context["SEOMAP_FREQ_0"] ?? null) == "never")) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEOMAP_FREQ_NEVER");
        echo "</option>
\t\t\t\t\t<option value=\"yearly\"";
        // line 79
        if ((($context["SEOMAP_FREQ_0"] ?? null) == "yearly")) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEOMAP_FREQ_YEARLY");
        echo "</option>
\t\t\t\t\t<option value=\"monthly\"";
        // line 80
        if ((($context["SEOMAP_FREQ_0"] ?? null) == "monthly")) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEOMAP_FREQ_MONTHLY");
        echo "</option>
\t\t\t\t\t<option value=\"weekly\"";
        // line 81
        if ((($context["SEOMAP_FREQ_0"] ?? null) == "weekly")) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEOMAP_FREQ_WEEKLY");
        echo "</option>
\t\t\t\t\t<option value=\"daily\"";
        // line 82
        if ((($context["SEOMAP_FREQ_0"] ?? null) == "daily")) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEOMAP_FREQ_DAILY");
        echo "</option>
\t\t\t\t\t<option value=\"hourly\"";
        // line 83
        if ((($context["SEOMAP_FREQ_0"] ?? null) == "hourly")) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEOMAP_FREQ_HOURLY");
        echo "</option>
\t\t\t\t\t<option value=\"always\"";
        // line 84
        if ((($context["SEOMAP_FREQ_0"] ?? null) == "always")) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEOMAP_FREQ_ALWAYS");
        echo "</option>
\t\t\t\t</select>
\t\t\t</dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"sitemap_seo_freq_1\">";
        // line 89
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEOMAP_FREQ_1");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label></dt>
\t\t\t<dd>
\t\t\t\t<select name=\"sitemap_seo_freq_1\" id=\"sitemap_seo_freq_1\">
\t\t\t\t\t<option value=\"0\"";
        // line 92
        if ((($context["SEOMAP_FREQ_1"] ?? null) == "0")) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DISABLED");
        echo "</option>
\t\t\t\t\t<option value=\"never\"";
        // line 93
        if ((($context["SEOMAP_FREQ_1"] ?? null) == "never")) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEOMAP_FREQ_NEVER");
        echo "</option>
\t\t\t\t\t<option value=\"yearly\"";
        // line 94
        if ((($context["SEOMAP_FREQ_1"] ?? null) == "yearly")) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEOMAP_FREQ_YEARLY");
        echo "</option>
\t\t\t\t\t<option value=\"monthly\"";
        // line 95
        if ((($context["SEOMAP_FREQ_1"] ?? null) == "monthly")) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEOMAP_FREQ_MONTHLY");
        echo "</option>
\t\t\t\t\t<option value=\"weekly\"";
        // line 96
        if ((($context["SEOMAP_FREQ_1"] ?? null) == "weekly")) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEOMAP_FREQ_WEEKLY");
        echo "</option>
\t\t\t\t\t<option value=\"daily\"";
        // line 97
        if ((($context["SEOMAP_FREQ_1"] ?? null) == "daily")) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEOMAP_FREQ_DAILY");
        echo "</option>
\t\t\t\t\t<option value=\"hourly\"";
        // line 98
        if ((($context["SEOMAP_FREQ_1"] ?? null) == "hourly")) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEOMAP_FREQ_HOURLY");
        echo "</option>
\t\t\t\t\t<option value=\"always\"";
        // line 99
        if ((($context["SEOMAP_FREQ_1"] ?? null) == "always")) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEOMAP_FREQ_ALWAYS");
        echo "</option>
\t\t\t\t</select>
\t\t\t</dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"sitemap_seo_freq_2\">";
        // line 104
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEOMAP_FREQ_2");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label></dt>
\t\t\t<dd>
\t\t\t\t<select name=\"sitemap_seo_freq_2\" id=\"sitemap_seo_freq_2\">
\t\t\t\t\t<option value=\"0\"";
        // line 107
        if ((($context["SEOMAP_FREQ_2"] ?? null) == "0")) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DISABLED");
        echo "</option>
\t\t\t\t\t<option value=\"never\"";
        // line 108
        if ((($context["SEOMAP_FREQ_2"] ?? null) == "never")) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEOMAP_FREQ_NEVER");
        echo "</option>
\t\t\t\t\t<option value=\"yearly\"";
        // line 109
        if ((($context["SEOMAP_FREQ_2"] ?? null) == "yearly")) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEOMAP_FREQ_YEARLY");
        echo "</option>
\t\t\t\t\t<option value=\"monthly\"";
        // line 110
        if ((($context["SEOMAP_FREQ_2"] ?? null) == "monthly")) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEOMAP_FREQ_MONTHLY");
        echo "</option>
\t\t\t\t\t<option value=\"weekly\"";
        // line 111
        if ((($context["SEOMAP_FREQ_2"] ?? null) == "weekly")) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEOMAP_FREQ_WEEKLY");
        echo "</option>
\t\t\t\t\t<option value=\"daily\"";
        // line 112
        if ((($context["SEOMAP_FREQ_2"] ?? null) == "daily")) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEOMAP_FREQ_DAILY");
        echo "</option>
\t\t\t\t\t<option value=\"hourly\"";
        // line 113
        if ((($context["SEOMAP_FREQ_2"] ?? null) == "hourly")) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEOMAP_FREQ_HOURLY");
        echo "</option>
\t\t\t\t\t<option value=\"always\"";
        // line 114
        if ((($context["SEOMAP_FREQ_2"] ?? null) == "always")) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEOMAP_FREQ_ALWAYS");
        echo "</option>
\t\t\t\t</select>
\t\t\t</dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"sitemap_seo_freq_3\">";
        // line 119
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEOMAP_FREQ_3");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label></dt>
\t\t\t<dd>
\t\t\t\t<select name=\"sitemap_seo_freq_3\" id=\"sitemap_seo_freq_3\">
\t\t\t\t\t<option value=\"0\"";
        // line 122
        if ((($context["SEOMAP_FREQ_3"] ?? null) == "0")) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DISABLED");
        echo "</option>
\t\t\t\t\t<option value=\"never\"";
        // line 123
        if ((($context["SEOMAP_FREQ_3"] ?? null) == "never")) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEOMAP_FREQ_NEVER");
        echo "</option>
\t\t\t\t\t<option value=\"yearly\"";
        // line 124
        if ((($context["SEOMAP_FREQ_3"] ?? null) == "yearly")) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEOMAP_FREQ_YEARLY");
        echo "</option>
\t\t\t\t\t<option value=\"monthly\"";
        // line 125
        if ((($context["SEOMAP_FREQ_3"] ?? null) == "monthly")) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEOMAP_FREQ_MONTHLY");
        echo "</option>
\t\t\t\t\t<option value=\"weekly\"";
        // line 126
        if ((($context["SEOMAP_FREQ_3"] ?? null) == "weekly")) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEOMAP_FREQ_WEEKLY");
        echo "</option>
\t\t\t\t\t<option value=\"daily\"";
        // line 127
        if ((($context["SEOMAP_FREQ_3"] ?? null) == "daily")) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEOMAP_FREQ_DAILY");
        echo "</option>
\t\t\t\t\t<option value=\"hourly\"";
        // line 128
        if ((($context["SEOMAP_FREQ_3"] ?? null) == "hourly")) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEOMAP_FREQ_HOURLY");
        echo "</option>
\t\t\t\t\t<option value=\"always\"";
        // line 129
        if ((($context["SEOMAP_FREQ_3"] ?? null) == "always")) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEOMAP_FREQ_ALWAYS");
        echo "</option>
\t\t\t\t</select>
\t\t\t</dd>
\t\t</dl>
\t\t";
        // line 133
        if (($context["S_ARTICLE"] ?? null)) {
            // line 134
            echo "\t\t\t<dl>
\t\t\t\t<dt><label for=\"sitemap_seo_freq_4\">";
            // line 135
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEOMAP_FREQ_4");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label></dt>
\t\t\t\t<dd>
\t\t\t\t\t<select name=\"sitemap_seo_freq_4\" id=\"sitemap_seo_freq_4\">
\t\t\t\t\t\t<option value=\"0\"";
            // line 138
            if ((($context["SEOMAP_FREQ_4"] ?? null) == "0")) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DISABLED");
            echo "</option>
\t\t\t\t\t\t<option value=\"never\"";
            // line 139
            if ((($context["SEOMAP_FREQ_4"] ?? null) == "never")) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEOMAP_FREQ_NEVER");
            echo "</option>
\t\t\t\t\t\t<option value=\"yearly\"";
            // line 140
            if ((($context["SEOMAP_FREQ_4"] ?? null) == "yearly")) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEOMAP_FREQ_YEARLY");
            echo "</option>
\t\t\t\t\t\t<option value=\"monthly\"";
            // line 141
            if ((($context["SEOMAP_FREQ_4"] ?? null) == "monthly")) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEOMAP_FREQ_MONTHLY");
            echo "</option>
\t\t\t\t\t\t<option value=\"weekly\"";
            // line 142
            if ((($context["SEOMAP_FREQ_4"] ?? null) == "weekly")) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEOMAP_FREQ_WEEKLY");
            echo "</option>
\t\t\t\t\t\t<option value=\"daily\"";
            // line 143
            if ((($context["SEOMAP_FREQ_4"] ?? null) == "daily")) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEOMAP_FREQ_DAILY");
            echo "</option>
\t\t\t\t\t\t<option value=\"hourly\"";
            // line 144
            if ((($context["SEOMAP_FREQ_4"] ?? null) == "hourly")) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEOMAP_FREQ_HOURLY");
            echo "</option>
\t\t\t\t\t\t<option value=\"always\"";
            // line 145
            if ((($context["SEOMAP_FREQ_4"] ?? null) == "always")) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEOMAP_FREQ_ALWAYS");
            echo "</option>
\t\t\t\t\t</select>
\t\t\t\t</dd>
\t\t\t</dl>
\t\t";
        }
        // line 150
        echo "\t\t<dl>
\t\t\t<dt><label for=\"sitemap_seo_freq_f\">";
        // line 151
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEOMAP_FREQ_F");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label></dt>
\t\t\t<dd>
\t\t\t\t<select name=\"sitemap_seo_freq_f\" id=\"sitemap_seo_freq_f\">
\t\t\t\t\t<option value=\"0\"";
        // line 154
        if ((($context["SEOMAP_FREQ_F"] ?? null) == "0")) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DISABLED");
        echo "</option>
\t\t\t\t\t<option value=\"never\"";
        // line 155
        if ((($context["SEOMAP_FREQ_F"] ?? null) == "never")) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEOMAP_FREQ_NEVER");
        echo "</option>
\t\t\t\t\t<option value=\"yearly\"";
        // line 156
        if ((($context["SEOMAP_FREQ_F"] ?? null) == "yearly")) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEOMAP_FREQ_YEARLY");
        echo "</option>
\t\t\t\t\t<option value=\"monthly\"";
        // line 157
        if ((($context["SEOMAP_FREQ_F"] ?? null) == "monthly")) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEOMAP_FREQ_MONTHLY");
        echo "</option>
\t\t\t\t\t<option value=\"weekly\"";
        // line 158
        if ((($context["SEOMAP_FREQ_F"] ?? null) == "weekly")) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEOMAP_FREQ_WEEKLY");
        echo "</option>
\t\t\t\t\t<option value=\"daily\"";
        // line 159
        if ((($context["SEOMAP_FREQ_F"] ?? null) == "daily")) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEOMAP_FREQ_DAILY");
        echo "</option>
\t\t\t\t\t<option value=\"hourly\"";
        // line 160
        if ((($context["SEOMAP_FREQ_F"] ?? null) == "hourly")) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEOMAP_FREQ_HOURLY");
        echo "</option>
\t\t\t\t\t<option value=\"always\"";
        // line 161
        if ((($context["SEOMAP_FREQ_F"] ?? null) == "always")) {
            echo " selected=\"selected\"";
        }
        echo ">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEOMAP_FREQ_ALWAYS");
        echo "</option>
\t\t\t\t</select>
\t\t\t</dd>
\t\t</dl>
\t\t<p class=\"submit-buttons\">
\t\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
        // line 166
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
        echo "\" />&nbsp;
\t\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
        // line 167
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESET");
        echo "\" />
\t\t</p>
\t";
        // line 169
        echo ($context["S_FORM_TOKEN"] ?? null);
        echo "
\t</fieldset>
</form>

";
        // line 173
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_sitemap.html", 173)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_sitemap.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  722 => 173,  715 => 169,  710 => 167,  706 => 166,  694 => 161,  686 => 160,  678 => 159,  670 => 158,  662 => 157,  654 => 156,  646 => 155,  638 => 154,  631 => 151,  628 => 150,  616 => 145,  608 => 144,  600 => 143,  592 => 142,  584 => 141,  576 => 140,  568 => 139,  560 => 138,  553 => 135,  550 => 134,  548 => 133,  537 => 129,  529 => 128,  521 => 127,  513 => 126,  505 => 125,  497 => 124,  489 => 123,  481 => 122,  474 => 119,  462 => 114,  454 => 113,  446 => 112,  438 => 111,  430 => 110,  422 => 109,  414 => 108,  406 => 107,  399 => 104,  387 => 99,  379 => 98,  371 => 97,  363 => 96,  355 => 95,  347 => 94,  339 => 93,  331 => 92,  324 => 89,  312 => 84,  304 => 83,  296 => 82,  288 => 81,  280 => 80,  272 => 79,  264 => 78,  256 => 77,  249 => 74,  243 => 71,  238 => 70,  235 => 69,  229 => 66,  224 => 65,  221 => 64,  219 => 63,  214 => 61,  209 => 60,  203 => 57,  198 => 56,  192 => 53,  187 => 52,  181 => 49,  176 => 48,  170 => 45,  163 => 44,  153 => 39,  147 => 38,  141 => 37,  135 => 36,  129 => 35,  123 => 34,  114 => 31,  108 => 28,  101 => 27,  93 => 24,  86 => 23,  81 => 21,  76 => 19,  73 => 18,  67 => 15,  63 => 14,  60 => 13,  58 => 12,  53 => 10,  49 => 9,  45 => 8,  41 => 7,  36 => 5,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "acp_sitemap.html", "");
    }
}
