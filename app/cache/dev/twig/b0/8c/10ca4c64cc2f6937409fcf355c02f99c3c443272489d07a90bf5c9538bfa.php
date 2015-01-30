<?php

/* FlyaroundCoreBundle:Default:index.html.twig */
class __TwigTemplate_b08c10ca4c64cc2f6937409fcf355c02f99c3c443272489d07a90bf5c9538bfa extends Twig_Template
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
        // line 2
        echo "<!DOCTYPE html>
<html>
<head>

    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>

    <title>Flyaround</title>

    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/css/global.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/css/custom.css"), "html", null, true);
        echo "\" type=\"text/css\"/>

    <!-- FONTS -->
    <style type=\"text/css\">

        /*@import url(\"http://fast.fonts.net/lt/1.css?apiType=css&c=6c3db46d-2348-428f-89b7-2e11bb00ab65&fontids=1122878,1122872\");*/
        @font-face {
            font-family: \"ITCAvantGardeW04-Book\";
            src: url(\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/fonts/1122878/daa5c000-4e87-40e9-9689-eec7fd2a19e1.eot?#iefix"), "html", null, true);
        echo "\");
            src: url(\"";
        // line 21
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
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/fonts/1122872/4440e247-5f11-4b81-81fc-4f2e5a9573ff.eot?#iefix"), "html", null, true);
        echo "\");
            src: url(\"";
        // line 27
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

    <!-- favicon-->
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\">

</head>
<body>

<header>
    <div class=\"left\">

        <a href=\"https://www.facebook.com/pages/Flyaround/541389942601829\" target=\"_blank\">
            <img class=\"icon\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/images/icon-fb.png"), "html", null, true);
        echo "\" alt=\"facebook\" ></a>

        <a href=\"#\"><img class=\"icon\" src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/images/reseau-social-96.png"), "html", null, true);
        echo "\" alt=\"email\"></a>

        <a href=\"https://twitter.com/FlyaroundFR\" target=\"_blank\">
            <img class=\"icon\" src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/images/icon-twitter.png"), "html", null, true);
        echo "\" alt=\"twitter\"></a>

        <a href=\"#\" target=\"_blank\"><img class=\"icon\" src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/images/reseau-social-94.png"), "html", null, true);
        echo "\" alt=\"\"></a>

    </div>
    <div class=\"right\">
        ";
        // line 53
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 54
            echo "            <div class=\"span2\"><p>Bonjour ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</p></div>
            <a class=\"btn btn-primary span2\" ref=\"#\">Espace perso</a>
            <a class=\"btn btn-danger span2\" href=\"logout\">Logout</a>
        ";
        } else {
            // line 58
            echo "            <a href=\"#register\" role=\"button\" class=\"\" data-toggle=\"modal\">
                <div class=\"col-md-6 user-btn\">
                    <img class=\"icon\" src=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/images/connexion.png"), "html", null, true);
            echo "\" alt=\"logo de Flyaround\">
                    inscription
                </div>
            </a>

            <a href=\"#connexion\" role=\"button\" class=\"\" data-toggle=\"modal\">
                <div class=\"col-md-6 user-btn\">
                    <img class=\"icon\" src=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/images/cadenas.png"), "html", null, true);
            echo "\" alt=\"separateur\">
                    connexion
                </div>
            </a>
        ";
        }
        // line 72
        echo "    </div>
    <div class=\"clearfix\"></div>
</header>

<div id=\"bg\">
    <img style=\"width:100%;height:auto;\" src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/images/calvi.png"), "html", null, true);
        echo "\">
</div>
<div class=\"logo_centre\">
    <a href=\"";
        // line 80
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">
        <img class=\"logo\" src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/images/logo-white.png"), "html", null, true);
        echo "\" alt=\"logo de Flyaround\"
             width=\"230px\">
        <img class=\"logo\" src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/images/logo-white-32.png"), "html", null, true);
        echo "\" alt=\"logo de Flyaround\"
             width=\"auto\">
    </a>
    <p> <h2>survoler, découvrir, partager</h2> </p>


</div>

<div id=\"first\">
        <img id=\"logo1\" src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/images/plane.png"), "html", null, true);
        echo "\">
        <div id=\"firstbis\">
            <p><strong>Survoler les plus beaux sites de France</strong></p>
            <p><strong>____________________</strong></p>
            <br></br>
            <p>Flyarround est une carte interactive enrichies par les utilisateurs du site.Grâce à Flyarround, découvrez autour de votre point d'envol, les plus beaux sites à voir classés par catégories</p>
        <br></br>
        <div class=\"buttonlog\">
            <img src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/images/icones-84.png"), "html", null, true);
        echo "\">
        <p><strong>s'inscrire et s'envoler...</strong></p>  
        </div>
            <img id=\"desc1\" src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/images/desc1.png"), "html", null, true);
        echo "\">
        </div>
    </div>

    <div id=\"second\">
        <img id=\"back1\" src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/images/back1.png"), "html", null, true);
        echo "\">
    </div>

    <div id=\"third\">
        <img id=\"desc2\" src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/images/desc2.png"), "html", null, true);
        echo "\">
        <div id=\"thirdbis\">
            <p><strong>Découvrir de nouveaux sites</strong></p>
            <p><strong>____________________</strong></p>
            <br></br>
            <p>Avec Flyarround, découvre de nouveaux sites. Ajoutes-les à ta Flylist pour les retenirs et aller les survoler lors de ton prochain vol. Ajoute une région ou les alentours d'un terrain pour être avertis lors de la création d'un nouveau site.</p> 
        <br></br>
        <div class=\"buttonlog\">
            <img src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/images/boussole.png"), "html", null, true);
        echo "\">
        <p><strong>s'inscrire et découvrir...</strong></p>  
        </div>
            <img id=\"plane2\" src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/images/plane2.png"), "html", null, true);
        echo "\">
    </div>
    </div>

    <div id=\"four\">
        <img id=\"back2\" src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/images/back2.png"), "html", null, true);
        echo "\">
    </div>

    <div id=\"fifth\">
    <img id=\"plane3\" src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/images/plane3.png"), "html", null, true);
        echo "\">
        <div id=\"fifthbis\">
            <p><strong>Survoler les plus beaux sites de France</strong></p>
            <p><strong>____________________</strong></p>
            <br></br>
            <p>Flyarround est une carte interactive enrichies par les utilisateurs du site.Grâce à Flyarround, découvrez autour de votre point d'envol, les plus beaux sites à voir classés par catégories</p>
        <br></br>
        <div class=\"buttonlog\">
            <img src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/images/ajouter-site.png"), "html", null, true);
        echo "\">
        <p><strong>s'inscrire et enrichir...</strong></p>   
        </div>
        </div>
        <img id=\"desc3\" src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/images/desc3.png"), "html", null, true);
        echo "\">
    </div>

    <div id=\"six\">
    <img id=\"desc4\" src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/images/desc4.png"), "html", null, true);
        echo "\">
        <div id=\"sixbis\">
            <p><strong>Survoler les plus beaux sites de France</strong></p>
            <p><strong>____________________</strong></p>
            <br></br>
            <p>Flyarround est une carte interactive enrichies par les utilisateurs du site.Grâce à Flyarround, découvrez autour de votre point d'envol, les plus beaux sites à voir classés par catégories</p>
        <br></br>
        <div class=\"buttonlogbis\">
            <img src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/images/connexion.png"), "html", null, true);
        echo "\">
        <p><strong>s'inscrire</strong></p>  
            <img id=\"plane4\" src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/images/plane4.png"), "html", null, true);
        echo "\">
        </div>
        </div>
    </div>

    <div id=\"seven\">
        <img id=\"back3\" src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/images/back3.png"), "html", null, true);
        echo "\">
    </div>

<div id=\"suggestions\" class=\"bg-grey\">
    <div id=\"controls\">
        <div class=\"left\">
            <div>
                <img class=\"icon\" src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/images/sites-ajoutes.png"), "html", null, true);
        echo "\"
                     alt=\"sites-ajoutes\">
                Les derniers sites ajoutés
            </div>
            <a href=\"#\">
                <div>
                    <img class=\"icon\" src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/images/ajouter-site.png"), "html", null, true);
        echo "\"
                         alt=\"ajouter-site\" style=\"margin-left: 10px;\">
                    Ajouter un site
                </div>
            </a>
        </div>
        <div class=\"right\">
            <img class=\"btn icon\" id=\"left-arrow\" src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/images/left-arrow.png"), "html", null, true);
        echo "\"
                 alt=\"left-arrow\">
            <img class=\"btn icon\" id=\"right-arrow\" src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/images/right-arrow.png"), "html", null, true);
        echo "\"
                 alt=\"right-arrow\" style=\"margin-left: 20px;\">
        </div>
        <div class=\"clearfix\"></div>
    </div>

    <div id=\"sites\" class=\"carousel\">
        <a href=\"#\">
            <div class=\"thumbnail\">
                <img class=\"miniature\" src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/images/corse4.jpg"), "html", null, true);
        echo "\" alt=\"corse\">
                Calanques corses
                <hr>
                <img class=\"icon\" src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/images/geotheme-nature.png"), "html", null, true);
        echo "\"
                     alt=\"icon nature\">
            </div>
        </a>
        <a href=\"#\">
            <div class=\"thumbnail\">
                <img class=\"miniature\" src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/images/millau.jpg"), "html", null, true);
        echo "\" alt=\"corse\">
                Viaduc de Millau
                <hr>
                <img class=\"icon\" src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/images/geotheme-infrastructure.png"), "html", null, true);
        echo "\"
                     alt=\"icon nature\">
            </div>
        </a>
        <a href=\"#\">
            <div class=\"thumbnail\">
                <img class=\"miniature\" src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/images/chateau.jpg"), "html", null, true);
        echo "\" alt=\"corse\">
                Chateau de Chambord
                <hr>
                <img class=\"icon\" src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/images/geotheme-site-classe.png"), "html", null, true);
        echo "\"
                     alt=\"icon nature\">
            </div>
        </a>
        <a href=\"#\">
            <div class=\"thumbnail\">
                <img class=\"miniature\" src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/images/fribourg.jpg"), "html", null, true);
        echo "\" alt=\"corse\">
                Fribourg
                <hr>
                <img class=\"icon\" src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/images/geotheme-site-classe.png"), "html", null, true);
        echo "\"
                     alt=\"icon nature\">
            </div>
        </a>
        <a href=\"#\">
            <div class=\"thumbnail\">
                <img class=\"miniature\" src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/images/corse4.jpg"), "html", null, true);
        echo "\" alt=\"corse\">
                Calanques corses
                <hr>
                <img class=\"icon\" src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/images/geotheme-nature.png"), "html", null, true);
        echo "\"
                     alt=\"icon nature\">
            </div>
        </a>
        <a href=\"#\">
            <div class=\"thumbnail\">
                <img class=\"miniature\" src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/images/millau.jpg"), "html", null, true);
        echo "\" alt=\"corse\">
                Viaduc de Millau
                <hr>
                <img class=\"icon\" src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/images/geotheme-infrastructure.png"), "html", null, true);
        echo "\"
                     alt=\"icon nature\">
            </div>
        </a>
        <a href=\"#\">
            <div class=\"thumbnail\">
                <img class=\"miniature\" src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/images/chateau.jpg"), "html", null, true);
        echo "\" alt=\"corse\">
                Chateau de Chambord
                <hr>
                <img class=\"icon\" src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/images/geotheme-site-classe.png"), "html", null, true);
        echo "\"
                     alt=\"icon nature\">
            </div>
        </a>
        <a href=\"#\">
            <div class=\"thumbnail\">
                <img class=\"miniature\" src=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/images/fribourg.jpg"), "html", null, true);
        echo "\" alt=\"corse\">
                Fribourg
                <hr>
                <img class=\"icon\" src=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/images/geotheme-site-classe.png"), "html", null, true);
        echo "\"
                     alt=\"icon nature\">
            </div>
        </a>
    </div>
</div>

<div id=\"secret_sauce\">
    <img class=\"icon\" src=\"";
        // line 269
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/images/boussole.png"), "html", null, true);
        echo "\" alt=\"boussole\">

    <h2><b>fly</b>around <b>secret'sauce</b></h2>

    <div class=\"center\" style=\"max-width: 1060px;\">
        <div class=\"chapter\">
            <img class=\"big-icon\" src=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/images/boussole.png"), "html", null, true);
        echo "\" alt=\"boussole\">

            <h3>Explorer les sites</h3>
            <hr>
            <p>ExplorerNatur majorer ionsed quares milia ipicimp orehentibus endenda
                plab iur, oatur? Quiboaq uibuscima in rem et iugiatusape plabori vellam
                iaceati umquae la di aut rem con enihil endltiume et accaborro consequo ma
                voluptur?</p>
        </div>
        <div class=\"chapter\">
            <img class=\"big-icon\" src=\"";
        // line 285
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/images/ajouter-site.png"), "html", null, true);
        echo "\" alt=\"marker\">

            <h3>Enrichir la carte</h3>
            <hr>
            <p>ExplorerNatur majorer ionsed quares milia ipicimp orehentibus endenda
                plab iur, oatur? Quiboaq uibuscima in rem et iugiatusape plabori vellam
                iaceati umquae la di aut rem con enihil endltiume et accaborro consequo ma
                voluptur?</p>
        </div>
        <div class=\"chapter\">
            <img class=\"big-icon\" src=\"";
        // line 295
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/images/pilote.png"), "html", null, true);
        echo "\" alt=\"pilote\">

            <h3>Intégrer une communauté</h3>
            <hr>
            <p>ExplorerNatur majorer ionsed quares milia ipicimp orehentibus endenda
                plab iur, oatur? Quiboaq uibuscima in rem et iugiatusape plabori vellam
                iaceati umquae la di aut rem con enihil endltiume et accaborro consequo ma
                voluptur?</p>
        </div>
    </div>
</div>

<footer>
    <div class=\"center\">
        <div class=\"w33\">
            <div class=\"left\" style=\"width: 350px; margin-left: 30px;\">
                <img class=\"logo\" src=\"";
        // line 311
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/images/logo-white.png"), "html", null, true);
        echo "\"
                     alt=\"logo de Flyaround\" width=\"100px\">

                <h2 style=\"font-size: 28px;\"><b style=\"font-size: 30px;\">fly</b>around</h2>
            </div>
        </div>
        <div class=\"w33 borders\">
            <div class=\"center\" style=\"width: 360px\">
                <p>
                    \"Vous souhaitez nous poser des questions, nous dire que flyaround vous ravit
                    ou simplement dire bonjour ? N'hésitez pas à nous contacter ou retrouver nous
                    sur Facebook et Twitter\"
                </p>
            </div>
        </div>
        <div class=\"w33\">
            <div class=\"right\" style=\"width: 300px; margin-right: 70px;\">
                <a href=\"#\"><img class=\"big-icon\" src=\"";
        // line 328
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/images/icon-email.png"), "html", null, true);
        echo "\"
                                 alt=\"email\"></a>
                <a href=\"https://www.facebook.com/pages/Flyaround/541389942601829\" target=\"_blank\"><img class=\"big-icon\"
                                                                                                        src=\"";
        // line 331
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/images/icon-fb.png"), "html", null, true);
        echo "\"
                                                                                                        alt=\"facebook\"
                                                                                                        style=\"margin: 0 70px;\"></a>
                <a href=\"https://twitter.com/FlyaroundFR\" target=\"_blank\"><img class=\"big-icon\"
                                                                               src=\"";
        // line 335
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/images/icon-twitter.png"), "html", null, true);
        echo "\"
                                                                               alt=\"twitter\"></a>
            </div>
        </div>
    </div>
</footer>

";
        // line 343
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array()) == "dev")) {
            // line 344
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/js/jquery.js"), "html", null, true);
            echo "\"></script>
";
        } else {
            // line 346
            echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
";
        }
        // line 348
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 349
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/js/carousel.js"), "html", null, true);
        echo "\"></script>

";
        // line 351
        if ( !$this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 352
            echo "    <div class=\"modal fade\" id=\"register\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <form action=\"";
            // line 355
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\" ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["registration_form"]) ? $context["registration_form"] : $this->getContext($context, "registration_form")), 'enctype');
            echo " method=\"POST\" class=\"fos_user_registration_register\">
                    ";
            // line 356
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["registration_form"]) ? $context["registration_form"] : $this->getContext($context, "registration_form")), 'widget');
            echo "
                    <div>
                        <input type=\"submit\" value=\"";
            // line 358
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
            echo "\" />
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class=\"modal fade\" id=\"connexion\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">

                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                    <h3 id=\"myModalLabel\">Connexion</h3>
                </div>
                <div class=\"modal-body\">
                    <form action=\"";
            // line 375
            echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
            echo "\" method=\"post\">
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 376
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />

                        <label for=\"username\">";
            // line 378
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
            echo "</label>
                        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
            // line 379
            echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
            echo "\" required=\"required\" />

                        <label for=\"password\">";
            // line 381
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
            echo "</label>
                        <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

                        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                        <label for=\"remember_me\">";
            // line 385
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
            echo "</label>

                        <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
            // line 387
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
            echo "\" />
                    </form>
                </div>
                <div class=\"modal-footer\">
                    <button class=\"btn btn-default\" data-dismiss=\"modal\" aria-hidden=\"true\">Fermer</button>
                    <button class=\"btn btn-primary\">Save changes</button>
                </div>
            </div>
        </div>
    </div>
";
        }
        // line 398
        echo "
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "FlyaroundCoreBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  669 => 398,  655 => 387,  650 => 385,  643 => 381,  638 => 379,  634 => 378,  629 => 376,  625 => 375,  605 => 358,  600 => 356,  594 => 355,  589 => 352,  587 => 351,  582 => 349,  577 => 348,  573 => 346,  567 => 344,  565 => 343,  555 => 335,  548 => 331,  542 => 328,  522 => 311,  503 => 295,  490 => 285,  477 => 275,  468 => 269,  457 => 261,  451 => 258,  442 => 252,  436 => 249,  427 => 243,  421 => 240,  412 => 234,  406 => 231,  397 => 225,  391 => 222,  382 => 216,  376 => 213,  367 => 207,  361 => 204,  352 => 198,  346 => 195,  334 => 186,  329 => 184,  319 => 177,  310 => 171,  300 => 164,  291 => 158,  286 => 156,  275 => 148,  268 => 144,  261 => 140,  250 => 132,  243 => 128,  235 => 123,  229 => 120,  218 => 112,  211 => 108,  203 => 103,  197 => 100,  186 => 92,  174 => 83,  169 => 81,  165 => 80,  159 => 77,  152 => 72,  144 => 67,  134 => 60,  130 => 58,  122 => 54,  120 => 53,  113 => 49,  108 => 47,  102 => 44,  97 => 42,  85 => 33,  70 => 27,  66 => 26,  52 => 21,  48 => 20,  37 => 12,  33 => 11,  29 => 10,  19 => 2,);
    }
}
