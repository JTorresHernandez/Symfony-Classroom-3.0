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
        $__internal_1e51562191da19c72c99ccbe29bf0ee219ed91e25b62200ba98eb7de68d2e31c = $this->env->getExtension("native_profiler");
        $__internal_1e51562191da19c72c99ccbe29bf0ee219ed91e25b62200ba98eb7de68d2e31c->enter($__internal_1e51562191da19c72c99ccbe29bf0ee219ed91e25b62200ba98eb7de68d2e31c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e51562191da19c72c99ccbe29bf0ee219ed91e25b62200ba98eb7de68d2e31c->leave($__internal_1e51562191da19c72c99ccbe29bf0ee219ed91e25b62200ba98eb7de68d2e31c_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_31c9d0b0a6226f6e3ff6b89fb71a4190a1abb9f43beecae06dbe5c8bd6c0fcef = $this->env->getExtension("native_profiler");
        $__internal_31c9d0b0a6226f6e3ff6b89fb71a4190a1abb9f43beecae06dbe5c8bd6c0fcef->enter($__internal_31c9d0b0a6226f6e3ff6b89fb71a4190a1abb9f43beecae06dbe5c8bd6c0fcef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_31c9d0b0a6226f6e3ff6b89fb71a4190a1abb9f43beecae06dbe5c8bd6c0fcef->leave($__internal_31c9d0b0a6226f6e3ff6b89fb71a4190a1abb9f43beecae06dbe5c8bd6c0fcef_prof);

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
