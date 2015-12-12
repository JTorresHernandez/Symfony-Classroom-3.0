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
        $__internal_b3389d1682683ea8b59b14b2d8f349734236995e4af928843e289a81e8565613 = $this->env->getExtension("native_profiler");
        $__internal_b3389d1682683ea8b59b14b2d8f349734236995e4af928843e289a81e8565613->enter($__internal_b3389d1682683ea8b59b14b2d8f349734236995e4af928843e289a81e8565613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin/index:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3389d1682683ea8b59b14b2d8f349734236995e4af928843e289a81e8565613->leave($__internal_b3389d1682683ea8b59b14b2d8f349734236995e4af928843e289a81e8565613_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_aa20bf1b6bbbbb3036dffdba99406678ac16f4943c903e7aa42ba0ad1da69615 = $this->env->getExtension("native_profiler");
        $__internal_aa20bf1b6bbbbb3036dffdba99406678ac16f4943c903e7aa42ba0ad1da69615->enter($__internal_aa20bf1b6bbbbb3036dffdba99406678ac16f4943c903e7aa42ba0ad1da69615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <table class=\"table\">
        <tr>
            <td><a class=\"btn btn-default\" href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("app_admin_tag_unused");
        echo "\">List unused tags</a></td>
        </tr>
        <tr>
            <td><a class=\"btn btn-default\" href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("app_admin_tag_removeAllUnusedTags");
        echo "\">Remove all unused tags</a></td>
        </tr>
    </table>
";
        
        $__internal_aa20bf1b6bbbbb3036dffdba99406678ac16f4943c903e7aa42ba0ad1da69615->leave($__internal_aa20bf1b6bbbbb3036dffdba99406678ac16f4943c903e7aa42ba0ad1da69615_prof);

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
        return array (  50 => 9,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <table class="table">*/
/*         <tr>*/
/*             <td><a class="btn btn-default" href="{{ path('app_admin_tag_unused') }}">List unused tags</a></td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td><a class="btn btn-default" href="{{ path('app_admin_tag_removeAllUnusedTags') }}">Remove all unused tags</a></td>*/
/*         </tr>*/
/*     </table>*/
/* {% endblock %}*/
