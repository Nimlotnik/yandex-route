<?php

/* user_welcome_inactive.txt */
class __TwigTemplate_d8e668d004f4c9d5ebabf7b4f331b041fd92f621a41f8cd3e30d658fd62df1c5 extends Twig_Template
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
        echo "Subject: Добро пожаловать на конференцию «";
        echo ($context["SITENAME"] ?? null);
        echo "»

";
        // line 3
        echo ($context["WELCOME_MSG"] ?? null);
        echo "

Рекомендуется сохранить это сообщение. Параметры вашей учётной записи таковы:

----------------------------
Имя пользователя: ";
        // line 8
        echo ($context["USERNAME"] ?? null);
        echo "

Адрес конференции: ";
        // line 10
        echo ($context["U_BOARD"] ?? null);
        echo "
----------------------------

Щёлкните по ссылке ниже для активации учётной записи:

";
        // line 15
        echo ($context["U_ACTIVATE"] ?? null);
        echo "

Ваш пароль надёжно сохранён в нашей базе данных и не может быть извлечён из неё. Если вы всё же забудете свой пароль, то вы сможете восстановить его, используя для этого адрес электронной почты, связанный с вашей учётной записью.

Благодарим за регистрацию!

";
        // line 21
        echo ($context["EMAIL_SIG"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "user_welcome_inactive.txt";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 21,  46 => 15,  38 => 10,  33 => 8,  25 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "user_welcome_inactive.txt", "");
    }
}
