<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_4bfbe29d0aad7053a16b5af0b82a614ce770c8890e7af97b68c93269afd9a850 extends Twig_Template
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
        $__internal_0aebbf3fa5adec38276ba0f6b2195a409304e8d758d7ea08305b4098e814ae38 = $this->env->getExtension("native_profiler");
        $__internal_0aebbf3fa5adec38276ba0f6b2195a409304e8d758d7ea08305b4098e814ae38->enter($__internal_0aebbf3fa5adec38276ba0f6b2195a409304e8d758d7ea08305b4098e814ae38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_0aebbf3fa5adec38276ba0f6b2195a409304e8d758d7ea08305b4098e814ae38->leave($__internal_0aebbf3fa5adec38276ba0f6b2195a409304e8d758d7ea08305b4098e814ae38_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_ab4af0eeda7ee49b21930029d52f8a1c972a49c1b7b77b5ecb4832d462aaf25b = $this->env->getExtension("native_profiler");
        $__internal_ab4af0eeda7ee49b21930029d52f8a1c972a49c1b7b77b5ecb4832d462aaf25b->enter($__internal_ab4af0eeda7ee49b21930029d52f8a1c972a49c1b7b77b5ecb4832d462aaf25b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_ab4af0eeda7ee49b21930029d52f8a1c972a49c1b7b77b5ecb4832d462aaf25b->leave($__internal_ab4af0eeda7ee49b21930029d52f8a1c972a49c1b7b77b5ecb4832d462aaf25b_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_43ea29852312fa2ef48b80882070cda68a2c1a91ddd72ae01bd1957f633cf719 = $this->env->getExtension("native_profiler");
        $__internal_43ea29852312fa2ef48b80882070cda68a2c1a91ddd72ae01bd1957f633cf719->enter($__internal_43ea29852312fa2ef48b80882070cda68a2c1a91ddd72ae01bd1957f633cf719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_43ea29852312fa2ef48b80882070cda68a2c1a91ddd72ae01bd1957f633cf719->leave($__internal_43ea29852312fa2ef48b80882070cda68a2c1a91ddd72ae01bd1957f633cf719_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_cc6c2e72367359fc766806b70a587cbda91b49163479d532f8c33e83dcd8962d = $this->env->getExtension("native_profiler");
        $__internal_cc6c2e72367359fc766806b70a587cbda91b49163479d532f8c33e83dcd8962d->enter($__internal_cc6c2e72367359fc766806b70a587cbda91b49163479d532f8c33e83dcd8962d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_cc6c2e72367359fc766806b70a587cbda91b49163479d532f8c33e83dcd8962d->leave($__internal_cc6c2e72367359fc766806b70a587cbda91b49163479d532f8c33e83dcd8962d_prof);

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
