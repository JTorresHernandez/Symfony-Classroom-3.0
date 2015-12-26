<?php

/* :article:articles.html.twig */
class __TwigTemplate_d879cf8d36f2587874ecae1b32a4bddaaf295be571b15948ec331753240aae02 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", ":article:articles.html.twig", 1);
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
        $__internal_d8c8921e9d5a1f564aeea52f4380953a8757d399f5f3220c1a24b93cefaad3f6 = $this->env->getExtension("native_profiler");
        $__internal_d8c8921e9d5a1f564aeea52f4380953a8757d399f5f3220c1a24b93cefaad3f6->enter($__internal_d8c8921e9d5a1f564aeea52f4380953a8757d399f5f3220c1a24b93cefaad3f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:articles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8c8921e9d5a1f564aeea52f4380953a8757d399f5f3220c1a24b93cefaad3f6->leave($__internal_d8c8921e9d5a1f564aeea52f4380953a8757d399f5f3220c1a24b93cefaad3f6_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_74b0515458c2780d97781256c4b927c9e2a39364f1dc1dbc89f9c3fc01d8dffd = $this->env->getExtension("native_profiler");
        $__internal_74b0515458c2780d97781256c4b927c9e2a39364f1dc1dbc89f9c3fc01d8dffd->enter($__internal_74b0515458c2780d97781256c4b927c9e2a39364f1dc1dbc89f9c3fc01d8dffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        
        $__internal_74b0515458c2780d97781256c4b927c9e2a39364f1dc1dbc89f9c3fc01d8dffd->leave($__internal_74b0515458c2780d97781256c4b927c9e2a39364f1dc1dbc89f9c3fc01d8dffd_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6c002d6a93999a7806aeae73b20d19c34da3536fe0446f6fc8fce64dddce696b = $this->env->getExtension("native_profiler");
        $__internal_6c002d6a93999a7806aeae73b20d19c34da3536fe0446f6fc8fce64dddce696b->enter($__internal_6c002d6a93999a7806aeae73b20d19c34da3536fe0446f6fc8fce64dddce696b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 7
            echo "        ";
            $this->loadTemplate(":article:article_content.html.twig", ":article:articles.html.twig", 7)->display($context);
            // line 8
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "    ";
        if ( !array_key_exists("doPagination", $context)) {
            // line 10
            echo "        <div class=\"navigation\">
            ";
            // line 11
            echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
            echo "
        </div>
    ";
        }
        
        $__internal_6c002d6a93999a7806aeae73b20d19c34da3536fe0446f6fc8fce64dddce696b->leave($__internal_6c002d6a93999a7806aeae73b20d19c34da3536fe0446f6fc8fce64dddce696b_prof);

    }

    public function getTemplateName()
    {
        return ":article:articles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 11,  91 => 10,  88 => 9,  74 => 8,  71 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block headTitle %}{{ title }}{% endblock %}*/
/* */
/* {% block body %}*/
/*     {% for article in articles %}*/
/*         {% include ':article:article_content.html.twig' %}*/
/*     {% endfor %}*/
/*     {% if not doPagination is defined %}*/
/*         <div class="navigation">*/
/*             {{ knp_pagination_render(articles) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
