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
        $__internal_77abc15da05db90c42fdef835fa1cbba7fe222e5da2cb8f336684f0d3d963e0d = $this->env->getExtension("native_profiler");
        $__internal_77abc15da05db90c42fdef835fa1cbba7fe222e5da2cb8f336684f0d3d963e0d->enter($__internal_77abc15da05db90c42fdef835fa1cbba7fe222e5da2cb8f336684f0d3d963e0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_77abc15da05db90c42fdef835fa1cbba7fe222e5da2cb8f336684f0d3d963e0d->leave($__internal_77abc15da05db90c42fdef835fa1cbba7fe222e5da2cb8f336684f0d3d963e0d_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_33e4879e07bb22db28fbc2abfa01604e623ffd8722bf068aafd5173cccf6b296 = $this->env->getExtension("native_profiler");
        $__internal_33e4879e07bb22db28fbc2abfa01604e623ffd8722bf068aafd5173cccf6b296->enter($__internal_33e4879e07bb22db28fbc2abfa01604e623ffd8722bf068aafd5173cccf6b296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_33e4879e07bb22db28fbc2abfa01604e623ffd8722bf068aafd5173cccf6b296->leave($__internal_33e4879e07bb22db28fbc2abfa01604e623ffd8722bf068aafd5173cccf6b296_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_281c232a9ac469fc63bebc142948393a913c086cc4b234f2eeb70bc4de52962b = $this->env->getExtension("native_profiler");
        $__internal_281c232a9ac469fc63bebc142948393a913c086cc4b234f2eeb70bc4de52962b->enter($__internal_281c232a9ac469fc63bebc142948393a913c086cc4b234f2eeb70bc4de52962b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_281c232a9ac469fc63bebc142948393a913c086cc4b234f2eeb70bc4de52962b->leave($__internal_281c232a9ac469fc63bebc142948393a913c086cc4b234f2eeb70bc4de52962b_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_18effaa160e03bb84f011e6f420ea686506cc4b30a9eadfbbd0a80791ba137bf = $this->env->getExtension("native_profiler");
        $__internal_18effaa160e03bb84f011e6f420ea686506cc4b30a9eadfbbd0a80791ba137bf->enter($__internal_18effaa160e03bb84f011e6f420ea686506cc4b30a9eadfbbd0a80791ba137bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_18effaa160e03bb84f011e6f420ea686506cc4b30a9eadfbbd0a80791ba137bf->leave($__internal_18effaa160e03bb84f011e6f420ea686506cc4b30a9eadfbbd0a80791ba137bf_prof);

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
