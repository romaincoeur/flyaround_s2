<?php

/* SonataAdminBundle:CRUD:base_list.html.twig */
class __TwigTemplate_a60f25556e8de48913af46deb158d9b10dd7e32e5231dca864b481a541e39fd3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'list_table' => array($this, 'block_list_table'),
            'list_header' => array($this, 'block_list_header'),
            'table_header' => array($this, 'block_table_header'),
            'table_body' => array($this, 'block_table_body'),
            'table_footer' => array($this, 'block_table_footer'),
            'batch' => array($this, 'block_batch'),
            'batch_javascript' => array($this, 'block_batch_javascript'),
            'batch_actions' => array($this, 'block_batch_actions'),
            'pager_results' => array($this, 'block_pager_results'),
            'pager_links' => array($this, 'block_pager_links'),
            'list_footer' => array($this, 'block_list_footer'),
            'list_filters_actions' => array($this, 'block_list_filters_actions'),
            'list_filters' => array($this, 'block_list_filters'),
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
        ob_start();
        // line 16
        echo "    ";
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "create"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "CREATE"), "method"))) {
            // line 17
            echo "        <li>";
            $this->env->loadTemplate("SonataAdminBundle:Core:create_button.html.twig")->display($context);
            echo "</li>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 22
    public function block_tab_menu($context, array $blocks = array())
    {
        echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
    }

    // line 24
    public function block_list_table($context, array $blocks = array())
    {
        // line 25
        echo "    <div class=\"col-xs-12 col-md-12\">
        <div class=\"box box-primary\">
            <div class=\"box-body table-responsive no-padding\">
                ";
        // line 28
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.list.table.top", array("admin" => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")))));
        echo "

                ";
        // line 30
        $this->displayBlock('list_header', $context, $blocks);
        // line 31
        echo "
                ";
        // line 32
        $context["batchactions"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "batchactions", array());
        // line 33
        echo "                ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "results", array())) > 0)) {
            // line 34
            echo "                    ";
            if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "batch"), "method")) {
                // line 35
                echo "                    <form action=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "batch", 1 => array("filter" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "filterParameters", array()))), "method"), "html", null, true);
                echo "\" method=\"POST\" >
                        <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"";
                // line 36
                echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
                echo "\">
                    ";
            }
            // line 38
            echo "                        <table class=\"table table-bordered table-striped sonata-ba-list\">
                            ";
            // line 39
            $this->displayBlock('table_header', $context, $blocks);
            // line 75
            echo "
                            ";
            // line 76
            $this->displayBlock('table_body', $context, $blocks);
            // line 81
            echo "
                            ";
            // line 82
            $this->displayBlock('table_footer', $context, $blocks);
            // line 172
            echo "                        </table>
                    ";
            // line 173
            if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "batch"), "method")) {
                // line 174
                echo "                    </form>
                    ";
            }
            // line 176
            echo "                ";
        } else {
            // line 177
            echo "                    <div class=\"callout callout-info\">
                        ";
            // line 178
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_result", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                    </div>
                ";
        }
        // line 181
        echo "
                ";
        // line 182
        $this->displayBlock('list_footer', $context, $blocks);
        // line 183
        echo "
                ";
        // line 184
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.list.table.bottom", array("admin" => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")))));
        echo "
            </div>
        </div>
    </div>
";
    }

    // line 30
    public function block_list_header($context, array $blocks = array())
    {
    }

    // line 39
    public function block_table_header($context, array $blocks = array())
    {
        // line 40
        echo "                                <thead>
                                    <tr class=\"sonata-ba-list-field-header\">
                                        ";
        // line 42
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "elements", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
            // line 43
            echo "                                            ";
            if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "batch"), "method") && ($this->getAttribute($context["field_description"], "getOption", array(0 => "code"), "method") == "_batch")) && (twig_length_filter($this->env, (isset($context["batchactions"]) ? $context["batchactions"] : $this->getContext($context, "batchactions"))) > 0))) {
                // line 44
                echo "                                                <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-batch\">
                                                  <input type=\"checkbox\" id=\"list_batch_checkbox\">
                                                </th>
                                            ";
            } elseif (($this->getAttribute(            // line 47
$context["field_description"], "getOption", array(0 => "code"), "method") == "_select")) {
                // line 48
                echo "                                                <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-select\"></th>
                                            ";
            } elseif ((($this->getAttribute(            // line 49
$context["field_description"], "name", array()) == "_action") && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array()))) {
                // line 50
                echo "                                                ";
                // line 51
                echo "                                            ";
            } elseif ((($this->getAttribute($context["field_description"], "getOption", array(0 => "ajax_hidden"), "method") == true) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array()))) {
                // line 52
                echo "                                                ";
                // line 53
                echo "                                            ";
            } else {
                // line 54
                echo "                                                ";
                $context["sortable"] = false;
                // line 55
                echo "                                                ";
                if (($this->getAttribute($this->getAttribute($context["field_description"], "options", array(), "any", false, true), "sortable", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["field_description"], "options", array()), "sortable", array()))) {
                    // line 56
                    echo "                                                    ";
                    $context["sortable"] = true;
                    // line 57
                    echo "                                                    ";
                    $context["sort_parameters"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "modelmanager", array()), "sortparameters", array(0 => $context["field_description"], 1 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array())), "method");
                    // line 58
                    echo "                                                    ";
                    $context["current"] = (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "values", array()), "_sort_by", array()) == $context["field_description"]) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "values", array()), "_sort_by", array()), "fieldName", array()) == $this->getAttribute($this->getAttribute((isset($context["sort_parameters"]) ? $context["sort_parameters"] : $this->getContext($context, "sort_parameters")), "filter", array()), "_sort_by", array())));
                    // line 59
                    echo "                                                    ";
                    $context["sort_active_class"] = (((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current"))) ? ("sonata-ba-list-field-order-active") : (""));
                    // line 60
                    echo "                                                    ";
                    $context["sort_by"] = (((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current"))) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "values", array()), "_sort_order", array())) : ($this->getAttribute($this->getAttribute($context["field_description"], "options", array()), "_sort_order", array())));
                    // line 61
                    echo "                                                ";
                }
                // line 62
                echo "
                                                ";
                // line 63
                ob_start();
                // line 64
                echo "                                                    <th class=\"sonata-ba-list-field-header-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["field_description"], "type", array()), "html", null, true);
                echo " ";
                if ((isset($context["sortable"]) ? $context["sortable"] : $this->getContext($context, "sortable"))) {
                    echo " sonata-ba-list-field-header-order-";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["sort_by"]) ? $context["sort_by"] : $this->getContext($context, "sort_by"))), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["sort_active_class"]) ? $context["sort_active_class"] : $this->getContext($context, "sort_active_class")), "html", null, true);
                }
                echo "\">
                                                        ";
                // line 65
                if ((isset($context["sortable"]) ? $context["sortable"] : $this->getContext($context, "sortable"))) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => (isset($context["sort_parameters"]) ? $context["sort_parameters"] : $this->getContext($context, "sort_parameters"))), "method"), "html", null, true);
                    echo "\">";
                }
                // line 66
                echo "                                                        ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute($context["field_description"], "label", array()), 1 => array(), 2 => $this->getAttribute($context["field_description"], "translationDomain", array())), "method"), "html", null, true);
                echo "
                                                        ";
                // line 67
                if ((isset($context["sortable"]) ? $context["sortable"] : $this->getContext($context, "sortable"))) {
                    echo "</a>";
                }
                // line 68
                echo "                                                    </th>
                                                ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 70
                echo "                                            ";
            }
            // line 71
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "                                    </tr>
                                </thead>
                            ";
    }

    // line 76
    public function block_table_body($context, array $blocks = array())
    {
        // line 77
        echo "                                <tbody>
                                    ";
        // line 78
        $this->env->resolveTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => ("outer_list_rows_" . $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getListMode", array(), "method"))), "method"))->display($context);
        // line 79
        echo "                                </tbody>
                            ";
    }

    // line 82
    public function block_table_footer($context, array $blocks = array())
    {
        // line 83
        echo "                                <tfoot>
                                    <tr>
                                        <th colspan=\"";
        // line 85
        echo twig_escape_filter($this->env, (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "elements", array())) - (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array())) ? (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "has", array(0 => "_action"), "method") + $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "has", array(0 => "batch"), "method"))) : (0))), "html", null, true);
        echo "\">
                                            <div class=\"form-inline\">
                                                ";
        // line 87
        if ( !$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array())) {
            // line 88
            echo "                                                    ";
            if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "batch"), "method") && (twig_length_filter($this->env, (isset($context["batchactions"]) ? $context["batchactions"] : $this->getContext($context, "batchactions"))) > 0))) {
                // line 89
                echo "                                                        ";
                $this->displayBlock('batch', $context, $blocks);
                // line 130
                echo "                                                    ";
            }
            // line 131
            echo "
                                                    <div class=\"pull-right\">
                                                        ";
            // line 133
            if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "export"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "EXPORT"), "method")) && twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getExportFormats", array(), "method")))) {
                // line 134
                echo "                                                            <div class=\"btn-group\">
                                                                <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                                                                    <i class=\"glyphicon glyphicon-export\"></i>
                                                                    ";
                // line 137
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label_export_download", array(), "SonataAdminBundle"), "html", null, true);
                echo "
                                                                    <span class=\"caret\"></span>
                                                                </button>
                                                                <ul class=\"dropdown-menu\">
                                                                    ";
                // line 141
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getExportFormats", array(), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["format"]) {
                    // line 142
                    echo "                                                                        <li>
                                                                            <a href=\"";
                    // line 143
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "export", 1 => ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "modelmanager", array()), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), 1 => 0), "method") + array("format" => $context["format"]))), "method"), "html", null, true);
                    echo "\">
                                                                                <i class=\"glyphicon glyphicon-download\"></i>
                                                                                ";
                    // line 145
                    echo twig_escape_filter($this->env, twig_upper_filter($this->env, $context["format"]), "html", null, true);
                    echo "
                                                                            </a>
                                                                        <li>
                                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['format'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 149
                echo "                                                                </ul>
                                                            </div>

                                                            &nbsp;-&nbsp;
                                                        ";
            }
            // line 154
            echo "
                                                        ";
            // line 155
            $this->displayBlock('pager_results', $context, $blocks);
            // line 158
            echo "                                                    </div>
                                                ";
        }
        // line 160
        echo "                                            </div>
                                        </th>
                                    </tr>

                                    ";
        // line 164
        $this->displayBlock('pager_links', $context, $blocks);
        // line 169
        echo "
                                </tfoot>
                            ";
    }

    // line 89
    public function block_batch($context, array $blocks = array())
    {
        // line 90
        echo "                                                            <script>
                                                                ";
        // line 91
        $this->displayBlock('batch_javascript', $context, $blocks);
        // line 112
        echo "                                                            </script>

                                                            ";
        // line 114
        $this->displayBlock('batch_actions', $context, $blocks);
        // line 127
        echo "
                                                            <input type=\"submit\" class=\"btn btn-small btn-primary\" value=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_batch", array(), "SonataAdminBundle"), "html", null, true);
        echo "\">
                                                        ";
    }

    // line 91
    public function block_batch_javascript($context, array $blocks = array())
    {
        // line 92
        echo "                                                                    jQuery(document).ready(function (\$) {
                                                                        \$('#list_batch_checkbox').on('ifChanged', function () {
                                                                            \$(this)
                                                                                .closest('table')
                                                                                .find('td.sonata-ba-list-field-batch input[type=\"checkbox\"], div.sonata-ba-list-field-batch input[type=\"checkbox\"]')
                                                                                .iCheck(\$(this).is(':checked') ? 'check' : 'uncheck')
                                                                            ;
                                                                        });

                                                                        \$('td.sonata-ba-list-field-batch input[type=\"checkbox\"], div.sonata-ba-list-field-batch input[type=\"checkbox\"]')
                                                                            .on('ifChanged', function () {
                                                                                \$(this)
                                                                                    .closest('tr, div.sonata-ba-list-field-batch')
                                                                                    .toggleClass('sonata-ba-list-row-selected', \$(this).is(':checked'))
                                                                                ;
                                                                            })
                                                                            .trigger('ifChanged')
                                                                        ;
                                                                    });
                                                                ";
    }

    // line 114
    public function block_batch_actions($context, array $blocks = array())
    {
        // line 115
        echo "                                                                <label class=\"checkbox\" for=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
        echo "_all_elements\">
                                                                    <input type=\"checkbox\" name=\"all_elements\" id=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
        echo "_all_elements\">
                                                                    ";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("all_elements", array(), "SonataAdminBundle"), "html", null, true);
        echo "
                                                                     (";
        // line 118
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array()), "html", null, true);
        echo ")
                                                                </label>

                                                                <select name=\"action\" style=\"width: auto; height: auto\" class=\"form-control\">
                                                                    ";
        // line 122
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["batchactions"]) ? $context["batchactions"] : $this->getContext($context, "batchactions")));
        foreach ($context['_seq'] as $context["action"] => $context["options"]) {
            // line 123
            echo "                                                                        <option value=\"";
            echo twig_escape_filter($this->env, $context["action"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["options"], "label", array()), "html", null, true);
            echo "</option>
                                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['action'], $context['options'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "                                                                </select>
                                                            ";
    }

    // line 155
    public function block_pager_results($context, array $blocks = array())
    {
        // line 156
        echo "                                                            ";
        $this->env->resolveTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "pager_results"), "method"))->display($context);
        // line 157
        echo "                                                        ";
    }

    // line 164
    public function block_pager_links($context, array $blocks = array())
    {
        // line 165
        echo "                                        ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "haveToPaginate", array(), "method")) {
            // line 166
            echo "                                            ";
            $this->env->resolveTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "pager_links"), "method"))->display($context);
            // line 167
            echo "                                        ";
        }
        // line 168
        echo "                                    ";
    }

    // line 182
    public function block_list_footer($context, array $blocks = array())
    {
    }

    // line 190
    public function block_list_filters_actions($context, array $blocks = array())
    {
        // line 191
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "filters", array()))) {
            // line 192
            echo "        <ul class=\"nav navbar-nav navbar-right\">

            <li class=\"dropdown sonata-actions\">
                <a href=\"#\" class=\"dropdown-toggle sonata-ba-action\" data-toggle=\"dropdown\">";
            // line 195
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_filters", array(), "SonataAdminBundle"), "html", null, true);
            echo " <b class=\"caret\"></b></a>

                <ul class=\"dropdown-menu\" role=\"menu\">
                    ";
            // line 198
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "filters", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                if ($this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array")) {
                    // line 199
                    echo "                        <li>
                            <a href=\"#\" class=\"sonata-toggle-filter sonata-ba-action\" filter-target=\"filter-";
                    // line 200
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["filter"], "name", array()), "html", null, true);
                    echo "\" filter-container=\"filter-container-";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array(), "method"), "html", null, true);
                    echo "\">
                                <i class=\"fa ";
                    // line 201
                    echo (($this->getAttribute($context["filter"], "isActive", array(), "method")) ? ("fa-check-square-o") : ("fa-square-o"));
                    echo "\"></i>";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute($context["filter"], "label", array()), 1 => array(), 2 => $this->getAttribute($context["filter"], "translationDomain", array())), "method"), "html", null, true);
                    echo "
                            </a>
                        </li>
                    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 205
            echo "                </ul>
            </li>
        </ul>
    ";
        }
    }

    // line 211
    public function block_list_filters($context, array $blocks = array())
    {
        // line 212
        echo "    ";
        if ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "filters", array())) {
            // line 213
            echo "        ";
            $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "filter"), "method")));
            // line 214
            echo "
        <div class=\"col-xs-12 col-md-12 sonata-filters-box\" style=\"display: ";
            // line 215
            echo (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "hasDisplayableFilters", array())) ? ("block") : ("none"));
            echo "\" id=\"filter-container-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array(), "method"), "html", null, true);
            echo "\">
            <div class=\"box box-primary\" >
                <div class=\"box-body\">
                    <form class=\"sonata-filter-form form-horizontal ";
            // line 218
            echo ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isChild", array()) && (1 == twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "filters", array()))))) ? ("hide") : (""));
            echo "\" action=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\" method=\"GET\" role=\"form\">
                        ";
            // line 219
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "

                        <div class=\"clearfix\">
                            <div class=\"col-md-9\">
                                <div class=\"filter_container\">
                                    ";
            // line 224
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "filters", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 225
                echo "                                        <div class=\"form-group\" id=\"filter-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["filter"], "name", array()), "html", null, true);
                echo "\" sonata-filter=\"";
                echo (($this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array")) ? ("true") : ("false"));
                echo "\" style=\"display: ";
                if (($this->getAttribute($context["filter"], "isActive", array(), "method") && $this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array"))) {
                    echo "block";
                } else {
                    echo "none";
                }
                echo "\">
                                            ";
                // line 226
                if ( !($this->getAttribute($context["filter"], "label", array()) === false)) {
                    // line 227
                    echo "                                            <label for=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), $this->getAttribute($context["filter"], "formName", array()), array(), "array"), "children", array()), "value", array(), "array"), "vars", array()), "id", array()), "html", null, true);
                    echo "\" class=\"col-sm-3 control-label\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute($context["filter"], "label", array()), 1 => array(), 2 => $this->getAttribute($context["filter"], "translationDomain", array())), "method"), "html", null, true);
                    echo "</label>
                                            ";
                }
                // line 229
                echo "                                            ";
                $context["attr"] = (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array(), "any", false, true), $this->getAttribute($context["filter"], "formName", array()), array(), "array", false, true), "children", array(), "any", false, true), "type", array(), "array", false, true), "vars", array(), "any", false, true), "attr", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array(), "any", false, true), $this->getAttribute($context["filter"], "formName", array()), array(), "array", false, true), "children", array(), "any", false, true), "type", array(), "array", false, true), "vars", array(), "any", false, true), "attr", array()), array())) : (array()));
                // line 230
                echo "                                            ";
                // line 231
                echo "
                                            <div class=\"col-sm-2\">
                                                ";
                // line 233
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), $this->getAttribute($context["filter"], "formName", array()), array(), "array"), "children", array()), "type", array(), "array"), 'widget', array("attr" => (isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr"))));
                echo "
                                            </div>

                                            <div class=\"col-sm-3\">
                                                ";
                // line 237
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), $this->getAttribute($context["filter"], "formName", array()), array(), "array"), "children", array()), "value", array(), "array"), 'widget');
                echo "
                                            </div>
                                        </div>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 241
            echo "                                </div>
                            </div>
                            <div class=\"pull-right\">
                                <input type=\"hidden\" name=\"filter[_page]\" id=\"filter__page\" value=\"1\">

                                ";
            // line 246
            $context["foo"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), "_page", array(), "array"), "setRendered", array(), "method");
            // line 247
            echo "                                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
            echo "

                                <button type=\"submit\" class=\"btn btn-primary\"><i class=\"fa fa-filter\"></i> ";
            // line 249
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_filter", array(), "SonataAdminBundle"), "html", null, true);
            echo "</button>

                                <a class=\"btn btn-default\" href=\"";
            // line 251
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => array("filters" => "reset")), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_reset_filter", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
                            </div>
                        </div>

                        ";
            // line 255
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "persistentParameters", array()));
            foreach ($context['_seq'] as $context["paramKey"] => $context["paramValue"]) {
                // line 256
                echo "                            <input type=\"hidden\" name=\"";
                echo twig_escape_filter($this->env, $context["paramKey"], "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $context["paramValue"], "html", null, true);
                echo "\">
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['paramKey'], $context['paramValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 258
            echo "                    </form>
                </div>
            </div>
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  684 => 258,  673 => 256,  669 => 255,  660 => 251,  655 => 249,  649 => 247,  647 => 246,  640 => 241,  630 => 237,  623 => 233,  619 => 231,  617 => 230,  614 => 229,  606 => 227,  604 => 226,  589 => 225,  585 => 224,  577 => 219,  571 => 218,  563 => 215,  560 => 214,  557 => 213,  554 => 212,  551 => 211,  543 => 205,  530 => 201,  522 => 200,  519 => 199,  514 => 198,  508 => 195,  503 => 192,  501 => 191,  498 => 190,  493 => 182,  489 => 168,  486 => 167,  483 => 166,  480 => 165,  477 => 164,  473 => 157,  470 => 156,  467 => 155,  462 => 125,  451 => 123,  447 => 122,  440 => 118,  436 => 117,  432 => 116,  427 => 115,  424 => 114,  401 => 92,  398 => 91,  392 => 128,  389 => 127,  387 => 114,  383 => 112,  381 => 91,  378 => 90,  375 => 89,  369 => 169,  367 => 164,  361 => 160,  357 => 158,  355 => 155,  352 => 154,  345 => 149,  335 => 145,  330 => 143,  327 => 142,  323 => 141,  316 => 137,  311 => 134,  309 => 133,  305 => 131,  302 => 130,  299 => 89,  296 => 88,  294 => 87,  289 => 85,  285 => 83,  282 => 82,  277 => 79,  275 => 78,  272 => 77,  269 => 76,  263 => 72,  257 => 71,  254 => 70,  250 => 68,  246 => 67,  241 => 66,  235 => 65,  223 => 64,  221 => 63,  218 => 62,  215 => 61,  212 => 60,  209 => 59,  206 => 58,  203 => 57,  200 => 56,  197 => 55,  194 => 54,  191 => 53,  189 => 52,  186 => 51,  184 => 50,  182 => 49,  179 => 48,  177 => 47,  172 => 44,  169 => 43,  165 => 42,  161 => 40,  158 => 39,  153 => 30,  144 => 184,  141 => 183,  139 => 182,  136 => 181,  130 => 178,  127 => 177,  124 => 176,  120 => 174,  118 => 173,  115 => 172,  113 => 82,  110 => 81,  108 => 76,  105 => 75,  103 => 39,  100 => 38,  95 => 36,  90 => 35,  87 => 34,  84 => 33,  82 => 32,  79 => 31,  77 => 30,  72 => 28,  67 => 25,  64 => 24,  58 => 22,  49 => 17,  46 => 16,  44 => 15,  41 => 14,  32 => 12,);
    }
}
