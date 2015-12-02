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
        $__internal_197790b9b94fe3e2475ccab02e635e40ed21a4e5cbbca00acc8615bf076890c3 = $this->env->getExtension("native_profiler");
        $__internal_197790b9b94fe3e2475ccab02e635e40ed21a4e5cbbca00acc8615bf076890c3->enter($__internal_197790b9b94fe3e2475ccab02e635e40ed21a4e5cbbca00acc8615bf076890c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_197790b9b94fe3e2475ccab02e635e40ed21a4e5cbbca00acc8615bf076890c3->leave($__internal_197790b9b94fe3e2475ccab02e635e40ed21a4e5cbbca00acc8615bf076890c3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3ef925bf1b364223d1ea58b83bf0dc3c2641451c3777602e99db7276ebc239ba = $this->env->getExtension("native_profiler");
        $__internal_3ef925bf1b364223d1ea58b83bf0dc3c2641451c3777602e99db7276ebc239ba->enter($__internal_3ef925bf1b364223d1ea58b83bf0dc3c2641451c3777602e99db7276ebc239ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3ef925bf1b364223d1ea58b83bf0dc3c2641451c3777602e99db7276ebc239ba->leave($__internal_3ef925bf1b364223d1ea58b83bf0dc3c2641451c3777602e99db7276ebc239ba_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d87a13c94a05006b974bdce7f365e2858d30c8948bb2743e0de18ab8c0fbdc16 = $this->env->getExtension("native_profiler");
        $__internal_d87a13c94a05006b974bdce7f365e2858d30c8948bb2743e0de18ab8c0fbdc16->enter($__internal_d87a13c94a05006b974bdce7f365e2858d30c8948bb2743e0de18ab8c0fbdc16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d87a13c94a05006b974bdce7f365e2858d30c8948bb2743e0de18ab8c0fbdc16->leave($__internal_d87a13c94a05006b974bdce7f365e2858d30c8948bb2743e0de18ab8c0fbdc16_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_52d212ea69c5499968d6bcca8eccd31da7c52d5ef15f8f1042831df63a2cf041 = $this->env->getExtension("native_profiler");
        $__internal_52d212ea69c5499968d6bcca8eccd31da7c52d5ef15f8f1042831df63a2cf041->enter($__internal_52d212ea69c5499968d6bcca8eccd31da7c52d5ef15f8f1042831df63a2cf041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_52d212ea69c5499968d6bcca8eccd31da7c52d5ef15f8f1042831df63a2cf041->leave($__internal_52d212ea69c5499968d6bcca8eccd31da7c52d5ef15f8f1042831df63a2cf041_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ee59c1c44b9ee7ebeb7ed0c63aef11035a67563f8606852232774a1221d19a4a = $this->env->getExtension("native_profiler");
        $__internal_ee59c1c44b9ee7ebeb7ed0c63aef11035a67563f8606852232774a1221d19a4a->enter($__internal_ee59c1c44b9ee7ebeb7ed0c63aef11035a67563f8606852232774a1221d19a4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ee59c1c44b9ee7ebeb7ed0c63aef11035a67563f8606852232774a1221d19a4a->leave($__internal_ee59c1c44b9ee7ebeb7ed0c63aef11035a67563f8606852232774a1221d19a4a_prof);

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
