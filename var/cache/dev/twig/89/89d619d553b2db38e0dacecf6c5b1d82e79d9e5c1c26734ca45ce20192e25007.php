<?php

/* :admin/index:index.html.twig */
class __TwigTemplate_90d17780bbaebf6e7246c718c5f193e9540846ff1040d475697c2f30d3a66263 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", ":admin/index:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_96224d20f0657a1eb6dfd18a0a32ba09ee3ca5f3d50f189f9dc55d35d17a2219 = $this->env->getExtension("native_profiler");
        $__internal_96224d20f0657a1eb6dfd18a0a32ba09ee3ca5f3d50f189f9dc55d35d17a2219->enter($__internal_96224d20f0657a1eb6dfd18a0a32ba09ee3ca5f3d50f189f9dc55d35d17a2219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin/index:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96224d20f0657a1eb6dfd18a0a32ba09ee3ca5f3d50f189f9dc55d35d17a2219->leave($__internal_96224d20f0657a1eb6dfd18a0a32ba09ee3ca5f3d50f189f9dc55d35d17a2219_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_835032df1ee24c068b0576ba80bb7443e2583901d8a96165e9d611b0c94f4ba8 = $this->env->getExtension("native_profiler");
        $__internal_835032df1ee24c068b0576ba80bb7443e2583901d8a96165e9d611b0c94f4ba8->enter($__internal_835032df1ee24c068b0576ba80bb7443e2583901d8a96165e9d611b0c94f4ba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <ul>
        <li><a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("app_admin_tag_unused");
        echo "\">List unused tags</a></li>
        <li><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("app_admin_tag_removeAllUnusedTags");
        echo "\">Remove all unused tags</a></li>
    </ul>
";
        
        $__internal_835032df1ee24c068b0576ba80bb7443e2583901d8a96165e9d611b0c94f4ba8->leave($__internal_835032df1ee24c068b0576ba80bb7443e2583901d8a96165e9d611b0c94f4ba8_prof);

    }

    public function getTemplateName()
    {
        return ":admin/index:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <ul>*/
/*         <li><a href="{{ path('app_admin_tag_unused') }}">List unused tags</a></li>*/
/*         <li><a href="{{ path('app_admin_tag_removeAllUnusedTags') }}">Remove all unused tags</a></li>*/
/*     </ul>*/
/* {% endblock %}*/
