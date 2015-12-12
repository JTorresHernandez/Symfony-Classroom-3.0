<?php

/* UserBundle:Registration:email.txt.twig */
class __TwigTemplate_99038c4ef815991eaf5b9d13482c0d1abe48f1decd8227d0b3cde38198661a02 extends Twig_Template
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
        $__internal_b3d65ffbc82d0890268b1618eeda093f1092eb909efa1aeca9f4ed7c3925c026 = $this->env->getExtension("native_profiler");
        $__internal_b3d65ffbc82d0890268b1618eeda093f1092eb909efa1aeca9f4ed7c3925c026->enter($__internal_b3d65ffbc82d0890268b1618eeda093f1092eb909efa1aeca9f4ed7c3925c026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_b3d65ffbc82d0890268b1618eeda093f1092eb909efa1aeca9f4ed7c3925c026->leave($__internal_b3d65ffbc82d0890268b1618eeda093f1092eb909efa1aeca9f4ed7c3925c026_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_13755394054f05c672733de8a8bc1b419d0bae7e4a7c1e626b247dc557d242f4 = $this->env->getExtension("native_profiler");
        $__internal_13755394054f05c672733de8a8bc1b419d0bae7e4a7c1e626b247dc557d242f4->enter($__internal_13755394054f05c672733de8a8bc1b419d0bae7e4a7c1e626b247dc557d242f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_13755394054f05c672733de8a8bc1b419d0bae7e4a7c1e626b247dc557d242f4->leave($__internal_13755394054f05c672733de8a8bc1b419d0bae7e4a7c1e626b247dc557d242f4_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_f17fad6da9ca0508fa51565efd5c2524ca0159a2d12ecb83c099571790ce4077 = $this->env->getExtension("native_profiler");
        $__internal_f17fad6da9ca0508fa51565efd5c2524ca0159a2d12ecb83c099571790ce4077->enter($__internal_f17fad6da9ca0508fa51565efd5c2524ca0159a2d12ecb83c099571790ce4077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f17fad6da9ca0508fa51565efd5c2524ca0159a2d12ecb83c099571790ce4077->leave($__internal_f17fad6da9ca0508fa51565efd5c2524ca0159a2d12ecb83c099571790ce4077_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_a34400e507408f2c696f9478b5ba4df8e61925989643529a3a4ac6c767796c93 = $this->env->getExtension("native_profiler");
        $__internal_a34400e507408f2c696f9478b5ba4df8e61925989643529a3a4ac6c767796c93->enter($__internal_a34400e507408f2c696f9478b5ba4df8e61925989643529a3a4ac6c767796c93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_a34400e507408f2c696f9478b5ba4df8e61925989643529a3a4ac6c767796c93->leave($__internal_a34400e507408f2c696f9478b5ba4df8e61925989643529a3a4ac6c767796c93_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
