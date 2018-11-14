<?php

/* user_activate_passwd.txt */
class __TwigTemplate_846267443db3319c39b5ef96ded1b9e81e10156a6e7f9887269d0a602ee9a894 extends Twig_Template
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
        echo "Subject: Aktivera nytt lösenord

Hej ";
        // line 3
        echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
        echo ",

Du får detta meddelande för att du (eller någon som utger sig för att vara dig) har begärt ett nytt lösenord för ditt konto på \"";
        // line 5
        echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
        echo "\". Om du inte begärt detta, ignorera detta meddelande. Om du fortsätter att få samma meddelande som detta, kontakta administratören.

För att kunna använda det nya lösenordet måste du aktivera det. Klicka på nedanstående länk för att göra detta.

";
        // line 9
        echo (isset($context["U_ACTIVATE"]) ? $context["U_ACTIVATE"] : null);
        echo "

När du aktiverat det kan du logga in med ditt nya lösenord:

Lösenord: ";
        // line 13
        echo (isset($context["PASSWORD"]) ? $context["PASSWORD"] : null);
        echo "

Du kan självklart sedan byta detta lösenord i kontrollpanelen. Kontakta administratören om några problem uppstår.

";
        // line 17
        echo (isset($context["EMAIL_SIG"]) ? $context["EMAIL_SIG"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "user_activate_passwd.txt";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 17,  42 => 13,  35 => 9,  28 => 5,  23 => 3,  19 => 1,);
    }
}
