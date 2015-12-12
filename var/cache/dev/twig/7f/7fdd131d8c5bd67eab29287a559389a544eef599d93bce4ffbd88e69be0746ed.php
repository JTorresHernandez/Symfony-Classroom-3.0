<?php

/* TwigBundle:Exception:error404.html.twig */
class __TwigTemplate_7e611c27757203cbc530905f667861034d646161d367f3bdb2c5efb2d3d3ec5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "TwigBundle:Exception:error404.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_22bea0cbd5e1c06ef4ea8bde26209a3c012178a70f4d6f69bf61a262c426dfba = $this->env->getExtension("native_profiler");
        $__internal_22bea0cbd5e1c06ef4ea8bde26209a3c012178a70f4d6f69bf61a262c426dfba->enter($__internal_22bea0cbd5e1c06ef4ea8bde26209a3c012178a70f4d6f69bf61a262c426dfba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error404.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22bea0cbd5e1c06ef4ea8bde26209a3c012178a70f4d6f69bf61a262c426dfba->leave($__internal_22bea0cbd5e1c06ef4ea8bde26209a3c012178a70f4d6f69bf61a262c426dfba_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c2665f5049a59e92aef58b004a0d0262c27fa4c1add6a0225cc35a10e24145f7 = $this->env->getExtension("native_profiler");
        $__internal_c2665f5049a59e92aef58b004a0d0262c27fa4c1add6a0225cc35a10e24145f7->enter($__internal_c2665f5049a59e92aef58b004a0d0262c27fa4c1add6a0225cc35a10e24145f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>404 - Page not found</h1>

    ";
        // line 7
        echo "    ";
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 8
            echo "        ";
            // line 9
            echo "    ";
        }
        // line 10
        echo "
    <p>
        The requested page couldn't be located. Checkout for any URL
        misspelling or <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("app_article_articles");
        echo "\">return to the homepage</a>.
    </p>
";
        
        $__internal_c2665f5049a59e92aef58b004a0d0262c27fa4c1add6a0225cc35a10e24145f7->leave($__internal_c2665f5049a59e92aef58b004a0d0262c27fa4c1add6a0225cc35a10e24145f7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 13,  52 => 10,  49 => 9,  47 => 8,  44 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>404 - Page not found</h1>*/
/* */
/*     {# example security usage, see below #}*/
/*     {% if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/*         {# ... #}*/
/*     {% endif %}*/
/* */
/*     <p>*/
/*         The requested page couldn't be located. Checkout for any URL*/
/*         misspelling or <a href="{{ path('app_article_articles') }}">return to the homepage</a>.*/
/*     </p>*/
/* {% endblock %}*/
