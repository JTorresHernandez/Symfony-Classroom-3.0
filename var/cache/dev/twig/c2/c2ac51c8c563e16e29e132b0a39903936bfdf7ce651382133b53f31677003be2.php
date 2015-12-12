<?php

/* :article:articles.html.twig */
class __TwigTemplate_c5ab0c930d440bd5347e080b2b29a16966e2ec3502b96dd2eb43bfc77f407d65 extends Twig_Template
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
        $__internal_826c40af39874cbb6a7f318d99ea1d3f028ea454502c543eecebf99c6fdfdcff = $this->env->getExtension("native_profiler");
        $__internal_826c40af39874cbb6a7f318d99ea1d3f028ea454502c543eecebf99c6fdfdcff->enter($__internal_826c40af39874cbb6a7f318d99ea1d3f028ea454502c543eecebf99c6fdfdcff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:articles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_826c40af39874cbb6a7f318d99ea1d3f028ea454502c543eecebf99c6fdfdcff->leave($__internal_826c40af39874cbb6a7f318d99ea1d3f028ea454502c543eecebf99c6fdfdcff_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_74bda050a1ac3d950748823f6caeafa21e7f36a46661a9f6e5477169d6e002c4 = $this->env->getExtension("native_profiler");
        $__internal_74bda050a1ac3d950748823f6caeafa21e7f36a46661a9f6e5477169d6e002c4->enter($__internal_74bda050a1ac3d950748823f6caeafa21e7f36a46661a9f6e5477169d6e002c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        
        $__internal_74bda050a1ac3d950748823f6caeafa21e7f36a46661a9f6e5477169d6e002c4->leave($__internal_74bda050a1ac3d950748823f6caeafa21e7f36a46661a9f6e5477169d6e002c4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c483287ad7dfde6edfd3b7c836cfbfd7330a2a87872f179e4e39a1a7fc878c1e = $this->env->getExtension("native_profiler");
        $__internal_c483287ad7dfde6edfd3b7c836cfbfd7330a2a87872f179e4e39a1a7fc878c1e->enter($__internal_c483287ad7dfde6edfd3b7c836cfbfd7330a2a87872f179e4e39a1a7fc878c1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c483287ad7dfde6edfd3b7c836cfbfd7330a2a87872f179e4e39a1a7fc878c1e->leave($__internal_c483287ad7dfde6edfd3b7c836cfbfd7330a2a87872f179e4e39a1a7fc878c1e_prof);

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
