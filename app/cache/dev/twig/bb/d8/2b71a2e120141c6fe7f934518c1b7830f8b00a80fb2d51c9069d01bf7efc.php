<?php

/* FlyaroundMapBundle:Terrain:show.html.twig */
class __TwigTemplate_bbd82b71a2e120141c6fe7f934518c1b7830f8b00a80fb2d51c9069d01bf7efc extends Twig_Template
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
          <div class=\"icone\">
            <p class=\"geo\">13.45.324</p>
            <img id=\"ico1\" class=\"ico\" src=\"http://localhost/flyaround_s2/src/Flyaround/MapBundle/Resources/public/img/icones-27.png\"></img>
          </div>
          <div class=\"icone\">
            <p class=\"geo\">02.37.34.43.48</p>
            <img id=\"ico2\" class=\"ico\" src=\"http://localhost/flyaround_s2/src/Flyaround/MapBundle/Resources/public/img/icones-32.png\"></img>
          </div>
          <div class=\"icone\">
            <p class=\"geo\">Route de Coltainville</p>
            <p class=\"geo\">28000 Chartres</p>
            <img id=\"ico3\" class=\"ico\" src=\"http://localhost/flyaround_s2/src/Flyaround/MapBundle/Resources/public/img/icones-33.png\"></img>
          </div>
        </div>
        <div class=\"care\">
          <img id=\"logo\" src=\"http://localhost/flyaround_s2/src/Flyaround/MapBundle/Resources/public/img/geotheme-29.png\"></img>
          <h5 id=\"spotname\">Aérodrôme de Chartres</h5>
          <div id=\"line\"></div>
        </div>
        <div class=\"care\">
          <button type=\"button\" id=\"bouton\"><img id=\"flag\" src=\"http://localhost/flyaround_s2/src/Flyaround/MapBundle/Resources/public/img/icones-28.png\"></img>Alentours de ce terrain</button>
          <a href=\"#\"><img id=\"croix\" src=\"http://localhost/flyaround_s2/src/Flyaround/MapBundle/Resources/public/img/icones-23.png\"></img></a>
        </div>
      </header>
      <div id=\"box\">
        <p id=\"desc\">Les plus beaux sites aux alentours de ce terrain</p>
        <div id=\"line2\"></div>
        <div class=\"vue\">
          <div class=\"profil\">
            <div class=\"profil\">
              <img class=\"avatar\" src=\"http://localhost/flyaround_s2/src/Flyaround/MapBundle/Resources/public/img/facetest.jpg\"></img>
              <div class=\"dynamicText\">
                <p class=\"name\">Port</p>
                <div id=\"line3\"></div>
                <p class=\"name\">Robert Downey</p>
              </div>
              <img class=\"embleme\" src=\"http://localhost/flyaround_s2/src/Flyaround/MapBundle/Resources/public/img/geotheme-28.png\"></img>
            </div>
            <img class=\"decor\" src=\"http://localhost/flyaround_s2/src/Flyaround/MapBundle/Resources/public/img/chateau.jpg\"></img>
          </div>
        </div>
        <div class=\"vue\">
          <div class=\"profil\">
            <img class=\"avatar\" src=\"http://localhost/flyaround_s2/src/Flyaround/MapBundle/Resources/public/img/facetest.jpg\"></img>
            <div class=\"dynamicText\">
              <p class=\"name\">Port</p>
              <div id=\"line3\"></div>
              <p class=\"name\">Robert Downey</p>
            </div>
            <img class=\"embleme\" src=\"http://localhost/flyaround_s2/src/Flyaround/MapBundle/Resources/public/img/geotheme-27.png\"></img>
          </div>
          <img class=\"decor\" src=\"http://localhost/flyaround_s2/src/Flyaround/MapBundle/Resources/public/img/fribourg.jpg\"></img>
        </div>
        <div class=\"vue\">
          <div class=\"profil\">
            <img class=\"avatar\" src=\"http://localhost/flyaround_s2/src/Flyaround/MapBundle/Resources/public/img/facetest.jpg\"></img>
            <div class=\"dynamicText\">
              <p class=\"name\">Port</p>
              <div id=\"line3\"></div>
              <p class=\"name\">Robert Downey</p>
            </div>
            <img class=\"embleme\" src=\"http://localhost/flyaround_s2/src/Flyaround/MapBundle/Resources/public/img/geotheme-29.png\"></img>
          </div>
          <img class=\"decor\" src=\"http://localhost/flyaround_s2/src/Flyaround/MapBundle/Resources/public/img/corse4.jpg\"></img>
        </div>
        <div class=\"vue\">
          <div class=\"profil\">
            <img class=\"avatar\" src=\"http://localhost/flyaround_s2/src/Flyaround/MapBundle/Resources/public/img/facetest.jpg\"></img>
            <div class=\"dynamicText\">
              <p class=\"name\">Port</p>
              <div id=\"line3\"></div>
              <p class=\"name\">Robert Downey</p>
            </div>
            <img class=\"embleme\" src=\"http://localhost/flyaround_s2/src/Flyaround/MapBundle/Resources/public/img/geotheme-28.png\"></img>
          </div>
          <img class=\"decor\" src=\"http://localhost/flyaround_s2/src/Flyaround/MapBundle/Resources/public/img/chateau.jpg\"></img>
        </div>
      </div><!--box-->
    </div><!--page-->
";
    }

    // line 95
    public function block_javascripts($context, array $blocks = array())
    {
        // line 96
        echo "    <script charset=\"utf-8\" type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script charset=\"utf-8\" type=\"text/javascript\" src=\"";
        // line 97
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
        return array (  156 => 97,  151 => 96,  148 => 95,  62 => 11,  59 => 10,  53 => 7,  48 => 6,  45 => 5,  39 => 3,  11 => 1,);
    }
}
