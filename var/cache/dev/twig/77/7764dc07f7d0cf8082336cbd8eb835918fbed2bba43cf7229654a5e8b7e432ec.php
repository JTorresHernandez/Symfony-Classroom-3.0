<?php

/* :article:articles.html.twig */
class __TwigTemplate_cf7a74632da259b0aa30bd8bd30b9d1727c0b7140489feca0ae3f47122e96a90 extends Twig_Template
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
        $__internal_8bffad21c373a78db7a19231ef3f8eb28656051ec85e8080dc90038acaa3a36a = $this->env->getExtension("native_profiler");
        $__internal_8bffad21c373a78db7a19231ef3f8eb28656051ec85e8080dc90038acaa3a36a->enter($__internal_8bffad21c373a78db7a19231ef3f8eb28656051ec85e8080dc90038acaa3a36a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:articles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8bffad21c373a78db7a19231ef3f8eb28656051ec85e8080dc90038acaa3a36a->leave($__internal_8bffad21c373a78db7a19231ef3f8eb28656051ec85e8080dc90038acaa3a36a_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_2fe5d301f12fb7e1700f5228b35db519cc6cc4828b747438c9724a2129d810ff = $this->env->getExtension("native_profiler");
        $__internal_2fe5d301f12fb7e1700f5228b35db519cc6cc4828b747438c9724a2129d810ff->enter($__internal_2fe5d301f12fb7e1700f5228b35db519cc6cc4828b747438c9724a2129d810ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo "Articles";
        
        $__internal_2fe5d301f12fb7e1700f5228b35db519cc6cc4828b747438c9724a2129d810ff->leave($__internal_2fe5d301f12fb7e1700f5228b35db519cc6cc4828b747438c9724a2129d810ff_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_69ccf06a23d95deb749c48f08480eb3bfe1942be5492d2c2cc2f76d19ed4d69c = $this->env->getExtension("native_profiler");
        $__internal_69ccf06a23d95deb749c48f08480eb3bfe1942be5492d2c2cc2f76d19ed4d69c->enter($__internal_69ccf06a23d95deb749c48f08480eb3bfe1942be5492d2c2cc2f76d19ed4d69c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 7
            echo "        <h1>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "</h1>
        <div style=\"padding: 5px 20px\">
            <strong>Tags:</strong>
            ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["article"], "tags", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 11
                echo "                ";
                echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
                echo ",
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_69ccf06a23d95deb749c48f08480eb3bfe1942be5492d2c2cc2f76d19ed4d69c->leave($__internal_69ccf06a23d95deb749c48f08480eb3bfe1942be5492d2c2cc2f76d19ed4d69c_prof);

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
        return array (  78 => 13,  69 => 11,  65 => 10,  58 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block headTitle %}Articles{% endblock %}*/
/* */
/* {% block body %}*/
/*     {% for article in articles %}*/
/*         <h1>{{ article.title }}</h1>*/
/*         <div style="padding: 5px 20px">*/
/*             <strong>Tags:</strong>*/
/*             {% for tag in article.tags %}*/
/*                 {{ tag }},*/
/*             {% endfor %}*/
/*         </div>*/
/*     {% endfor %}*/
/* {% endblock %}*/
