<?php

/* :tag:tags.html.twig */
class __TwigTemplate_0f02d57e95c6c58794039610be94cdef4796739e5bbd83b492bb72d5b7f421a2 extends Twig_Template
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
        $__internal_de5e4f50b7df9f56e768deb21c6813cfed7c30cc7f7116a0d49dd9bd2d709bfd = $this->env->getExtension("native_profiler");
        $__internal_de5e4f50b7df9f56e768deb21c6813cfed7c30cc7f7116a0d49dd9bd2d709bfd->enter($__internal_de5e4f50b7df9f56e768deb21c6813cfed7c30cc7f7116a0d49dd9bd2d709bfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":tag:tags.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de5e4f50b7df9f56e768deb21c6813cfed7c30cc7f7116a0d49dd9bd2d709bfd->leave($__internal_de5e4f50b7df9f56e768deb21c6813cfed7c30cc7f7116a0d49dd9bd2d709bfd_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_c56d8cda3fc54ca0442bf28d0d909e255dff293dfdbb6f8db2dcef056ab437a2 = $this->env->getExtension("native_profiler");
        $__internal_c56d8cda3fc54ca0442bf28d0d909e255dff293dfdbb6f8db2dcef056ab437a2->enter($__internal_c56d8cda3fc54ca0442bf28d0d909e255dff293dfdbb6f8db2dcef056ab437a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo "Tags";
        
        $__internal_c56d8cda3fc54ca0442bf28d0d909e255dff293dfdbb6f8db2dcef056ab437a2->leave($__internal_c56d8cda3fc54ca0442bf28d0d909e255dff293dfdbb6f8db2dcef056ab437a2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_bb18dfa9f847009e2228fe7a0b89ca6ad03e5a550ba54a9d3ae04e533c24778a = $this->env->getExtension("native_profiler");
        $__internal_bb18dfa9f847009e2228fe7a0b89ca6ad03e5a550ba54a9d3ae04e533c24778a->enter($__internal_bb18dfa9f847009e2228fe7a0b89ca6ad03e5a550ba54a9d3ae04e533c24778a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                echo "                <div><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("app_article_show", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["article"], "html", null, true);
                echo "</a></div>
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
        // line 15
        echo "    <div class=\"navigation\">
        ";
        // line 16
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["tags"]) ? $context["tags"] : $this->getContext($context, "tags")));
        echo "
    </div>
";
        
        $__internal_bb18dfa9f847009e2228fe7a0b89ca6ad03e5a550ba54a9d3ae04e533c24778a->leave($__internal_bb18dfa9f847009e2228fe7a0b89ca6ad03e5a550ba54a9d3ae04e533c24778a_prof);

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
        return array (  90 => 16,  87 => 15,  80 => 13,  69 => 11,  65 => 10,  58 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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
/*                 <div><a href="{{ path('app_article_show', {'id': article.id}) }}">{{ article }}</a></div>*/
/*             {% endfor %}*/
/*         </div>*/
/*     {% endfor %}*/
/*     <div class="navigation">*/
/*         {{ knp_pagination_render(tags) }}*/
/*     </div>*/
/* {% endblock %}*/
