<?php

/* newtopic_notify.txt */
class __TwigTemplate_b4ee6cb76b66a565ab590ad53d98e309c0a22d31fbc60f4808a3f081d1ed4e89 extends Twig_Template
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
        echo "Subject: Уведомление о новой теме — «";
        echo ($context["FORUM_NAME"] ?? null);
        echo "»
List-Unsubscribe: <";
        // line 2
        echo ($context["U_STOP_WATCHING_FORUM"] ?? null);
        echo ">

Здравствуйте, ";
        // line 4
        echo ($context["USERNAME"] ?? null);
        echo "!

Вы получили это сообщение потому, что следите за форумом «";
        // line 6
        echo ($context["FORUM_NAME"] ?? null);
        echo "» на конференции «";
        echo ($context["SITENAME"] ?? null);
        echo "». В этом форуме с момента вашего последнего посещения появилась новая тема «";
        echo ($context["TOPIC_TITLE"] ?? null);
        echo "»";
        if ((($context["AUTHOR_NAME"] ?? null) !== "")) {
            echo ", созданная пользователем ";
            echo ($context["AUTHOR_NAME"] ?? null);
        }
        echo ". Вы можете перейти по следующей ссылке, чтобы просмотреть её. Новые уведомления не будут приходить, пока вы не просмотрите форум.

";
        // line 8
        echo ($context["U_FORUM"] ?? null);
        echo "

Если вы хотите просмотреть тему, перейдите по следующей ссылке:

";
        // line 12
        echo ($context["U_TOPIC"] ?? null);
        echo "

Если вы больше не хотите следить за форумом, то либо щёлкните по находящейся в нём ссылке «Отписаться от форума», либо перейдите по следующей ссылке:

";
        // line 16
        echo ($context["U_STOP_WATCHING_FORUM"] ?? null);
        echo "

";
        // line 18
        echo ($context["EMAIL_SIG"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "newtopic_notify.txt";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 18,  62 => 16,  55 => 12,  48 => 8,  34 => 6,  29 => 4,  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "newtopic_notify.txt", "");
    }
}
