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
        $__internal_0e4910738574c5a0e20f486b53400e4ec78118f037919f351c93e409b08da7c3 = $this->env->getExtension("native_profiler");
        $__internal_0e4910738574c5a0e20f486b53400e4ec78118f037919f351c93e409b08da7c3->enter($__internal_0e4910738574c5a0e20f486b53400e4ec78118f037919f351c93e409b08da7c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin/index:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e4910738574c5a0e20f486b53400e4ec78118f037919f351c93e409b08da7c3->leave($__internal_0e4910738574c5a0e20f486b53400e4ec78118f037919f351c93e409b08da7c3_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_0280255867bcec938e3d18061fe130541d9ffd1e53d59e7726856aac984557de = $this->env->getExtension("native_profiler");
        $__internal_0280255867bcec938e3d18061fe130541d9ffd1e53d59e7726856aac984557de->enter($__internal_0280255867bcec938e3d18061fe130541d9ffd1e53d59e7726856aac984557de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo "Dashboard";
        
        $__internal_0280255867bcec938e3d18061fe130541d9ffd1e53d59e7726856aac984557de->leave($__internal_0280255867bcec938e3d18061fe130541d9ffd1e53d59e7726856aac984557de_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3a2cebcf3b7be7667d5798f072270672fb557d36b09ae57f9231dc71c0f7d24e = $this->env->getExtension("native_profiler");
        $__internal_3a2cebcf3b7be7667d5798f072270672fb557d36b09ae57f9231dc71c0f7d24e->enter($__internal_3a2cebcf3b7be7667d5798f072270672fb557d36b09ae57f9231dc71c0f7d24e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div>
        <p>Welcome to dashboard</p>
    </div>
";
        
        $__internal_3a2cebcf3b7be7667d5798f072270672fb557d36b09ae57f9231dc71c0f7d24e->leave($__internal_3a2cebcf3b7be7667d5798f072270672fb557d36b09ae57f9231dc71c0f7d24e_prof);

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
