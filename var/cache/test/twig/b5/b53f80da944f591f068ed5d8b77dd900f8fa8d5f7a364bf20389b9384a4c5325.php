<?php

/* :comment:show-form-edit-mode.html.twig */
class __TwigTemplate_521cd913691b3a0ad661408ef90d0da2db1431f8b0d9802dc42540d17d328865 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", ":comment:show-form-edit-mode.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_44db93caf79470f1dfaba7eaf96bec96a0f8334f3d7db21892945e579e60df07 = $this->env->getExtension("native_profiler");
        $__internal_44db93caf79470f1dfaba7eaf96bec96a0f8334f3d7db21892945e579e60df07->enter($__internal_44db93caf79470f1dfaba7eaf96bec96a0f8334f3d7db21892945e579e60df07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":comment:show-form-edit-mode.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44db93caf79470f1dfaba7eaf96bec96a0f8334f3d7db21892945e579e60df07->leave($__internal_44db93caf79470f1dfaba7eaf96bec96a0f8334f3d7db21892945e579e60df07_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c02e547d5c61b13a7b388137d7446216cc675cf2acd50eb184576c6489821a77 = $this->env->getExtension("native_profiler");
        $__internal_c02e547d5c61b13a7b388137d7446216cc675cf2acd50eb184576c6489821a77->enter($__internal_c02e547d5c61b13a7b388137d7446216cc675cf2acd50eb184576c6489821a77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_c02e547d5c61b13a7b388137d7446216cc675cf2acd50eb184576c6489821a77->leave($__internal_c02e547d5c61b13a7b388137d7446216cc675cf2acd50eb184576c6489821a77_prof);

    }

    // line 7
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_15b3b943edbf2d1d7d3dca39bed2e45a679056b6f02aef651f5632cf5d9a64db = $this->env->getExtension("native_profiler");
        $__internal_15b3b943edbf2d1d7d3dca39bed2e45a679056b6f02aef651f5632cf5d9a64db->enter($__internal_15b3b943edbf2d1d7d3dca39bed2e45a679056b6f02aef651f5632cf5d9a64db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_15b3b943edbf2d1d7d3dca39bed2e45a679056b6f02aef651f5632cf5d9a64db->leave($__internal_15b3b943edbf2d1d7d3dca39bed2e45a679056b6f02aef651f5632cf5d9a64db_prof);

    }

    public function getTemplateName()
    {
        return ":comment:show-form-edit-mode.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     {{ form(form) }}*/
/* {% endblock %}*/
/* */
/* {% block sidebar %}{% endblock %}*/
