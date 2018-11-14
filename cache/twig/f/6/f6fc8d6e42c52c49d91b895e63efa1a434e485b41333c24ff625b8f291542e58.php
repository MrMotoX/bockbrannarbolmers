<?php

/* admin_welcome_activated.txt */
class __TwigTemplate_f6fc8d6e42c52c49d91b895e63efa1a434e485b41333c24ff625b8f291542e58 extends Twig_Template
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
        echo "Subject: Kontot aktiverat

Hej ";
        // line 3
        echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
        echo ",

Ditt konto på \"";
        // line 5
        echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
        echo "\" har nu aktiverats, du kan nu logga in. Ditt lösenord har krypterats i vår databas och kan inte hämtas därifrån av oss. Om du glömmer ditt lösenord så kan du nollställa det och begära ett nytt till e-postadressen, som hör ihop med ditt konto.

";
        // line 7
        echo (isset($context["EMAIL_SIG"]) ? $context["EMAIL_SIG"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "admin_welcome_activated.txt";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 7,  28 => 5,  23 => 3,  19 => 1,);
    }
}
