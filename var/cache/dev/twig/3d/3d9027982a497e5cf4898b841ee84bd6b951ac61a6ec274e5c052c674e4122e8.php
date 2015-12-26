<?php

/* TwigBundle:Exception:error404.html.twig */
class __TwigTemplate_4bc2057146876dcc3ace6ad4884953fd9283888e2bc1f37c6e37f2fde9498109 extends Twig_Template
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
        $__internal_37989463f3220609819030cdaff3967b47f04a96475c9feaa79e233c5a29a913 = $this->env->getExtension("native_profiler");
        $__internal_37989463f3220609819030cdaff3967b47f04a96475c9feaa79e233c5a29a913->enter($__internal_37989463f3220609819030cdaff3967b47f04a96475c9feaa79e233c5a29a913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error404.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37989463f3220609819030cdaff3967b47f04a96475c9feaa79e233c5a29a913->leave($__internal_37989463f3220609819030cdaff3967b47f04a96475c9feaa79e233c5a29a913_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6e91bb7f36ac27c51b13c2bf7f416d3c0f2498bc5abb88d44d334793af3b92a9 = $this->env->getExtension("native_profiler");
        $__internal_6e91bb7f36ac27c51b13c2bf7f416d3c0f2498bc5abb88d44d334793af3b92a9->enter($__internal_6e91bb7f36ac27c51b13c2bf7f416d3c0f2498bc5abb88d44d334793af3b92a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6e91bb7f36ac27c51b13c2bf7f416d3c0f2498bc5abb88d44d334793af3b92a9->leave($__internal_6e91bb7f36ac27c51b13c2bf7f416d3c0f2498bc5abb88d44d334793af3b92a9_prof);

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
