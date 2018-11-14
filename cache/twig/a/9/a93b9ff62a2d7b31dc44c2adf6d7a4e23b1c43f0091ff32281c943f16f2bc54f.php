<?php

/* profilefields/url.html */
class __TwigTemplate_a93b9ff62a2d7b31dc44c2adf6d7a4e23b1c43f0091ff32281c943f16f2bc54f extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "url", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["url"]) {
            // line 2
            echo "<input type=\"url\" class=\"inputbox autowidth\" name=\"";
            echo $this->getAttribute($context["url"], "FIELD_IDENT", array());
            echo "\" id=\"";
            echo $this->getAttribute($context["url"], "FIELD_IDENT", array());
            echo "\" size=\"";
            echo $this->getAttribute($context["url"], "FIELD_LENGTH", array());
            echo "\" maxlength=\"";
            echo $this->getAttribute($context["url"], "FIELD_MAXLEN", array());
            echo "\" value=\"";
            echo $this->getAttribute($context["url"], "FIELD_VALUE", array());
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['url'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "profilefields/url.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 2,  19 => 1,);
    }
}
