<?php

/* :article:form.html.twig */
class __TwigTemplate_baf1800b6270251c48ea5efbb13d1940e14b72814141264eb7fab4ca07755c5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", ":article:form.html.twig", 1);
        $this->blocks = array(
            'headTitle' => array($this, 'block_headTitle'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3024c8e5f06766fbfd7abbea907464a9d9888c1fd8d491fd8734d75d45f96f2a = $this->env->getExtension("native_profiler");
        $__internal_3024c8e5f06766fbfd7abbea907464a9d9888c1fd8d491fd8734d75d45f96f2a->enter($__internal_3024c8e5f06766fbfd7abbea907464a9d9888c1fd8d491fd8734d75d45f96f2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3024c8e5f06766fbfd7abbea907464a9d9888c1fd8d491fd8734d75d45f96f2a->leave($__internal_3024c8e5f06766fbfd7abbea907464a9d9888c1fd8d491fd8734d75d45f96f2a_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_6f8e2269e541c815b317d9124aaba593f7e37f0383de61e0209a2249938c8875 = $this->env->getExtension("native_profiler");
        $__internal_6f8e2269e541c815b317d9124aaba593f7e37f0383de61e0209a2249938c8875->enter($__internal_6f8e2269e541c815b317d9124aaba593f7e37f0383de61e0209a2249938c8875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        
        $__internal_6f8e2269e541c815b317d9124aaba593f7e37f0383de61e0209a2249938c8875->leave($__internal_6f8e2269e541c815b317d9124aaba593f7e37f0383de61e0209a2249938c8875_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4bdd11b9b3cabcd3a16f2eea4742c54e911029c1c201ed61510c954d69d8110b = $this->env->getExtension("native_profiler");
        $__internal_4bdd11b9b3cabcd3a16f2eea4742c54e911029c1c201ed61510c954d69d8110b->enter($__internal_4bdd11b9b3cabcd3a16f2eea4742c54e911029c1c201ed61510c954d69d8110b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_4bdd11b9b3cabcd3a16f2eea4742c54e911029c1c201ed61510c954d69d8110b->leave($__internal_4bdd11b9b3cabcd3a16f2eea4742c54e911029c1c201ed61510c954d69d8110b_prof);

    }

    public function getTemplateName()
    {
        return ":article:form.html.twig";
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
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block headTitle %}{{ title }}{% endblock %}*/
/* */
/* {% block body %}*/
/*     {{ form(form) }}*/
/* {% endblock %}*/
