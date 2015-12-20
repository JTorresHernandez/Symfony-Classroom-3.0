<?php

/* :admin/tag:unused-tags.html.twig */
class __TwigTemplate_a4688b57df17551e812c217db8bc4dde4ab5bedf5f7e724cc34b986aac921ad7 extends Twig_Template
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
        $__internal_6d087f9f95193393c062d3c8457e13b5b35d6b557633a96cf04627a30dede719 = $this->env->getExtension("native_profiler");
        $__internal_6d087f9f95193393c062d3c8457e13b5b35d6b557633a96cf04627a30dede719->enter($__internal_6d087f9f95193393c062d3c8457e13b5b35d6b557633a96cf04627a30dede719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin/tag:unused-tags.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d087f9f95193393c062d3c8457e13b5b35d6b557633a96cf04627a30dede719->leave($__internal_6d087f9f95193393c062d3c8457e13b5b35d6b557633a96cf04627a30dede719_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_0c3b0494a43bdce9a60b78588164af7c0d894f182ee8e6bd2e2562996f3b982d = $this->env->getExtension("native_profiler");
        $__internal_0c3b0494a43bdce9a60b78588164af7c0d894f182ee8e6bd2e2562996f3b982d->enter($__internal_0c3b0494a43bdce9a60b78588164af7c0d894f182ee8e6bd2e2562996f3b982d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo "Unused Tags";
        
        $__internal_0c3b0494a43bdce9a60b78588164af7c0d894f182ee8e6bd2e2562996f3b982d->leave($__internal_0c3b0494a43bdce9a60b78588164af7c0d894f182ee8e6bd2e2562996f3b982d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_62352d3c3c98fb08108d79828a5f73fd362116b276f1a1209994d6cab8cf36da = $this->env->getExtension("native_profiler");
        $__internal_62352d3c3c98fb08108d79828a5f73fd362116b276f1a1209994d6cab8cf36da->enter($__internal_62352d3c3c98fb08108d79828a5f73fd362116b276f1a1209994d6cab8cf36da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                <td>";
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
            echo "        <p>No unused tags were found</p>
    ";
        }
        
        $__internal_62352d3c3c98fb08108d79828a5f73fd362116b276f1a1209994d6cab8cf36da->leave($__internal_62352d3c3c98fb08108d79828a5f73fd362116b276f1a1209994d6cab8cf36da_prof);

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
/*                 <td>{{ tag }}</td>*/
/*                 <td><a class="btn btn-danger" href="{{ path('app_admin_tag_remove', {'id': tag.id}) }}">remove</a></td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*     </table>*/
/*     <div>*/
/*         <a class="btn btn-danger" href="{{ path('app_admin_tag_removeAllUnusedTags') }}">Remove all unused tags</a>*/
/*     </div>*/
/*     {% else %}*/
/*         <p>No unused tags were found</p>*/
/*     {% endif %}*/
/* {% endblock %}*/
