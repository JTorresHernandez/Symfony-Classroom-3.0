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
        $__internal_4dbaf0fdd778f9fe1f0a5668ec5b003631e571b9265a8d88c7c3d5a272da3d3e = $this->env->getExtension("native_profiler");
        $__internal_4dbaf0fdd778f9fe1f0a5668ec5b003631e571b9265a8d88c7c3d5a272da3d3e->enter($__internal_4dbaf0fdd778f9fe1f0a5668ec5b003631e571b9265a8d88c7c3d5a272da3d3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":form-templates:bootstrap_3_horizontal_layout.html.twig"));

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
        
        $__internal_4dbaf0fdd778f9fe1f0a5668ec5b003631e571b9265a8d88c7c3d5a272da3d3e->leave($__internal_4dbaf0fdd778f9fe1f0a5668ec5b003631e571b9265a8d88c7c3d5a272da3d3e_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_5d079ba8b4d5865bc279c7fd7a2751b2465b86c87090c522cacc4b1346720307 = $this->env->getExtension("native_profiler");
        $__internal_5d079ba8b4d5865bc279c7fd7a2751b2465b86c87090c522cacc4b1346720307->enter($__internal_5d079ba8b4d5865bc279c7fd7a2751b2465b86c87090c522cacc4b1346720307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_5d079ba8b4d5865bc279c7fd7a2751b2465b86c87090c522cacc4b1346720307->leave($__internal_5d079ba8b4d5865bc279c7fd7a2751b2465b86c87090c522cacc4b1346720307_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_13b553fab34fabaf386014e908daa76e07c18441434be1830618a56f33e56a54 = $this->env->getExtension("native_profiler");
        $__internal_13b553fab34fabaf386014e908daa76e07c18441434be1830618a56f33e56a54->enter($__internal_13b553fab34fabaf386014e908daa76e07c18441434be1830618a56f33e56a54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_13b553fab34fabaf386014e908daa76e07c18441434be1830618a56f33e56a54->leave($__internal_13b553fab34fabaf386014e908daa76e07c18441434be1830618a56f33e56a54_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_af99f58f18a1e4a25d09df4a3568246c7ae87e45344a0f42c4804e495e9f8e83 = $this->env->getExtension("native_profiler");
        $__internal_af99f58f18a1e4a25d09df4a3568246c7ae87e45344a0f42c4804e495e9f8e83->enter($__internal_af99f58f18a1e4a25d09df4a3568246c7ae87e45344a0f42c4804e495e9f8e83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-2";
        
        $__internal_af99f58f18a1e4a25d09df4a3568246c7ae87e45344a0f42c4804e495e9f8e83->leave($__internal_af99f58f18a1e4a25d09df4a3568246c7ae87e45344a0f42c4804e495e9f8e83_prof);

    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_695ef6bb9a00ff3c180547ef32b64e8558ba682c0c984f140d979ff3819a31da = $this->env->getExtension("native_profiler");
        $__internal_695ef6bb9a00ff3c180547ef32b64e8558ba682c0c984f140d979ff3819a31da->enter($__internal_695ef6bb9a00ff3c180547ef32b64e8558ba682c0c984f140d979ff3819a31da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_695ef6bb9a00ff3c180547ef32b64e8558ba682c0c984f140d979ff3819a31da->leave($__internal_695ef6bb9a00ff3c180547ef32b64e8558ba682c0c984f140d979ff3819a31da_prof);

    }

    // line 37
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_b5b665873c22c0747443e8450ca2003640bd4e04f0a0343c5d8300921af5eb10 = $this->env->getExtension("native_profiler");
        $__internal_b5b665873c22c0747443e8450ca2003640bd4e04f0a0343c5d8300921af5eb10->enter($__internal_b5b665873c22c0747443e8450ca2003640bd4e04f0a0343c5d8300921af5eb10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 38
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_b5b665873c22c0747443e8450ca2003640bd4e04f0a0343c5d8300921af5eb10->leave($__internal_b5b665873c22c0747443e8450ca2003640bd4e04f0a0343c5d8300921af5eb10_prof);

    }

    // line 41
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_ce1a2cdd13b432e2afc919e30a29d7dad28c5c2585e5e9830f58d3c8ed8e6e2f = $this->env->getExtension("native_profiler");
        $__internal_ce1a2cdd13b432e2afc919e30a29d7dad28c5c2585e5e9830f58d3c8ed8e6e2f->enter($__internal_ce1a2cdd13b432e2afc919e30a29d7dad28c5c2585e5e9830f58d3c8ed8e6e2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 42
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_ce1a2cdd13b432e2afc919e30a29d7dad28c5c2585e5e9830f58d3c8ed8e6e2f->leave($__internal_ce1a2cdd13b432e2afc919e30a29d7dad28c5c2585e5e9830f58d3c8ed8e6e2f_prof);

    }

    // line 45
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_eb53f4b852da7f0008fadaa5ab19c75a52749707a90effeac6b3d36018faa2b5 = $this->env->getExtension("native_profiler");
        $__internal_eb53f4b852da7f0008fadaa5ab19c75a52749707a90effeac6b3d36018faa2b5->enter($__internal_eb53f4b852da7f0008fadaa5ab19c75a52749707a90effeac6b3d36018faa2b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

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
        
        $__internal_eb53f4b852da7f0008fadaa5ab19c75a52749707a90effeac6b3d36018faa2b5->leave($__internal_eb53f4b852da7f0008fadaa5ab19c75a52749707a90effeac6b3d36018faa2b5_prof);

    }

    // line 57
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_9e4160d29d878e69f0c809540f8e4ced7d23397a42bbedf9b4a11aeaa2afd865 = $this->env->getExtension("native_profiler");
        $__internal_9e4160d29d878e69f0c809540f8e4ced7d23397a42bbedf9b4a11aeaa2afd865->enter($__internal_9e4160d29d878e69f0c809540f8e4ced7d23397a42bbedf9b4a11aeaa2afd865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_9e4160d29d878e69f0c809540f8e4ced7d23397a42bbedf9b4a11aeaa2afd865->leave($__internal_9e4160d29d878e69f0c809540f8e4ced7d23397a42bbedf9b4a11aeaa2afd865_prof);

    }

    // line 68
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_8fd2ca86a503a6c83fcdeb758296f0e28c2985f7af5f321b0bbe7cde13e7ebc0 = $this->env->getExtension("native_profiler");
        $__internal_8fd2ca86a503a6c83fcdeb758296f0e28c2985f7af5f321b0bbe7cde13e7ebc0->enter($__internal_8fd2ca86a503a6c83fcdeb758296f0e28c2985f7af5f321b0bbe7cde13e7ebc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 69
        echo "col-sm-10";
        
        $__internal_8fd2ca86a503a6c83fcdeb758296f0e28c2985f7af5f321b0bbe7cde13e7ebc0->leave($__internal_8fd2ca86a503a6c83fcdeb758296f0e28c2985f7af5f321b0bbe7cde13e7ebc0_prof);

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
