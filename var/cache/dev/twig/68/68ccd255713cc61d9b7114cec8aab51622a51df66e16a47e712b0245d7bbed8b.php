<?php

/* ::base.html.twig */
class __TwigTemplate_559bdfa52914282f14fb3dfea2d683ab67b6b0d40b11d3017e21faf62309c157 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_27865a2075f86aac4acc7cd73cb98f3bde2420c1a01bc238eca63dd554bf1c5b = $this->env->getExtension("native_profiler");
        $__internal_27865a2075f86aac4acc7cd73cb98f3bde2420c1a01bc238eca63dd554bf1c5b->enter($__internal_27865a2075f86aac4acc7cd73cb98f3bde2420c1a01bc238eca63dd554bf1c5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div style=\"text-align: right\">
            <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("app_user_menu");
        echo "\">Index</a>
        </div>
        <ul>
            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "messages"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 15
            echo "                <li>";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "        </ul>
        ";
        // line 18
        $this->displayBlock('body', $context, $blocks);
        // line 19
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 20
        echo "    </body>
</html>
";
        
        $__internal_27865a2075f86aac4acc7cd73cb98f3bde2420c1a01bc238eca63dd554bf1c5b->leave($__internal_27865a2075f86aac4acc7cd73cb98f3bde2420c1a01bc238eca63dd554bf1c5b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fd38c06459cbef00c72d595bb77c56ad94ee0bfc39a31139ba091952a218ae95 = $this->env->getExtension("native_profiler");
        $__internal_fd38c06459cbef00c72d595bb77c56ad94ee0bfc39a31139ba091952a218ae95->enter($__internal_fd38c06459cbef00c72d595bb77c56ad94ee0bfc39a31139ba091952a218ae95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_fd38c06459cbef00c72d595bb77c56ad94ee0bfc39a31139ba091952a218ae95->leave($__internal_fd38c06459cbef00c72d595bb77c56ad94ee0bfc39a31139ba091952a218ae95_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_69602d3e066257dd7f93729ddf50b787f3b0fb3eae36936f828c1d246e11c9dc = $this->env->getExtension("native_profiler");
        $__internal_69602d3e066257dd7f93729ddf50b787f3b0fb3eae36936f828c1d246e11c9dc->enter($__internal_69602d3e066257dd7f93729ddf50b787f3b0fb3eae36936f828c1d246e11c9dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_69602d3e066257dd7f93729ddf50b787f3b0fb3eae36936f828c1d246e11c9dc->leave($__internal_69602d3e066257dd7f93729ddf50b787f3b0fb3eae36936f828c1d246e11c9dc_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_3d78b6421efbf8a41a98c43fd9395180ac06b38c75c271a28083688e03c801a1 = $this->env->getExtension("native_profiler");
        $__internal_3d78b6421efbf8a41a98c43fd9395180ac06b38c75c271a28083688e03c801a1->enter($__internal_3d78b6421efbf8a41a98c43fd9395180ac06b38c75c271a28083688e03c801a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3d78b6421efbf8a41a98c43fd9395180ac06b38c75c271a28083688e03c801a1->leave($__internal_3d78b6421efbf8a41a98c43fd9395180ac06b38c75c271a28083688e03c801a1_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d1490873ebcc221b512fccc1c4f40813dfc9a622d4968a96b3582862fa4d9cf3 = $this->env->getExtension("native_profiler");
        $__internal_d1490873ebcc221b512fccc1c4f40813dfc9a622d4968a96b3582862fa4d9cf3->enter($__internal_d1490873ebcc221b512fccc1c4f40813dfc9a622d4968a96b3582862fa4d9cf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d1490873ebcc221b512fccc1c4f40813dfc9a622d4968a96b3582862fa4d9cf3->leave($__internal_d1490873ebcc221b512fccc1c4f40813dfc9a622d4968a96b3582862fa4d9cf3_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 19,  105 => 18,  94 => 6,  82 => 5,  73 => 20,  70 => 19,  68 => 18,  65 => 17,  56 => 15,  52 => 14,  46 => 11,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         <div style="text-align: right">*/
/*             <a href="{{ path('app_user_menu') }}">Index</a>*/
/*         </div>*/
/*         <ul>*/
/*             {% for message in app.session.flashBag.get('messages') %}*/
/*                 <li>{{ message }}</li>*/
/*             {% endfor %}*/
/*         </ul>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
