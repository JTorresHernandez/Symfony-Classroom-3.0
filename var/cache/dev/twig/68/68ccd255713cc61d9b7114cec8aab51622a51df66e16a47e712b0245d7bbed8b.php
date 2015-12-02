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
        $__internal_a7527bf4968ac2d916bbae90dd8f822d6877b24a3a3b21553c78cfed93c7bc03 = $this->env->getExtension("native_profiler");
        $__internal_a7527bf4968ac2d916bbae90dd8f822d6877b24a3a3b21553c78cfed93c7bc03->enter($__internal_a7527bf4968ac2d916bbae90dd8f822d6877b24a3a3b21553c78cfed93c7bc03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_a7527bf4968ac2d916bbae90dd8f822d6877b24a3a3b21553c78cfed93c7bc03->leave($__internal_a7527bf4968ac2d916bbae90dd8f822d6877b24a3a3b21553c78cfed93c7bc03_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8ee30fd308383d975c9381d63f4573a84d1f2bc702e0f8bd7b00cf35665c64a8 = $this->env->getExtension("native_profiler");
        $__internal_8ee30fd308383d975c9381d63f4573a84d1f2bc702e0f8bd7b00cf35665c64a8->enter($__internal_8ee30fd308383d975c9381d63f4573a84d1f2bc702e0f8bd7b00cf35665c64a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8ee30fd308383d975c9381d63f4573a84d1f2bc702e0f8bd7b00cf35665c64a8->leave($__internal_8ee30fd308383d975c9381d63f4573a84d1f2bc702e0f8bd7b00cf35665c64a8_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0e603efacd7dbff5cb3ddd0fd10052ec3345be64534ed3b0462e31f42f54fdba = $this->env->getExtension("native_profiler");
        $__internal_0e603efacd7dbff5cb3ddd0fd10052ec3345be64534ed3b0462e31f42f54fdba->enter($__internal_0e603efacd7dbff5cb3ddd0fd10052ec3345be64534ed3b0462e31f42f54fdba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0e603efacd7dbff5cb3ddd0fd10052ec3345be64534ed3b0462e31f42f54fdba->leave($__internal_0e603efacd7dbff5cb3ddd0fd10052ec3345be64534ed3b0462e31f42f54fdba_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_195d71d6364a2fd646284b6a0c0cd9df99545947fccd1b2b07da96568cf7ffa5 = $this->env->getExtension("native_profiler");
        $__internal_195d71d6364a2fd646284b6a0c0cd9df99545947fccd1b2b07da96568cf7ffa5->enter($__internal_195d71d6364a2fd646284b6a0c0cd9df99545947fccd1b2b07da96568cf7ffa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_195d71d6364a2fd646284b6a0c0cd9df99545947fccd1b2b07da96568cf7ffa5->leave($__internal_195d71d6364a2fd646284b6a0c0cd9df99545947fccd1b2b07da96568cf7ffa5_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f544877d427392a55ee8635fb29d7933686022fdfe774f04b7b1b1de4bbba69e = $this->env->getExtension("native_profiler");
        $__internal_f544877d427392a55ee8635fb29d7933686022fdfe774f04b7b1b1de4bbba69e->enter($__internal_f544877d427392a55ee8635fb29d7933686022fdfe774f04b7b1b1de4bbba69e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f544877d427392a55ee8635fb29d7933686022fdfe774f04b7b1b1de4bbba69e->leave($__internal_f544877d427392a55ee8635fb29d7933686022fdfe774f04b7b1b1de4bbba69e_prof);

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
