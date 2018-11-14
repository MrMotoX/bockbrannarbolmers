<?php

/* admin_welcome_inactive.txt */
class __TwigTemplate_2a1c8df6f2dc8caf48db5b7ec627f2bfcf277215b932708193542f5eff8d2a77 extends Twig_Template
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
        echo "Subject: Välkommen till \"";
        echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
        echo "\"

";
        // line 3
        echo (isset($context["WELCOME_MSG"]) ? $context["WELCOME_MSG"] : null);
        echo "

Spara detta e-postmeddelande för framtida bruk. Dina kontouppgifter:

----------------------------
Användarnamn: ";
        // line 8
        echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
        echo "

Forumadress: ";
        // line 10
        echo (isset($context["U_BOARD"]) ? $context["U_BOARD"] : null);
        echo "
----------------------------

Ditt konto är för närvarande inaktiverat, administratören måste aktivera det innan du kan logga in. Det kommer att sändas ett nytt e-postmeddelande när detta har skett.

Glöm inte bort ditt lösenord eftersom det har krypterats i vår databas och vi inte kan ge dig tillbaka det. 
Skulle du glömma ditt lösenord så kan du dock begära ett nytt lösenord till e-postadressen, som hör ihop med ditt konto.

Tack för att du registrerade dig.

";
        // line 20
        echo (isset($context["EMAIL_SIG"]) ? $context["EMAIL_SIG"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin_welcome_inactive.txt";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 20,  38 => 10,  33 => 8,  25 => 3,  19 => 1,);
    }
}
