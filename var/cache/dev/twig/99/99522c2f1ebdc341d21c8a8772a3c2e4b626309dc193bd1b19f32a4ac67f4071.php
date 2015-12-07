<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_4cc68961b224d40961041d3924ec37125897bb22d6a0fa0569e89b020e922b90 extends Twig_Template
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
        $__internal_94eda9eef75dc6efc4aa5c277d7b7d615111493439001c706fff3f4198e7676b = $this->env->getExtension("native_profiler");
        $__internal_94eda9eef75dc6efc4aa5c277d7b7d615111493439001c706fff3f4198e7676b->enter($__internal_94eda9eef75dc6efc4aa5c277d7b7d615111493439001c706fff3f4198e7676b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_94eda9eef75dc6efc4aa5c277d7b7d615111493439001c706fff3f4198e7676b->leave($__internal_94eda9eef75dc6efc4aa5c277d7b7d615111493439001c706fff3f4198e7676b_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_b50f21cd5498975f15c757ea1c0f93fab76f2fee4ea12bbbb1820ca08f0ed51e = $this->env->getExtension("native_profiler");
        $__internal_b50f21cd5498975f15c757ea1c0f93fab76f2fee4ea12bbbb1820ca08f0ed51e->enter($__internal_b50f21cd5498975f15c757ea1c0f93fab76f2fee4ea12bbbb1820ca08f0ed51e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_b50f21cd5498975f15c757ea1c0f93fab76f2fee4ea12bbbb1820ca08f0ed51e->leave($__internal_b50f21cd5498975f15c757ea1c0f93fab76f2fee4ea12bbbb1820ca08f0ed51e_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_2e97fb056dc4a128f2bbde42cdc4417ea4fa34949be3d4d6b6c8eb762630365b = $this->env->getExtension("native_profiler");
        $__internal_2e97fb056dc4a128f2bbde42cdc4417ea4fa34949be3d4d6b6c8eb762630365b->enter($__internal_2e97fb056dc4a128f2bbde42cdc4417ea4fa34949be3d4d6b6c8eb762630365b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_2e97fb056dc4a128f2bbde42cdc4417ea4fa34949be3d4d6b6c8eb762630365b->leave($__internal_2e97fb056dc4a128f2bbde42cdc4417ea4fa34949be3d4d6b6c8eb762630365b_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_8238b5b1d77b4aabcc1440037636d3da1b12d69d3badfd65195d2ea9e33d5c5a = $this->env->getExtension("native_profiler");
        $__internal_8238b5b1d77b4aabcc1440037636d3da1b12d69d3badfd65195d2ea9e33d5c5a->enter($__internal_8238b5b1d77b4aabcc1440037636d3da1b12d69d3badfd65195d2ea9e33d5c5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_8238b5b1d77b4aabcc1440037636d3da1b12d69d3badfd65195d2ea9e33d5c5a->leave($__internal_8238b5b1d77b4aabcc1440037636d3da1b12d69d3badfd65195d2ea9e33d5c5a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
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
