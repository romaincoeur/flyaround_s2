<?php

/* SonataCoreBundle:Form:datepicker.html.twig */
class __TwigTemplate_8dc8913a4bbecca94d042f28c15d1682b3b8e2fe632620918dd1ac7b469a92a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_type_date_picker_widget_html' => array($this, 'block_sonata_type_date_picker_widget_html'),
            'sonata_type_date_picker_widget' => array($this, 'block_sonata_type_date_picker_widget'),
            'sonata_type_datetime_picker_widget_html' => array($this, 'block_sonata_type_datetime_picker_widget_html'),
            'sonata_type_datetime_picker_widget' => array($this, 'block_sonata_type_datetime_picker_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        $this->displayBlock('sonata_type_date_picker_widget_html', $context, $blocks);
        // line 23
        echo "
";
        // line 24
        $this->displayBlock('sonata_type_date_picker_widget', $context, $blocks);
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('sonata_type_datetime_picker_widget_html', $context, $blocks);
        // line 53
        echo "
";
        // line 54
        $this->displayBlock('sonata_type_datetime_picker_widget', $context, $blocks);
        // line 70
        echo "
";
    }

    // line 11
    public function block_sonata_type_date_picker_widget_html($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        if ((isset($context["datepicker_use_button"]) ? $context["datepicker_use_button"] : $this->getContext($context, "datepicker_use_button"))) {
            // line 13
            echo "        <div class='input-group date' id='dp_";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "' data-date-format=\"";
            echo twig_escape_filter($this->env, (isset($context["moment_format"]) ? $context["moment_format"] : $this->getContext($context, "moment_format")), "html", null, true);
            echo "\">
    ";
        } else {
            // line 15
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-date-format" => (isset($context["moment_format"]) ? $context["moment_format"] : $this->getContext($context, "moment_format"))));
            // line 16
            echo "    ";
        }
        // line 17
        echo "    ";
        $this->displayBlock("date_widget", $context, $blocks);
        echo "
    ";
        // line 18
        if ((isset($context["datepicker_use_button"]) ? $context["datepicker_use_button"] : $this->getContext($context, "datepicker_use_button"))) {
            // line 19
            echo "            <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-calendar\"></span></span>
        </div>
    ";
        }
    }

    // line 24
    public function block_sonata_type_date_picker_widget($context, array $blocks = array())
    {
        // line 25
        echo "    ";
        ob_start();
        // line 26
        echo "        ";
        if ((isset($context["wrap_fields_with_addons"]) ? $context["wrap_fields_with_addons"] : $this->getContext($context, "wrap_fields_with_addons"))) {
            // line 27
            echo "            <div class=\"form-group\">
                ";
            // line 28
            $this->displayBlock("sonata_type_date_picker_widget_html", $context, $blocks);
            echo "
            </div>
        ";
        } else {
            // line 31
            echo "            ";
            $this->displayBlock("sonata_type_date_picker_widget_html", $context, $blocks);
            echo "
        ";
        }
        // line 33
        echo "        <script type=\"text/javascript\">
            jQuery(function (\$) {
                \$('#dp_";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "').datetimepicker(";
        echo twig_jsonencode_filter((isset($context["dp_options"]) ? $context["dp_options"] : $this->getContext($context, "dp_options")));
        echo ");
            });
        </script>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 41
    public function block_sonata_type_datetime_picker_widget_html($context, array $blocks = array())
    {
        // line 42
        echo "    ";
        if ((isset($context["datepicker_use_button"]) ? $context["datepicker_use_button"] : $this->getContext($context, "datepicker_use_button"))) {
            // line 43
            echo "        <div class='input-group date' id='dtp_";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "' data-date-format=\"";
            echo twig_escape_filter($this->env, (isset($context["moment_format"]) ? $context["moment_format"] : $this->getContext($context, "moment_format")), "html", null, true);
            echo "\">
    ";
        } else {
            // line 45
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-date-format" => (isset($context["moment_format"]) ? $context["moment_format"] : $this->getContext($context, "moment_format"))));
            // line 46
            echo "    ";
        }
        // line 47
        echo "    ";
        $this->displayBlock("datetime_widget", $context, $blocks);
        echo "
    ";
        // line 48
        if ((isset($context["datepicker_use_button"]) ? $context["datepicker_use_button"] : $this->getContext($context, "datepicker_use_button"))) {
            // line 49
            echo "          <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-calendar\"></span></span>
        </div>
    ";
        }
    }

    // line 54
    public function block_sonata_type_datetime_picker_widget($context, array $blocks = array())
    {
        // line 55
        echo "    ";
        ob_start();
        // line 56
        echo "        ";
        if ((isset($context["wrap_fields_with_addons"]) ? $context["wrap_fields_with_addons"] : $this->getContext($context, "wrap_fields_with_addons"))) {
            // line 57
            echo "            <div class=\"form-group\">
                ";
            // line 58
            $this->displayBlock("sonata_type_datetime_picker_widget_html", $context, $blocks);
            echo "
            </div>
        ";
        } else {
            // line 61
            echo "            ";
            $this->displayBlock("sonata_type_datetime_picker_widget_html", $context, $blocks);
            echo "
        ";
        }
        // line 63
        echo "        <script type=\"text/javascript\">
            jQuery(function (\$) {
                \$('#dtp_";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "').datetimepicker(";
        echo twig_jsonencode_filter((isset($context["dp_options"]) ? $context["dp_options"] : $this->getContext($context, "dp_options")));
        echo ");
            });
        </script>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SonataCoreBundle:Form:datepicker.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  180 => 65,  176 => 63,  170 => 61,  164 => 58,  161 => 57,  158 => 56,  155 => 55,  152 => 54,  145 => 49,  143 => 48,  138 => 47,  135 => 46,  132 => 45,  124 => 43,  121 => 42,  118 => 41,  107 => 35,  103 => 33,  97 => 31,  91 => 28,  88 => 27,  85 => 26,  82 => 25,  79 => 24,  72 => 19,  70 => 18,  65 => 17,  62 => 16,  59 => 15,  51 => 13,  48 => 12,  45 => 11,  40 => 70,  38 => 54,  35 => 53,  33 => 41,  30 => 40,  28 => 24,  25 => 23,  23 => 11,);
    }
}
