<?php

/* ApplicationSonataUserBundle:Default:connected.html.twig */
class __TwigTemplate_14d7dffee74fe2ac8034a8e2a4bb7a796493ac9216a96b5d1e88157036a01302 extends Twig_Template
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
        echo "<div class=\"span2\"><p>Bonjour ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</p></div>
<a class=\"btn btn-primary span2\" ref=\"#\">Espace perso</a>
<a class=\"btn btn-danger span2\" href=\"logout\">Logout</a>";
    }

    public function getTemplateName()
    {
        return "ApplicationSonataUserBundle:Default:connected.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
