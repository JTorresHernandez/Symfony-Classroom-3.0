<?php

/* :admin/index:index.html.twig */
class __TwigTemplate_0c1af419ddaf7488a8781f6fd11d2fc398c8b01e7e1557986703cf3f3d820e38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":admin:admin_layout.html.twig", ":admin/index:index.html.twig", 1);
        $this->blocks = array(
            'headTitle' => array($this, 'block_headTitle'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":admin:admin_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a33bcafb34e50728204400eee4501460a15095985b3ca3e37ea9354c7710e057 = $this->env->getExtension("native_profiler");
        $__internal_a33bcafb34e50728204400eee4501460a15095985b3ca3e37ea9354c7710e057->enter($__internal_a33bcafb34e50728204400eee4501460a15095985b3ca3e37ea9354c7710e057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin/index:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a33bcafb34e50728204400eee4501460a15095985b3ca3e37ea9354c7710e057->leave($__internal_a33bcafb34e50728204400eee4501460a15095985b3ca3e37ea9354c7710e057_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_dab50e3cc06d74606cf62606913e5c6123925d0391cc52ff75e13564bb3221e7 = $this->env->getExtension("native_profiler");
        $__internal_dab50e3cc06d74606cf62606913e5c6123925d0391cc52ff75e13564bb3221e7->enter($__internal_dab50e3cc06d74606cf62606913e5c6123925d0391cc52ff75e13564bb3221e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo "Dashboard";
        
        $__internal_dab50e3cc06d74606cf62606913e5c6123925d0391cc52ff75e13564bb3221e7->leave($__internal_dab50e3cc06d74606cf62606913e5c6123925d0391cc52ff75e13564bb3221e7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5a5b865445d63854a240c075831af0131336bbb4c04cc2b1e98c01d258ae8e83 = $this->env->getExtension("native_profiler");
        $__internal_5a5b865445d63854a240c075831af0131336bbb4c04cc2b1e98c01d258ae8e83->enter($__internal_5a5b865445d63854a240c075831af0131336bbb4c04cc2b1e98c01d258ae8e83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div>
        <p>Welcome to dashboard</p>
    </div>
";
        
        $__internal_5a5b865445d63854a240c075831af0131336bbb4c04cc2b1e98c01d258ae8e83->leave($__internal_5a5b865445d63854a240c075831af0131336bbb4c04cc2b1e98c01d258ae8e83_prof);

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
        return array (  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends ':admin:admin_layout.html.twig' %}*/
/* */
/* {% block headTitle %}Dashboard{% endblock %}*/
/* */
/* {% block body %}*/
/*     <div>*/
/*         <p>Welcome to dashboard</p>*/
/*     </div>*/
/* {% endblock %}*/
