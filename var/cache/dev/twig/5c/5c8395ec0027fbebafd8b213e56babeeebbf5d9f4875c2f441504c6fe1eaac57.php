<?php

/* TwigBundle:Exception:error403.html.twig */
class __TwigTemplate_63a4bf55904b10c10e39df2a366c3c0657b62de85758a3c017b0427418fce2b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "TwigBundle:Exception:error403.html.twig", 1);
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
        $__internal_39751bc66a7ef91a392be94ccce34c370b5e48617b703a991d9c2cf092443955 = $this->env->getExtension("native_profiler");
        $__internal_39751bc66a7ef91a392be94ccce34c370b5e48617b703a991d9c2cf092443955->enter($__internal_39751bc66a7ef91a392be94ccce34c370b5e48617b703a991d9c2cf092443955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error403.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39751bc66a7ef91a392be94ccce34c370b5e48617b703a991d9c2cf092443955->leave($__internal_39751bc66a7ef91a392be94ccce34c370b5e48617b703a991d9c2cf092443955_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_495ac55f038ca4c205b3ed24462637c749cc0b703a6783efeb5eaf689d684b2e = $this->env->getExtension("native_profiler");
        $__internal_495ac55f038ca4c205b3ed24462637c749cc0b703a6783efeb5eaf689d684b2e->enter($__internal_495ac55f038ca4c205b3ed24462637c749cc0b703a6783efeb5eaf689d684b2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Error 403 - Forbidden</h1>

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
        You do not have enough privileges to access this page <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("app_article_articles");
        echo "\">return to the homepage</a>.
    </p>
";
        
        $__internal_495ac55f038ca4c205b3ed24462637c749cc0b703a6783efeb5eaf689d684b2e->leave($__internal_495ac55f038ca4c205b3ed24462637c749cc0b703a6783efeb5eaf689d684b2e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error403.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 12,  52 => 10,  49 => 9,  47 => 8,  44 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Error 403 - Forbidden</h1>*/
/* */
/*     {# example security usage, see below #}*/
/*     {% if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/*         {# ... #}*/
/*     {% endif %}*/
/* */
/*     <p>*/
/*         You do not have enough privileges to access this page <a href="{{ path('app_article_articles') }}">return to the homepage</a>.*/
/*     </p>*/
/* {% endblock %}*/
