<?php

/* :tag:tags.html.twig */
class __TwigTemplate_c28d31cca2b17d08b64fabfb8455d744b69feb0bdceb2d1b98dd5df4ffbbc476 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", ":tag:tags.html.twig", 1);
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
        $__internal_b19b21568b1ed2e568dfa911610f8aa06fc167d4bcfb20ccbdb6e54b29ac414f = $this->env->getExtension("native_profiler");
        $__internal_b19b21568b1ed2e568dfa911610f8aa06fc167d4bcfb20ccbdb6e54b29ac414f->enter($__internal_b19b21568b1ed2e568dfa911610f8aa06fc167d4bcfb20ccbdb6e54b29ac414f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":tag:tags.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b19b21568b1ed2e568dfa911610f8aa06fc167d4bcfb20ccbdb6e54b29ac414f->leave($__internal_b19b21568b1ed2e568dfa911610f8aa06fc167d4bcfb20ccbdb6e54b29ac414f_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_5492e215498a2634c41bd73f7164153b96ee97d029e3f6b52e8f476778733629 = $this->env->getExtension("native_profiler");
        $__internal_5492e215498a2634c41bd73f7164153b96ee97d029e3f6b52e8f476778733629->enter($__internal_5492e215498a2634c41bd73f7164153b96ee97d029e3f6b52e8f476778733629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo "Tags";
        
        $__internal_5492e215498a2634c41bd73f7164153b96ee97d029e3f6b52e8f476778733629->leave($__internal_5492e215498a2634c41bd73f7164153b96ee97d029e3f6b52e8f476778733629_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_fa3fc5f66ba22d418d529c34308e85542d30e9d114967521052214b906d41197 = $this->env->getExtension("native_profiler");
        $__internal_fa3fc5f66ba22d418d529c34308e85542d30e9d114967521052214b906d41197->enter($__internal_fa3fc5f66ba22d418d529c34308e85542d30e9d114967521052214b906d41197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) ? $context["tags"] : $this->getContext($context, "tags")));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 7
            echo "        <h1>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "name", array()), "html", null, true);
            echo "</h1>

        <div style=\"padding: 5px 20px\">
            ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["tag"], "articles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 11
                echo "                <div>";
                echo twig_escape_filter($this->env, $context["article"], "html", null, true);
                echo "</div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_fa3fc5f66ba22d418d529c34308e85542d30e9d114967521052214b906d41197->leave($__internal_fa3fc5f66ba22d418d529c34308e85542d30e9d114967521052214b906d41197_prof);

    }

    public function getTemplateName()
    {
        return ":tag:tags.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 13,  69 => 11,  65 => 10,  58 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block headTitle %}Tags{% endblock %}*/
/* */
/* {% block body %}*/
/*     {% for tag in tags %}*/
/*         <h1>{{ tag.name }}</h1>*/
/* */
/*         <div style="padding: 5px 20px">*/
/*             {% for article in tag.articles %}*/
/*                 <div>{{ article }}</div>*/
/*             {% endfor %}*/
/*         </div>*/
/*     {% endfor %}*/
/* {% endblock %}*/
