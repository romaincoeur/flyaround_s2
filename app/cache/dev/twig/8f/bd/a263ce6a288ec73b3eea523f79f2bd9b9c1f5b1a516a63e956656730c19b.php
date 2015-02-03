<?php

/* SonataUserBundle:Admin:Security/login.html.twig */
class __TwigTemplate_8fbda263ce6a288ec73b3eea523f79f2bd9b9c1f5b1a516a63e956656730c19b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'logo' => array($this, 'block_logo'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'body_attributes' => array($this, 'block_body_attributes'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_user_login_form' => array($this, 'block_sonata_user_login_form'),
            'sonata_user_login_error' => array($this, 'block_sonata_user_login_error'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->env->resolveTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_sonata_nav($context, array $blocks = array())
    {
    }

    // line 6
    public function block_logo($context, array $blocks = array())
    {
    }

    // line 9
    public function block_sonata_left_side($context, array $blocks = array())
    {
    }

    // line 12
    public function block_body_attributes($context, array $blocks = array())
    {
        echo "class=\"sonata-bc bg-black\"";
    }

    // line 14
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        // line 15
        echo "    <div class=\"form-box\" id=\"login-box\">
        <div class=\"header\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_user_authentication", array(), "SonataUserBundle"), "html", null, true);
        echo "</div>
        ";
        // line 17
        $this->displayBlock('sonata_user_login_form', $context, $blocks);
        // line 50
        echo "    </div>
";
    }

    // line 17
    public function block_sonata_user_login_form($context, array $blocks = array())
    {
        // line 18
        echo "            <form action=\"";
        echo $this->env->getExtension('routing')->getPath("sonata_user_admin_security_check");
        echo "\" method=\"post\" role=\"form\">
                <div class=\"body bg-gray\">
                    ";
        // line 20
        $this->displayBlock('sonata_user_login_error', $context, $blocks);
        // line 25
        echo "
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\"/>

                    <div class=\"form-group control-group\">
                        <input type=\"text\" class=\"form-control\" id=\"username\"  name=\"_username\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "SonataUserBundle"), "html", null, true);
        echo "\"/>
                    </div>


                    <div class=\"form-group control-group\">
                        <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" required=\"required\" placeholder=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "SonataUserBundle"), "html", null, true);
        echo "\"/>
                    </div>

                    <div class=\"form-group\">
                        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"/>
                        ";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
                    </div>

                </div>

                <div class=\"footer\">
                    <button type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn bg-olive btn-block\">";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>
                    <p><a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\" class=\"text-center\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("forgotten_password", array(), "SonataUserBundle"), "html", null, true);
        echo "</a></p>
                </div>
            </form>
        ";
    }

    // line 20
    public function block_sonata_user_login_error($context, array $blocks = array())
    {
        // line 21
        echo "                        ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 22
            echo "                            <div class=\"alert alert-danger alert-error\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
                        ";
        }
        // line 24
        echo "                    ";
    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Admin:Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 24,  138 => 22,  135 => 21,  132 => 20,  122 => 46,  118 => 45,  109 => 39,  101 => 34,  91 => 29,  85 => 26,  82 => 25,  80 => 20,  74 => 18,  71 => 17,  66 => 50,  64 => 17,  60 => 16,  57 => 15,  54 => 14,  48 => 12,  43 => 9,  38 => 6,  33 => 3,  24 => 1,);
    }
}
