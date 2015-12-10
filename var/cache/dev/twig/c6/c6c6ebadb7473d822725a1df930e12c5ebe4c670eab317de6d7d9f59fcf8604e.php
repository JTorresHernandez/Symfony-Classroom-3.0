<?php

/* :form-templates:form_table_layout.html.twig */
class __TwigTemplate_77bc6bf7b1b93239a43c6d7f83f83a058f5d204ab1f3faaa269da3f909298e62 extends Twig_Template
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
        $__internal_ffff483252ba77a8e4ea955e42c360d820935eaf04d23a2c650e86bccc79ce72 = $this->env->getExtension("native_profiler");
        $__internal_ffff483252ba77a8e4ea955e42c360d820935eaf04d23a2c650e86bccc79ce72->enter($__internal_ffff483252ba77a8e4ea955e42c360d820935eaf04d23a2c650e86bccc79ce72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":form-templates:form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_ffff483252ba77a8e4ea955e42c360d820935eaf04d23a2c650e86bccc79ce72->leave($__internal_ffff483252ba77a8e4ea955e42c360d820935eaf04d23a2c650e86bccc79ce72_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_6be10355fb8f8780d3fc9014e37bb347697f57d9c46fdd0e07f46d5bca033e30 = $this->env->getExtension("native_profiler");
        $__internal_6be10355fb8f8780d3fc9014e37bb347697f57d9c46fdd0e07f46d5bca033e30->enter($__internal_6be10355fb8f8780d3fc9014e37bb347697f57d9c46fdd0e07f46d5bca033e30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_6be10355fb8f8780d3fc9014e37bb347697f57d9c46fdd0e07f46d5bca033e30->leave($__internal_6be10355fb8f8780d3fc9014e37bb347697f57d9c46fdd0e07f46d5bca033e30_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_482db92f70ca0883499b9fdc8553fa4a7fe7cf78c3834f795a5c272e670c9f0e = $this->env->getExtension("native_profiler");
        $__internal_482db92f70ca0883499b9fdc8553fa4a7fe7cf78c3834f795a5c272e670c9f0e->enter($__internal_482db92f70ca0883499b9fdc8553fa4a7fe7cf78c3834f795a5c272e670c9f0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_482db92f70ca0883499b9fdc8553fa4a7fe7cf78c3834f795a5c272e670c9f0e->leave($__internal_482db92f70ca0883499b9fdc8553fa4a7fe7cf78c3834f795a5c272e670c9f0e_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_c42120d663dbaf304fe11b393b06dc9f86a8262c942f654e52ce1399a2c4d8db = $this->env->getExtension("native_profiler");
        $__internal_c42120d663dbaf304fe11b393b06dc9f86a8262c942f654e52ce1399a2c4d8db->enter($__internal_c42120d663dbaf304fe11b393b06dc9f86a8262c942f654e52ce1399a2c4d8db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_c42120d663dbaf304fe11b393b06dc9f86a8262c942f654e52ce1399a2c4d8db->leave($__internal_c42120d663dbaf304fe11b393b06dc9f86a8262c942f654e52ce1399a2c4d8db_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_8e159589dfc109d789306a219bed22485bd25f40df3a8989bd97a4297943c01f = $this->env->getExtension("native_profiler");
        $__internal_8e159589dfc109d789306a219bed22485bd25f40df3a8989bd97a4297943c01f->enter($__internal_8e159589dfc109d789306a219bed22485bd25f40df3a8989bd97a4297943c01f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

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
        
        $__internal_8e159589dfc109d789306a219bed22485bd25f40df3a8989bd97a4297943c01f->leave($__internal_8e159589dfc109d789306a219bed22485bd25f40df3a8989bd97a4297943c01f_prof);

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
