<?php

/* acp_update.html */
class __TwigTemplate_eb00c5f56c27a8b454b92299f767b6b83b570719fc642b13e05dbf0a73fdd466 extends Twig_Template
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
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "acp_update.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a id=\"maincontent\"></a>

<h1>";
        // line 5
        echo $this->env->getExtension('phpbb')->lang("VERSION_CHECK");
        echo "</h1>

<p>";
        // line 7
        echo $this->env->getExtension('phpbb')->lang("VERSION_CHECK_EXPLAIN");
        echo "</p>

";
        // line 9
        if ((isset($context["S_UPDATE_INCOMPLETE"]) ? $context["S_UPDATE_INCOMPLETE"] : null)) {
            // line 10
            echo "\t<div class=\"errorbox\">
\t\t<p>";
            // line 11
            echo $this->env->getExtension('phpbb')->lang("UPDATE_INCOMPLETE");
            echo " ";
            echo $this->env->getExtension('phpbb')->lang("UPDATE_INCOMPLETE_MORE");
            echo "</p>
\t</div>
";
        }
        // line 14
        if ((isset($context["S_UP_TO_DATE"]) ? $context["S_UP_TO_DATE"] : null)) {
            // line 15
            echo "\t<div class=\"successbox\">
\t\t<p>";
            // line 16
            echo $this->env->getExtension('phpbb')->lang("VERSION_UP_TO_DATE_ACP");
            echo " - <a href=\"";
            echo (isset($context["U_VERSIONCHECK_FORCE"]) ? $context["U_VERSIONCHECK_FORCE"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("VERSIONCHECK_FORCE_UPDATE");
            echo "</a></p>
\t</div>
";
        } elseif ( !        // line 18
(isset($context["S_UPDATE_INCOMPLETE"]) ? $context["S_UPDATE_INCOMPLETE"] : null)) {
            // line 19
            echo "\t<div class=\"errorbox\">
\t\t<p>";
            // line 20
            echo $this->env->getExtension('phpbb')->lang("VERSION_NOT_UP_TO_DATE_ACP");
            echo " - <a href=\"";
            echo (isset($context["U_VERSIONCHECK_FORCE"]) ? $context["U_VERSIONCHECK_FORCE"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("VERSIONCHECK_FORCE_UPDATE");
            echo "</a></p>
\t</div>
";
        }
        // line 23
        echo "
<fieldset>
\t<legend></legend>
\t";
        // line 26
        if ( !(isset($context["S_UPDATE_INCOMPLETE"]) ? $context["S_UPDATE_INCOMPLETE"] : null)) {
            // line 27
            echo "\t<dl>
\t\t<dt><label>";
            // line 28
            echo $this->env->getExtension('phpbb')->lang("CURRENT_VERSION");
            echo "</label></dt>
\t\t<dd><strong>";
            // line 29
            echo (isset($context["CURRENT_VERSION"]) ? $context["CURRENT_VERSION"] : null);
            echo "</strong></dd>
\t</dl>
\t";
        } else {
            // line 32
            echo "\t<dl>
\t\t<dt><label>";
            // line 33
            echo $this->env->getExtension('phpbb')->lang("FILES_VERSION");
            echo "</label></dt>
\t\t<dd><strong>";
            // line 34
            echo (isset($context["FILES_VERSION"]) ? $context["FILES_VERSION"] : null);
            echo "</strong></dd>
\t</dl>
\t<dl>
\t\t<dt><label>";
            // line 37
            echo $this->env->getExtension('phpbb')->lang("DATABASE_VERSION");
            echo "</label></dt>
\t\t<dd><strong>";
            // line 38
            echo (isset($context["CURRENT_VERSION"]) ? $context["CURRENT_VERSION"] : null);
            echo "</strong></dd>
\t</dl>
\t";
        }
        // line 41
        echo "</fieldset>

";
        // line 43
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "updates_available", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["updates_available"]) {
            // line 44
            echo "\t<fieldset>
\t\t<legend></legend>
\t\t<dl>
\t\t\t<dt><label>";
            // line 47
            echo $this->env->getExtension('phpbb')->lang("LATEST_VERSION");
            echo "</label></dt>
\t\t\t<dd><strong>";
            // line 48
            echo $this->getAttribute($context["updates_available"], "current", array());
            echo "</strong></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label>";
            // line 51
            echo $this->env->getExtension('phpbb')->lang("RELEASE_ANNOUNCEMENT");
            echo "</label></dt>
\t\t\t<dd><strong><a href=\"";
            // line 52
            echo $this->getAttribute($context["updates_available"], "announcement", array());
            echo "\">";
            echo $this->getAttribute($context["updates_available"], "announcement", array());
            echo "</a></strong></dd>
\t\t</dl>
\t</fieldset>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['updates_available'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "
";
        // line 57
        if ((isset($context["S_UPDATE_INCOMPLETE"]) ? $context["S_UPDATE_INCOMPLETE"] : null)) {
            // line 58
            echo "\t";
            echo (isset($context["INCOMPLETE_INSTRUCTIONS"]) ? $context["INCOMPLETE_INSTRUCTIONS"] : null);
            echo "
\t<br>
";
        }
        // line 61
        echo "
";
        // line 62
        if ( !(isset($context["S_UP_TO_DATE"]) ? $context["S_UP_TO_DATE"] : null)) {
            // line 63
            echo "\t";
            echo (isset($context["UPDATE_INSTRUCTIONS"]) ? $context["UPDATE_INSTRUCTIONS"] : null);
            echo "
\t<br /><br />
";
        }
        // line 66
        echo "
";
        // line 67
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_update.html", 67)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_update.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 67,  194 => 66,  187 => 63,  185 => 62,  182 => 61,  175 => 58,  173 => 57,  170 => 56,  158 => 52,  154 => 51,  148 => 48,  144 => 47,  139 => 44,  135 => 43,  131 => 41,  125 => 38,  121 => 37,  115 => 34,  111 => 33,  108 => 32,  102 => 29,  98 => 28,  95 => 27,  93 => 26,  88 => 23,  78 => 20,  75 => 19,  73 => 18,  64 => 16,  61 => 15,  59 => 14,  51 => 11,  48 => 10,  46 => 9,  41 => 7,  36 => 5,  31 => 2,  19 => 1,);
    }
}