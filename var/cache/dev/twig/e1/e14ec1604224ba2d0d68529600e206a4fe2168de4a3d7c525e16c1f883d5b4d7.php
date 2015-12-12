<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_2e3ca63656c051a2e17379392cceb4de7f4513d3e78ae459a92583d25e1a0876 extends Twig_Template
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
        $__internal_704cb1312bef412776a99506cd04a8cd22664ea03fb05f440f6aabed435ab9f4 = $this->env->getExtension("native_profiler");
        $__internal_704cb1312bef412776a99506cd04a8cd22664ea03fb05f440f6aabed435ab9f4->enter($__internal_704cb1312bef412776a99506cd04a8cd22664ea03fb05f440f6aabed435ab9f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_704cb1312bef412776a99506cd04a8cd22664ea03fb05f440f6aabed435ab9f4->leave($__internal_704cb1312bef412776a99506cd04a8cd22664ea03fb05f440f6aabed435ab9f4_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_a5dc500bb81350170fc4dadf17e9fc143762b753601911d4de2efd2acfdc3130 = $this->env->getExtension("native_profiler");
        $__internal_a5dc500bb81350170fc4dadf17e9fc143762b753601911d4de2efd2acfdc3130->enter($__internal_a5dc500bb81350170fc4dadf17e9fc143762b753601911d4de2efd2acfdc3130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a5dc500bb81350170fc4dadf17e9fc143762b753601911d4de2efd2acfdc3130->leave($__internal_a5dc500bb81350170fc4dadf17e9fc143762b753601911d4de2efd2acfdc3130_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_f47c829e4080fa72b45f315b1955709bd5538dcd843b1ac52290c8846515ae02 = $this->env->getExtension("native_profiler");
        $__internal_f47c829e4080fa72b45f315b1955709bd5538dcd843b1ac52290c8846515ae02->enter($__internal_f47c829e4080fa72b45f315b1955709bd5538dcd843b1ac52290c8846515ae02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f47c829e4080fa72b45f315b1955709bd5538dcd843b1ac52290c8846515ae02->leave($__internal_f47c829e4080fa72b45f315b1955709bd5538dcd843b1ac52290c8846515ae02_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_da3e6780c652889837f75683b285a329e8cfd7ab123dfeb70814fb3d84dd77cd = $this->env->getExtension("native_profiler");
        $__internal_da3e6780c652889837f75683b285a329e8cfd7ab123dfeb70814fb3d84dd77cd->enter($__internal_da3e6780c652889837f75683b285a329e8cfd7ab123dfeb70814fb3d84dd77cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_da3e6780c652889837f75683b285a329e8cfd7ab123dfeb70814fb3d84dd77cd->leave($__internal_da3e6780c652889837f75683b285a329e8cfd7ab123dfeb70814fb3d84dd77cd_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
