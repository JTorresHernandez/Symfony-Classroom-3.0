<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_79393f6542bef229fa71f7d51a9f2e80f75b6b8e468336634ec832ffdcf56fea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_968455042f1e49264b9f806a4841b604b16c315ffa07c0fcb6d8ae7055549861 = $this->env->getExtension("native_profiler");
        $__internal_968455042f1e49264b9f806a4841b604b16c315ffa07c0fcb6d8ae7055549861->enter($__internal_968455042f1e49264b9f806a4841b604b16c315ffa07c0fcb6d8ae7055549861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_968455042f1e49264b9f806a4841b604b16c315ffa07c0fcb6d8ae7055549861->leave($__internal_968455042f1e49264b9f806a4841b604b16c315ffa07c0fcb6d8ae7055549861_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fc57bd51f29da3dee21385829ffa51a16ae55a10062a8476db11ee536511d857 = $this->env->getExtension("native_profiler");
        $__internal_fc57bd51f29da3dee21385829ffa51a16ae55a10062a8476db11ee536511d857->enter($__internal_fc57bd51f29da3dee21385829ffa51a16ae55a10062a8476db11ee536511d857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fc57bd51f29da3dee21385829ffa51a16ae55a10062a8476db11ee536511d857->leave($__internal_fc57bd51f29da3dee21385829ffa51a16ae55a10062a8476db11ee536511d857_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2178159077e9ca8743cd3fd2f42a9da1e3389c0cdb2ee1d161c9c2ae62ccd031 = $this->env->getExtension("native_profiler");
        $__internal_2178159077e9ca8743cd3fd2f42a9da1e3389c0cdb2ee1d161c9c2ae62ccd031->enter($__internal_2178159077e9ca8743cd3fd2f42a9da1e3389c0cdb2ee1d161c9c2ae62ccd031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2178159077e9ca8743cd3fd2f42a9da1e3389c0cdb2ee1d161c9c2ae62ccd031->leave($__internal_2178159077e9ca8743cd3fd2f42a9da1e3389c0cdb2ee1d161c9c2ae62ccd031_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d53d94d45294d49dceb540c074f5d6a78993826e7f4177bb9f4f7fb822176aac = $this->env->getExtension("native_profiler");
        $__internal_d53d94d45294d49dceb540c074f5d6a78993826e7f4177bb9f4f7fb822176aac->enter($__internal_d53d94d45294d49dceb540c074f5d6a78993826e7f4177bb9f4f7fb822176aac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d53d94d45294d49dceb540c074f5d6a78993826e7f4177bb9f4f7fb822176aac->leave($__internal_d53d94d45294d49dceb540c074f5d6a78993826e7f4177bb9f4f7fb822176aac_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
