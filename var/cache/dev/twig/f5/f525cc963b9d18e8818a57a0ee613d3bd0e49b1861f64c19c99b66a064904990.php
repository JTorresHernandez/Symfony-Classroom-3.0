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
        $__internal_aa8253597fb3000a0b2fe47af4254fb28a1622ec51798f642a0be3b61d7be11e = $this->env->getExtension("native_profiler");
        $__internal_aa8253597fb3000a0b2fe47af4254fb28a1622ec51798f642a0be3b61d7be11e->enter($__internal_aa8253597fb3000a0b2fe47af4254fb28a1622ec51798f642a0be3b61d7be11e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":tag:tags.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa8253597fb3000a0b2fe47af4254fb28a1622ec51798f642a0be3b61d7be11e->leave($__internal_aa8253597fb3000a0b2fe47af4254fb28a1622ec51798f642a0be3b61d7be11e_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_8c4a32c21f731c374d2932c7c54acf3183e52a0a38d8e5e70191a8376af20f30 = $this->env->getExtension("native_profiler");
        $__internal_8c4a32c21f731c374d2932c7c54acf3183e52a0a38d8e5e70191a8376af20f30->enter($__internal_8c4a32c21f731c374d2932c7c54acf3183e52a0a38d8e5e70191a8376af20f30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo "Tags";
        
        $__internal_8c4a32c21f731c374d2932c7c54acf3183e52a0a38d8e5e70191a8376af20f30->leave($__internal_8c4a32c21f731c374d2932c7c54acf3183e52a0a38d8e5e70191a8376af20f30_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4f29da71768a03667e1d08f1a5441e8dad1905d36a85dd661434645293f99858 = $this->env->getExtension("native_profiler");
        $__internal_4f29da71768a03667e1d08f1a5441e8dad1905d36a85dd661434645293f99858->enter($__internal_4f29da71768a03667e1d08f1a5441e8dad1905d36a85dd661434645293f99858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4f29da71768a03667e1d08f1a5441e8dad1905d36a85dd661434645293f99858->leave($__internal_4f29da71768a03667e1d08f1a5441e8dad1905d36a85dd661434645293f99858_prof);

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
