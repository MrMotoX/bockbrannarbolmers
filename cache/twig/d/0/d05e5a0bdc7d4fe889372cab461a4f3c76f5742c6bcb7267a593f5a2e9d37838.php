<?php

/* newtopic_notify.txt */
class __TwigTemplate_d05e5a0bdc7d4fe889372cab461a4f3c76f5742c6bcb7267a593f5a2e9d37838 extends Twig_Template
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
        echo "Subject: Meddelande om ny tråd — \"";
        echo (isset($context["FORUM_NAME"]) ? $context["FORUM_NAME"] : null);
        echo "\"

Hej ";
        // line 3
        echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
        echo ",

Du får detta meddelande för att du bevakar kategorin \"";
        // line 5
        echo (isset($context["FORUM_NAME"]) ? $context["FORUM_NAME"] : null);
        echo "\" på \"";
        echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
        echo "\". Det har skapats en ny tråd";
        if (((isset($context["AUTHOR_NAME"]) ? $context["AUTHOR_NAME"] : null) !== "")) {
            echo " av ";
            echo (isset($context["AUTHOR_NAME"]) ? $context["AUTHOR_NAME"] : null);
        }
        echo " sedan ditt senaste besök som heter \"";
        echo (isset($context["TOPIC_TITLE"]) ? $context["TOPIC_TITLE"] : null);
        echo "\".
Du kan använda följande länk för att besöka denna kategori, inga fler meddelanden kommer att skickas till dig förrän du besökt kategorin.

";
        // line 8
        echo (isset($context["U_FORUM"]) ? $context["U_FORUM"] : null);
        echo "

Om du inte längre vill bevaka denna kategori kan du antingen klicka på \"Sluta bevaka denna kategori\"-länken som du hittar i kategorin ovan, eller genom att klicka på följande länk:

";
        // line 12
        echo (isset($context["U_STOP_WATCHING_FORUM"]) ? $context["U_STOP_WATCHING_FORUM"] : null);
        echo "

";
        // line 14
        echo (isset($context["EMAIL_SIG"]) ? $context["EMAIL_SIG"] : null);
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
        return array (  57 => 14,  52 => 12,  45 => 8,  30 => 5,  25 => 3,  19 => 1,);
    }
}
