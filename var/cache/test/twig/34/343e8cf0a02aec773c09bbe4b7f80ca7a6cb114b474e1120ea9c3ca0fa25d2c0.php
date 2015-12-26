<?php

/* :article:article.html.twig */
class __TwigTemplate_5ded7b4e26e52d337850ad82ac6bca51d07cfb78d0c3cbd83d911552b833637b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", ":article:article.html.twig", 1);
        $this->blocks = array(
            'headTitle' => array($this, 'block_headTitle'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_547a752a01fc37cb5ba35b41c4df42785232f8bfa79d3dae0c7a067c794f725a = $this->env->getExtension("native_profiler");
        $__internal_547a752a01fc37cb5ba35b41c4df42785232f8bfa79d3dae0c7a067c794f725a->enter($__internal_547a752a01fc37cb5ba35b41c4df42785232f8bfa79d3dae0c7a067c794f725a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:article.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_547a752a01fc37cb5ba35b41c4df42785232f8bfa79d3dae0c7a067c794f725a->leave($__internal_547a752a01fc37cb5ba35b41c4df42785232f8bfa79d3dae0c7a067c794f725a_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_8f1607bf4a77148c45620e85ad9ab970a322cb1a7dd6e07f202f7effc4c2acda = $this->env->getExtension("native_profiler");
        $__internal_8f1607bf4a77148c45620e85ad9ab970a322cb1a7dd6e07f202f7effc4c2acda->enter($__internal_8f1607bf4a77148c45620e85ad9ab970a322cb1a7dd6e07f202f7effc4c2acda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo "Show Article";
        
        $__internal_8f1607bf4a77148c45620e85ad9ab970a322cb1a7dd6e07f202f7effc4c2acda->leave($__internal_8f1607bf4a77148c45620e85ad9ab970a322cb1a7dd6e07f202f7effc4c2acda_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e2427cc25763f6a61c15cb55e4ae9db21fd2360d576e9d7f1a337443d7135511 = $this->env->getExtension("native_profiler");
        $__internal_e2427cc25763f6a61c15cb55e4ae9db21fd2360d576e9d7f1a337443d7135511->enter($__internal_e2427cc25763f6a61c15cb55e4ae9db21fd2360d576e9d7f1a337443d7135511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $this->loadTemplate(":article:article_content.html.twig", ":article:article.html.twig", 6)->display(array_merge($context, array("show_content" => true, "comments" => (isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")))));
        
        $__internal_e2427cc25763f6a61c15cb55e4ae9db21fd2360d576e9d7f1a337443d7135511->leave($__internal_e2427cc25763f6a61c15cb55e4ae9db21fd2360d576e9d7f1a337443d7135511_prof);

    }

    public function getTemplateName()
    {
        return ":article:article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block headTitle %}Show Article{% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include ':article:article_content.html.twig' with {'show_content': true, 'comments': comments} %}*/
/* {% endblock %}*/
