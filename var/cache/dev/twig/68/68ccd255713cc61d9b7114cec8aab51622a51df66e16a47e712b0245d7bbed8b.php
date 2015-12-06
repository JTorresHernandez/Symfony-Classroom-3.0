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
        $__internal_36c26435b5a87a2342ae9eff009968b37783e71d84521442b0c49830505cb3ae = $this->env->getExtension("native_profiler");
        $__internal_36c26435b5a87a2342ae9eff009968b37783e71d84521442b0c49830505cb3ae->enter($__internal_36c26435b5a87a2342ae9eff009968b37783e71d84521442b0c49830505cb3ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_36c26435b5a87a2342ae9eff009968b37783e71d84521442b0c49830505cb3ae->leave($__internal_36c26435b5a87a2342ae9eff009968b37783e71d84521442b0c49830505cb3ae_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0c946df70af1f8dbd10c53671f4a77c12baf5a3e352aeeb26a0a4458a2e01590 = $this->env->getExtension("native_profiler");
        $__internal_0c946df70af1f8dbd10c53671f4a77c12baf5a3e352aeeb26a0a4458a2e01590->enter($__internal_0c946df70af1f8dbd10c53671f4a77c12baf5a3e352aeeb26a0a4458a2e01590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_0c946df70af1f8dbd10c53671f4a77c12baf5a3e352aeeb26a0a4458a2e01590->leave($__internal_0c946df70af1f8dbd10c53671f4a77c12baf5a3e352aeeb26a0a4458a2e01590_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0c9d1e2231fe8ed6dce2986f89a3252f66c62cce7f321b5842756cad2c59328a = $this->env->getExtension("native_profiler");
        $__internal_0c9d1e2231fe8ed6dce2986f89a3252f66c62cce7f321b5842756cad2c59328a->enter($__internal_0c9d1e2231fe8ed6dce2986f89a3252f66c62cce7f321b5842756cad2c59328a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0c9d1e2231fe8ed6dce2986f89a3252f66c62cce7f321b5842756cad2c59328a->leave($__internal_0c9d1e2231fe8ed6dce2986f89a3252f66c62cce7f321b5842756cad2c59328a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_2c6cdc9795a910f34a45453ffaf40c26c6c0114f76fd41157c8554fdafc36efb = $this->env->getExtension("native_profiler");
        $__internal_2c6cdc9795a910f34a45453ffaf40c26c6c0114f76fd41157c8554fdafc36efb->enter($__internal_2c6cdc9795a910f34a45453ffaf40c26c6c0114f76fd41157c8554fdafc36efb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2c6cdc9795a910f34a45453ffaf40c26c6c0114f76fd41157c8554fdafc36efb->leave($__internal_2c6cdc9795a910f34a45453ffaf40c26c6c0114f76fd41157c8554fdafc36efb_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_199e28f788940017e45de27117b2802c96765a359939795ac33a21e3f3279bff = $this->env->getExtension("native_profiler");
        $__internal_199e28f788940017e45de27117b2802c96765a359939795ac33a21e3f3279bff->enter($__internal_199e28f788940017e45de27117b2802c96765a359939795ac33a21e3f3279bff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_199e28f788940017e45de27117b2802c96765a359939795ac33a21e3f3279bff->leave($__internal_199e28f788940017e45de27117b2802c96765a359939795ac33a21e3f3279bff_prof);

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
