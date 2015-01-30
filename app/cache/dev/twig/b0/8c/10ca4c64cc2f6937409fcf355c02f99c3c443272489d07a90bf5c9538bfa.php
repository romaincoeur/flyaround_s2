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

<div id=\"suggestions\" class=\"bg-grey\">
    <div id=\"controls\">
        <div class=\"left\">
            <div>
                <img class=\"icon\" src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/images/sites-ajoutes.png"), "html", null, true);
        echo "\"
                     alt=\"sites-ajoutes\">
                Les derniers sites ajoutés
            </div>
            <a href=\"#\">
                <div>
                    <img class=\"icon\" src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/images/ajouter-site.png"), "html", null, true);
        echo "\"
                         alt=\"ajouter-site\" style=\"margin-left: 10px;\">
                    Ajouter un site
                </div>
            </a>
        </div>
        <div class=\"right\">
            <img class=\"btn icon\" id=\"left-arrow\" src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/images/left-arrow.png"), "html", null, true);
        echo "\"
                 alt=\"left-arrow\">
            <img class=\"btn icon\" id=\"right-arrow\" src=\"";
        // line 110
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
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/images/corse4.jpg"), "html", null, true);
        echo "\" alt=\"corse\">
                Calanques corses
                <hr>
                <img class=\"icon\" src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/images/geotheme-nature.png"), "html", null, true);
        echo "\"
                     alt=\"icon nature\">
            </div>
        </a>
        <a href=\"#\">
            <div class=\"thumbnail\">
                <img class=\"miniature\" src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/images/millau.jpg"), "html", null, true);
        echo "\" alt=\"corse\">
                Viaduc de Millau
                <hr>
                <img class=\"icon\" src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/images/geotheme-infrastructure.png"), "html", null, true);
        echo "\"
                     alt=\"icon nature\">
            </div>
        </a>
        <a href=\"#\">
            <div class=\"thumbnail\">
                <img class=\"miniature\" src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/images/chateau.jpg"), "html", null, true);
        echo "\" alt=\"corse\">
                Chateau de Chambord
                <hr>
                <img class=\"icon\" src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/images/geotheme-site-classe.png"), "html", null, true);
        echo "\"
                     alt=\"icon nature\">
            </div>
        </a>
        <a href=\"#\">
            <div class=\"thumbnail\">
                <img class=\"miniature\" src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/images/fribourg.jpg"), "html", null, true);
        echo "\" alt=\"corse\">
                Fribourg
                <hr>
                <img class=\"icon\" src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/images/geotheme-site-classe.png"), "html", null, true);
        echo "\"
                     alt=\"icon nature\">
            </div>
        </a>
        <a href=\"#\">
            <div class=\"thumbnail\">
                <img class=\"miniature\" src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/images/corse4.jpg"), "html", null, true);
        echo "\" alt=\"corse\">
                Calanques corses
                <hr>
                <img class=\"icon\" src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/images/geotheme-nature.png"), "html", null, true);
        echo "\"
                     alt=\"icon nature\">
            </div>
        </a>
        <a href=\"#\">
            <div class=\"thumbnail\">
                <img class=\"miniature\" src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/images/millau.jpg"), "html", null, true);
        echo "\" alt=\"corse\">
                Viaduc de Millau
                <hr>
                <img class=\"icon\" src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/images/geotheme-infrastructure.png"), "html", null, true);
        echo "\"
                     alt=\"icon nature\">
            </div>
        </a>
        <a href=\"#\">
            <div class=\"thumbnail\">
                <img class=\"miniature\" src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/images/chateau.jpg"), "html", null, true);
        echo "\" alt=\"corse\">
                Chateau de Chambord
                <hr>
                <img class=\"icon\" src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/images/geotheme-site-classe.png"), "html", null, true);
        echo "\"
                     alt=\"icon nature\">
            </div>
        </a>
        <a href=\"#\">
            <div class=\"thumbnail\">
                <img class=\"miniature\" src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/images/fribourg.jpg"), "html", null, true);
        echo "\" alt=\"corse\">
                Fribourg
                <hr>
                <img class=\"icon\" src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/images/geotheme-site-classe.png"), "html", null, true);
        echo "\"
                     alt=\"icon nature\">
            </div>
        </a>
    </div>
</div>

<div id=\"secret_sauce\">
    <img class=\"icon\" src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/images/boussole.png"), "html", null, true);
        echo "\" alt=\"boussole\">

    <h2><b>fly</b>around <b>secret'sauce</b></h2>

    <div class=\"center\" style=\"max-width: 1060px;\">
        <div class=\"chapter\">
            <img class=\"big-icon\" src=\"";
        // line 199
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
        // line 209
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
        // line 219
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
        // line 235
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
        // line 252
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/images/icon-email.png"), "html", null, true);
        echo "\"
                                 alt=\"email\"></a>
                <a href=\"https://www.facebook.com/pages/Flyaround/541389942601829\" target=\"_blank\"><img class=\"big-icon\"
                                                                                                        src=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/images/icon-fb.png"), "html", null, true);
        echo "\"
                                                                                                        alt=\"facebook\"
                                                                                                        style=\"margin: 0 70px;\"></a>
                <a href=\"https://twitter.com/FlyaroundFR\" target=\"_blank\"><img class=\"big-icon\"
                                                                               src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/images/icon-twitter.png"), "html", null, true);
        echo "\"
                                                                               alt=\"twitter\"></a>
            </div>
        </div>
    </div>
</footer>

";
        // line 267
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array()) == "dev")) {
            // line 268
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/js/jquery.js"), "html", null, true);
            echo "\"></script>
";
        } else {
            // line 270
            echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
";
        }
        // line 272
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 273
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/js/carousel.js"), "html", null, true);
        echo "\"></script>

";
        // line 275
        if ( !$this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 276
            echo "    <div class=\"modal fade\" id=\"register\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <form action=\"";
            // line 279
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\" ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["registration_form"]) ? $context["registration_form"] : $this->getContext($context, "registration_form")), 'enctype');
            echo " method=\"POST\" class=\"fos_user_registration_register\">
                    ";
            // line 280
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["registration_form"]) ? $context["registration_form"] : $this->getContext($context, "registration_form")), 'widget');
            echo "
                    <div>
                        <input type=\"submit\" value=\"";
            // line 282
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
            // line 299
            echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
            echo "\" method=\"post\">
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 300
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />

                        <label for=\"username\">";
            // line 302
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
            echo "</label>
                        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
            // line 303
            echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
            echo "\" required=\"required\" />

                        <label for=\"password\">";
            // line 305
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
            echo "</label>
                        <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

                        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                        <label for=\"remember_me\">";
            // line 309
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
            echo "</label>

                        <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
            // line 311
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
        // line 322
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
        return array (  548 => 322,  534 => 311,  529 => 309,  522 => 305,  517 => 303,  513 => 302,  508 => 300,  504 => 299,  484 => 282,  479 => 280,  473 => 279,  468 => 276,  466 => 275,  461 => 273,  456 => 272,  452 => 270,  446 => 268,  444 => 267,  434 => 259,  427 => 255,  421 => 252,  401 => 235,  382 => 219,  369 => 209,  356 => 199,  347 => 193,  336 => 185,  330 => 182,  321 => 176,  315 => 173,  306 => 167,  300 => 164,  291 => 158,  285 => 155,  276 => 149,  270 => 146,  261 => 140,  255 => 137,  246 => 131,  240 => 128,  231 => 122,  225 => 119,  213 => 110,  208 => 108,  198 => 101,  189 => 95,  174 => 83,  169 => 81,  165 => 80,  159 => 77,  152 => 72,  144 => 67,  134 => 60,  130 => 58,  122 => 54,  120 => 53,  113 => 49,  108 => 47,  102 => 44,  97 => 42,  85 => 33,  70 => 27,  66 => 26,  52 => 21,  48 => 20,  37 => 12,  33 => 11,  29 => 10,  19 => 2,);
    }
}
