<?php

/* SonataAdminBundle:CRUD:base_acl.html.twig */
class __TwigTemplate_01f714d3e7cb718e6f99ffbb241c49b96c29222f8fda15004cc19dde082c0197 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'form' => array($this, 'block_form'),
            'form_acl_roles' => array($this, 'block_form_acl_roles'),
            'formactions_acl_roles' => array($this, 'block_formactions_acl_roles'),
            'form_acl_users' => array($this, 'block_form_acl_users'),
            'formactions_acl_users' => array($this, 'block_formactions_acl_users'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->env->resolveTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        // line 15
        echo "    <li>";
        $this->env->loadTemplate("SonataAdminBundle:Button:edit_button.html.twig")->display($context);
        echo "</li>
    <li>";
        // line 16
        $this->env->loadTemplate("SonataAdminBundle:Button:history_button.html.twig")->display($context);
        echo "</li>
    <li>";
        // line 17
        $this->env->loadTemplate("SonataAdminBundle:Button:show_button.html.twig")->display($context);
        echo "</li>
    <li>";
        // line 18
        $this->env->loadTemplate("SonataAdminBundle:Button:list_button.html.twig")->display($context);
        echo "</li>
";
    }

    // line 21
    public function block_form($context, array $blocks = array())
    {
        // line 22
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 64
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
    }

    // line 22
    public function block_form_acl_roles($context, array $blocks = array())
    {
        // line 23
        echo "        <form class=\"form-horizontal\"
              action=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "acl", 1 => array("id" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "uniqid" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "subclass" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "subclass"), "method"))), "method"), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["aclRolesForm"]) ? $context["aclRolesForm"] : $this->getContext($context, "aclRolesForm")), 'enctype');
        echo "
              method=\"POST\"
                ";
        // line 26
        if ( !$this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "html5_validate"), "method")) {
            echo "novalidate=\"novalidate\"";
        }
        // line 27
        echo "                >
            ";
        // line 28
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["aclRolesForm"]) ? $context["aclRolesForm"] : $this->getContext($context, "aclRolesForm")), "vars", array()), "errors", array())) > 0)) {
            // line 29
            echo "                <div class=\"sonata-ba-form-error\">
                    ";
            // line 30
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["aclRolesForm"]) ? $context["aclRolesForm"] : $this->getContext($context, "aclRolesForm")), 'errors');
            echo "
                </div>
            ";
        }
        // line 33
        echo "
            <table class=\"table\">
                <thead>
                <tr>
                    <th>";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("td_role", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                    ";
        // line 38
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")));
        foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
            // line 39
            echo "                        <th>";
            echo twig_escape_filter($this->env, $context["permission"], "html", null, true);
            echo "</th>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                </tr>
                </thead>
                <tbody>
                ";
        // line 44
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["roles"]) ? $context["roles"] : $this->getContext($context, "roles")));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 45
            echo "                    <tr>
                        <td>";
            // line 46
            echo twig_escape_filter($this->env, $context["role"], "html", null, true);
            echo "</td>
                        ";
            // line 47
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")));
            foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                // line 48
                echo "                            <td>";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["aclRolesForm"]) ? $context["aclRolesForm"] : $this->getContext($context, "aclRolesForm")), (($context["role"] . "_") . $context["permission"]), array(), "array"), 'widget');
                echo "</td>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                </tbody>
            </table>

            ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["aclRolesForm"]) ? $context["aclRolesForm"] : $this->getContext($context, "aclRolesForm")), 'rest');
        echo "

            ";
        // line 57
        $this->displayBlock('formactions_acl_roles', $context, $blocks);
        // line 62
        echo "        </form>
    ";
    }

    // line 57
    public function block_formactions_acl_roles($context, array $blocks = array())
    {
        // line 58
        echo "                <div class=\"well well-small form-actions\">
                    <input class=\"btn btn-primary\" type=\"submit\" name=\"btn_create_and_edit\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_update_acl", array(), "SonataAdminBundle"), "html", null, true);
        echo "\">
                </div>
            ";
    }

    // line 64
    public function block_form_acl_users($context, array $blocks = array())
    {
        // line 65
        echo "        <form class=\"form-horizontal\"
                  action=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "acl", 1 => array("id" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "uniqid" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "subclass" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "subclass"), "method"))), "method"), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["aclUsersForm"]) ? $context["aclUsersForm"] : $this->getContext($context, "aclUsersForm")), 'enctype');
        echo "
                  method=\"POST\"
                  ";
        // line 68
        if ( !$this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "html5_validate"), "method")) {
            echo "novalidate=\"novalidate\"";
        }
        // line 69
        echo "                  >
            ";
        // line 70
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["aclUsersForm"]) ? $context["aclUsersForm"] : $this->getContext($context, "aclUsersForm")), "vars", array()), "errors", array())) > 0)) {
            // line 71
            echo "                <div class=\"sonata-ba-form-error\">
                    ";
            // line 72
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["aclUsersForm"]) ? $context["aclUsersForm"] : $this->getContext($context, "aclUsersForm")), 'errors');
            echo "
                </div>
            ";
        }
        // line 75
        echo "
            <table class=\"table\">
                <thead>
                    <tr>
                        <th>";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("td_username", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                        ";
        // line 80
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")));
        foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
            // line 81
            echo "                            <th>";
            echo twig_escape_filter($this->env, $context["permission"], "html", null, true);
            echo "</th>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                    </tr>
                </thead>
                <tbody>
                ";
        // line 86
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 87
            echo "                    <tr>
                        <td>";
            // line 88
            echo twig_escape_filter($this->env, $context["user"], "html", null, true);
            echo "</td>
                        ";
            // line 89
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")));
            foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                // line 90
                echo "                            <td>";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["aclUsersForm"]) ? $context["aclUsersForm"] : $this->getContext($context, "aclUsersForm")), (($this->getAttribute($context["user"], "username", array()) . "_") . $context["permission"]), array(), "array"), 'widget');
                echo "</td>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "                </tbody>
            </table>

            ";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["aclUsersForm"]) ? $context["aclUsersForm"] : $this->getContext($context, "aclUsersForm")), 'rest');
        echo "

            ";
        // line 99
        $this->displayBlock('formactions_acl_users', $context, $blocks);
        // line 104
        echo "        </form>
    ";
    }

    // line 99
    public function block_formactions_acl_users($context, array $blocks = array())
    {
        // line 100
        echo "                <div class=\"well well-small form-actions\">
                    <input class=\"btn btn-primary\" type=\"submit\" name=\"btn_create_and_edit\" value=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_update_acl", array(), "SonataAdminBundle"), "html", null, true);
        echo "\">
                </div>
            ";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  298 => 101,  295 => 100,  292 => 99,  287 => 104,  285 => 99,  280 => 97,  275 => 94,  268 => 92,  259 => 90,  255 => 89,  251 => 88,  248 => 87,  244 => 86,  239 => 83,  230 => 81,  226 => 80,  222 => 79,  216 => 75,  210 => 72,  207 => 71,  205 => 70,  202 => 69,  198 => 68,  191 => 66,  188 => 65,  185 => 64,  178 => 59,  175 => 58,  172 => 57,  167 => 62,  165 => 57,  160 => 55,  155 => 52,  148 => 50,  139 => 48,  135 => 47,  131 => 46,  128 => 45,  124 => 44,  119 => 41,  110 => 39,  106 => 38,  102 => 37,  96 => 33,  90 => 30,  87 => 29,  85 => 28,  82 => 27,  78 => 26,  71 => 24,  68 => 23,  65 => 22,  60 => 64,  57 => 22,  54 => 21,  48 => 18,  44 => 17,  40 => 16,  35 => 15,  32 => 14,  23 => 12,);
    }
}
