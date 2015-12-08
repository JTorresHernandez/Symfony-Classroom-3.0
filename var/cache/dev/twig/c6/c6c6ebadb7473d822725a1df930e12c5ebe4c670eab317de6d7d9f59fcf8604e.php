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
        $__internal_d1532d7b20ac55004c24f68d7a834caf31192c469d1befdd216b1bfd5ce33dc9 = $this->env->getExtension("native_profiler");
        $__internal_d1532d7b20ac55004c24f68d7a834caf31192c469d1befdd216b1bfd5ce33dc9->enter($__internal_d1532d7b20ac55004c24f68d7a834caf31192c469d1befdd216b1bfd5ce33dc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":form-templates:form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_d1532d7b20ac55004c24f68d7a834caf31192c469d1befdd216b1bfd5ce33dc9->leave($__internal_d1532d7b20ac55004c24f68d7a834caf31192c469d1befdd216b1bfd5ce33dc9_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_b0c97ca0f7ca8053194b20a8d4de1812dc58d4f0247f17d1809612131a85b9a7 = $this->env->getExtension("native_profiler");
        $__internal_b0c97ca0f7ca8053194b20a8d4de1812dc58d4f0247f17d1809612131a85b9a7->enter($__internal_b0c97ca0f7ca8053194b20a8d4de1812dc58d4f0247f17d1809612131a85b9a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_b0c97ca0f7ca8053194b20a8d4de1812dc58d4f0247f17d1809612131a85b9a7->leave($__internal_b0c97ca0f7ca8053194b20a8d4de1812dc58d4f0247f17d1809612131a85b9a7_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_7c528460c17cec97a0d977e1bbc66230f201cd72f54dea6a8d49592c4476f28a = $this->env->getExtension("native_profiler");
        $__internal_7c528460c17cec97a0d977e1bbc66230f201cd72f54dea6a8d49592c4476f28a->enter($__internal_7c528460c17cec97a0d977e1bbc66230f201cd72f54dea6a8d49592c4476f28a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_7c528460c17cec97a0d977e1bbc66230f201cd72f54dea6a8d49592c4476f28a->leave($__internal_7c528460c17cec97a0d977e1bbc66230f201cd72f54dea6a8d49592c4476f28a_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_3c7583802be471e6aa0f9a01d2cbf76f550990acb65c73138e6da0453cf75bd5 = $this->env->getExtension("native_profiler");
        $__internal_3c7583802be471e6aa0f9a01d2cbf76f550990acb65c73138e6da0453cf75bd5->enter($__internal_3c7583802be471e6aa0f9a01d2cbf76f550990acb65c73138e6da0453cf75bd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_3c7583802be471e6aa0f9a01d2cbf76f550990acb65c73138e6da0453cf75bd5->leave($__internal_3c7583802be471e6aa0f9a01d2cbf76f550990acb65c73138e6da0453cf75bd5_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_cf867c19aeddf96b4711664cd6bdab8c34d24c31edcd8656a55592b9b394775f = $this->env->getExtension("native_profiler");
        $__internal_cf867c19aeddf96b4711664cd6bdab8c34d24c31edcd8656a55592b9b394775f->enter($__internal_cf867c19aeddf96b4711664cd6bdab8c34d24c31edcd8656a55592b9b394775f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

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
        
        $__internal_cf867c19aeddf96b4711664cd6bdab8c34d24c31edcd8656a55592b9b394775f->leave($__internal_cf867c19aeddf96b4711664cd6bdab8c34d24c31edcd8656a55592b9b394775f_prof);

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
