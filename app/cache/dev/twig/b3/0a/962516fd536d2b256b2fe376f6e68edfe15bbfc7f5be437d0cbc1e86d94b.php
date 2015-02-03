<?php

/* FlyaroundMapBundle:Terrain:show.html.twig */
class __TwigTemplate_b30a962516fd536d2b256b2fe376f6e68edfe15bbfc7f5be437d0cbc1e86d94b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Vue détaillée des terrains";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundmap/css/flyaround.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/css/bootstrap.css"), "html", null, true);
        echo "\">
";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "<div id=\"page\">
      <header>
        <div id=\"care1\" class=\"care\">
          <div id=\"gps\" class=\"ico\">
            <p class=\"geo\">13.45.324</p>
          </div>
          <div id=\"tel\" class=\"ico\">
            <p class=\"geo\">02.37.34.43.48</p>
          </div>
          <div id=\"adresse\" class=\"ico\">
            <p class=\"geo\">Route de Coltainville</p>
            <p class=\"geo\">28000 Chartres</p>
          </div>
        </div>
        <div id=\"care2\" class=\"care\">
          <h5 id=\"spotname\">Aérodrôme de Chartres</h5>
          <div id=\"line\"></div>
        </div>
        <div class=\"care\">
          <input type=\"button\" name=\"terrain\" value=\"Alentours de ce terrain\" id=\"bouton\">
          <a href=\"#\"><div id=\"croix\"></div></a>
        </div>
      </header>
      <div id=\"box\">
        <p id=\"desc\">Les plus beaux sites aux alentours de ce terrain</p>
        <div id=\"line2\"></div>
        <div class=\"vue\">
          <div class=\"profil\">
            <div class=\"photo\"></div>
            <p class=\"name\">Port</p>
            <div id=\"line3\"></div>
            <p class=\"name\">Robert Downey JR.</p>
            <div class=\"build\"></div>
          </div>
          <div class=\"img\"></div>
        </div>
        <div class=\"vue\">
          <div class=\"profil\">
            <div class=\"photo\"></div>
            <p class=\"name\">Port</p>
            <div id=\"line3\"></div>
            <p class=\"name\">Robert Downey JR.</p>
            <div class=\"build\"></div>
          </div>
          <div class=\"img\"></div>
        </div>
        <div class=\"vue\">
          <div class=\"profil\">
            <div class=\"photo\"></div>
            <p class=\"name\">Port</p>
            <div id=\"line3\"></div>
            <p class=\"name\">Robert Downey JR.</p>
            <div class=\"build\"></div>
          </div>
          <div class=\"img\"></div>
        </div>
        <div class=\"vue\">
          <div class=\"profil\">
            <div class=\"photo\"></div>
            <p class=\"name\">Port</p>
            <div id=\"line3\"></div>
            <p class=\"name\">Robert Downey JR.</p>
          </div>
          <div class=\"img\"></div>
        </div>
      </div><!--box-->
    </div><!--page-->
";
    }

    // line 80
    public function block_javascripts($context, array $blocks = array())
    {
        // line 81
        echo "    <script charset=\"utf-8\" type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script charset=\"utf-8\" type=\"text/javascript\" src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundmap/js/flyaround.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "FlyaroundMapBundle:Terrain:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 82,  136 => 81,  133 => 80,  62 => 11,  59 => 10,  53 => 7,  48 => 6,  45 => 5,  39 => 3,  11 => 1,);
    }
}
