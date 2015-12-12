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
        $__internal_efa71b61f3fc65ef9e3a03c8c6025e28d09a44df007fd4d437cbb08f4371ba68 = $this->env->getExtension("native_profiler");
        $__internal_efa71b61f3fc65ef9e3a03c8c6025e28d09a44df007fd4d437cbb08f4371ba68->enter($__internal_efa71b61f3fc65ef9e3a03c8c6025e28d09a44df007fd4d437cbb08f4371ba68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":form-templates:bootstrap_3_horizontal_layout.html.twig"));

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
        
        $__internal_efa71b61f3fc65ef9e3a03c8c6025e28d09a44df007fd4d437cbb08f4371ba68->leave($__internal_efa71b61f3fc65ef9e3a03c8c6025e28d09a44df007fd4d437cbb08f4371ba68_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_3f8ec369fc5f2f5daba28f7be93736454c0f6b61d40b5ae9baa70f2cd53c2b80 = $this->env->getExtension("native_profiler");
        $__internal_3f8ec369fc5f2f5daba28f7be93736454c0f6b61d40b5ae9baa70f2cd53c2b80->enter($__internal_3f8ec369fc5f2f5daba28f7be93736454c0f6b61d40b5ae9baa70f2cd53c2b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_3f8ec369fc5f2f5daba28f7be93736454c0f6b61d40b5ae9baa70f2cd53c2b80->leave($__internal_3f8ec369fc5f2f5daba28f7be93736454c0f6b61d40b5ae9baa70f2cd53c2b80_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_ef923aa6e42d94ec50e135b99a8a3029ba8639cd0a5eb42b44f5f3aa7b1dff61 = $this->env->getExtension("native_profiler");
        $__internal_ef923aa6e42d94ec50e135b99a8a3029ba8639cd0a5eb42b44f5f3aa7b1dff61->enter($__internal_ef923aa6e42d94ec50e135b99a8a3029ba8639cd0a5eb42b44f5f3aa7b1dff61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_ef923aa6e42d94ec50e135b99a8a3029ba8639cd0a5eb42b44f5f3aa7b1dff61->leave($__internal_ef923aa6e42d94ec50e135b99a8a3029ba8639cd0a5eb42b44f5f3aa7b1dff61_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_b69affb05093eb2d9fb564eb82b1684d69c1511ac34a873eae54a1afd669a8cd = $this->env->getExtension("native_profiler");
        $__internal_b69affb05093eb2d9fb564eb82b1684d69c1511ac34a873eae54a1afd669a8cd->enter($__internal_b69affb05093eb2d9fb564eb82b1684d69c1511ac34a873eae54a1afd669a8cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-2";
        
        $__internal_b69affb05093eb2d9fb564eb82b1684d69c1511ac34a873eae54a1afd669a8cd->leave($__internal_b69affb05093eb2d9fb564eb82b1684d69c1511ac34a873eae54a1afd669a8cd_prof);

    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_fba2f79ad5a33b62fd2fb038f9b10b65b84a9e2bcc2acbdb210eb580f2ec15a3 = $this->env->getExtension("native_profiler");
        $__internal_fba2f79ad5a33b62fd2fb038f9b10b65b84a9e2bcc2acbdb210eb580f2ec15a3->enter($__internal_fba2f79ad5a33b62fd2fb038f9b10b65b84a9e2bcc2acbdb210eb580f2ec15a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_fba2f79ad5a33b62fd2fb038f9b10b65b84a9e2bcc2acbdb210eb580f2ec15a3->leave($__internal_fba2f79ad5a33b62fd2fb038f9b10b65b84a9e2bcc2acbdb210eb580f2ec15a3_prof);

    }

    // line 37
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_5ec65f69a23363961aee1c6254e4db42526d03e73324343fa9882a0c6a810382 = $this->env->getExtension("native_profiler");
        $__internal_5ec65f69a23363961aee1c6254e4db42526d03e73324343fa9882a0c6a810382->enter($__internal_5ec65f69a23363961aee1c6254e4db42526d03e73324343fa9882a0c6a810382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 38
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_5ec65f69a23363961aee1c6254e4db42526d03e73324343fa9882a0c6a810382->leave($__internal_5ec65f69a23363961aee1c6254e4db42526d03e73324343fa9882a0c6a810382_prof);

    }

    // line 41
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_17f2cffa9709375714aab71b17771eb44a8c7854067b2c38128a5028ecae48f7 = $this->env->getExtension("native_profiler");
        $__internal_17f2cffa9709375714aab71b17771eb44a8c7854067b2c38128a5028ecae48f7->enter($__internal_17f2cffa9709375714aab71b17771eb44a8c7854067b2c38128a5028ecae48f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 42
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_17f2cffa9709375714aab71b17771eb44a8c7854067b2c38128a5028ecae48f7->leave($__internal_17f2cffa9709375714aab71b17771eb44a8c7854067b2c38128a5028ecae48f7_prof);

    }

    // line 45
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_524a739374bfbf5764468ac260660741752901a95641539c0631091b7cf5ad2f = $this->env->getExtension("native_profiler");
        $__internal_524a739374bfbf5764468ac260660741752901a95641539c0631091b7cf5ad2f->enter($__internal_524a739374bfbf5764468ac260660741752901a95641539c0631091b7cf5ad2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

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
        
        $__internal_524a739374bfbf5764468ac260660741752901a95641539c0631091b7cf5ad2f->leave($__internal_524a739374bfbf5764468ac260660741752901a95641539c0631091b7cf5ad2f_prof);

    }

    // line 57
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_7f07f45cdd4cb5d965e708b829f7d7a7b70ce19b34eb8f7fc99806481a4bc1bb = $this->env->getExtension("native_profiler");
        $__internal_7f07f45cdd4cb5d965e708b829f7d7a7b70ce19b34eb8f7fc99806481a4bc1bb->enter($__internal_7f07f45cdd4cb5d965e708b829f7d7a7b70ce19b34eb8f7fc99806481a4bc1bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_7f07f45cdd4cb5d965e708b829f7d7a7b70ce19b34eb8f7fc99806481a4bc1bb->leave($__internal_7f07f45cdd4cb5d965e708b829f7d7a7b70ce19b34eb8f7fc99806481a4bc1bb_prof);

    }

    // line 68
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_a2097108b838405994927ab4fa908a3064793b4ed583f8799ffa782ec21d38db = $this->env->getExtension("native_profiler");
        $__internal_a2097108b838405994927ab4fa908a3064793b4ed583f8799ffa782ec21d38db->enter($__internal_a2097108b838405994927ab4fa908a3064793b4ed583f8799ffa782ec21d38db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 69
        echo "col-sm-10";
        
        $__internal_a2097108b838405994927ab4fa908a3064793b4ed583f8799ffa782ec21d38db->leave($__internal_a2097108b838405994927ab4fa908a3064793b4ed583f8799ffa782ec21d38db_prof);

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
