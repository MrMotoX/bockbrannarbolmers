<?php

/* topic_notify.txt */
class __TwigTemplate_a74d0bdd0768f3a0df83d3da3ab458c42208a275cdee06ee0508e1f567fe6141 extends Twig_Template
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
        echo "Subject: Meddelande om svar på tråd — \"";
        echo (isset($context["TOPIC_TITLE"]) ? $context["TOPIC_TITLE"] : null);
        echo "\"

Hej ";
        // line 3
        echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
        echo ",

Du får detta meddelande för att du bevakar tråden \"";
        // line 5
        echo (isset($context["TOPIC_TITLE"]) ? $context["TOPIC_TITLE"] : null);
        echo "\" på \"";
        echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
        echo "\". Denna tråd har besvarats sedan ditt senaste besök";
        if (((isset($context["AUTHOR_NAME"]) ? $context["AUTHOR_NAME"] : null) !== "")) {
            echo " utav ";
            echo (isset($context["AUTHOR_NAME"]) ? $context["AUTHOR_NAME"] : null);
        }
        echo ". Du kan använda följande länk för att läsa svaren som gjorts, inga fler meddelanden kommer att skickas förrän du besökt tråden.

Om du vill visa det nyaste inlägget som gjorts sedan ditt senaste besök, klicka på följande länk:
";
        // line 8
        echo (isset($context["U_NEWEST_POST"]) ? $context["U_NEWEST_POST"] : null);
        echo "

Om du vill besöka tråden, klicka på följande länk:
";
        // line 11
        echo (isset($context["U_TOPIC"]) ? $context["U_TOPIC"] : null);
        echo "

Om du vill besöka kategorin, klicka på följande länk:
";
        // line 14
        echo (isset($context["U_FORUM"]) ? $context["U_FORUM"] : null);
        echo "

Om du inte längre vill bevaka denna tråd klickar du antingen på \"Sluta bevaka denna tråd\"-länken som du hittar ovanför tråden i länken ovan, eller genom att klicka på följande länk:

";
        // line 18
        echo (isset($context["U_STOP_WATCHING_TOPIC"]) ? $context["U_STOP_WATCHING_TOPIC"] : null);
        echo "

";
        // line 20
        echo (isset($context["EMAIL_SIG"]) ? $context["EMAIL_SIG"] : null);
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
        return array (  67 => 20,  62 => 18,  55 => 14,  49 => 11,  43 => 8,  30 => 5,  25 => 3,  19 => 1,);
    }
}
