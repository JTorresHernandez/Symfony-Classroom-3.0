<?php

/* :article:articles.html.twig */
class __TwigTemplate_3a0ff023750804c02728265f4e4aa91f263771919df71a4e3e7e652fc3756650 extends Twig_Template
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
        $__internal_b68f815b09c9f32982598bd835e186cd86743009e4eb6a4f903a31bfc2ae89d4 = $this->env->getExtension("native_profiler");
        $__internal_b68f815b09c9f32982598bd835e186cd86743009e4eb6a4f903a31bfc2ae89d4->enter($__internal_b68f815b09c9f32982598bd835e186cd86743009e4eb6a4f903a31bfc2ae89d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:articles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b68f815b09c9f32982598bd835e186cd86743009e4eb6a4f903a31bfc2ae89d4->leave($__internal_b68f815b09c9f32982598bd835e186cd86743009e4eb6a4f903a31bfc2ae89d4_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_caee828a73021b7a235ef379bd3e5175b3c4afd7779a04356f472f5bc092fe49 = $this->env->getExtension("native_profiler");
        $__internal_caee828a73021b7a235ef379bd3e5175b3c4afd7779a04356f472f5bc092fe49->enter($__internal_caee828a73021b7a235ef379bd3e5175b3c4afd7779a04356f472f5bc092fe49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo "Articles";
        
        $__internal_caee828a73021b7a235ef379bd3e5175b3c4afd7779a04356f472f5bc092fe49->leave($__internal_caee828a73021b7a235ef379bd3e5175b3c4afd7779a04356f472f5bc092fe49_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2d302dcfd5b121701c37d07884631e9be5d702730e0dc77a502e016aeb1e939a = $this->env->getExtension("native_profiler");
        $__internal_2d302dcfd5b121701c37d07884631e9be5d702730e0dc77a502e016aeb1e939a->enter($__internal_2d302dcfd5b121701c37d07884631e9be5d702730e0dc77a502e016aeb1e939a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo "    <div class=\"navigation\">
        ";
        // line 10
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        echo "
    </div>
";
        
        $__internal_2d302dcfd5b121701c37d07884631e9be5d702730e0dc77a502e016aeb1e939a->leave($__internal_2d302dcfd5b121701c37d07884631e9be5d702730e0dc77a502e016aeb1e939a_prof);

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
        return array (  91 => 10,  88 => 9,  74 => 8,  71 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block headTitle %}Articles{% endblock %}*/
/* */
/* {% block body %}*/
/*     {% for article in articles %}*/
/*         {% include ':article:article_content.html.twig' %}*/
/*     {% endfor %}*/
/*     <div class="navigation">*/
/*         {{ knp_pagination_render(articles) }}*/
/*     </div>*/
/* {% endblock %}*/
