<?php

/* SonataAdminBundle:CRUD:list_outer_rows_mosaic.html.twig */
class __TwigTemplate_d1d10bdc7421e509f00e6069278f43fcacfa579e25fd9471996536dfab1bfc11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_mosaic_background' => array($this, 'block_sonata_mosaic_background'),
            'sonata_mosaic_default_view' => array($this, 'block_sonata_mosaic_default_view'),
            'sonata_mosaic_hover_view' => array($this, 'block_sonata_mosaic_hover_view'),
            'sonata_mosaic_description' => array($this, 'block_sonata_mosaic_description'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
<!--
This template can be customized to match your needs. You should only extends the template and used the differents block to customize the view:
    - sonata_mosaic_default_view
    - sonata_mosaic_hover_view
    - sonata_mosaic_description
-->

<tr>
    <td colspan=\"";
        // line 20
        echo twig_escape_filter($this->env, (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "elements", array())) - (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array())) ? (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "has", array(0 => "_action"), "method") + $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "has", array(0 => "batch"), "method"))) : (0))), "html", null, true);
        echo "\">
        <div class=\"row\">
            ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "results", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["object"]) {
            // line 23
            echo "                ";
            $context["meta"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getObjectMetadata", array(0 => $context["object"]), "method");
            // line 24
            echo "
                <div class=\"col-xs-6 col-sm-3 mosaic-box sonata-ba-list-field-batch sonata-ba-list-field\" objectId=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => $context["object"]), "method"), "html", null, true);
            echo "\">

                    <div class=\"mosaic-box-outter\">
                        <div class=\"mosaic-inner-box\">
                            ";
            // line 32
            echo "
                            <div class=\"mosaic-inner-box-default\">
                                ";
            // line 34
            $this->displayBlock('sonata_mosaic_background', $context, $blocks);
            // line 37
            echo "                                ";
            $this->displayBlock('sonata_mosaic_default_view', $context, $blocks);
            // line 40
            echo "                            </div>

                            ";
            // line 46
            echo "                            <div class=\"mosaic-inner-box-hover\">
                                ";
            // line 47
            $this->displayBlock('sonata_mosaic_hover_view', $context, $blocks);
            // line 51
            echo "                            </div>
                        </div>
                        <div class=\"mosaic-inner-text\">
                            ";
            // line 54
            if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "batch"), "method") && (twig_length_filter($this->env, (isset($context["batchactions"]) ? $context["batchactions"] : $this->getContext($context, "batchactions"))) > 0)) || (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "export"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "EXPORT"), "method")) && twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getExportFormats", array(), "method"))))) {
                // line 55
                echo "                                <input type=\"checkbox\" name=\"idx[]\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => $context["object"]), "method"), "html", null, true);
                echo "\">
                            ";
            } else {
                // line 57
                echo "                                &nbsp;
                            ";
            }
            // line 59
            echo "
                            ";
            // line 60
            $this->displayBlock('sonata_mosaic_description', $context, $blocks);
            // line 69
            echo "                        </div>
                    </div>
                </div>

                ";
            // line 73
            if ((($this->getAttribute($context["loop"], "index", array()) % 4) == 0)) {
                // line 74
                echo "                    <div class=\"clearfix hidden-xs\"></div>
                ";
            }
            // line 76
            echo "                ";
            if ((($this->getAttribute($context["loop"], "index", array()) % 2) == 0)) {
                // line 77
                echo "                    <div class=\"clearfix visible-xs\"></div>
                ";
            }
            // line 79
            echo "            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['object'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "        </div>
    </td>
</tr>
";
    }

    // line 34
    public function block_sonata_mosaic_background($context, array $blocks = array())
    {
        // line 35
        echo "                                    <img src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : $this->getContext($context, "meta")), "image", array()), "html", null, true);
        echo "\" alt=\"\" />
                                ";
    }

    // line 37
    public function block_sonata_mosaic_default_view($context, array $blocks = array())
    {
        // line 38
        echo "                                    <span class=\"mosaic-box-label label label-primary pull-right\">#";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "</span>
                                ";
    }

    // line 47
    public function block_sonata_mosaic_hover_view($context, array $blocks = array())
    {
        // line 48
        echo "                                    <span class=\"mosaic-box-label label label-primary pull-right\">#";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "</span>
                                    ";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : $this->getContext($context, "meta")), "description", array()), "html", null, true);
        echo "
                                ";
    }

    // line 60
    public function block_sonata_mosaic_description($context, array $blocks = array())
    {
        // line 61
        echo "                                ";
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "EDIT", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "edit"), "method"))) {
            // line 62
            echo "                                    <a class=\"mosaic-inner-link\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "edit", 1 => array("id" => $this->env->getExtension('sonata_core_template')->getUrlsafeIdentifier((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin"))))), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : $this->getContext($context, "meta")), "title", array()), 40), "html", null, true);
            echo "</a>
                                ";
        } elseif (($this->getAttribute(        // line 63
(isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "SHOW", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "show"), "method"))) {
            // line 64
            echo "                                    <a class=\"mosaic-inner-link\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "show", 1 => array("id" => $this->env->getExtension('sonata_core_template')->getUrlsafeIdentifier((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin"))))), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : $this->getContext($context, "meta")), "title", array()), 40), "html", null, true);
            echo "</a>
                                ";
        } else {
            // line 66
            echo "                                    ";
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : $this->getContext($context, "meta")), "title", array()), 40), "html", null, true);
            echo "
                                ";
        }
        // line 68
        echo "                            ";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_outer_rows_mosaic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 68,  206 => 66,  198 => 64,  196 => 63,  189 => 62,  186 => 61,  183 => 60,  177 => 49,  172 => 48,  169 => 47,  162 => 38,  159 => 37,  152 => 35,  149 => 34,  142 => 80,  128 => 79,  124 => 77,  121 => 76,  117 => 74,  115 => 73,  109 => 69,  107 => 60,  104 => 59,  100 => 57,  94 => 55,  92 => 54,  87 => 51,  85 => 47,  82 => 46,  78 => 40,  75 => 37,  73 => 34,  69 => 32,  62 => 25,  59 => 24,  56 => 23,  39 => 22,  34 => 20,  23 => 11,);
    }
}
