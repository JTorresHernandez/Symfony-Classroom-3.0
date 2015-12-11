<?php

/* UserBundle:Resetting:email.txt.twig */
class __TwigTemplate_41c7a8ec513db1449138b06efa91c5b8559267f111decc87e99fc6734cd9ee99 extends Twig_Template
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
        $__internal_b1d74547dada5e60ca33d8c79bc192adb031e1521bc17dd2bf0250d1f67348b9 = $this->env->getExtension("native_profiler");
        $__internal_b1d74547dada5e60ca33d8c79bc192adb031e1521bc17dd2bf0250d1f67348b9->enter($__internal_b1d74547dada5e60ca33d8c79bc192adb031e1521bc17dd2bf0250d1f67348b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_b1d74547dada5e60ca33d8c79bc192adb031e1521bc17dd2bf0250d1f67348b9->leave($__internal_b1d74547dada5e60ca33d8c79bc192adb031e1521bc17dd2bf0250d1f67348b9_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_ed4e7b241628a4c4d7581a683efcbdb0a49be67513e6b6a7d5add2156fbcbce8 = $this->env->getExtension("native_profiler");
        $__internal_ed4e7b241628a4c4d7581a683efcbdb0a49be67513e6b6a7d5add2156fbcbce8->enter($__internal_ed4e7b241628a4c4d7581a683efcbdb0a49be67513e6b6a7d5add2156fbcbce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_ed4e7b241628a4c4d7581a683efcbdb0a49be67513e6b6a7d5add2156fbcbce8->leave($__internal_ed4e7b241628a4c4d7581a683efcbdb0a49be67513e6b6a7d5add2156fbcbce8_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_f3b8319a28b8e8642341bc5b02b69d9fbc1bddfcb1a7a31e127520aa6bc14d99 = $this->env->getExtension("native_profiler");
        $__internal_f3b8319a28b8e8642341bc5b02b69d9fbc1bddfcb1a7a31e127520aa6bc14d99->enter($__internal_f3b8319a28b8e8642341bc5b02b69d9fbc1bddfcb1a7a31e127520aa6bc14d99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f3b8319a28b8e8642341bc5b02b69d9fbc1bddfcb1a7a31e127520aa6bc14d99->leave($__internal_f3b8319a28b8e8642341bc5b02b69d9fbc1bddfcb1a7a31e127520aa6bc14d99_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_cef8a55caea85a949e35184c821008a234279c44f768d1a1888a1746fded3666 = $this->env->getExtension("native_profiler");
        $__internal_cef8a55caea85a949e35184c821008a234279c44f768d1a1888a1746fded3666->enter($__internal_cef8a55caea85a949e35184c821008a234279c44f768d1a1888a1746fded3666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_cef8a55caea85a949e35184c821008a234279c44f768d1a1888a1746fded3666->leave($__internal_cef8a55caea85a949e35184c821008a234279c44f768d1a1888a1746fded3666_prof);

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
