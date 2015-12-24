<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_dcd60bf99952318385346faf3456c795cc99f2ef9696b924a6b7efa89fc57b51 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7d346bb904a83b50dcbdbbe7040c6b4aee7118cbdaba698b5704d8ebecbd4e8d = $this->env->getExtension("native_profiler");
        $__internal_7d346bb904a83b50dcbdbbe7040c6b4aee7118cbdaba698b5704d8ebecbd4e8d->enter($__internal_7d346bb904a83b50dcbdbbe7040c6b4aee7118cbdaba698b5704d8ebecbd4e8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d346bb904a83b50dcbdbbe7040c6b4aee7118cbdaba698b5704d8ebecbd4e8d->leave($__internal_7d346bb904a83b50dcbdbbe7040c6b4aee7118cbdaba698b5704d8ebecbd4e8d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_eed7bf2f6464553e373f54e8e4affb6675a62abf96595fbafc063fe5e493b863 = $this->env->getExtension("native_profiler");
        $__internal_eed7bf2f6464553e373f54e8e4affb6675a62abf96595fbafc063fe5e493b863->enter($__internal_eed7bf2f6464553e373f54e8e4affb6675a62abf96595fbafc063fe5e493b863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 5
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 6
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 7
                    echo "                <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                    ";
                    // line 8
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 11
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "    ";
        }
        // line 13
        echo "
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8\">
                ";
        // line 17
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 19
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_eed7bf2f6464553e373f54e8e4affb6675a62abf96595fbafc063fe5e493b863->leave($__internal_eed7bf2f6464553e373f54e8e4affb6675a62abf96595fbafc063fe5e493b863_prof);

    }

    // line 17
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3bd557cc862a22e6727399359e8b0981eef7527d81e6574b1b0a6bfc197be5bb = $this->env->getExtension("native_profiler");
        $__internal_3bd557cc862a22e6727399359e8b0981eef7527d81e6574b1b0a6bfc197be5bb->enter($__internal_3bd557cc862a22e6727399359e8b0981eef7527d81e6574b1b0a6bfc197be5bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 18
        echo "                ";
        
        $__internal_3bd557cc862a22e6727399359e8b0981eef7527d81e6574b1b0a6bfc197be5bb->leave($__internal_3bd557cc862a22e6727399359e8b0981eef7527d81e6574b1b0a6bfc197be5bb_prof);

    }

    // line 24
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_00f17e20066f9810229b62311b763c27f824fedca3e8091f8ce0d96631333951 = $this->env->getExtension("native_profiler");
        $__internal_00f17e20066f9810229b62311b763c27f824fedca3e8091f8ce0d96631333951->enter($__internal_00f17e20066f9810229b62311b763c27f824fedca3e8091f8ce0d96631333951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_00f17e20066f9810229b62311b763c27f824fedca3e8091f8ce0d96631333951->leave($__internal_00f17e20066f9810229b62311b763c27f824fedca3e8091f8ce0d96631333951_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 24,  102 => 18,  96 => 17,  86 => 19,  84 => 17,  78 => 13,  75 => 12,  69 => 11,  60 => 8,  55 => 7,  50 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     {% if app.request.hasPreviousSession %}*/
/*         {% for type, messages in app.session.flashbag.all() %}*/
/*             {% for message in messages %}*/
/*                 <div class="flash-{{ type }}">*/
/*                     {{ message }}*/
/*                 </div>*/
/*             {% endfor %}*/
/*         {% endfor %}*/
/*     {% endif %}*/
/* */
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-8">*/
/*                 {% block fos_user_content %}*/
/*                 {% endblock fos_user_content %}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block sidebar %}{% endblock %}*/
