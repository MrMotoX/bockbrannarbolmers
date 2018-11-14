<?php

/* privmsg_notify.txt */
class __TwigTemplate_6bdc02a350168d458a84ecb522a1207be1534f4198ffd518bb8e8c8e117e4708 extends Twig_Template
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
        echo "Subject: Nytt personligt meddelande

Hej ";
        // line 3
        echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
        echo ",

Du har fått ett nytt personligt meddelande från \"";
        // line 5
        echo (isset($context["AUTHOR_NAME"]) ? $context["AUTHOR_NAME"] : null);
        echo "\" till ditt konto på \"";
        echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
        echo "\" med ämnet:

";
        // line 7
        echo (isset($context["SUBJECT"]) ? $context["SUBJECT"] : null);
        echo "

Du kan läsa meddelandet genom att klicka på följande länk:

";
        // line 11
        echo (isset($context["U_VIEW_MESSAGE"]) ? $context["U_VIEW_MESSAGE"] : null);
        echo "

Du har begärt att bli meddelad vid nya personliga meddelanden, men kom ihåg att du alltid kan välja att inte bli meddelad om nya meddelanden genom att ändra inställningarna i din profil.

";
        // line 15
        echo (isset($context["EMAIL_SIG"]) ? $context["EMAIL_SIG"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "privmsg_notify.txt";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 15,  42 => 11,  35 => 7,  28 => 5,  23 => 3,  19 => 1,);
    }
}
