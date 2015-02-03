<?php

/* ApplicationSonataUserBundle:Default:notconnected.html.twig */
class __TwigTemplate_b5ea260a8e2a5dc1c2762b796295c437c7b820f879a87a96f35323fc5606cbb6 extends Twig_Template
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
        echo "<a href=\"#register\" role=\"button\" class=\"\" data-toggle=\"modal\">
    <div class=\"col-md-6 user-btn\">
        <img class=\"icon\" src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/images/connexion.png"), "html", null, true);
        echo "\" alt=\"logo de Flyaround\">
        inscription
    </div>
</a>

<a href=\"#connexion\" role=\"button\" class=\"\" data-toggle=\"modal\">
    <div class=\"col-md-6 user-btn\">
        <img class=\"icon\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/images/cadenas.png"), "html", null, true);
        echo "\" alt=\"separateur\">
        connexion
    </div>
</a>



";
    }

    public function getTemplateName()
    {
        return "ApplicationSonataUserBundle:Default:notconnected.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 10,  23 => 3,  19 => 1,);
    }
}
