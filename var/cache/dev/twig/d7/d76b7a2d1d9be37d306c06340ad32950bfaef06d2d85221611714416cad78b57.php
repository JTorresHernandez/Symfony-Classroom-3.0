<?php

/* UserBundle:Group:edit_content.html.twig */
class __TwigTemplate_5e72035c2aa425a7c9c82edc01d31331a9f0632d9cd5c3ca211353cae61cb3db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_51857b2bc6d43709b2c66c9151af5de9ad4e4e3f91236608969ed74ef0aa1f89 = $this->env->getExtension("native_profiler");
        $__internal_51857b2bc6d43709b2c66c9151af5de9ad4e4e3f91236608969ed74ef0aa1f89->enter($__internal_51857b2bc6d43709b2c66c9151af5de9ad4e4e3f91236608969ed74ef0aa1f89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Group:edit_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("fos_user_group_edit", array("groupName" => (isset($context["group_name"]) ? $context["group_name"] : $this->getContext($context, "group_name")))), "attr" => array("class" => "fos_user_group_edit")));
        echo "
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_51857b2bc6d43709b2c66c9151af5de9ad4e4e3f91236608969ed74ef0aa1f89->leave($__internal_51857b2bc6d43709b2c66c9151af5de9ad4e4e3f91236608969ed74ef0aa1f89_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Group:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 8,  34 => 6,  29 => 4,  25 => 3,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {{ form_start(form, { 'action': path('fos_user_group_edit', {'groupName': group_name}), 'attr': { 'class': 'fos_user_group_edit' } }) }}*/
/*     {{ form_widget(form) }}*/
/*     <div>*/
/*         <input type="submit" value="{{ 'group.edit.submit'|trans }}" />*/
/*     </div>*/
/* {{ form_end(form) }}*/
/* */