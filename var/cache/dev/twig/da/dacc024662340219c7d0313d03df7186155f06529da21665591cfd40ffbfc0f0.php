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
        $__internal_f283522f5a2b615bfcc77f605bded9c385b2fcd4eda84296de482096fbf32f99 = $this->env->getExtension("native_profiler");
        $__internal_f283522f5a2b615bfcc77f605bded9c385b2fcd4eda84296de482096fbf32f99->enter($__internal_f283522f5a2b615bfcc77f605bded9c385b2fcd4eda84296de482096fbf32f99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin/tag:unused-tags.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f283522f5a2b615bfcc77f605bded9c385b2fcd4eda84296de482096fbf32f99->leave($__internal_f283522f5a2b615bfcc77f605bded9c385b2fcd4eda84296de482096fbf32f99_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_7d42eb7b02d5f28c2f8354fa8eba73b0f60ef4560c3e5ec4ff846f1a5ad01fe8 = $this->env->getExtension("native_profiler");
        $__internal_7d42eb7b02d5f28c2f8354fa8eba73b0f60ef4560c3e5ec4ff846f1a5ad01fe8->enter($__internal_7d42eb7b02d5f28c2f8354fa8eba73b0f60ef4560c3e5ec4ff846f1a5ad01fe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo "Unused Tags";
        
        $__internal_7d42eb7b02d5f28c2f8354fa8eba73b0f60ef4560c3e5ec4ff846f1a5ad01fe8->leave($__internal_7d42eb7b02d5f28c2f8354fa8eba73b0f60ef4560c3e5ec4ff846f1a5ad01fe8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_fdaa7281f29e04a21f7da863e5bb3031870364dfb502574e1b0b063cd599304b = $this->env->getExtension("native_profiler");
        $__internal_fdaa7281f29e04a21f7da863e5bb3031870364dfb502574e1b0b063cd599304b->enter($__internal_fdaa7281f29e04a21f7da863e5bb3031870364dfb502574e1b0b063cd599304b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_fdaa7281f29e04a21f7da863e5bb3031870364dfb502574e1b0b063cd599304b->leave($__internal_fdaa7281f29e04a21f7da863e5bb3031870364dfb502574e1b0b063cd599304b_prof);

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
