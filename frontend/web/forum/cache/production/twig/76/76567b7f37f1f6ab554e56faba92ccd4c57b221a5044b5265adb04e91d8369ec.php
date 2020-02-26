<?php

/* topic_notify.txt */
class __TwigTemplate_736ea63757d1a31e9ba43052148829acfd1dc6ca2eaf674600af0fd49cb88aa2 extends Twig_Template
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
        echo "Subject: Уведомление об ответе — «";
        echo ($context["TOPIC_TITLE"] ?? null);
        echo "»
List-Unsubscribe: <";
        // line 2
        echo ($context["U_STOP_WATCHING_TOPIC"] ?? null);
        echo ">

Здравствуйте, ";
        // line 4
        echo ($context["USERNAME"] ?? null);
        echo "!

Вы получили это сообщение потому, что следите за темой «";
        // line 6
        echo ($context["TOPIC_TITLE"] ?? null);
        echo "» на конференции «";
        echo ($context["SITENAME"] ?? null);
        echo "». В этой теме со времени вашего последнего посещения появилось новое сообщение";
        if ((($context["AUTHOR_NAME"] ?? null) !== "")) {
            echo ", оставленное пользователем ";
            echo ($context["AUTHOR_NAME"] ?? null);
        }
        echo ". Новые уведомления не будут приходить, пока вы не просмотрите тему.

Если вы хотите просмотреть самое новое сообщение с момента вашего последнего посещения, перейдите по следующей ссылке:
";
        // line 9
        echo ($context["U_NEWEST_POST"] ?? null);
        echo "

Если вы хотите просмотреть всю тему, перейдите по следующей ссылке:
";
        // line 12
        echo ($context["U_TOPIC"] ?? null);
        echo "

Если вы хотите просмотреть форум, перейдите по следующей ссылке:
";
        // line 15
        echo ($context["U_FORUM"] ?? null);
        echo "

Если вы больше не хотите следить за темой, то либо щёлкните по находящейся в ней ссылке «Отписаться от темы», либо перейдите по следующей ссылке:
";
        // line 18
        echo ($context["U_STOP_WATCHING_TOPIC"] ?? null);
        echo "

";
        // line 20
        echo ($context["EMAIL_SIG"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "topic_notify.txt";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 20,  65 => 18,  59 => 15,  53 => 12,  47 => 9,  34 => 6,  29 => 4,  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "topic_notify.txt", "");
    }
}
