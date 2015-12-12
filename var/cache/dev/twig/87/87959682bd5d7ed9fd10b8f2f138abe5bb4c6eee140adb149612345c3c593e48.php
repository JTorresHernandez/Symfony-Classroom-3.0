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
        $__internal_419afd20d9c487204dc20e47bb02ff40569c3bf2ef060fac40b6948fb0d7eb31 = $this->env->getExtension("native_profiler");
        $__internal_419afd20d9c487204dc20e47bb02ff40569c3bf2ef060fac40b6948fb0d7eb31->enter($__internal_419afd20d9c487204dc20e47bb02ff40569c3bf2ef060fac40b6948fb0d7eb31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":form-templates:bootstrap_3_horizontal_layout.html.twig"));

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
        
        $__internal_419afd20d9c487204dc20e47bb02ff40569c3bf2ef060fac40b6948fb0d7eb31->leave($__internal_419afd20d9c487204dc20e47bb02ff40569c3bf2ef060fac40b6948fb0d7eb31_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_ba3fcb7bfbf61d1fcb5f78f103468fa0dd13b5bb3e8cc815a3fafc578239c7e9 = $this->env->getExtension("native_profiler");
        $__internal_ba3fcb7bfbf61d1fcb5f78f103468fa0dd13b5bb3e8cc815a3fafc578239c7e9->enter($__internal_ba3fcb7bfbf61d1fcb5f78f103468fa0dd13b5bb3e8cc815a3fafc578239c7e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_ba3fcb7bfbf61d1fcb5f78f103468fa0dd13b5bb3e8cc815a3fafc578239c7e9->leave($__internal_ba3fcb7bfbf61d1fcb5f78f103468fa0dd13b5bb3e8cc815a3fafc578239c7e9_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_8c0db75cc95ad68a5ab1e826c9ec71b50a972879e58ccd3b71ea37e28258acae = $this->env->getExtension("native_profiler");
        $__internal_8c0db75cc95ad68a5ab1e826c9ec71b50a972879e58ccd3b71ea37e28258acae->enter($__internal_8c0db75cc95ad68a5ab1e826c9ec71b50a972879e58ccd3b71ea37e28258acae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_8c0db75cc95ad68a5ab1e826c9ec71b50a972879e58ccd3b71ea37e28258acae->leave($__internal_8c0db75cc95ad68a5ab1e826c9ec71b50a972879e58ccd3b71ea37e28258acae_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_6cc9d9b0e979b801d6f0fa8f8d87443566f3f6c303b03807ca2ba9914dcd0df7 = $this->env->getExtension("native_profiler");
        $__internal_6cc9d9b0e979b801d6f0fa8f8d87443566f3f6c303b03807ca2ba9914dcd0df7->enter($__internal_6cc9d9b0e979b801d6f0fa8f8d87443566f3f6c303b03807ca2ba9914dcd0df7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-2";
        
        $__internal_6cc9d9b0e979b801d6f0fa8f8d87443566f3f6c303b03807ca2ba9914dcd0df7->leave($__internal_6cc9d9b0e979b801d6f0fa8f8d87443566f3f6c303b03807ca2ba9914dcd0df7_prof);

    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_a78ca94a743c5b7a3a26a4e48ccc463f323a4f878f2357e29e98aa04ade3d6f2 = $this->env->getExtension("native_profiler");
        $__internal_a78ca94a743c5b7a3a26a4e48ccc463f323a4f878f2357e29e98aa04ade3d6f2->enter($__internal_a78ca94a743c5b7a3a26a4e48ccc463f323a4f878f2357e29e98aa04ade3d6f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_a78ca94a743c5b7a3a26a4e48ccc463f323a4f878f2357e29e98aa04ade3d6f2->leave($__internal_a78ca94a743c5b7a3a26a4e48ccc463f323a4f878f2357e29e98aa04ade3d6f2_prof);

    }

    // line 37
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_2918d01a9b66bda2e6fd9ba19e417163331b14da7b1b83a614062d3852754663 = $this->env->getExtension("native_profiler");
        $__internal_2918d01a9b66bda2e6fd9ba19e417163331b14da7b1b83a614062d3852754663->enter($__internal_2918d01a9b66bda2e6fd9ba19e417163331b14da7b1b83a614062d3852754663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 38
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_2918d01a9b66bda2e6fd9ba19e417163331b14da7b1b83a614062d3852754663->leave($__internal_2918d01a9b66bda2e6fd9ba19e417163331b14da7b1b83a614062d3852754663_prof);

    }

    // line 41
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_3e4935a83d07936999dc35fd7850f2c4bef5995beabdc23f32a9de70b4c5b4ac = $this->env->getExtension("native_profiler");
        $__internal_3e4935a83d07936999dc35fd7850f2c4bef5995beabdc23f32a9de70b4c5b4ac->enter($__internal_3e4935a83d07936999dc35fd7850f2c4bef5995beabdc23f32a9de70b4c5b4ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 42
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_3e4935a83d07936999dc35fd7850f2c4bef5995beabdc23f32a9de70b4c5b4ac->leave($__internal_3e4935a83d07936999dc35fd7850f2c4bef5995beabdc23f32a9de70b4c5b4ac_prof);

    }

    // line 45
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_15883aad78ad8484eaf61b30bdeed881248aa9a4837a15bc7c5616c829ac470b = $this->env->getExtension("native_profiler");
        $__internal_15883aad78ad8484eaf61b30bdeed881248aa9a4837a15bc7c5616c829ac470b->enter($__internal_15883aad78ad8484eaf61b30bdeed881248aa9a4837a15bc7c5616c829ac470b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

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
        
        $__internal_15883aad78ad8484eaf61b30bdeed881248aa9a4837a15bc7c5616c829ac470b->leave($__internal_15883aad78ad8484eaf61b30bdeed881248aa9a4837a15bc7c5616c829ac470b_prof);

    }

    // line 57
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_56f846974a6a843441dd940fc9ca85458a81b5981f6d2f2613187ecedb437f3c = $this->env->getExtension("native_profiler");
        $__internal_56f846974a6a843441dd940fc9ca85458a81b5981f6d2f2613187ecedb437f3c->enter($__internal_56f846974a6a843441dd940fc9ca85458a81b5981f6d2f2613187ecedb437f3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_56f846974a6a843441dd940fc9ca85458a81b5981f6d2f2613187ecedb437f3c->leave($__internal_56f846974a6a843441dd940fc9ca85458a81b5981f6d2f2613187ecedb437f3c_prof);

    }

    // line 68
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_ef8ddbd9028e2bc23982ad11a887ea6ef3db362025cfea50dbb68fc030057fd8 = $this->env->getExtension("native_profiler");
        $__internal_ef8ddbd9028e2bc23982ad11a887ea6ef3db362025cfea50dbb68fc030057fd8->enter($__internal_ef8ddbd9028e2bc23982ad11a887ea6ef3db362025cfea50dbb68fc030057fd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 69
        echo "col-sm-10";
        
        $__internal_ef8ddbd9028e2bc23982ad11a887ea6ef3db362025cfea50dbb68fc030057fd8->leave($__internal_ef8ddbd9028e2bc23982ad11a887ea6ef3db362025cfea50dbb68fc030057fd8_prof);

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
