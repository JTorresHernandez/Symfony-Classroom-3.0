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
        $__internal_d7d6c4cebf3f0a8e6b84005417f73d7794ab8bf389116ad5a9cc98e9ed813e8e = $this->env->getExtension("native_profiler");
        $__internal_d7d6c4cebf3f0a8e6b84005417f73d7794ab8bf389116ad5a9cc98e9ed813e8e->enter($__internal_d7d6c4cebf3f0a8e6b84005417f73d7794ab8bf389116ad5a9cc98e9ed813e8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        <ul>
            ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "messages"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 12
            echo "                <li>";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "        </ul>
        ";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 16
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 17
        echo "    </body>
</html>
";
        
        $__internal_d7d6c4cebf3f0a8e6b84005417f73d7794ab8bf389116ad5a9cc98e9ed813e8e->leave($__internal_d7d6c4cebf3f0a8e6b84005417f73d7794ab8bf389116ad5a9cc98e9ed813e8e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e926f7d9f6ede8b2fe3746a61d59350d77e2fdec297f4b66a5492b992f610532 = $this->env->getExtension("native_profiler");
        $__internal_e926f7d9f6ede8b2fe3746a61d59350d77e2fdec297f4b66a5492b992f610532->enter($__internal_e926f7d9f6ede8b2fe3746a61d59350d77e2fdec297f4b66a5492b992f610532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e926f7d9f6ede8b2fe3746a61d59350d77e2fdec297f4b66a5492b992f610532->leave($__internal_e926f7d9f6ede8b2fe3746a61d59350d77e2fdec297f4b66a5492b992f610532_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f475be6f9ac42fe8147ad0db072fff6afc12d50d6a4cf9e1193b5b7324f10acc = $this->env->getExtension("native_profiler");
        $__internal_f475be6f9ac42fe8147ad0db072fff6afc12d50d6a4cf9e1193b5b7324f10acc->enter($__internal_f475be6f9ac42fe8147ad0db072fff6afc12d50d6a4cf9e1193b5b7324f10acc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f475be6f9ac42fe8147ad0db072fff6afc12d50d6a4cf9e1193b5b7324f10acc->leave($__internal_f475be6f9ac42fe8147ad0db072fff6afc12d50d6a4cf9e1193b5b7324f10acc_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_9ec7677d5806869af4eba60000a2e4e834deb117f60531f70ecdfa7fa813f5d6 = $this->env->getExtension("native_profiler");
        $__internal_9ec7677d5806869af4eba60000a2e4e834deb117f60531f70ecdfa7fa813f5d6->enter($__internal_9ec7677d5806869af4eba60000a2e4e834deb117f60531f70ecdfa7fa813f5d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9ec7677d5806869af4eba60000a2e4e834deb117f60531f70ecdfa7fa813f5d6->leave($__internal_9ec7677d5806869af4eba60000a2e4e834deb117f60531f70ecdfa7fa813f5d6_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6ca7279cdee10999a55c62e1923608d45f30ae0b6fd3ffb9177c7f2c51a3f7a3 = $this->env->getExtension("native_profiler");
        $__internal_6ca7279cdee10999a55c62e1923608d45f30ae0b6fd3ffb9177c7f2c51a3f7a3->enter($__internal_6ca7279cdee10999a55c62e1923608d45f30ae0b6fd3ffb9177c7f2c51a3f7a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6ca7279cdee10999a55c62e1923608d45f30ae0b6fd3ffb9177c7f2c51a3f7a3->leave($__internal_6ca7279cdee10999a55c62e1923608d45f30ae0b6fd3ffb9177c7f2c51a3f7a3_prof);

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
        return array (  110 => 16,  99 => 15,  88 => 6,  76 => 5,  67 => 17,  64 => 16,  62 => 15,  59 => 14,  50 => 12,  46 => 11,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
