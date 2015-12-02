<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_d150da7ee7b8181248176a4d9207d2d5ce412ee562da8bb621af3430876e855c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
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
        $__internal_bc5765aace91610351e83beab5dfbace44b769464d5d7649ab6b783028bc7905 = $this->env->getExtension("native_profiler");
        $__internal_bc5765aace91610351e83beab5dfbace44b769464d5d7649ab6b783028bc7905->enter($__internal_bc5765aace91610351e83beab5dfbace44b769464d5d7649ab6b783028bc7905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

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
        
        $__internal_bc5765aace91610351e83beab5dfbace44b769464d5d7649ab6b783028bc7905->leave($__internal_bc5765aace91610351e83beab5dfbace44b769464d5d7649ab6b783028bc7905_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_6b068e659586f5530adb96ff7dfaf5e149117dabaa9d0cdcd2ebceaaf937ea4c = $this->env->getExtension("native_profiler");
        $__internal_6b068e659586f5530adb96ff7dfaf5e149117dabaa9d0cdcd2ebceaaf937ea4c->enter($__internal_6b068e659586f5530adb96ff7dfaf5e149117dabaa9d0cdcd2ebceaaf937ea4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_6b068e659586f5530adb96ff7dfaf5e149117dabaa9d0cdcd2ebceaaf937ea4c->leave($__internal_6b068e659586f5530adb96ff7dfaf5e149117dabaa9d0cdcd2ebceaaf937ea4c_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_666bc95c9fed0b8af4962cbc042704ef6d2ebd5b3085fa7f94e1f84b6e87cb4b = $this->env->getExtension("native_profiler");
        $__internal_666bc95c9fed0b8af4962cbc042704ef6d2ebd5b3085fa7f94e1f84b6e87cb4b->enter($__internal_666bc95c9fed0b8af4962cbc042704ef6d2ebd5b3085fa7f94e1f84b6e87cb4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_666bc95c9fed0b8af4962cbc042704ef6d2ebd5b3085fa7f94e1f84b6e87cb4b->leave($__internal_666bc95c9fed0b8af4962cbc042704ef6d2ebd5b3085fa7f94e1f84b6e87cb4b_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_8572d1a9d135e38580b467618c1d2a726a9f61e27f92596ce306ac39e9ab8a6a = $this->env->getExtension("native_profiler");
        $__internal_8572d1a9d135e38580b467618c1d2a726a9f61e27f92596ce306ac39e9ab8a6a->enter($__internal_8572d1a9d135e38580b467618c1d2a726a9f61e27f92596ce306ac39e9ab8a6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-2";
        
        $__internal_8572d1a9d135e38580b467618c1d2a726a9f61e27f92596ce306ac39e9ab8a6a->leave($__internal_8572d1a9d135e38580b467618c1d2a726a9f61e27f92596ce306ac39e9ab8a6a_prof);

    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_cd4e2f0dc93e69aab1bcf8adf8f7ae637afda340c78b2a6665f3d956e30558de = $this->env->getExtension("native_profiler");
        $__internal_cd4e2f0dc93e69aab1bcf8adf8f7ae637afda340c78b2a6665f3d956e30558de->enter($__internal_cd4e2f0dc93e69aab1bcf8adf8f7ae637afda340c78b2a6665f3d956e30558de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_cd4e2f0dc93e69aab1bcf8adf8f7ae637afda340c78b2a6665f3d956e30558de->leave($__internal_cd4e2f0dc93e69aab1bcf8adf8f7ae637afda340c78b2a6665f3d956e30558de_prof);

    }

    // line 37
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_8f3bc16e012241e4c1ff62ae9abf953e5b103a8d91e2684aa049bf6cee8f12f1 = $this->env->getExtension("native_profiler");
        $__internal_8f3bc16e012241e4c1ff62ae9abf953e5b103a8d91e2684aa049bf6cee8f12f1->enter($__internal_8f3bc16e012241e4c1ff62ae9abf953e5b103a8d91e2684aa049bf6cee8f12f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 38
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_8f3bc16e012241e4c1ff62ae9abf953e5b103a8d91e2684aa049bf6cee8f12f1->leave($__internal_8f3bc16e012241e4c1ff62ae9abf953e5b103a8d91e2684aa049bf6cee8f12f1_prof);

    }

    // line 41
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_ae2ed14f225c4b8da0b6ceb8dc0c9b6da9597f4a707870b8ccdef60321402313 = $this->env->getExtension("native_profiler");
        $__internal_ae2ed14f225c4b8da0b6ceb8dc0c9b6da9597f4a707870b8ccdef60321402313->enter($__internal_ae2ed14f225c4b8da0b6ceb8dc0c9b6da9597f4a707870b8ccdef60321402313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 42
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_ae2ed14f225c4b8da0b6ceb8dc0c9b6da9597f4a707870b8ccdef60321402313->leave($__internal_ae2ed14f225c4b8da0b6ceb8dc0c9b6da9597f4a707870b8ccdef60321402313_prof);

    }

    // line 45
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_86409a388c5db12b67392ee28393aa221249dda5c4e44e3ebc65bb1de96c2cac = $this->env->getExtension("native_profiler");
        $__internal_86409a388c5db12b67392ee28393aa221249dda5c4e44e3ebc65bb1de96c2cac->enter($__internal_86409a388c5db12b67392ee28393aa221249dda5c4e44e3ebc65bb1de96c2cac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

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
        
        $__internal_86409a388c5db12b67392ee28393aa221249dda5c4e44e3ebc65bb1de96c2cac->leave($__internal_86409a388c5db12b67392ee28393aa221249dda5c4e44e3ebc65bb1de96c2cac_prof);

    }

    // line 57
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_42bc1ad486eadd8d7dd5ca409f487e90a9f934243c784400eea412dcbfa6ec4d = $this->env->getExtension("native_profiler");
        $__internal_42bc1ad486eadd8d7dd5ca409f487e90a9f934243c784400eea412dcbfa6ec4d->enter($__internal_42bc1ad486eadd8d7dd5ca409f487e90a9f934243c784400eea412dcbfa6ec4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_42bc1ad486eadd8d7dd5ca409f487e90a9f934243c784400eea412dcbfa6ec4d->leave($__internal_42bc1ad486eadd8d7dd5ca409f487e90a9f934243c784400eea412dcbfa6ec4d_prof);

    }

    // line 68
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_a2311d785c573f59d6e992d802399d4b6d0143b81fe79ce464c72a04cbd5d7dc = $this->env->getExtension("native_profiler");
        $__internal_a2311d785c573f59d6e992d802399d4b6d0143b81fe79ce464c72a04cbd5d7dc->enter($__internal_a2311d785c573f59d6e992d802399d4b6d0143b81fe79ce464c72a04cbd5d7dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 69
        echo "col-sm-10";
        
        $__internal_a2311d785c573f59d6e992d802399d4b6d0143b81fe79ce464c72a04cbd5d7dc->leave($__internal_a2311d785c573f59d6e992d802399d4b6d0143b81fe79ce464c72a04cbd5d7dc_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
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
