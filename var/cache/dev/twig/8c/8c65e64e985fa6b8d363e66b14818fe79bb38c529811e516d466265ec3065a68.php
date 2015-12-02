<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d974e029a2fa0d75a79af04b5abb1b71425f50bc485d715af6141f9c726ad50e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5f513b07ab27556b0948035c12528bf68abbb73d10c47944d07d910d1dc4296e = $this->env->getExtension("native_profiler");
        $__internal_5f513b07ab27556b0948035c12528bf68abbb73d10c47944d07d910d1dc4296e->enter($__internal_5f513b07ab27556b0948035c12528bf68abbb73d10c47944d07d910d1dc4296e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f513b07ab27556b0948035c12528bf68abbb73d10c47944d07d910d1dc4296e->leave($__internal_5f513b07ab27556b0948035c12528bf68abbb73d10c47944d07d910d1dc4296e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6dd40699bb15ee32b93f79beae1dc7a5b464dad61cdd7573a74c0c0f80db550c = $this->env->getExtension("native_profiler");
        $__internal_6dd40699bb15ee32b93f79beae1dc7a5b464dad61cdd7573a74c0c0f80db550c->enter($__internal_6dd40699bb15ee32b93f79beae1dc7a5b464dad61cdd7573a74c0c0f80db550c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6dd40699bb15ee32b93f79beae1dc7a5b464dad61cdd7573a74c0c0f80db550c->leave($__internal_6dd40699bb15ee32b93f79beae1dc7a5b464dad61cdd7573a74c0c0f80db550c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ed3c9fd2b0c8d587643946aa7ef2475fcee1b0d22fe756586624a3800b5f92b0 = $this->env->getExtension("native_profiler");
        $__internal_ed3c9fd2b0c8d587643946aa7ef2475fcee1b0d22fe756586624a3800b5f92b0->enter($__internal_ed3c9fd2b0c8d587643946aa7ef2475fcee1b0d22fe756586624a3800b5f92b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ed3c9fd2b0c8d587643946aa7ef2475fcee1b0d22fe756586624a3800b5f92b0->leave($__internal_ed3c9fd2b0c8d587643946aa7ef2475fcee1b0d22fe756586624a3800b5f92b0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d5d0c38f9570bf3e9839b756e09e0b4be1664729bdf876a0b8e41423df7da86c = $this->env->getExtension("native_profiler");
        $__internal_d5d0c38f9570bf3e9839b756e09e0b4be1664729bdf876a0b8e41423df7da86c->enter($__internal_d5d0c38f9570bf3e9839b756e09e0b4be1664729bdf876a0b8e41423df7da86c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d5d0c38f9570bf3e9839b756e09e0b4be1664729bdf876a0b8e41423df7da86c->leave($__internal_d5d0c38f9570bf3e9839b756e09e0b4be1664729bdf876a0b8e41423df7da86c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
