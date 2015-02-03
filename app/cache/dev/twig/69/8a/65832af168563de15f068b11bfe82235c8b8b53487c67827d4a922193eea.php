<?php

/* FlyaroundCoreBundle::layout.html.twig */
class __TwigTemplate_698a65832af168563de15f068b11bfe82235c8b8b53487c67827d4a922193eea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'userBlock' => array($this, 'block_userBlock'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
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
        // line 15
        echo "
    <!-- FONTS -->
    <style type=\"text/css\">

        /*@import url(\"http://fast.fonts.net/lt/1.css?apiType=css&c=6c3db46d-2348-428f-89b7-2e11bb00ab65&fontids=1122878,1122872\");*/
        @font-face {
            font-family: \"ITCAvantGardeW04-Book\";
            src: url(\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/fonts/1122878/daa5c000-4e87-40e9-9689-eec7fd2a19e1.eot?#iefix"), "html", null, true);
        echo "\");
            src: url(\"";
        // line 23
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
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/fonts/1122872/4440e247-5f11-4b81-81fc-4f2e5a9573ff.eot?#iefix"), "html", null, true);
        echo "\");
            src: url(\"";
        // line 29
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
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\">

</head>
<body>

<header>
    <div class=\"left\">

            <a href=\"https://www.facebook.com/pages/Flyaround/541389942601829\" target=\"_blank\">
                <img class=\"icon\" src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/images/icon-fb.png"), "html", null, true);
        echo "\" alt=\"facebook\" ></a>

            <a href=\"#\"><img class=\"icon\" src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/images/reseau-social-96.png"), "html", null, true);
        echo "\" alt=\"email\"></a>

            <a href=\"https://twitter.com/FlyaroundFR\" target=\"_blank\">
                <img class=\"icon\" src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/images/icon-twitter.png"), "html", null, true);
        echo "\" alt=\"twitter\"></a>

            <a href=\"#\" target=\"_blank\"><img class=\"icon\" src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/images/reseau-social-94.png"), "html", null, true);
        echo "\" alt=\"\"></a>

    </div>
    <div class=\"right\">
        ";
        // line 55
        $this->displayBlock('userBlock', $context, $blocks);
        // line 58
        echo "
    </div>
    <div class=\"clearfix\"></div>
</header>

";
        // line 63
        $this->displayBlock('body', $context, $blocks);
        // line 65
        echo "
<footer>
    <div class=\"center\">
        <div class=\"w33\">
            <div class=\"left\" style=\"width: 350px; margin-left: 30px;\">
                <img class=\"logo\" src=\"";
        // line 70
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
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/images/icon-email.png"), "html", null, true);
        echo "\"
                                 alt=\"email\"></a>
                <a href=\"https://www.facebook.com/pages/Flyaround/541389942601829\" target=\"_blank\"><img class=\"big-icon\"
                                                                                                        src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/images/icon-fb.png"), "html", null, true);
        echo "\"
                                                                                                        alt=\"facebook\"
                                                                                                        style=\"margin: 0 70px;\"></a>
                <a href=\"https://twitter.com/FlyaroundFR\" target=\"_blank\"><img class=\"big-icon\"
                                                                               src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/images/icon-twitter.png"), "html", null, true);
        echo "\"
                                                                               alt=\"twitter\"></a>
            </div>
        </div>
    </div>
</footer>

";
        // line 102
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array()) == "dev")) {
            // line 103
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/js/jquery.js"), "html", null, true);
            echo "\"></script>
";
        } else {
            // line 105
            echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
";
        }
        // line 107
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
";
        // line 108
        $this->displayBlock('javascripts', $context, $blocks);
        // line 110
        echo "
";
        // line 111
        if ( !$this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 112
            echo "    <div class=\"modal fade\" id=\"register\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                ";
            // line 115
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FOSUserBundle:Registration:Register"));
            echo "
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
                    ";
            // line 130
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FOSUserBundle:Security:Login"));
            echo "
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
        // line 140
        echo "
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/flyaroundcore/css/global.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
    ";
    }

    // line 55
    public function block_userBlock($context, array $blocks = array())
    {
        // line 56
        echo "            ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ApplicationSonataUserBundle:Default:viewModule"));
        echo "
        ";
    }

    // line 63
    public function block_body($context, array $blocks = array())
    {
    }

    // line 108
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "FlyaroundCoreBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 108,  278 => 63,  271 => 56,  268 => 55,  262 => 13,  257 => 12,  254 => 11,  248 => 9,  242 => 140,  229 => 130,  211 => 115,  206 => 112,  204 => 111,  201 => 110,  199 => 108,  194 => 107,  190 => 105,  184 => 103,  182 => 102,  172 => 94,  165 => 90,  159 => 87,  139 => 70,  132 => 65,  130 => 63,  123 => 58,  121 => 55,  114 => 51,  109 => 49,  103 => 46,  98 => 44,  86 => 35,  71 => 29,  67 => 28,  53 => 23,  49 => 22,  40 => 15,  38 => 11,  33 => 9,  24 => 2,);
    }
}
