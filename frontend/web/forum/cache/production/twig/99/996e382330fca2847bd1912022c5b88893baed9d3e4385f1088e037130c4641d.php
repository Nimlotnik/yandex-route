<?php

/* mcp_post.html */
class __TwigTemplate_c681f5cb1dd432637ac19db792220106698e7f6eb4707b40f817ef2288b87d1a extends Twig_Template
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
        $location = "mcp_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("mcp_header.html", "mcp_post.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        if (($context["S_MCP_REPORT"] ?? null)) {
            // line 4
            echo "\t";
            if (($context["S_PM"] ?? null)) {
                // line 5
                echo "\t<h2>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PM_REPORT_DETAILS");
                echo "</h2>
\t";
            } else {
                // line 7
                echo "\t<h2>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPORT_DETAILS");
                echo "</h2>
\t";
            }
            // line 9
            echo "
\t<div id=\"report\" class=\"panel\">
\t\t<div class=\"inner\">

\t\t<div class=\"postbody\">
\t\t\t<h3>";
            // line 14
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPORT_REASON");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo " ";
            echo ($context["REPORT_REASON_TITLE"] ?? null);
            echo "</h3>
\t\t\t<p class=\"author\">";
            // line 15
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPORTED");
            echo " ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
            echo " ";
            echo ($context["REPORTER_FULL"] ?? null);
            echo " &laquo; ";
            echo ($context["REPORT_DATE"] ?? null);
            echo "</p>
\t\t";
            // line 16
            if (($context["S_REPORT_CLOSED"] ?? null)) {
                // line 17
                echo "\t\t\t<p class=\"post-notice reported\"><i class=\"icon fa-exclamation fa-fw icon-red\" aria-hidden=\"true\"></i>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPORT_CLOSED");
                echo "</p>
\t\t";
            }
            // line 19
            echo "\t\t\t<div class=\"content\">
\t\t\t";
            // line 20
            if (($context["REPORT_TEXT"] ?? null)) {
                // line 21
                echo "\t\t\t\t";
                echo ($context["REPORT_TEXT"] ?? null);
                echo "
\t\t\t";
            } else {
                // line 23
                echo "\t\t\t\t";
                echo ($context["REPORT_REASON_DESCRIPTION"] ?? null);
                echo "
\t\t\t";
            }
            // line 25
            echo "\t\t\t</div>
\t\t</div>

\t\t</div>
\t</div>

\t<form method=\"post\" id=\"mcp_report\" action=\"";
            // line 31
            echo ($context["S_CLOSE_ACTION"] ?? null);
            echo "\">

\t<fieldset class=\"submit-buttons\">
\t\t";
            // line 34
            // line 35
            echo "\t\t";
            if ( !($context["S_REPORT_CLOSED"] ?? null)) {
                // line 36
                echo "\t\t\t<input class=\"button1\" type=\"submit\" value=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CLOSE_REPORT");
                echo "\" name=\"action[close]\" /> &nbsp;
\t\t";
            }
            // line 38
            echo "\t\t<input class=\"button2\" type=\"submit\" value=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE_REPORT");
            echo "\" name=\"action[delete]\" />
\t\t";
            // line 39
            // line 40
            echo "\t\t<input type=\"hidden\" name=\"report_id_list[]\" value=\"";
            echo ($context["REPORT_ID"] ?? null);
            echo "\" />
\t\t";
            // line 41
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t</fieldset>
\t</form>

";
        } else {
            // line 46
            echo "\t<h2>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_DETAILS");
            echo "</h2>
";
        }
        // line 48
        echo "
<div class=\"panel\">
\t<div class=\"inner\">

\t<div class=\"postbody\">
\t\t<h3><a href=\"";
        // line 53
        echo ($context["U_VIEW_POST"] ?? null);
        echo "\">";
        echo ($context["POST_SUBJECT"] ?? null);
        echo "</a></h3>

\t\t<ul class=\"post-buttons\">
\t\t\t<li id=\"expand\">
\t\t\t\t<a href=\"#post_details\" onclick=\"viewableArea(getElementById('post_details'), true); var rev_text = getElementById('expand').getElementsByTagName('a').item(0).firstChild; if (rev_text.data.trim() == '";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("EXPAND_VIEW"), "js");
        echo "'){rev_text.data = '";
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("COLLAPSE_VIEW"), "js");
        echo "'; } else if (rev_text.data.trim() == '";
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("COLLAPSE_VIEW"), "js");
        echo "'){rev_text.data = '";
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("EXPAND_VIEW"), "js");
        echo "';} return false;\">
\t\t\t\t\t";
        // line 58
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EXPAND_VIEW");
        echo "
\t\t\t\t</a>
\t\t\t</li>
\t\t\t";
        // line 61
        if (($context["U_EDIT"] ?? null)) {
            // line 62
            echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
            // line 63
            echo ($context["U_EDIT"] ?? null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EDIT_POST");
            echo "\" class=\"button\">
\t\t\t\t\t\t<i class=\"icon fa-pencil fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
            // line 64
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EDIT_POST");
            echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t";
        }
        // line 68
        echo "\t\t</ul>

\t\t";
        // line 70
        if (($context["S_PM"] ?? null)) {
            // line 71
            echo "\t\t<p class=\"author\">
\t\t\t<strong>";
            // line 72
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SENT_AT");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</strong> ";
            echo ($context["POST_DATE"] ?? null);
            echo "
\t\t\t<br /><strong>";
            // line 73
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PM_FROM");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</strong> ";
            echo ($context["POST_AUTHOR_FULL"] ?? null);
            echo "
\t\t\t";
            // line 74
            if (($context["S_TO_RECIPIENT"] ?? null)) {
                echo "<br /><strong>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TO");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</strong> ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "to_recipient", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["to_recipient"]) {
                    if ($this->getAttribute($context["to_recipient"], "NAME_FULL", array())) {
                        echo $this->getAttribute($context["to_recipient"], "NAME_FULL", array());
                    } else {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["to_recipient"], "U_VIEW", array());
                        echo "\"";
                        if ($this->getAttribute($context["to_recipient"], "COLOUR", array())) {
                            echo " style=\"color:";
                            echo $this->getAttribute($context["to_recipient"], "COLOUR", array());
                            echo ";\"";
                        }
                        echo "><strong>";
                        echo $this->getAttribute($context["to_recipient"], "NAME", array());
                        echo "</strong></a>";
                    }
                    echo "&nbsp;";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['to_recipient'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            // line 75
            echo "\t\t\t";
            if (($context["S_BCC_RECIPIENT"] ?? null)) {
                echo "<br /><strong>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BCC");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</strong> ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "bcc_recipient", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["bcc_recipient"]) {
                    if ($this->getAttribute($context["bcc_recipient"], "NAME_FULL", array())) {
                        echo $this->getAttribute($context["bcc_recipient"], "NAME_FULL", array());
                    } else {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["bcc_recipient"], "U_VIEW", array());
                        echo "\"";
                        if ($this->getAttribute($context["bcc_recipient"], "COLOUR", array())) {
                            echo " style=\"color:";
                            echo $this->getAttribute($context["bcc_recipient"], "COLOUR", array());
                            echo ";\"";
                        }
                        echo "><strong>";
                        echo $this->getAttribute($context["bcc_recipient"], "NAME", array());
                        echo "</strong></a>";
                    }
                    echo "&nbsp;";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bcc_recipient'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            // line 76
            echo "\t\t</p>
\t\t";
        } else {
            // line 78
            echo "\t\t<p class=\"author\"><span><i class=\"icon fa-file fa-fw icon-lightgray icon-md\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
            echo ($context["MINI_POST_IMG"] ?? null);
            echo "</span></span> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTED");
            echo " ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
            echo " ";
            echo ($context["POST_AUTHOR_FULL"] ?? null);
            echo " &raquo; ";
            echo ($context["POST_DATE"] ?? null);
            echo "</p>
\t\t";
        }
        // line 80
        echo "
\t\t";
        // line 81
        if (($context["S_POST_UNAPPROVED"] ?? null)) {
            // line 82
            echo "\t\t\t<form method=\"post\" id=\"mcp_approve\" action=\"";
            echo ($context["U_APPROVE_ACTION"] ?? null);
            echo "\">

\t\t\t<p class=\"post-notice unapproved\">
\t\t\t\t<input class=\"button2\" type=\"submit\" value=\"";
            // line 85
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DISAPPROVE");
            echo "\" name=\"action[disapprove]\" /> &nbsp;
\t\t\t\t<input class=\"button1\" type=\"submit\" value=\"";
            // line 86
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("APPROVE");
            echo "\" name=\"action[approve]\" />
\t\t\t\t";
            // line 87
            if ( !($context["S_FIRST_POST"] ?? null)) {
                echo "<input type=\"hidden\" name=\"mode\" value=\"unapproved_posts\" />";
            }
            // line 88
            echo "\t\t\t\t<input type=\"hidden\" name=\"post_id_list[]\" value=\"";
            echo ($context["POST_ID"] ?? null);
            echo "\" />
\t\t\t\t";
            // line 89
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t\t\t</p>
\t\t\t</form>
\t\t";
        } elseif (        // line 92
($context["S_POST_DELETED"] ?? null)) {
            // line 93
            echo "\t\t\t<form method=\"post\" id=\"mcp_approve\" action=\"";
            echo ($context["U_APPROVE_ACTION"] ?? null);
            echo "\">

\t\t\t<p class=\"post-notice deleted\">
\t\t\t\t";
            // line 96
            if (($context["S_CAN_DELETE_POST"] ?? null)) {
                echo "<input class=\"button2\" type=\"submit\" value=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE");
                echo "\" name=\"action[delete]\" /> &nbsp;";
            }
            // line 97
            echo "\t\t\t\t<input class=\"button1\" type=\"submit\" value=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESTORE");
            echo "\" name=\"action[restore]\" />
\t\t\t\t";
            // line 98
            if ( !($context["S_FIRST_POST"] ?? null)) {
                echo "<input type=\"hidden\" name=\"mode\" value=\"deleted_posts\" />";
            }
            // line 99
            echo "\t\t\t\t<input type=\"hidden\" name=\"post_id_list[]\" value=\"";
            echo ($context["POST_ID"] ?? null);
            echo "\" />
\t\t\t\t";
            // line 100
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t\t\t</p>
\t\t\t</form>
\t\t";
        }
        // line 104
        echo "
\t\t";
        // line 105
        if (($context["S_MESSAGE_REPORTED"] ?? null)) {
            // line 106
            echo "\t\t\t<p class=\"post-notice reported\">
\t\t\t\t<i class=\"icon fa-exclamation fa-fw icon-red\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
            // line 107
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_REPORTED");
            echo "</span> <a href=\"";
            echo ($context["U_MCP_REPORT"] ?? null);
            echo "\"><strong>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MESSAGE_REPORTED");
            echo "</strong></a>
\t\t\t</p>
\t\t";
        }
        // line 110
        echo "
\t\t<div id=\"post_details\" class=\"content post_details\">
\t\t\t";
        // line 112
        echo ($context["POST_PREVIEW"] ?? null);
        echo "
\t\t</div>

\t\t";
        // line 115
        if (($context["S_HAS_ATTACHMENTS"] ?? null)) {
            // line 116
            echo "\t\t\t<dl class=\"attachbox\">
\t\t\t\t<dt>";
            // line 117
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ATTACHMENTS");
            echo "</dt>
\t\t\t\t";
            // line 118
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "attachment", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                // line 119
                echo "\t\t\t\t\t<dd>";
                echo $this->getAttribute($context["attachment"], "DISPLAY_ATTACHMENT", array());
                echo "</dd>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 121
            echo "\t\t\t</dl>
\t\t";
        }
        // line 123
        echo "
\t\t";
        // line 124
        if ((($context["DELETED_MESSAGE"] ?? null) || ($context["DELETE_REASON"] ?? null))) {
            // line 125
            echo "\t\t\t<div class=\"notice\">
\t\t\t\t";
            // line 126
            echo ($context["DELETED_MESSAGE"] ?? null);
            echo "
\t\t\t\t";
            // line 127
            if (($context["DELETE_REASON"] ?? null)) {
                echo "<br /><strong>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REASON");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</strong> <em>";
                echo ($context["DELETE_REASON"] ?? null);
                echo "</em>";
            }
            // line 128
            echo "\t\t\t</div>
\t\t";
        }
        // line 130
        echo "
\t\t";
        // line 131
        if (($context["SIGNATURE"] ?? null)) {
            // line 132
            echo "\t\t\t<div id=\"sig";
            echo ($context["POST_ID"] ?? null);
            echo "\" class=\"signature\">";
            echo ($context["SIGNATURE"] ?? null);
            echo "</div>
\t\t";
        }
        // line 134
        echo "
\t\t";
        // line 135
        if ((($context["S_MCP_REPORT"] ?? null) && ($context["S_CAN_VIEWIP"] ?? null))) {
            // line 136
            echo "\t\t\t<hr />
\t\t\t<div>";
            // line 137
            if (($context["S_PM"] ?? null)) {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("THIS_PM_IP");
            } else {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("THIS_POST_IP");
            }
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo " ";
            if (($context["U_WHOIS"] ?? null)) {
                // line 138
                echo "\t\t\t\t<a href=\"";
                echo ($context["U_WHOIS"] ?? null);
                echo "\">";
                if (($context["POST_IPADDR"] ?? null)) {
                    echo ($context["POST_IPADDR"] ?? null);
                } else {
                    echo ($context["POST_IP"] ?? null);
                }
                echo "</a> (";
                if (($context["POST_IPADDR"] ?? null)) {
                    echo ($context["POST_IP"] ?? null);
                } else {
                    echo "<a href=\"";
                    echo ($context["U_LOOKUP_IP"] ?? null);
                    echo "\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOOKUP_IP");
                    echo "</a>";
                }
                echo ")
\t\t\t";
            } else {
                // line 140
                echo "\t\t\t\t";
                if (($context["POST_IPADDR"] ?? null)) {
                    echo ($context["POST_IPADDR"] ?? null);
                    echo " (";
                    echo ($context["POST_IP"] ?? null);
                    echo ")";
                } else {
                    echo ($context["POST_IP"] ?? null);
                    if (($context["U_LOOKUP_IP"] ?? null)) {
                        echo " (<a href=\"";
                        echo ($context["U_LOOKUP_IP"] ?? null);
                        echo "\">";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOOKUP_IP");
                        echo "</a>)";
                    }
                }
                // line 141
                echo "\t\t\t";
            }
            echo "</div>
\t\t";
        }
        // line 143
        echo "
\t</div>

\t</div>
</div>

";
        // line 149
        if ((((($context["S_CAN_LOCK_POST"] ?? null) || ($context["S_CAN_DELETE_POST"] ?? null)) || ($context["S_CAN_CHGPOSTER"] ?? null)) || ($context["S_MCP_POST_ADDITIONAL_OPTS"] ?? null))) {
            // line 150
            echo "\t<div class=\"panel\">
\t\t<div class=\"inner\">

\t\t<h3>";
            // line 153
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MOD_OPTIONS");
            echo "</h3>
\t\t";
            // line 154
            if (($context["S_CAN_CHGPOSTER"] ?? null)) {
                // line 155
                echo "\t\t\t<form method=\"post\" id=\"mcp_chgposter\" action=\"";
                echo ($context["U_POST_ACTION"] ?? null);
                echo "\">

\t\t\t<fieldset>
\t\t\t<dl>
\t\t\t\t<dt><label>";
                // line 159
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CHANGE_POSTER");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</label></dt>
\t\t\t\t";
                // line 160
                if (($context["S_USER_SELECT"] ?? null)) {
                    echo "<dd><select name=\"u\">";
                    echo ($context["S_USER_SELECT"] ?? null);
                    echo "</select> <input type=\"submit\" class=\"button2\" name=\"action[chgposter_ip]\" value=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CONFIRM");
                    echo "\" /></dd>";
                }
                // line 161
                echo "\t\t\t\t<dd style=\"margin-top:3px;\">
\t\t\t\t\t<input class=\"inputbox autowidth\" type=\"text\" name=\"username\" value=\"\" />
\t\t\t\t\t<input type=\"submit\" class=\"button2\" name=\"action[chgposter]\" value=\"";
                // line 163
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CONFIRM");
                echo "\" />
\t\t\t\t\t<br />
\t\t\t\t\t<span>[ <a href=\"";
                // line 165
                echo ($context["U_FIND_USERNAME"] ?? null);
                echo "\" onclick=\"find_username(this.href); return false;\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FIND_USERNAME");
                echo "</a> ]</span>
\t\t\t\t</dd>
\t\t\t</dl>
\t\t\t";
                // line 168
                echo ($context["S_FORM_TOKEN"] ?? null);
                echo "
\t\t\t</fieldset>
\t\t\t</form>
\t\t";
            }
            // line 172
            echo "
\t\t";
            // line 173
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array('javiexin_chgposttime', '__main__'));
            $this->env->loadTemplate('@javiexin_chgposttime/event/mcp_post_additional_options.html')->display($context);
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            // line 174
            echo "
\t\t";
            // line 175
            if ((($context["S_CAN_LOCK_POST"] ?? null) || ($context["S_CAN_DELETE_POST"] ?? null))) {
                // line 176
                echo "\t\t\t<form method=\"post\" id=\"mcp\" action=\"";
                echo ($context["U_MCP_ACTION"] ?? null);
                echo "\">

\t\t\t<fieldset>
\t\t\t<dl>
\t\t\t\t<dt><label>";
                // line 180
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MOD_OPTIONS");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</label></dt>
\t\t\t\t<dd><select name=\"action\">
\t\t\t\t\t";
                // line 182
                if (($context["S_CAN_LOCK_POST"] ?? null)) {
                    if (($context["S_POST_LOCKED"] ?? null)) {
                        echo "<option value=\"unlock_post\">";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UNLOCK_POST");
                        echo " [";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UNLOCK_POST_EXPLAIN");
                        echo "]</option>";
                    } else {
                        echo "<option value=\"lock_post\">";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOCK_POST");
                        echo " [";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOCK_POST_EXPLAIN");
                        echo "]</option>";
                    }
                }
                // line 183
                echo "\t\t\t\t\t";
                if (($context["S_CAN_DELETE_POST"] ?? null)) {
                    echo "<option value=\"delete_post\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE_POST");
                    echo "</option>";
                }
                // line 184
                echo "\t\t\t\t\t</select> <input class=\"button2\" type=\"submit\" value=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
                echo "\" />
\t\t\t\t</dd>
\t\t\t</dl>
\t\t\t";
                // line 187
                echo ($context["S_FORM_TOKEN"] ?? null);
                echo "
\t\t\t</fieldset>
\t\t\t</form>
\t\t";
            }
            // line 191
            echo "
\t\t</div>
\t</div>
";
        }
        // line 195
        echo "

";
        // line 197
        if (((($context["S_MCP_QUEUE"] ?? null) || ($context["S_MCP_REPORT"] ?? null)) || ($context["RETURN_TOPIC"] ?? null))) {
            // line 198
            echo "\t<div class=\"panel\">
\t\t<div class=\"inner\">

\t\t<p>";
            // line 201
            if (($context["S_MCP_QUEUE"] ?? null)) {
                echo ($context["RETURN_QUEUE"] ?? null);
                echo " | ";
                echo ($context["RETURN_TOPIC_SIMPLE"] ?? null);
                echo " | ";
                echo ($context["RETURN_POST"] ?? null);
            } elseif (($context["S_MCP_REPORT"] ?? null)) {
                echo ($context["RETURN_REPORTS"] ?? null);
                if ( !($context["S_PM"] ?? null)) {
                    echo " | <a href=\"";
                    echo ($context["U_VIEW_POST"] ?? null);
                    echo "\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_POST");
                    echo "</a> | <a href=\"";
                    echo ($context["U_VIEW_TOPIC"] ?? null);
                    echo "\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_TOPIC");
                    echo "</a> | <a href=\"";
                    echo ($context["U_VIEW_FORUM"] ?? null);
                    echo "\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_FORUM");
                    echo "</a>";
                }
            } else {
                echo ($context["RETURN_TOPIC"] ?? null);
            }
            echo "</p>

\t\t</div>
\t</div>
";
        }
        // line 206
        echo "
";
        // line 207
        if (($context["S_MCP_QUEUE"] ?? null)) {
        } else {
            // line 209
            echo "
\t";
            // line 210
            if (($context["S_SHOW_USER_NOTES"] ?? null)) {
                // line 211
                echo "\t\t<div class=\"panel\" id=\"usernotes\">
\t\t\t<div class=\"inner\">

\t\t\t<form method=\"post\" id=\"mcp_notes\" action=\"";
                // line 214
                echo ($context["U_POST_ACTION"] ?? null);
                echo "\">

\t\t\t";
                // line 216
                if (($context["S_USER_NOTES"] ?? null)) {
                    // line 217
                    echo "\t\t\t\t<h3>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEEDBACK");
                    echo "</h3>

\t\t\t\t";
                    // line 219
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "usernotes", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["usernotes"]) {
                        // line 220
                        echo "\t\t\t\t\t<span class=\"small\"><strong>";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPORTED_BY");
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                        echo " ";
                        echo $this->getAttribute($context["usernotes"], "REPORT_BY", array());
                        echo " &laquo; ";
                        echo $this->getAttribute($context["usernotes"], "REPORT_AT", array());
                        echo "</strong></span>
\t\t\t\t\t";
                        // line 221
                        if (($context["S_CLEAR_ALLOWED"] ?? null)) {
                            echo "<div class=\"right-box\"><input type=\"checkbox\" name=\"marknote[]\" value=\"";
                            echo $this->getAttribute($context["usernotes"], "ID", array());
                            echo "\" /></div>";
                        }
                        // line 222
                        echo "\t\t\t\t\t<div class=\"postbody\">";
                        echo $this->getAttribute($context["usernotes"], "ACTION", array());
                        echo "</div>

\t\t\t\t\t<hr class=\"dashed\" />
\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usernotes'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 226
                    echo "
\t\t\t\t";
                    // line 227
                    if (($context["S_CLEAR_ALLOWED"] ?? null)) {
                        // line 228
                        echo "\t\t\t\t\t<fieldset class=\"submit-buttons\">
\t\t\t\t\t\t<input class=\"button2\" type=\"submit\" name=\"action[del_all]\" value=\"";
                        // line 229
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE_ALL");
                        echo "\" />&nbsp;
\t\t\t\t\t\t<input class=\"button2\" type=\"submit\" name=\"action[del_marked]\" value=\"";
                        // line 230
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE_MARKED");
                        echo "\" />
\t\t\t\t\t</fieldset>
\t\t\t\t";
                    }
                    // line 233
                    echo "\t\t\t";
                }
                // line 234
                echo "
\t\t\t<h3>";
                // line 235
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ADD_FEEDBACK");
                echo "</h3>
\t\t\t<p>";
                // line 236
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ADD_FEEDBACK_EXPLAIN");
                echo "</p>

\t\t\t<fieldset>
\t\t\t\t<textarea name=\"usernote\" rows=\"4\" cols=\"76\" class=\"inputbox\"></textarea>
\t\t\t</fieldset>

\t\t\t<fieldset class=\"submit-buttons\">
\t\t\t\t<input class=\"button1\" type=\"submit\" name=\"action[add_feedback]\" value=\"";
                // line 243
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
                echo "\" />&nbsp;
\t\t\t\t<input class=\"button2\" type=\"reset\" value=\"";
                // line 244
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESET");
                echo "\" />
\t\t\t\t";
                // line 245
                echo ($context["S_FORM_TOKEN"] ?? null);
                echo "
\t\t\t</fieldset>
\t\t\t</form>

\t\t\t</div>
\t\t</div>
\t";
            }
            // line 252
            echo "
\t";
            // line 253
            if (($context["S_SHOW_REPORTS"] ?? null)) {
                // line 254
                echo "\t\t<div class=\"panel\" id=\"reports\">
\t\t\t<div class=\"inner\">

\t\t\t<h3>";
                // line 257
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MCP_POST_REPORTS");
                echo "</h3>

\t\t\t";
                // line 259
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "reports", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["reports"]) {
                    // line 260
                    echo "\t\t\t\t<span class=\"small\"><strong>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REPORTED_BY");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo " ";
                    if ($this->getAttribute($context["reports"], "U_REPORTER", array())) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["reports"], "U_REPORTER", array());
                        echo "\">";
                        echo $this->getAttribute($context["reports"], "REPORTER", array());
                        echo "</a>";
                    } else {
                        echo $this->getAttribute($context["reports"], "REPORTER", array());
                    }
                    echo " &laquo; ";
                    echo $this->getAttribute($context["reports"], "REPORT_TIME", array());
                    echo "</strong></span>
\t\t\t\t<p><em>";
                    // line 261
                    echo $this->getAttribute($context["reports"], "REASON_TITLE", array());
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo " ";
                    echo $this->getAttribute($context["reports"], "REASON_DESC", array());
                    echo "</em>";
                    if ($this->getAttribute($context["reports"], "REPORT_TEXT", array())) {
                        echo "<br />";
                        echo $this->getAttribute($context["reports"], "REPORT_TEXT", array());
                    }
                    echo "</p>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reports'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 263
                echo "
\t\t\t</div>
\t\t</div>
\t";
            }
            // line 267
            echo "
\t";
            // line 268
            if ((($context["S_CAN_VIEWIP"] ?? null) &&  !($context["S_MCP_REPORT"] ?? null))) {
                // line 269
                echo "\t\t<div class=\"panel\" id=\"ip\">
\t\t\t<div class=\"inner\">

\t\t\t<p>";
                // line 272
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("THIS_POST_IP");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo " ";
                if (($context["U_WHOIS"] ?? null)) {
                    // line 273
                    echo "\t\t\t\t<a href=\"";
                    echo ($context["U_WHOIS"] ?? null);
                    echo "\">";
                    if (($context["POST_IPADDR"] ?? null)) {
                        echo ($context["POST_IPADDR"] ?? null);
                    } else {
                        echo ($context["POST_IP"] ?? null);
                    }
                    echo "</a> (";
                    if (($context["POST_IPADDR"] ?? null)) {
                        echo ($context["POST_IP"] ?? null);
                    } else {
                        echo "<a href=\"";
                        echo ($context["U_LOOKUP_IP"] ?? null);
                        echo "\">";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOOKUP_IP");
                        echo "</a>";
                    }
                    echo ")
\t\t\t";
                } else {
                    // line 275
                    echo "\t\t\t\t";
                    if (($context["POST_IPADDR"] ?? null)) {
                        echo ($context["POST_IPADDR"] ?? null);
                        echo " (";
                        echo ($context["POST_IP"] ?? null);
                        echo ")";
                    } else {
                        echo ($context["POST_IP"] ?? null);
                        if (($context["U_LOOKUP_IP"] ?? null)) {
                            echo " (<a href=\"";
                            echo ($context["U_LOOKUP_IP"] ?? null);
                            echo "\">";
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOOKUP_IP");
                            echo "</a>)";
                        }
                    }
                    // line 276
                    echo "\t\t\t";
                }
                echo "</p>

\t\t\t<table class=\"table1\">
\t\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th class=\"name\">";
                // line 281
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("OTHER_USERS");
                echo "</th>
\t\t\t\t<th class=\"posts\">";
                // line 282
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTS");
                echo "</th>
\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t";
                // line 286
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "userrow", array()));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["userrow"]) {
                    // line 287
                    echo "\t\t\t<tr class=\"";
                    if (($this->getAttribute($context["userrow"], "S_ROW_COUNT", array()) % 2 == 1)) {
                        echo "bg1";
                    } else {
                        echo "bg2";
                    }
                    echo "\">
\t\t\t\t<td>";
                    // line 288
                    if ($this->getAttribute($context["userrow"], "U_PROFILE", array())) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["userrow"], "U_PROFILE", array());
                        echo "\">";
                        echo $this->getAttribute($context["userrow"], "USERNAME", array());
                        echo "</a>";
                    } else {
                        echo $this->getAttribute($context["userrow"], "USERNAME", array());
                    }
                    echo "</td>
\t\t\t\t<td class=\"posts\"><a href=\"";
                    // line 289
                    echo $this->getAttribute($context["userrow"], "U_SEARCHPOSTS", array());
                    echo "\" title=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_POSTS_BY");
                    echo " ";
                    echo $this->getAttribute($context["userrow"], "USERNAME", array());
                    echo "\">";
                    echo $this->getAttribute($context["userrow"], "NUM_POSTS", array());
                    echo "</a></td>
\t\t\t</tr>
\t\t\t";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 292
                    echo "\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"2\">";
                    // line 293
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_MATCHES_FOUND");
                    echo "</td>
\t\t\t\t</tr>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['userrow'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 296
                echo "\t\t\t</tbody>
\t\t\t</table>

\t\t\t<div class=\"pagination\">
\t\t\t\t";
                // line 300
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "mcp_post.html", 300)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 301
                echo "\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"panel\">
\t\t\t<div class=\"inner\">
\t\t\t<table class=\"table1\">
\t\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th class=\"name\">";
                // line 310
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("IPS_POSTED_FROM");
                echo "</th>
\t\t\t\t<th class=\"posts\">";
                // line 311
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTS");
                echo "</th>
\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t";
                // line 315
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "iprow", array()));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["iprow"]) {
                    // line 316
                    echo "\t\t\t<tr class=\"";
                    if (($this->getAttribute($context["iprow"], "S_ROW_COUNT", array()) % 2 == 1)) {
                        echo "bg1";
                    } else {
                        echo "bg2";
                    }
                    echo "\">
\t\t\t\t<td>";
                    // line 317
                    if ($this->getAttribute($context["iprow"], "HOSTNAME", array())) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["iprow"], "U_WHOIS", array());
                        echo "\">";
                        echo $this->getAttribute($context["iprow"], "HOSTNAME", array());
                        echo "</a> (";
                        echo $this->getAttribute($context["iprow"], "IP", array());
                        echo ")";
                    } else {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["iprow"], "U_WHOIS", array());
                        echo "\">";
                        echo $this->getAttribute($context["iprow"], "IP", array());
                        echo "</a> (<a href=\"";
                        echo $this->getAttribute($context["iprow"], "U_LOOKUP_IP", array());
                        echo "\">";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOOKUP_IP");
                        echo "</a>)";
                    }
                    echo "</td>
\t\t\t\t<td class=\"posts\">";
                    // line 318
                    echo $this->getAttribute($context["iprow"], "NUM_POSTS", array());
                    echo "</td>
\t\t\t</tr>
\t\t\t";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 321
                    echo "\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"2\">";
                    // line 322
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_MATCHES_FOUND");
                    echo "</td>
\t\t\t\t</tr>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['iprow'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 325
                echo "\t\t\t</tbody>
\t\t\t</table>

\t\t\t<div class=\"buttons\">
\t\t\t\t<p><a href=\"";
                // line 329
                echo ($context["U_LOOKUP_ALL"] ?? null);
                echo "#ip\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOOKUP_ALL");
                echo "</a></p>
\t\t\t</div>

\t\t\t<div class=\"pagination\">
\t\t\t\t<ul>
\t\t\t\t";
                // line 334
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "pagination_ips", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["pagination_ips"]) {
                    // line 335
                    echo "\t\t\t\t\t";
                    if ($this->getAttribute($context["pagination_ips"], "S_IS_PREV", array())) {
                        // line 336
                        echo "\t\t\t\t\t<li class=\"arrow previous\"><a class=\"button button-icon-only\" href=\"";
                        echo $this->getAttribute($context["pagination_ips"], "PAGE_URL", array());
                        echo "\" rel=\"prev\" role=\"button\"><i class=\"icon fa-chevron-";
                        echo ($context["S_CONTENT_FLOW_BEGIN"] ?? null);
                        echo " fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PREVIOUS");
                        echo "</span></a></li>
\t\t\t\t\t";
                    } elseif ($this->getAttribute(                    // line 337
$context["pagination_ips"], "S_IS_CURRENT", array())) {
                        // line 338
                        echo "\t\t\t\t\t<li class=\"active\"><span>";
                        echo $this->getAttribute($context["pagination_ips"], "PAGE_NUMBER", array());
                        echo "</span></li>
\t\t\t\t\t";
                    } elseif ($this->getAttribute(                    // line 339
$context["pagination_ips"], "S_IS_ELLIPSIS", array())) {
                        // line 340
                        echo "\t\t\t\t\t<li class=\"ellipsis\" role=\"separator\"><span>";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ELLIPSIS");
                        echo "</span></li>
\t\t\t\t\t";
                    } elseif ($this->getAttribute(                    // line 341
$context["pagination_ips"], "S_IS_NEXT", array())) {
                        // line 342
                        echo "\t\t\t\t\t<li class=\"arrow next\"><a class=\"button button-icon-only\" href=\"";
                        echo $this->getAttribute($context["pagination_ips"], "PAGE_URL", array());
                        echo "\" rel=\"next\" role=\"button\"><i class=\"icon fa-chevron-";
                        echo ($context["S_CONTENT_FLOW_END"] ?? null);
                        echo " fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NEXT");
                        echo "</span></a></li>
\t\t\t\t\t";
                    } else {
                        // line 344
                        echo "\t\t\t\t\t<li><a class=\"button\" href=\"";
                        echo $this->getAttribute($context["pagination_ips"], "PAGE_URL", array());
                        echo "\" role=\"button\">";
                        echo $this->getAttribute($context["pagination_ips"], "PAGE_NUMBER", array());
                        echo "</a></li>
\t\t\t\t\t";
                    }
                    // line 346
                    echo "\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagination_ips'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 347
                echo "\t\t\t\t</ul>
\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t";
            }
            // line 353
            echo "
";
        }
        // line 355
        echo "
";
        // line 356
        if (($context["S_TOPIC_REVIEW"] ?? null)) {
            $location = "posting_topic_review.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("posting_topic_review.html", "mcp_post.html", 356)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 357
        echo "
";
        // line 358
        $location = "mcp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("mcp_footer.html", "mcp_post.html", 358)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "mcp_post.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1207 => 358,  1204 => 357,  1190 => 356,  1187 => 355,  1183 => 353,  1175 => 347,  1169 => 346,  1161 => 344,  1151 => 342,  1149 => 341,  1144 => 340,  1142 => 339,  1137 => 338,  1135 => 337,  1126 => 336,  1123 => 335,  1119 => 334,  1109 => 329,  1103 => 325,  1094 => 322,  1091 => 321,  1083 => 318,  1061 => 317,  1052 => 316,  1047 => 315,  1040 => 311,  1036 => 310,  1025 => 301,  1013 => 300,  1007 => 296,  998 => 293,  995 => 292,  981 => 289,  969 => 288,  960 => 287,  955 => 286,  948 => 282,  944 => 281,  935 => 276,  918 => 275,  896 => 273,  891 => 272,  886 => 269,  884 => 268,  881 => 267,  875 => 263,  859 => 261,  841 => 260,  837 => 259,  832 => 257,  827 => 254,  825 => 253,  822 => 252,  812 => 245,  808 => 244,  804 => 243,  794 => 236,  790 => 235,  787 => 234,  784 => 233,  778 => 230,  774 => 229,  771 => 228,  769 => 227,  766 => 226,  755 => 222,  749 => 221,  739 => 220,  735 => 219,  729 => 217,  727 => 216,  722 => 214,  717 => 211,  715 => 210,  712 => 209,  709 => 207,  706 => 206,  673 => 201,  668 => 198,  666 => 197,  662 => 195,  656 => 191,  649 => 187,  642 => 184,  635 => 183,  619 => 182,  613 => 180,  605 => 176,  603 => 175,  600 => 174,  595 => 173,  592 => 172,  585 => 168,  577 => 165,  572 => 163,  568 => 161,  560 => 160,  555 => 159,  547 => 155,  545 => 154,  541 => 153,  536 => 150,  534 => 149,  526 => 143,  520 => 141,  503 => 140,  481 => 138,  472 => 137,  469 => 136,  467 => 135,  464 => 134,  456 => 132,  454 => 131,  451 => 130,  447 => 128,  438 => 127,  434 => 126,  431 => 125,  429 => 124,  426 => 123,  422 => 121,  413 => 119,  409 => 118,  405 => 117,  402 => 116,  400 => 115,  394 => 112,  390 => 110,  380 => 107,  377 => 106,  375 => 105,  372 => 104,  365 => 100,  360 => 99,  356 => 98,  351 => 97,  345 => 96,  338 => 93,  336 => 92,  330 => 89,  325 => 88,  321 => 87,  317 => 86,  313 => 85,  306 => 82,  304 => 81,  301 => 80,  287 => 78,  283 => 76,  252 => 75,  222 => 74,  215 => 73,  208 => 72,  205 => 71,  203 => 70,  199 => 68,  192 => 64,  186 => 63,  183 => 62,  181 => 61,  175 => 58,  165 => 57,  156 => 53,  149 => 48,  143 => 46,  135 => 41,  130 => 40,  129 => 39,  124 => 38,  118 => 36,  115 => 35,  114 => 34,  108 => 31,  100 => 25,  94 => 23,  88 => 21,  86 => 20,  83 => 19,  77 => 17,  75 => 16,  65 => 15,  58 => 14,  51 => 9,  45 => 7,  39 => 5,  36 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "mcp_post.html", "");
    }
}
