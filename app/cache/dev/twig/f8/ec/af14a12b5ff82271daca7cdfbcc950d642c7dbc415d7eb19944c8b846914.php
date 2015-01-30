<?php

/* FlyaroundMapBundle:Default:index.html.twig */
class __TwigTemplate_f8ecaf14a12b5ff82271daca7cdfbcc950d642c7dbc415d7eb19944c8b846914 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
<!DOCTYPE HTML>
<html>
<head>

    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>

    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "
    <!-- FONTS -->
    <style type=\"text/css\">

        /*@import url(\"http://fast.fonts.net/lt/1.css?apiType=css&c=6c3db46d-2348-428f-89b7-2e11bb00ab65&fontids=1122878,1122872\");*/
        @font-face {
            font-family: \"ITCAvantGardeW04-Book\";
            src: url(\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/fonts/1122878/daa5c000-4e87-40e9-9689-eec7fd2a19e1.eot?#iefix"), "html", null, true);
        echo "\");
            src: url(\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/fonts/1122878/daa5c000-4e87-40e9-9689-eec7fd2a19e1.eot?#iefix"), "html", null, true);
        echo "\") format(\"eot\"), url(\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/fonts/1122878/e58aa4f4-3fa9-4138-9cc9-712e1955902c.woff"), "html", null, true);
        echo "\") format(\"woff\"), url(\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/fonts/1122878/b335d0cc-8594-4212-a73a-eb2a55d2b008.ttf"), "html", null, true);
        echo "\") format(\"truetype\"), url(\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/fonts/1122878/3fec63b6-5c06-495d-8bad-0555b665ab8e.svg#3fec63b6-5c06-495d-8bad-0555b665ab8e"), "html", null, true);
        echo "\") format(\"svg\");
        }

        @font-face {
            font-family: \"ITCAvantGardeW04-Bold\";
            src: url(\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/fonts/1122872/4440e247-5f11-4b81-81fc-4f2e5a9573ff.eot?#iefix"), "html", null, true);
        echo "\");
            src: url(\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/fonts/fonts/1122872/4440e247-5f11-4b81-81fc-4f2e5a9573ff.eot?#iefix"), "html", null, true);
        echo "\") format(\"eot\"), url(\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/fonts/1122872/b4cf0471-a031-48a8-a02a-0000def6fd87.woff"), "html", null, true);
        echo "\") format(\"woff\"), url(\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/fonts/1122872/67eef87d-0308-420c-99da-8e75af66f09f.ttf"), "html", null, true);
        echo "\") format(\"truetype\"), url(\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/fonts/1122872/91b0afed-75b4-473d-a2ae-04a3679f2a1c.svg#91b0afed-75b4-473d-a2ae-04a3679f2a1c"), "html", null, true);
        echo "\") format(\"svg\");
        }

    </style>

</head>
<body>

<header>
    <div class=\"left\">
        <a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">
            <img class=\"logo\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/images/logo.png"), "html", null, true);
        echo "\" alt=\"logo de Flyaround\"
                 width=\"40px\">

            <h1><b>fly</b>around</h1>
        </a>
        <img class=\"point icon\" src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/images/point.png"), "html", null, true);
        echo "\" alt=\"separateur\">

        <h2>survoler, découvrir, admirer</h2>
    </div>
    <div class=\"right\">
    </div>
    <div class=\"clearfix\"></div>
</header>

<div id=\"map\" style=\"width:100%; height:100%\">
    Veuillez patienter pendant le chargement de la carte...
</div>

<div class=\"leftPanel col-md-2\">
    <div class=\"header\">
        <img src=\"\" alt=\"photo profil\">

        <div class=\"name\">Marc Degranjean</div>
        <hr>
        <div class=\"description\">Pilote chez Air France</div>
        <div class=\"city\"><img src=\"\" alt=\"marker\">Paris</div>
    </div>
    <div class=\"menu\">
        <button id=\"news-button\">ACTUALITE</button>
        <button id=\"flylist-button\">MA FLY'LIST</button>
        <button id=\"myadds-button\">MES AJOUTS</button>
        <button id=\"favorites-button\">MES FAVORIS</button>
        <button id=\"profile-button\">MON PROFIL</button>
    </div>
</div>

<div id=\"news-panel\" class=\"panel col-md-5\">
    Actualités
</div>
<div id=\"flylist-panel\" class=\"panel col-md-5\">
    <div id=\"flylisttop\">
        <div class=\"row\">
            <div class=\"flylistgauche col-md-4\">
                <img src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundmap/img/icones-27.png"), "html", null, true);
        echo "\"/> 48,3615
                <br>
                <img src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundmap/img/icones-26.png"), "html", null, true);
        echo "\"/> Esbly 23KM
            </div>

            <div class=\"flylistmid col-md-4\">
                <img src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundmap/img/geotheme-26.png"), "html", null, true);
        echo "\"/>
                <p>ZONE TEXT 1</p>
                <p>Ajouté par Marc Degranjean</p>

            </div>

            <div class=\"flylistdroit col-md-4\">
                <div class=\"col-md-1\">
                    <a href=\"#retenir\" role=\"button\" class=\"\" data-toggle=\"modal\">
                        <img class=\"icon\" src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundmap/img/icones-25.png"), "html", null, true);
        echo "\"><p>Btn1</p>
                    </a>
                </div>

                <div class=\"col-md-2\">
                    <a href=\"#retenir\" role=\"button\" class=\"\" data-toggle=\"modal\">
                        <img class=\"icon\" src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundmap/img/icones-25.png"), "html", null, true);
        echo "\"><p>Btn2</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div id=\"fontgris\">
        <div class=\"flylistbody\">
            <div class=\"row\">
                    <div style=\"background: url('";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundmap/img/facetest.jpg"), "html", null, true);
        echo "') no-repeat; background-position: 50% center;\"class=\"col-md-1 circular\">
                    </div>
                    <div class=\"col-md-4 text-center\">
                        <p>\"Primi igitur omnium statuuntur Epigonus \"</p>
                    </div>
            </div>
        </div>
        <div id=\"carouselflylist\">

            <div class=\"row\">
                <div id=\"this-carousel-id\" class=\"carousel slide\"><!-- class of slide for animation -->
                    <div class=\"carousel-inner\">
                        <div class=\"item active\"><!-- class of active since it's the first item -->
                            <img src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/images/chateau.jpg"), "html", null, true);
        echo "\" alt=\"\" />

                        </div>
                        <div class=\"item\">
                            <img src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/images/corse4.jpg"), "html", null, true);
        echo "\" alt=\"\" />

                        </div>

                    </div><!-- /.carousel-inner -->
                    <!--  Next and Previous controls below
                          href values must reference the id for this carousel -->
                    <a class=\"carousel-control left\" href=\"#this-carousel-id\" data-slide=\"prev\">&lsaquo;</a>
                    <a class=\"carousel-control right\" href=\"#this-carousel-id\" data-slide=\"next\">&rsaquo;</a>
                </div><!-- /.carousel -->
            </div>
        </div>

        <div id=\"flylistcom\">
            <div class=\"xyz\">
                <div class=\"row\">
                    <div style=\"background: url('";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundmap/img/facetest.jpg"), "html", null, true);
        echo "') no-repeat; background-position: 50% center;\"class=\"col-md-1 circular\">
                            <p>Jean dupont</p>


                            <div class=\"col-md-5\">
                                <div class=\"flylistcomtxt\">
                                    <p class=\"text-center\">\"Primi igitur omnium statuuntur Epigonus \"</p>
                                </div>
                            </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<div id=\"myadds-panel\" class=\"panel col-md-5\">
    Mes ajouts
</div>
<div id=\"favorites-panel\" class=\"panel col-md-5\">
    Mes favoris
</div>
<div id=\"profile-panel\" class=\"panel col-md-5\">
    Mon profil
</div>

";
        // line 175
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array()) == "dev")) {
            // line 176
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/js/jquery.js"), "html", null, true);
            echo "\"></script>
";
        } else {
            // line 178
            echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
";
        }
        // line 180
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/js/bootstrap.js"), "html", null, true);
        echo "\"></script>

<!-- Google map -->
<script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?sensor=false\"></script>
<script type=\"text/javascript\">

    ";
        // line 186
        if (((isset($context["latitude"]) ? $context["latitude"] : $this->getContext($context, "latitude")) && (isset($context["longitude"]) ? $context["longitude"] : $this->getContext($context, "longitude")))) {
            // line 187
            echo "    var latlng = new google.maps.LatLng(";
            echo twig_escape_filter($this->env, (isset($context["latitude"]) ? $context["latitude"] : $this->getContext($context, "latitude")), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, (isset($context["longitude"]) ? $context["longitude"] : $this->getContext($context, "longitude")), "html", null, true);
            echo ");
    ";
        } else {
            // line 189
            echo "    var latlng = new google.maps.LatLng(48.8575162, 2.3426246);
    ";
        }
        // line 191
        echo "    // paris : 48.8575162\t2.3426246
    //objet contenant des propriétés avec des identificateurs prédéfinis dans Google Maps permettant
    //de définir des options d'affichage de notre carte
    ";
        // line 194
        if ((isset($context["zoom"]) ? $context["zoom"] : $this->getContext($context, "zoom"))) {
            // line 195
            echo "    var options = {
        center: latlng,
        zoom: ";
            // line 197
            echo twig_escape_filter($this->env, (isset($context["zoom"]) ? $context["zoom"] : $this->getContext($context, "zoom")), "html", null, true);
            echo ",
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        disableDefaultUI: true
    };
    ";
        } else {
            // line 202
            echo "    var options = {
        center: latlng,
        zoom: 8,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        disableDefaultUI: true
    };
    ";
        }
        // line 209
        echo "
    //constructeur de la carte qui prend en paramêtre le conteneur HTML
    //dans lequel la carte doit s'afficher et les options
    var map = new google.maps.Map(document.getElementById(\"map\"), options);

    //Chargement des icones
    var icon_airport = \"";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundmap/img/geotheme-29.png"), "html", null, true);
        echo "\";

    ";
        // line 217
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["flies"]) ? $context["flies"] : $this->getContext($context, "flies")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 218
            echo "    ";
            if (($this->getAttribute($context["entity"], "latitude", array()) && $this->getAttribute($context["entity"], "longitude", array()))) {
                // line 219
                echo "    var fly_position";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo " = new google.maps.LatLng(";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "latitude", array()), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "longitude", array()), "html", null, true);
                echo ");
    var fly_m";
                // line 220
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo " = new google.maps.Marker({
        position: fly_position";
                // line 221
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo ",
        map: map
    });
    ";
            }
            // line 225
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 226
        echo "
    ";
        // line 227
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["terrains"]) ? $context["terrains"] : $this->getContext($context, "terrains")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["terr"]) {
            // line 228
            echo "    ";
            if (($this->getAttribute($context["terr"], "latitude", array()) && $this->getAttribute($context["terr"], "longitude", array()))) {
                // line 229
                echo "    var terr_position";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo " = new google.maps.LatLng(";
                echo twig_escape_filter($this->env, $this->getAttribute($context["terr"], "latitude", array()), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, $this->getAttribute($context["terr"], "longitude", array()), "html", null, true);
                echo ");
    var terr_m";
                // line 230
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo " = new google.maps.Marker({
        position: terr_position";
                // line 231
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo ",
        map: map,
        icon: icon_airport
    });
    ";
            }
            // line 236
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['terr'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 237
        echo "
</script>

<script type=\"text/javascript\" src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/js/map.js"), "html", null, true);
        echo "\"></script>

</body>
</html>";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "Flyaround";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundmap/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/css/global.css"), "html", null, true);
        echo "\" type=\"text/css\"/>

    ";
    }

    public function getTemplateName()
    {
        return "FlyaroundMapBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  476 => 14,  472 => 13,  467 => 12,  464 => 11,  458 => 9,  450 => 240,  445 => 237,  431 => 236,  423 => 231,  419 => 230,  410 => 229,  407 => 228,  390 => 227,  387 => 226,  373 => 225,  366 => 221,  362 => 220,  353 => 219,  350 => 218,  333 => 217,  328 => 215,  320 => 209,  311 => 202,  303 => 197,  299 => 195,  297 => 194,  292 => 191,  288 => 189,  280 => 187,  278 => 186,  268 => 180,  264 => 178,  258 => 176,  256 => 175,  227 => 148,  208 => 132,  201 => 128,  185 => 115,  173 => 106,  164 => 100,  152 => 91,  145 => 87,  140 => 85,  99 => 47,  91 => 42,  87 => 41,  68 => 31,  64 => 30,  50 => 25,  46 => 24,  37 => 17,  35 => 11,  30 => 9,  21 => 2,);
    }
}
