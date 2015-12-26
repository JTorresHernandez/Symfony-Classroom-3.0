<?php

/* :admin/tag:unused-tags.html.twig */
class __TwigTemplate_4f1993456282da412d55b0ea8d030c4532f4a04a8e8b316f1f022359eeb5059e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":admin:admin_layout.html.twig", ":admin/tag:unused-tags.html.twig", 1);
        $this->blocks = array(
            'headTitle' => array($this, 'block_headTitle'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":admin:admin_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2d29407c1d2bfe0c558aa33b1443c61a31f49f3745f03c7b150f1164d600b372 = $this->env->getExtension("native_profiler");
        $__internal_2d29407c1d2bfe0c558aa33b1443c61a31f49f3745f03c7b150f1164d600b372->enter($__internal_2d29407c1d2bfe0c558aa33b1443c61a31f49f3745f03c7b150f1164d600b372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin/tag:unused-tags.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d29407c1d2bfe0c558aa33b1443c61a31f49f3745f03c7b150f1164d600b372->leave($__internal_2d29407c1d2bfe0c558aa33b1443c61a31f49f3745f03c7b150f1164d600b372_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_eb7a723b98bb0d90b7bfd749d0b413abf0c3fa086a404ef611a739c7fcfba9b8 = $this->env->getExtension("native_profiler");
        $__internal_eb7a723b98bb0d90b7bfd749d0b413abf0c3fa086a404ef611a739c7fcfba9b8->enter($__internal_eb7a723b98bb0d90b7bfd749d0b413abf0c3fa086a404ef611a739c7fcfba9b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo "Unused Tags";
        
        $__internal_eb7a723b98bb0d90b7bfd749d0b413abf0c3fa086a404ef611a739c7fcfba9b8->leave($__internal_eb7a723b98bb0d90b7bfd749d0b413abf0c3fa086a404ef611a739c7fcfba9b8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c927b6aeeb3b8240c3c789b99aa2de237ffb1ab1957bc9e1490fd8c993f7bb75 = $this->env->getExtension("native_profiler");
        $__internal_c927b6aeeb3b8240c3c789b99aa2de237ffb1ab1957bc9e1490fd8c993f7bb75->enter($__internal_c927b6aeeb3b8240c3c789b99aa2de237ffb1ab1957bc9e1490fd8c993f7bb75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        if ((isset($context["tags"]) ? $context["tags"] : $this->getContext($context, "tags"))) {
            // line 7
            echo "    <table class=\"table\">
        <thead>
            <td><strong>Tag</strong></td>
            <td></td>
        </thead>
        ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) ? $context["tags"] : $this->getContext($context, "tags")));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 13
                echo "            <tr>
                <td class=\"tag-name\">";
                // line 14
                echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
                echo "</td>
                <td><a class=\"btn btn-danger\" href=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("app_admin_tag_remove", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
                echo "\">remove</a></td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "    </table>
    <div>
        <a class=\"btn btn-danger\" href=\"";
            // line 20
            echo $this->env->getExtension('routing')->getPath("app_admin_tag_removeAllUnusedTags");
            echo "\">Remove all unused tags</a>
    </div>
    ";
        } else {
            // line 23
            echo "        <div class=\"row \">
            <div class=\"col-md-4 alert-success\" style=\"padding: 10px;\">
                <p id=\"no-unused-tags-found\">No unused tags were found</p>
            </div>
        </div>
    ";
        }
        
        $__internal_c927b6aeeb3b8240c3c789b99aa2de237ffb1ab1957bc9e1490fd8c993f7bb75->leave($__internal_c927b6aeeb3b8240c3c789b99aa2de237ffb1ab1957bc9e1490fd8c993f7bb75_prof);

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
        return array (  93 => 23,  87 => 20,  83 => 18,  74 => 15,  70 => 14,  67 => 13,  63 => 12,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends ':admin:admin_layout.html.twig' %}*/
/* */
/* {% block headTitle %}Unused Tags{% endblock %}*/
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
/*                 <td class="tag-name">{{ tag }}</td>*/
/*                 <td><a class="btn btn-danger" href="{{ path('app_admin_tag_remove', {'id': tag.id}) }}">remove</a></td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*     </table>*/
/*     <div>*/
/*         <a class="btn btn-danger" href="{{ path('app_admin_tag_removeAllUnusedTags') }}">Remove all unused tags</a>*/
/*     </div>*/
/*     {% else %}*/
/*         <div class="row ">*/
/*             <div class="col-md-4 alert-success" style="padding: 10px;">*/
/*                 <p id="no-unused-tags-found">No unused tags were found</p>*/
/*             </div>*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
