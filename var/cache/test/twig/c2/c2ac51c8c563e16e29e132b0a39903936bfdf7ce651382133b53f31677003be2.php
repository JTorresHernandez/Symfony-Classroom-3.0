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
        $__internal_c411577c9a6512c18ff7b7f7d25c39e426236c0540d46b9b605ac917898f8a50 = $this->env->getExtension("native_profiler");
        $__internal_c411577c9a6512c18ff7b7f7d25c39e426236c0540d46b9b605ac917898f8a50->enter($__internal_c411577c9a6512c18ff7b7f7d25c39e426236c0540d46b9b605ac917898f8a50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:articles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c411577c9a6512c18ff7b7f7d25c39e426236c0540d46b9b605ac917898f8a50->leave($__internal_c411577c9a6512c18ff7b7f7d25c39e426236c0540d46b9b605ac917898f8a50_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_1bf586da91c2778c495d1d32e07aea654ddcf66d401c0f534b88af0409098c06 = $this->env->getExtension("native_profiler");
        $__internal_1bf586da91c2778c495d1d32e07aea654ddcf66d401c0f534b88af0409098c06->enter($__internal_1bf586da91c2778c495d1d32e07aea654ddcf66d401c0f534b88af0409098c06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        
        $__internal_1bf586da91c2778c495d1d32e07aea654ddcf66d401c0f534b88af0409098c06->leave($__internal_1bf586da91c2778c495d1d32e07aea654ddcf66d401c0f534b88af0409098c06_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_76e2dcb19a2fd12366bd14daf84fd21f061e55cd9fbe112d4c64766e3074dca9 = $this->env->getExtension("native_profiler");
        $__internal_76e2dcb19a2fd12366bd14daf84fd21f061e55cd9fbe112d4c64766e3074dca9->enter($__internal_76e2dcb19a2fd12366bd14daf84fd21f061e55cd9fbe112d4c64766e3074dca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_76e2dcb19a2fd12366bd14daf84fd21f061e55cd9fbe112d4c64766e3074dca9->leave($__internal_76e2dcb19a2fd12366bd14daf84fd21f061e55cd9fbe112d4c64766e3074dca9_prof);

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
