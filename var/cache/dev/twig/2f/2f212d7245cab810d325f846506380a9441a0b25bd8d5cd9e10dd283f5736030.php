<?php

/* UserBundle:Resetting:email.txt.twig */
class __TwigTemplate_85291f82440eae9c3dc937d418684de7c33fe1b25f3ce2116fb3588d06de2a31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fd253b32868df48119577a7e0f5c7b8f96b225c76519ac2a773438ae13707ed8 = $this->env->getExtension("native_profiler");
        $__internal_fd253b32868df48119577a7e0f5c7b8f96b225c76519ac2a773438ae13707ed8->enter($__internal_fd253b32868df48119577a7e0f5c7b8f96b225c76519ac2a773438ae13707ed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_fd253b32868df48119577a7e0f5c7b8f96b225c76519ac2a773438ae13707ed8->leave($__internal_fd253b32868df48119577a7e0f5c7b8f96b225c76519ac2a773438ae13707ed8_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_a49455ab442801f6aa43c85d74a67b0434df42b6ee4a10dd6b5f55b2ffb1eb38 = $this->env->getExtension("native_profiler");
        $__internal_a49455ab442801f6aa43c85d74a67b0434df42b6ee4a10dd6b5f55b2ffb1eb38->enter($__internal_a49455ab442801f6aa43c85d74a67b0434df42b6ee4a10dd6b5f55b2ffb1eb38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_a49455ab442801f6aa43c85d74a67b0434df42b6ee4a10dd6b5f55b2ffb1eb38->leave($__internal_a49455ab442801f6aa43c85d74a67b0434df42b6ee4a10dd6b5f55b2ffb1eb38_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_a564569e5dff889fdad366da541966a873fa92d88041fa99dddbb293ba415b22 = $this->env->getExtension("native_profiler");
        $__internal_a564569e5dff889fdad366da541966a873fa92d88041fa99dddbb293ba415b22->enter($__internal_a564569e5dff889fdad366da541966a873fa92d88041fa99dddbb293ba415b22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a564569e5dff889fdad366da541966a873fa92d88041fa99dddbb293ba415b22->leave($__internal_a564569e5dff889fdad366da541966a873fa92d88041fa99dddbb293ba415b22_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_132435c95ae2ec45def9c113f2a4df17b363ab60733a9b72b501c1f51b98d42e = $this->env->getExtension("native_profiler");
        $__internal_132435c95ae2ec45def9c113f2a4df17b363ab60733a9b72b501c1f51b98d42e->enter($__internal_132435c95ae2ec45def9c113f2a4df17b363ab60733a9b72b501c1f51b98d42e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_132435c95ae2ec45def9c113f2a4df17b363ab60733a9b72b501c1f51b98d42e->leave($__internal_132435c95ae2ec45def9c113f2a4df17b363ab60733a9b72b501c1f51b98d42e_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
