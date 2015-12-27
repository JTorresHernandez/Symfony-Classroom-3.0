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
        $__internal_605583b522db4559101d4df413779be37c954c01ed8c338a16b7a83fb661656e = $this->env->getExtension("native_profiler");
        $__internal_605583b522db4559101d4df413779be37c954c01ed8c338a16b7a83fb661656e->enter($__internal_605583b522db4559101d4df413779be37c954c01ed8c338a16b7a83fb661656e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:article.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_605583b522db4559101d4df413779be37c954c01ed8c338a16b7a83fb661656e->leave($__internal_605583b522db4559101d4df413779be37c954c01ed8c338a16b7a83fb661656e_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_5b30c62c0b15c70bdce13e6ec92cc5680578b39b603802ea9a18e42055d4dfdf = $this->env->getExtension("native_profiler");
        $__internal_5b30c62c0b15c70bdce13e6ec92cc5680578b39b603802ea9a18e42055d4dfdf->enter($__internal_5b30c62c0b15c70bdce13e6ec92cc5680578b39b603802ea9a18e42055d4dfdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo "Show Article";
        
        $__internal_5b30c62c0b15c70bdce13e6ec92cc5680578b39b603802ea9a18e42055d4dfdf->leave($__internal_5b30c62c0b15c70bdce13e6ec92cc5680578b39b603802ea9a18e42055d4dfdf_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4dd55858c8c9e1c44c2bb719802eb46e285aa90485a15a822ccbaa081c479469 = $this->env->getExtension("native_profiler");
        $__internal_4dd55858c8c9e1c44c2bb719802eb46e285aa90485a15a822ccbaa081c479469->enter($__internal_4dd55858c8c9e1c44c2bb719802eb46e285aa90485a15a822ccbaa081c479469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $this->loadTemplate(":article:article_content.html.twig", ":article:article.html.twig", 6)->display(array_merge($context, array("show_content" => true, "comments" => (isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")))));
        
        $__internal_4dd55858c8c9e1c44c2bb719802eb46e285aa90485a15a822ccbaa081c479469->leave($__internal_4dd55858c8c9e1c44c2bb719802eb46e285aa90485a15a822ccbaa081c479469_prof);

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
