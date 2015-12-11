<?php

/* UserBundle:Registration:register_content.html.twig */
class __TwigTemplate_35c368c7c02e64334e395a2006f650daeee9d97e0db2ab26df7efffbad04b1ba extends Twig_Template
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
        $__internal_a866aa43678cbe549b262ea2a771d6a043c31e74a04887d17463f0c5cb527f3a = $this->env->getExtension("native_profiler");
        $__internal_a866aa43678cbe549b262ea2a771d6a043c31e74a04887d17463f0c5cb527f3a->enter($__internal_a866aa43678cbe549b262ea2a771d6a043c31e74a04887d17463f0c5cb527f3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Registration:register_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input class=\"btn btn-default\" type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_a866aa43678cbe549b262ea2a771d6a043c31e74a04887d17463f0c5cb527f3a->leave($__internal_a866aa43678cbe549b262ea2a771d6a043c31e74a04887d17463f0c5cb527f3a_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Registration:register_content.html.twig";
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
/* {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}*/
/*     {{ form_widget(form) }}*/
/*     <div>*/
/*         <input class="btn btn-default" type="submit" value="{{ 'registration.submit'|trans }}" />*/
/*     </div>*/
/* {{ form_end(form) }}*/
/* */
