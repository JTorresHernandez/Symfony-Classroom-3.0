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
        $__internal_f05172e19d6219fe1bd4b2803df2d07a3ebe3c98524c64959ecdf64e38ef8bef = $this->env->getExtension("native_profiler");
        $__internal_f05172e19d6219fe1bd4b2803df2d07a3ebe3c98524c64959ecdf64e38ef8bef->enter($__internal_f05172e19d6219fe1bd4b2803df2d07a3ebe3c98524c64959ecdf64e38ef8bef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin/tag:unused-tags.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f05172e19d6219fe1bd4b2803df2d07a3ebe3c98524c64959ecdf64e38ef8bef->leave($__internal_f05172e19d6219fe1bd4b2803df2d07a3ebe3c98524c64959ecdf64e38ef8bef_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_fd30a1c3acd8aab262ec95911dd09d702ef8a1a64dafedfaf66122c42d10a311 = $this->env->getExtension("native_profiler");
        $__internal_fd30a1c3acd8aab262ec95911dd09d702ef8a1a64dafedfaf66122c42d10a311->enter($__internal_fd30a1c3acd8aab262ec95911dd09d702ef8a1a64dafedfaf66122c42d10a311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo "Unused Tags";
        
        $__internal_fd30a1c3acd8aab262ec95911dd09d702ef8a1a64dafedfaf66122c42d10a311->leave($__internal_fd30a1c3acd8aab262ec95911dd09d702ef8a1a64dafedfaf66122c42d10a311_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6e1c409309f96058c5473012d56dee3aabc2d99b82c77cabc12763c9e8093755 = $this->env->getExtension("native_profiler");
        $__internal_6e1c409309f96058c5473012d56dee3aabc2d99b82c77cabc12763c9e8093755->enter($__internal_6e1c409309f96058c5473012d56dee3aabc2d99b82c77cabc12763c9e8093755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6e1c409309f96058c5473012d56dee3aabc2d99b82c77cabc12763c9e8093755->leave($__internal_6e1c409309f96058c5473012d56dee3aabc2d99b82c77cabc12763c9e8093755_prof);

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
