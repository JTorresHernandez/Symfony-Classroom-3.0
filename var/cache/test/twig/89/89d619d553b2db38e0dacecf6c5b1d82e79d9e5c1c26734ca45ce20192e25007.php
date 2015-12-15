<?php

/* :admin/index:index.html.twig */
class __TwigTemplate_90d17780bbaebf6e7246c718c5f193e9540846ff1040d475697c2f30d3a66263 extends Twig_Template
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
        $__internal_79ce0682acc8f444807e380e14659fa1239e50222cb8e6dbccd7717e10c5be17 = $this->env->getExtension("native_profiler");
        $__internal_79ce0682acc8f444807e380e14659fa1239e50222cb8e6dbccd7717e10c5be17->enter($__internal_79ce0682acc8f444807e380e14659fa1239e50222cb8e6dbccd7717e10c5be17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin/index:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79ce0682acc8f444807e380e14659fa1239e50222cb8e6dbccd7717e10c5be17->leave($__internal_79ce0682acc8f444807e380e14659fa1239e50222cb8e6dbccd7717e10c5be17_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_802ec5371a9052ec9af40261437046ed686c9ec8576c66ac82d762bdaab47860 = $this->env->getExtension("native_profiler");
        $__internal_802ec5371a9052ec9af40261437046ed686c9ec8576c66ac82d762bdaab47860->enter($__internal_802ec5371a9052ec9af40261437046ed686c9ec8576c66ac82d762bdaab47860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo "Dashboard";
        
        $__internal_802ec5371a9052ec9af40261437046ed686c9ec8576c66ac82d762bdaab47860->leave($__internal_802ec5371a9052ec9af40261437046ed686c9ec8576c66ac82d762bdaab47860_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c550b1807421204146718a709ae7aa468a4dffad4fc57f4b91e907173416d21 = $this->env->getExtension("native_profiler");
        $__internal_8c550b1807421204146718a709ae7aa468a4dffad4fc57f4b91e907173416d21->enter($__internal_8c550b1807421204146718a709ae7aa468a4dffad4fc57f4b91e907173416d21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div>
        <p>Welcome to dashboard</p>
    </div>
";
        
        $__internal_8c550b1807421204146718a709ae7aa468a4dffad4fc57f4b91e907173416d21->leave($__internal_8c550b1807421204146718a709ae7aa468a4dffad4fc57f4b91e907173416d21_prof);

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
