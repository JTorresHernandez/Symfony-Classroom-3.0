<?php

/* :form-templates:bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_38c508006f7c08230441a3647dfd13a5a9408325948caa9394dcfad0eae15f9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", ":form-templates:bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'checkbox_radio_row' => array($this, 'block_checkbox_radio_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_72e77ccbf53944e5dcefe4c5feb0c390e2ddd3f8d300da44db878d9963461fb1 = $this->env->getExtension("native_profiler");
        $__internal_72e77ccbf53944e5dcefe4c5feb0c390e2ddd3f8d300da44db878d9963461fb1->enter($__internal_72e77ccbf53944e5dcefe4c5feb0c390e2ddd3f8d300da44db878d9963461fb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":form-templates:bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 24
        echo "
";
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('form_row', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('radio_row', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('checkbox_radio_row', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('submit_row', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('form_group_class', $context, $blocks);
        
        $__internal_72e77ccbf53944e5dcefe4c5feb0c390e2ddd3f8d300da44db878d9963461fb1->leave($__internal_72e77ccbf53944e5dcefe4c5feb0c390e2ddd3f8d300da44db878d9963461fb1_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_24674368f829685866d76808dfcf8042e57ff6b869d3ef9c41756cdc1f5aa9a7 = $this->env->getExtension("native_profiler");
        $__internal_24674368f829685866d76808dfcf8042e57ff6b869d3ef9c41756cdc1f5aa9a7->enter($__internal_24674368f829685866d76808dfcf8042e57ff6b869d3ef9c41756cdc1f5aa9a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_24674368f829685866d76808dfcf8042e57ff6b869d3ef9c41756cdc1f5aa9a7->leave($__internal_24674368f829685866d76808dfcf8042e57ff6b869d3ef9c41756cdc1f5aa9a7_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_f8ff648029306b858eec7e9b6348ae472d94aa3ffed5b9259e549b8945cbe6db = $this->env->getExtension("native_profiler");
        $__internal_f8ff648029306b858eec7e9b6348ae472d94aa3ffed5b9259e549b8945cbe6db->enter($__internal_f8ff648029306b858eec7e9b6348ae472d94aa3ffed5b9259e549b8945cbe6db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        ob_start();
        // line 12
        echo "    ";
        if (((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 13
            echo "        <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>
    ";
        } else {
            // line 15
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") . $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 16
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_f8ff648029306b858eec7e9b6348ae472d94aa3ffed5b9259e549b8945cbe6db->leave($__internal_f8ff648029306b858eec7e9b6348ae472d94aa3ffed5b9259e549b8945cbe6db_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_5d4822ed006493d35039b473bd0afe673c6bc81a5f4f01c4078d605e43455bee = $this->env->getExtension("native_profiler");
        $__internal_5d4822ed006493d35039b473bd0afe673c6bc81a5f4f01c4078d605e43455bee->enter($__internal_5d4822ed006493d35039b473bd0afe673c6bc81a5f4f01c4078d605e43455bee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-2";
        
        $__internal_5d4822ed006493d35039b473bd0afe673c6bc81a5f4f01c4078d605e43455bee->leave($__internal_5d4822ed006493d35039b473bd0afe673c6bc81a5f4f01c4078d605e43455bee_prof);

    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_bc76951fff18b49eb52aabc5d10eaa24f13c090a26b32ba1bf47c299d2bc7069 = $this->env->getExtension("native_profiler");
        $__internal_bc76951fff18b49eb52aabc5d10eaa24f13c090a26b32ba1bf47c299d2bc7069->enter($__internal_bc76951fff18b49eb52aabc5d10eaa24f13c090a26b32ba1bf47c299d2bc7069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 28
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : $this->getContext($context, "force_error")), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 30
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 33
        echo "</div>
";
        // line 34
        echo "</div>";
        
        $__internal_bc76951fff18b49eb52aabc5d10eaa24f13c090a26b32ba1bf47c299d2bc7069->leave($__internal_bc76951fff18b49eb52aabc5d10eaa24f13c090a26b32ba1bf47c299d2bc7069_prof);

    }

    // line 37
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_327a2564f723a289808c8b3ac5432a27a5d10a1ea1ef48200e9b8fb8c15d99aa = $this->env->getExtension("native_profiler");
        $__internal_327a2564f723a289808c8b3ac5432a27a5d10a1ea1ef48200e9b8fb8c15d99aa->enter($__internal_327a2564f723a289808c8b3ac5432a27a5d10a1ea1ef48200e9b8fb8c15d99aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 38
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_327a2564f723a289808c8b3ac5432a27a5d10a1ea1ef48200e9b8fb8c15d99aa->leave($__internal_327a2564f723a289808c8b3ac5432a27a5d10a1ea1ef48200e9b8fb8c15d99aa_prof);

    }

    // line 41
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_ec31258b74fb63ebff640cc91a50c292978d7d24ba8c9944027dbf33910a2e19 = $this->env->getExtension("native_profiler");
        $__internal_ec31258b74fb63ebff640cc91a50c292978d7d24ba8c9944027dbf33910a2e19->enter($__internal_ec31258b74fb63ebff640cc91a50c292978d7d24ba8c9944027dbf33910a2e19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 42
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_ec31258b74fb63ebff640cc91a50c292978d7d24ba8c9944027dbf33910a2e19->leave($__internal_ec31258b74fb63ebff640cc91a50c292978d7d24ba8c9944027dbf33910a2e19_prof);

    }

    // line 45
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_143b58176a44c126985f94347ef99286b940a457ec67c743d2f6445e57fc283b = $this->env->getExtension("native_profiler");
        $__internal_143b58176a44c126985f94347ef99286b940a457ec67c743d2f6445e57fc283b->enter($__internal_143b58176a44c126985f94347ef99286b940a457ec67c743d2f6445e57fc283b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        // line 46
        ob_start();
        // line 47
        echo "    <div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">
        <div class=\"";
        // line 48
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 49
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_143b58176a44c126985f94347ef99286b940a457ec67c743d2f6445e57fc283b->leave($__internal_143b58176a44c126985f94347ef99286b940a457ec67c743d2f6445e57fc283b_prof);

    }

    // line 57
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_04314a52de57cf58b936316789626d43e23f60d0cb556fbfb22e4f63dc6485fb = $this->env->getExtension("native_profiler");
        $__internal_04314a52de57cf58b936316789626d43e23f60d0cb556fbfb22e4f63dc6485fb->enter($__internal_04314a52de57cf58b936316789626d43e23f60d0cb556fbfb22e4f63dc6485fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 58
        ob_start();
        // line 59
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 60
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 61
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_04314a52de57cf58b936316789626d43e23f60d0cb556fbfb22e4f63dc6485fb->leave($__internal_04314a52de57cf58b936316789626d43e23f60d0cb556fbfb22e4f63dc6485fb_prof);

    }

    // line 68
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_75e46d7f5315a39eda755fd240494d7610c0f68cc5cfd7a40cb91b601d21dd86 = $this->env->getExtension("native_profiler");
        $__internal_75e46d7f5315a39eda755fd240494d7610c0f68cc5cfd7a40cb91b601d21dd86->enter($__internal_75e46d7f5315a39eda755fd240494d7610c0f68cc5cfd7a40cb91b601d21dd86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 69
        echo "col-sm-10";
        
        $__internal_75e46d7f5315a39eda755fd240494d7610c0f68cc5cfd7a40cb91b601d21dd86->leave($__internal_75e46d7f5315a39eda755fd240494d7610c0f68cc5cfd7a40cb91b601d21dd86_prof);

    }

    public function getTemplateName()
    {
        return ":form-templates:bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  290 => 69,  284 => 68,  272 => 62,  268 => 61,  264 => 60,  261 => 59,  259 => 58,  253 => 57,  241 => 51,  237 => 50,  233 => 49,  229 => 48,  222 => 47,  220 => 46,  214 => 45,  207 => 42,  201 => 41,  194 => 38,  188 => 37,  181 => 34,  178 => 33,  176 => 32,  174 => 31,  170 => 30,  168 => 29,  162 => 28,  156 => 27,  149 => 22,  143 => 21,  134 => 16,  131 => 15,  125 => 13,  122 => 12,  120 => 11,  114 => 10,  107 => 5,  105 => 4,  99 => 3,  92 => 68,  89 => 67,  87 => 57,  84 => 56,  82 => 45,  79 => 44,  77 => 41,  74 => 40,  72 => 37,  69 => 36,  67 => 27,  64 => 26,  61 => 24,  59 => 21,  56 => 20,  54 => 10,  51 => 9,  48 => 7,  46 => 3,  43 => 2,  14 => 1,);
    }
}
/* {% use "bootstrap_3_layout.html.twig" %}*/
/* */
/* {% block form_start -%}*/
/*     {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}*/
/*     {{- parent() -}}*/
/* {%- endblock form_start %}*/
/* */
/* {# Labels #}*/
/* */
/* {% block form_label -%}*/
/* {% spaceless %}*/
/*     {% if label is same as(false) %}*/
/*         <div class="{{ block('form_label_class') }}"></div>*/
/*     {% else %}*/
/*         {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) %}*/
/*         {{- parent() -}}*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {%- endblock form_label %}*/
/* */
/* {% block form_label_class -%}*/
/* col-sm-2*/
/* {%- endblock form_label_class %}*/
/* */
/* {# Rows #}*/
/* */
/* {% block form_row -%}*/
/*     <div class="form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}">*/
/*         {{- form_label(form) -}}*/
/*         <div class="{{ block('form_group_class') }}">*/
/*             {{- form_widget(form) -}}*/
/*             {{- form_errors(form) -}}*/
/*         </div>*/
/* {##}</div>*/
/* {%- endblock form_row %}*/
/* */
/* {% block checkbox_row -%}*/
/*     {{- block('checkbox_radio_row') -}}*/
/* {%- endblock checkbox_row %}*/
/* */
/* {% block radio_row -%}*/
/*     {{- block('checkbox_radio_row') -}}*/
/* {%- endblock radio_row %}*/
/* */
/* {% block checkbox_radio_row -%}*/
/* {% spaceless %}*/
/*     <div class="form-group{% if not valid %} has-error{% endif %}">*/
/*         <div class="{{ block('form_label_class') }}"></div>*/
/*         <div class="{{ block('form_group_class') }}">*/
/*             {{ form_widget(form) }}*/
/*             {{ form_errors(form) }}*/
/*         </div>*/
/*     </div>*/
/* {% endspaceless %}*/
/* {%- endblock checkbox_radio_row %}*/
/* */
/* {% block submit_row -%}*/
/* {% spaceless %}*/
/*     <div class="form-group">*/
/*         <div class="{{ block('form_label_class') }}"></div>*/
/*         <div class="{{ block('form_group_class') }}">*/
/*             {{ form_widget(form) }}*/
/*         </div>*/
/*     </div>*/
/* {% endspaceless %}*/
/* {% endblock submit_row %}*/
/* */
/* {% block form_group_class -%}*/
/* col-sm-10*/
/* {%- endblock form_group_class %}*/
/* */
