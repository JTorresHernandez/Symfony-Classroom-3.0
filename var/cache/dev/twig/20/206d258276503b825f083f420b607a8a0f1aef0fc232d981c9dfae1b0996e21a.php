<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_6c34340fc22d619898202798d72e8fb3625aa834452efb3728caf07ea0eed0c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/checkEmail.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0d0a3a77436772f7ca682a49ebc413e2fc1f1493cf9db0a7cb4816eaa7a803ed = $this->env->getExtension("native_profiler");
        $__internal_0d0a3a77436772f7ca682a49ebc413e2fc1f1493cf9db0a7cb4816eaa7a803ed->enter($__internal_0d0a3a77436772f7ca682a49ebc413e2fc1f1493cf9db0a7cb4816eaa7a803ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d0a3a77436772f7ca682a49ebc413e2fc1f1493cf9db0a7cb4816eaa7a803ed->leave($__internal_0d0a3a77436772f7ca682a49ebc413e2fc1f1493cf9db0a7cb4816eaa7a803ed_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_449142fa9b73880ab880912ea350f59609ea6f7faf9449f665dba28d7811c62f = $this->env->getExtension("native_profiler");
        $__internal_449142fa9b73880ab880912ea350f59609ea6f7faf9449f665dba28d7811c62f->enter($__internal_449142fa9b73880ab880912ea350f59609ea6f7faf9449f665dba28d7811c62f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_449142fa9b73880ab880912ea350f59609ea6f7faf9449f665dba28d7811c62f->leave($__internal_449142fa9b73880ab880912ea350f59609ea6f7faf9449f665dba28d7811c62f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
