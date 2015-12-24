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
        $__internal_6da1d692d42c162ae8e4cbefc392f385621ff09469ffee5bd7504f9ce14329ad = $this->env->getExtension("native_profiler");
        $__internal_6da1d692d42c162ae8e4cbefc392f385621ff09469ffee5bd7504f9ce14329ad->enter($__internal_6da1d692d42c162ae8e4cbefc392f385621ff09469ffee5bd7504f9ce14329ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin/index:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6da1d692d42c162ae8e4cbefc392f385621ff09469ffee5bd7504f9ce14329ad->leave($__internal_6da1d692d42c162ae8e4cbefc392f385621ff09469ffee5bd7504f9ce14329ad_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_3c6fa111a33eaea7d68abcd6a12fb923178b5a472ab9cb7306ca542a3f73c38d = $this->env->getExtension("native_profiler");
        $__internal_3c6fa111a33eaea7d68abcd6a12fb923178b5a472ab9cb7306ca542a3f73c38d->enter($__internal_3c6fa111a33eaea7d68abcd6a12fb923178b5a472ab9cb7306ca542a3f73c38d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo "Dashboard";
        
        $__internal_3c6fa111a33eaea7d68abcd6a12fb923178b5a472ab9cb7306ca542a3f73c38d->leave($__internal_3c6fa111a33eaea7d68abcd6a12fb923178b5a472ab9cb7306ca542a3f73c38d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_813f405b3b220edd2933848cb6eb849b6de309540145b8dcb39fdf725eea057e = $this->env->getExtension("native_profiler");
        $__internal_813f405b3b220edd2933848cb6eb849b6de309540145b8dcb39fdf725eea057e->enter($__internal_813f405b3b220edd2933848cb6eb849b6de309540145b8dcb39fdf725eea057e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div>
        <p>Welcome to dashboard</p>
    </div>
";
        
        $__internal_813f405b3b220edd2933848cb6eb849b6de309540145b8dcb39fdf725eea057e->leave($__internal_813f405b3b220edd2933848cb6eb849b6de309540145b8dcb39fdf725eea057e_prof);

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
