<?php

/* base.html.twig */
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
        $__internal_7ba41d6a7ba02fdec6824c22d8a2c4f76e9d06169be6b20e76e57ba206dc09a5 = $this->env->getExtension("native_profiler");
        $__internal_7ba41d6a7ba02fdec6824c22d8a2c4f76e9d06169be6b20e76e57ba206dc09a5->enter($__internal_7ba41d6a7ba02fdec6824c22d8a2c4f76e9d06169be6b20e76e57ba206dc09a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_7ba41d6a7ba02fdec6824c22d8a2c4f76e9d06169be6b20e76e57ba206dc09a5->leave($__internal_7ba41d6a7ba02fdec6824c22d8a2c4f76e9d06169be6b20e76e57ba206dc09a5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_26f5c53347249863d0b93d6e0d3a0fb88baafd3ac54ec0c1877dc486c3b09e2c = $this->env->getExtension("native_profiler");
        $__internal_26f5c53347249863d0b93d6e0d3a0fb88baafd3ac54ec0c1877dc486c3b09e2c->enter($__internal_26f5c53347249863d0b93d6e0d3a0fb88baafd3ac54ec0c1877dc486c3b09e2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_26f5c53347249863d0b93d6e0d3a0fb88baafd3ac54ec0c1877dc486c3b09e2c->leave($__internal_26f5c53347249863d0b93d6e0d3a0fb88baafd3ac54ec0c1877dc486c3b09e2c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4834a78e26eaf2c58a24dd4d4d43f5f6b16fd312016271da91099dcf1c0f12b9 = $this->env->getExtension("native_profiler");
        $__internal_4834a78e26eaf2c58a24dd4d4d43f5f6b16fd312016271da91099dcf1c0f12b9->enter($__internal_4834a78e26eaf2c58a24dd4d4d43f5f6b16fd312016271da91099dcf1c0f12b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4834a78e26eaf2c58a24dd4d4d43f5f6b16fd312016271da91099dcf1c0f12b9->leave($__internal_4834a78e26eaf2c58a24dd4d4d43f5f6b16fd312016271da91099dcf1c0f12b9_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_2ce07012caa3ca30e2d2123728341e4e309675775d6b225ae3976d6a76dd20f7 = $this->env->getExtension("native_profiler");
        $__internal_2ce07012caa3ca30e2d2123728341e4e309675775d6b225ae3976d6a76dd20f7->enter($__internal_2ce07012caa3ca30e2d2123728341e4e309675775d6b225ae3976d6a76dd20f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2ce07012caa3ca30e2d2123728341e4e309675775d6b225ae3976d6a76dd20f7->leave($__internal_2ce07012caa3ca30e2d2123728341e4e309675775d6b225ae3976d6a76dd20f7_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e61f7c16f1223effa5e1b9ef5482c04482e12b976e4562374dd94bc5141a7e13 = $this->env->getExtension("native_profiler");
        $__internal_e61f7c16f1223effa5e1b9ef5482c04482e12b976e4562374dd94bc5141a7e13->enter($__internal_e61f7c16f1223effa5e1b9ef5482c04482e12b976e4562374dd94bc5141a7e13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e61f7c16f1223effa5e1b9ef5482c04482e12b976e4562374dd94bc5141a7e13->leave($__internal_e61f7c16f1223effa5e1b9ef5482c04482e12b976e4562374dd94bc5141a7e13_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
