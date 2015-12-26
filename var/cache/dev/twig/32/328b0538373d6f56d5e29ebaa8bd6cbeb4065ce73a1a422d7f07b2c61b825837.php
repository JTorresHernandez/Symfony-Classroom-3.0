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
        $__internal_6bf859ff413aad00e0d6deed2266f32dfeb23ae3f4740c8401e4c1e9310c3c8b = $this->env->getExtension("native_profiler");
        $__internal_6bf859ff413aad00e0d6deed2266f32dfeb23ae3f4740c8401e4c1e9310c3c8b->enter($__internal_6bf859ff413aad00e0d6deed2266f32dfeb23ae3f4740c8401e4c1e9310c3c8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin/index:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6bf859ff413aad00e0d6deed2266f32dfeb23ae3f4740c8401e4c1e9310c3c8b->leave($__internal_6bf859ff413aad00e0d6deed2266f32dfeb23ae3f4740c8401e4c1e9310c3c8b_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_14ccb61f96dc355483bc1973c6ae5a25fbf9a44a6c9e91f0e388c399d5e5f027 = $this->env->getExtension("native_profiler");
        $__internal_14ccb61f96dc355483bc1973c6ae5a25fbf9a44a6c9e91f0e388c399d5e5f027->enter($__internal_14ccb61f96dc355483bc1973c6ae5a25fbf9a44a6c9e91f0e388c399d5e5f027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo "Dashboard";
        
        $__internal_14ccb61f96dc355483bc1973c6ae5a25fbf9a44a6c9e91f0e388c399d5e5f027->leave($__internal_14ccb61f96dc355483bc1973c6ae5a25fbf9a44a6c9e91f0e388c399d5e5f027_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a1954457e671143ad395f1663acfb5403f98108e5424f4e68f7e7ca400021471 = $this->env->getExtension("native_profiler");
        $__internal_a1954457e671143ad395f1663acfb5403f98108e5424f4e68f7e7ca400021471->enter($__internal_a1954457e671143ad395f1663acfb5403f98108e5424f4e68f7e7ca400021471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div>
        <p>Welcome to dashboard</p>
    </div>
";
        
        $__internal_a1954457e671143ad395f1663acfb5403f98108e5424f4e68f7e7ca400021471->leave($__internal_a1954457e671143ad395f1663acfb5403f98108e5424f4e68f7e7ca400021471_prof);

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
