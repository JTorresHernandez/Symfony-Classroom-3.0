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
        $__internal_72faf96adb4e36928c43684312c3dd313ff96a5b9d33766d742ee081e76c783f = $this->env->getExtension("native_profiler");
        $__internal_72faf96adb4e36928c43684312c3dd313ff96a5b9d33766d742ee081e76c783f->enter($__internal_72faf96adb4e36928c43684312c3dd313ff96a5b9d33766d742ee081e76c783f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error403.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72faf96adb4e36928c43684312c3dd313ff96a5b9d33766d742ee081e76c783f->leave($__internal_72faf96adb4e36928c43684312c3dd313ff96a5b9d33766d742ee081e76c783f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b4de8abbe559e0f6857232ed3ebd87596b02bdcb1eb17bd1cb553bf79f62fd41 = $this->env->getExtension("native_profiler");
        $__internal_b4de8abbe559e0f6857232ed3ebd87596b02bdcb1eb17bd1cb553bf79f62fd41->enter($__internal_b4de8abbe559e0f6857232ed3ebd87596b02bdcb1eb17bd1cb553bf79f62fd41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b4de8abbe559e0f6857232ed3ebd87596b02bdcb1eb17bd1cb553bf79f62fd41->leave($__internal_b4de8abbe559e0f6857232ed3ebd87596b02bdcb1eb17bd1cb553bf79f62fd41_prof);

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
