<?php

/* UserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_d5b0b9c3143682668f38c97b4658bc0fef2b3b35aeecdac87967ca39e8976e00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1a208b8f64b80e867b9f1a39c07affc17710b13958e1d283f94c78804ed7a516 = $this->env->getExtension("native_profiler");
        $__internal_1a208b8f64b80e867b9f1a39c07affc17710b13958e1d283f94c78804ed7a516->enter($__internal_1a208b8f64b80e867b9f1a39c07affc17710b13958e1d283f94c78804ed7a516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:edit_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit")));
        echo "
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_1a208b8f64b80e867b9f1a39c07affc17710b13958e1d283f94c78804ed7a516->leave($__internal_1a208b8f64b80e867b9f1a39c07affc17710b13958e1d283f94c78804ed7a516_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 8,  34 => 6,  29 => 4,  25 => 3,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}*/
/*     {{ form_widget(form) }}*/
/*     <div>*/
/*         <input type="submit" value="{{ 'profile.edit.submit'|trans }}" />*/
/*     </div>*/
/* {{ form_end(form) }}*/
/* */