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
        $__internal_5e99262c90bf3d4b83946df6879290953a79733982519da53667529b6912e46e = $this->env->getExtension("native_profiler");
        $__internal_5e99262c90bf3d4b83946df6879290953a79733982519da53667529b6912e46e->enter($__internal_5e99262c90bf3d4b83946df6879290953a79733982519da53667529b6912e46e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":tag:tags.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e99262c90bf3d4b83946df6879290953a79733982519da53667529b6912e46e->leave($__internal_5e99262c90bf3d4b83946df6879290953a79733982519da53667529b6912e46e_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_5f31b488938285a081d4f5c5e0616cadfd5efdd8079c4c97625d26ba93591b3b = $this->env->getExtension("native_profiler");
        $__internal_5f31b488938285a081d4f5c5e0616cadfd5efdd8079c4c97625d26ba93591b3b->enter($__internal_5f31b488938285a081d4f5c5e0616cadfd5efdd8079c4c97625d26ba93591b3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo "Tags";
        
        $__internal_5f31b488938285a081d4f5c5e0616cadfd5efdd8079c4c97625d26ba93591b3b->leave($__internal_5f31b488938285a081d4f5c5e0616cadfd5efdd8079c4c97625d26ba93591b3b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_45f9ae7105623b12fa4660739663079a26e7e638c0f22ce2c8bb1531d5da0d6f = $this->env->getExtension("native_profiler");
        $__internal_45f9ae7105623b12fa4660739663079a26e7e638c0f22ce2c8bb1531d5da0d6f->enter($__internal_45f9ae7105623b12fa4660739663079a26e7e638c0f22ce2c8bb1531d5da0d6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_45f9ae7105623b12fa4660739663079a26e7e638c0f22ce2c8bb1531d5da0d6f->leave($__internal_45f9ae7105623b12fa4660739663079a26e7e638c0f22ce2c8bb1531d5da0d6f_prof);

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
