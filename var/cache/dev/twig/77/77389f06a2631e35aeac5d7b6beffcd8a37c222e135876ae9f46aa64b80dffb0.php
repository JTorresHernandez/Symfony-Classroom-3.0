<?php

/* :article:article.html.twig */
class __TwigTemplate_f4be071e46d2528bd3ce318920551926e7d6a28c7a85027066709b5c81348e36 extends Twig_Template
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
        $__internal_38bd73850e7cd8600626fa9e5db8e26c1105b2f53300c62e600a6433fb1a0233 = $this->env->getExtension("native_profiler");
        $__internal_38bd73850e7cd8600626fa9e5db8e26c1105b2f53300c62e600a6433fb1a0233->enter($__internal_38bd73850e7cd8600626fa9e5db8e26c1105b2f53300c62e600a6433fb1a0233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:article.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38bd73850e7cd8600626fa9e5db8e26c1105b2f53300c62e600a6433fb1a0233->leave($__internal_38bd73850e7cd8600626fa9e5db8e26c1105b2f53300c62e600a6433fb1a0233_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_56c601c8467231da68d9137f987c5076a67f836f34e6c1bdb731697310b3a8dd = $this->env->getExtension("native_profiler");
        $__internal_56c601c8467231da68d9137f987c5076a67f836f34e6c1bdb731697310b3a8dd->enter($__internal_56c601c8467231da68d9137f987c5076a67f836f34e6c1bdb731697310b3a8dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo "Show Article";
        
        $__internal_56c601c8467231da68d9137f987c5076a67f836f34e6c1bdb731697310b3a8dd->leave($__internal_56c601c8467231da68d9137f987c5076a67f836f34e6c1bdb731697310b3a8dd_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_493682d0ad297efe4f58aa24153a6eca06f86d38e820296b2721f69165e2a5d0 = $this->env->getExtension("native_profiler");
        $__internal_493682d0ad297efe4f58aa24153a6eca06f86d38e820296b2721f69165e2a5d0->enter($__internal_493682d0ad297efe4f58aa24153a6eca06f86d38e820296b2721f69165e2a5d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $this->loadTemplate(":article:article_content.html.twig", ":article:article.html.twig", 6)->display(array_merge($context, array("show_content" => true)));
        
        $__internal_493682d0ad297efe4f58aa24153a6eca06f86d38e820296b2721f69165e2a5d0->leave($__internal_493682d0ad297efe4f58aa24153a6eca06f86d38e820296b2721f69165e2a5d0_prof);

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
/*     {% include ':article:article_content.html.twig' with {'show_content': true} %}*/
/* {% endblock %}*/
