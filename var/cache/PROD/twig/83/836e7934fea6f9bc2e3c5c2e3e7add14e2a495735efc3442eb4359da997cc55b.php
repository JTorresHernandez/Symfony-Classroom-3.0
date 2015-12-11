<?php

/* :admin/index:index.html.twig */
class __TwigTemplate_bdaf4009ebc5731c6a109a9657204759f30212f894785ba2822b42fb06218194 extends Twig_Template
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
        $__internal_04d9c0d9e434ce2d957a7f0958ba1e7e4fca4a89e9eb1e2429518c2b6d868fda = $this->env->getExtension("native_profiler");
        $__internal_04d9c0d9e434ce2d957a7f0958ba1e7e4fca4a89e9eb1e2429518c2b6d868fda->enter($__internal_04d9c0d9e434ce2d957a7f0958ba1e7e4fca4a89e9eb1e2429518c2b6d868fda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin/index:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04d9c0d9e434ce2d957a7f0958ba1e7e4fca4a89e9eb1e2429518c2b6d868fda->leave($__internal_04d9c0d9e434ce2d957a7f0958ba1e7e4fca4a89e9eb1e2429518c2b6d868fda_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c1520ac1f3597185b664418008b802ee86931e8659f10f678f98ccc3033f5c13 = $this->env->getExtension("native_profiler");
        $__internal_c1520ac1f3597185b664418008b802ee86931e8659f10f678f98ccc3033f5c13->enter($__internal_c1520ac1f3597185b664418008b802ee86931e8659f10f678f98ccc3033f5c13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c1520ac1f3597185b664418008b802ee86931e8659f10f678f98ccc3033f5c13->leave($__internal_c1520ac1f3597185b664418008b802ee86931e8659f10f678f98ccc3033f5c13_prof);

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
