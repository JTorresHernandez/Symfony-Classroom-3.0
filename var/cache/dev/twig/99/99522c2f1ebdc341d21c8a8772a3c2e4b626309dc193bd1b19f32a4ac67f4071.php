<?php

/* FOSUserBundle:Resetting:email.txt.twig */
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
        $__internal_9f638df0a16b4fb52210c683603413a6a0e8e60d5d8087492bb0ea5c6cea1c44 = $this->env->getExtension("native_profiler");
        $__internal_9f638df0a16b4fb52210c683603413a6a0e8e60d5d8087492bb0ea5c6cea1c44->enter($__internal_9f638df0a16b4fb52210c683603413a6a0e8e60d5d8087492bb0ea5c6cea1c44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_9f638df0a16b4fb52210c683603413a6a0e8e60d5d8087492bb0ea5c6cea1c44->leave($__internal_9f638df0a16b4fb52210c683603413a6a0e8e60d5d8087492bb0ea5c6cea1c44_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_bb02dc05ba807e904af14e525e27d339c312341f88bb79aaa0f3167728cf24e0 = $this->env->getExtension("native_profiler");
        $__internal_bb02dc05ba807e904af14e525e27d339c312341f88bb79aaa0f3167728cf24e0->enter($__internal_bb02dc05ba807e904af14e525e27d339c312341f88bb79aaa0f3167728cf24e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_bb02dc05ba807e904af14e525e27d339c312341f88bb79aaa0f3167728cf24e0->leave($__internal_bb02dc05ba807e904af14e525e27d339c312341f88bb79aaa0f3167728cf24e0_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_e696c8ad5f13b082f7b872a7a8e629c003cb878fbdda5312e1523416fcb37118 = $this->env->getExtension("native_profiler");
        $__internal_e696c8ad5f13b082f7b872a7a8e629c003cb878fbdda5312e1523416fcb37118->enter($__internal_e696c8ad5f13b082f7b872a7a8e629c003cb878fbdda5312e1523416fcb37118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_e696c8ad5f13b082f7b872a7a8e629c003cb878fbdda5312e1523416fcb37118->leave($__internal_e696c8ad5f13b082f7b872a7a8e629c003cb878fbdda5312e1523416fcb37118_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_3608978f96ed9797dfbaf056fa9df1bd3f44b4315eac50779ac007993b6e0843 = $this->env->getExtension("native_profiler");
        $__internal_3608978f96ed9797dfbaf056fa9df1bd3f44b4315eac50779ac007993b6e0843->enter($__internal_3608978f96ed9797dfbaf056fa9df1bd3f44b4315eac50779ac007993b6e0843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_3608978f96ed9797dfbaf056fa9df1bd3f44b4315eac50779ac007993b6e0843->leave($__internal_3608978f96ed9797dfbaf056fa9df1bd3f44b4315eac50779ac007993b6e0843_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
