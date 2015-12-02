<?php

/* :security:login.html.twig */
class __TwigTemplate_1982715c8143283100f65dc1051edc52b0ad15006840c7dba8012fd9ac17fb1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", ":security:login.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7a9c7271ab2bfba1353a004d1c4a41796e1468191550da1b1b2439314cf25911 = $this->env->getExtension("native_profiler");
        $__internal_7a9c7271ab2bfba1353a004d1c4a41796e1468191550da1b1b2439314cf25911->enter($__internal_7a9c7271ab2bfba1353a004d1c4a41796e1468191550da1b1b2439314cf25911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a9c7271ab2bfba1353a004d1c4a41796e1468191550da1b1b2439314cf25911->leave($__internal_7a9c7271ab2bfba1353a004d1c4a41796e1468191550da1b1b2439314cf25911_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_33fef344a42cf84fcd61d5333700db6a63fec66345813ee308d8480b584f7ba9 = $this->env->getExtension("native_profiler");
        $__internal_33fef344a42cf84fcd61d5333700db6a63fec66345813ee308d8480b584f7ba9->enter($__internal_33fef344a42cf84fcd61d5333700db6a63fec66345813ee308d8480b584f7ba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 5
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 7
        echo "
    <form action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("app_security_check");
        echo "\" method=\"post\">
        <label for=\"username\">Username:</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

        <label for=\"password\">Password:</label>
        <input type=\"password\" id=\"password\" name=\"_password\" />

        ";
        // line 20
        echo "
        ";
        // line 22
        echo "        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">

        <button type=\"submit\">login</button>
    </form>
";
        
        $__internal_33fef344a42cf84fcd61d5333700db6a63fec66345813ee308d8480b584f7ba9->leave($__internal_33fef344a42cf84fcd61d5333700db6a63fec66345813ee308d8480b584f7ba9_prof);

    }

    public function getTemplateName()
    {
        return ":security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 22,  65 => 20,  57 => 10,  52 => 8,  49 => 7,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     {% if error %}*/
/*         <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/*     {% endif %}*/
/* */
/*     <form action="{{ path('app_security_check') }}" method="post">*/
/*         <label for="username">Username:</label>*/
/*         <input type="text" id="username" name="_username" value="{{ last_username }}" />*/
/* */
/*         <label for="password">Password:</label>*/
/*         <input type="password" id="password" name="_password" />*/
/* */
/*         {#*/
/*             If you want to control the URL the user*/
/*             is redirected to on success (more details below)*/
/*             <input type="hidden" name="_target_path" value="/account" />*/
/*         #}*/
/* */
/*         {# http://symfony.com/doc/current/cookbook/security/csrf_in_login_form.html #}*/
/*         <input type="hidden" name="_csrf_token" value="{{ csrf_token('authenticate') }}">*/
/* */
/*         <button type="submit">login</button>*/
/*     </form>*/
/* {% endblock %}*/
