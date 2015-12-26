<?php

/* :form-templates:form_table_layout.html.twig */
class __TwigTemplate_fee83c80c89381ef95d75e76af13f802d7c5841e3515c5a231d234c32d88e433 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", ":form-templates:form_table_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fdd6dbf55b8868f6819cb4adc60e9227ee721c2eb9ee3b9261a4a23b1668fbef = $this->env->getExtension("native_profiler");
        $__internal_fdd6dbf55b8868f6819cb4adc60e9227ee721c2eb9ee3b9261a4a23b1668fbef->enter($__internal_fdd6dbf55b8868f6819cb4adc60e9227ee721c2eb9ee3b9261a4a23b1668fbef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":form-templates:form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_fdd6dbf55b8868f6819cb4adc60e9227ee721c2eb9ee3b9261a4a23b1668fbef->leave($__internal_fdd6dbf55b8868f6819cb4adc60e9227ee721c2eb9ee3b9261a4a23b1668fbef_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_32fae4e412fdfe8fde15eba53e386abd35951056aad9372ee2d9fa9a9098f1fc = $this->env->getExtension("native_profiler");
        $__internal_32fae4e412fdfe8fde15eba53e386abd35951056aad9372ee2d9fa9a9098f1fc->enter($__internal_32fae4e412fdfe8fde15eba53e386abd35951056aad9372ee2d9fa9a9098f1fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_32fae4e412fdfe8fde15eba53e386abd35951056aad9372ee2d9fa9a9098f1fc->leave($__internal_32fae4e412fdfe8fde15eba53e386abd35951056aad9372ee2d9fa9a9098f1fc_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_bc80575e4522ba859d4b3f3f1250615a4a86423d78b51f95b0cce774b6875eb6 = $this->env->getExtension("native_profiler");
        $__internal_bc80575e4522ba859d4b3f3f1250615a4a86423d78b51f95b0cce774b6875eb6->enter($__internal_bc80575e4522ba859d4b3f3f1250615a4a86423d78b51f95b0cce774b6875eb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_bc80575e4522ba859d4b3f3f1250615a4a86423d78b51f95b0cce774b6875eb6->leave($__internal_bc80575e4522ba859d4b3f3f1250615a4a86423d78b51f95b0cce774b6875eb6_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_83be6b65be1e4235c38ed09b85667ec9c0a59131b5aa652a4099b370770eeba5 = $this->env->getExtension("native_profiler");
        $__internal_83be6b65be1e4235c38ed09b85667ec9c0a59131b5aa652a4099b370770eeba5->enter($__internal_83be6b65be1e4235c38ed09b85667ec9c0a59131b5aa652a4099b370770eeba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_83be6b65be1e4235c38ed09b85667ec9c0a59131b5aa652a4099b370770eeba5->leave($__internal_83be6b65be1e4235c38ed09b85667ec9c0a59131b5aa652a4099b370770eeba5_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_5d51e73fa2c9f4f2f89d9e651234e8e4b65b379cbf68f79c0f62cf11948b4f6a = $this->env->getExtension("native_profiler");
        $__internal_5d51e73fa2c9f4f2f89d9e651234e8e4b65b379cbf68f79c0f62cf11948b4f6a->enter($__internal_5d51e73fa2c9f4f2f89d9e651234e8e4b65b379cbf68f79c0f62cf11948b4f6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((twig_test_empty($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) && (twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_5d51e73fa2c9f4f2f89d9e651234e8e4b65b379cbf68f79c0f62cf11948b4f6a->leave($__internal_5d51e73fa2c9f4f2f89d9e651234e8e4b65b379cbf68f79c0f62cf11948b4f6a_prof);

    }

    public function getTemplateName()
    {
        return ":form-templates:form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  141 => 43,  139 => 42,  137 => 41,  133 => 38,  131 => 37,  128 => 35,  126 => 34,  122 => 33,  116 => 32,  108 => 28,  106 => 27,  103 => 25,  97 => 24,  89 => 20,  87 => 19,  83 => 16,  77 => 15,  69 => 11,  67 => 10,  65 => 9,  62 => 7,  60 => 6,  57 => 4,  51 => 3,  44 => 32,  42 => 24,  40 => 15,  38 => 3,  14 => 1,);
    }
}
/* {% use "form_div_layout.html.twig" %}*/
/* */
/* {%- block form_row -%}*/
/*     <tr>*/
/*         <td>*/
/*             {{- form_label(form) -}}*/
/*         </td>*/
/*         <td>*/
/*             {{- form_errors(form) -}}*/
/*             {{- form_widget(form) -}}*/
/*         </td>*/
/*     </tr>*/
/* {%- endblock form_row -%}*/
/* */
/* {%- block button_row -%}*/
/*     <tr>*/
/*         <td></td>*/
/*         <td>*/
/*             {{- form_widget(form) -}}*/
/*         </td>*/
/*     </tr>*/
/* {%- endblock button_row -%}*/
/* */
/* {%- block hidden_row -%}*/
/*     <tr style="display: none">*/
/*         <td colspan="2">*/
/*             {{- form_widget(form) -}}*/
/*         </td>*/
/*     </tr>*/
/* {%- endblock hidden_row -%}*/
/* */
/* {%- block form_widget_compound -%}*/
/*     <table {{ block('widget_container_attributes') }}>*/
/*         {%- if form.parent is empty and errors|length > 0 -%}*/
/*         <tr>*/
/*             <td colspan="2">*/
/*                 {{- form_errors(form) -}}*/
/*             </td>*/
/*         </tr>*/
/*         {%- endif -%}*/
/*         {{- block('form_rows') -}}*/
/*         {{- form_rest(form) -}}*/
/*     </table>*/
/* {%- endblock form_widget_compound -%}*/
/* */
