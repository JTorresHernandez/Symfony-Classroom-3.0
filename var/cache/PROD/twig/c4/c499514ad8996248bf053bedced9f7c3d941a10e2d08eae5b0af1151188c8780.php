<?php

/* :admin/tag:unused-tags.html.twig */
class __TwigTemplate_3d3d1d5b88878d83637b47c705517380294085689909f656d496b271a7464ca9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", ":admin/tag:unused-tags.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_070036d24931134e8c0e6d8d09afed47ed232a1aebc358a04e5bda82bd9e90d7 = $this->env->getExtension("native_profiler");
        $__internal_070036d24931134e8c0e6d8d09afed47ed232a1aebc358a04e5bda82bd9e90d7->enter($__internal_070036d24931134e8c0e6d8d09afed47ed232a1aebc358a04e5bda82bd9e90d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin/tag:unused-tags.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_070036d24931134e8c0e6d8d09afed47ed232a1aebc358a04e5bda82bd9e90d7->leave($__internal_070036d24931134e8c0e6d8d09afed47ed232a1aebc358a04e5bda82bd9e90d7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7e5d7eefba89f543dc9cb9ab4af7da11bb34f5a51da1b2b6e18bd0f478bdc901 = $this->env->getExtension("native_profiler");
        $__internal_7e5d7eefba89f543dc9cb9ab4af7da11bb34f5a51da1b2b6e18bd0f478bdc901->enter($__internal_7e5d7eefba89f543dc9cb9ab4af7da11bb34f5a51da1b2b6e18bd0f478bdc901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        if ((isset($context["tags"]) ? $context["tags"] : $this->getContext($context, "tags"))) {
            // line 5
            echo "    <table class=\"table\">
        <thead>
            <td><strong>Tag</strong></td>
            <td></td>
        </thead>
        ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) ? $context["tags"] : $this->getContext($context, "tags")));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 11
                echo "            <tr>
                <td>";
                // line 12
                echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
                echo "</td>
                <td><a class=\"btn btn-danger\" href=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("app_admin_tag_remove", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
                echo "\">remove</a></td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "    </table>
    <div>
        <a class=\"btn btn-danger\" href=\"";
            // line 18
            echo $this->env->getExtension('routing')->getPath("app_admin_tag_removeAllUnusedTags");
            echo "\">Remove all unused tags</a>
    </div>
    ";
        } else {
            // line 21
            echo "        <h1>No unused tags were found</h1>
    ";
        }
        
        $__internal_7e5d7eefba89f543dc9cb9ab4af7da11bb34f5a51da1b2b6e18bd0f478bdc901->leave($__internal_7e5d7eefba89f543dc9cb9ab4af7da11bb34f5a51da1b2b6e18bd0f478bdc901_prof);

    }

    public function getTemplateName()
    {
        return ":admin/tag:unused-tags.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 21,  74 => 18,  70 => 16,  61 => 13,  57 => 12,  54 => 11,  50 => 10,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     {% if tags %}*/
/*     <table class="table">*/
/*         <thead>*/
/*             <td><strong>Tag</strong></td>*/
/*             <td></td>*/
/*         </thead>*/
/*         {% for tag in tags %}*/
/*             <tr>*/
/*                 <td>{{ tag }}</td>*/
/*                 <td><a class="btn btn-danger" href="{{ path('app_admin_tag_remove', {'id': tag.id}) }}">remove</a></td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*     </table>*/
/*     <div>*/
/*         <a class="btn btn-danger" href="{{ path('app_admin_tag_removeAllUnusedTags') }}">Remove all unused tags</a>*/
/*     </div>*/
/*     {% else %}*/
/*         <h1>No unused tags were found</h1>*/
/*     {% endif %}*/
/* {% endblock %}*/
