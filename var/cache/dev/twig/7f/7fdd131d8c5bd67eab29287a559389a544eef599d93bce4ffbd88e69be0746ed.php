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
        $__internal_d2038b982ea42eb4a25e27a93cae6c59bafe0dcbbce07a7cb1b3eaba37d9461a = $this->env->getExtension("native_profiler");
        $__internal_d2038b982ea42eb4a25e27a93cae6c59bafe0dcbbce07a7cb1b3eaba37d9461a->enter($__internal_d2038b982ea42eb4a25e27a93cae6c59bafe0dcbbce07a7cb1b3eaba37d9461a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error404.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2038b982ea42eb4a25e27a93cae6c59bafe0dcbbce07a7cb1b3eaba37d9461a->leave($__internal_d2038b982ea42eb4a25e27a93cae6c59bafe0dcbbce07a7cb1b3eaba37d9461a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b8a86025ed47d014f43a88153edc8d17f2b03095c456fbdeff04dfa9925758e1 = $this->env->getExtension("native_profiler");
        $__internal_b8a86025ed47d014f43a88153edc8d17f2b03095c456fbdeff04dfa9925758e1->enter($__internal_b8a86025ed47d014f43a88153edc8d17f2b03095c456fbdeff04dfa9925758e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b8a86025ed47d014f43a88153edc8d17f2b03095c456fbdeff04dfa9925758e1->leave($__internal_b8a86025ed47d014f43a88153edc8d17f2b03095c456fbdeff04dfa9925758e1_prof);

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
