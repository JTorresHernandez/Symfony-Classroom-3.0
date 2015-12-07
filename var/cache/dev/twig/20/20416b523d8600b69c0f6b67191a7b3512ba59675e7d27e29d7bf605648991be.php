<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_e161218ef9715eb10a0b697ba0491f84517016e7433d2f73c81f98b73301b2b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2ca12c8734b7abdf1efbc531ae0b6c878591155556180c125ea50faab6068aad = $this->env->getExtension("native_profiler");
        $__internal_2ca12c8734b7abdf1efbc531ae0b6c878591155556180c125ea50faab6068aad->enter($__internal_2ca12c8734b7abdf1efbc531ae0b6c878591155556180c125ea50faab6068aad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ca12c8734b7abdf1efbc531ae0b6c878591155556180c125ea50faab6068aad->leave($__internal_2ca12c8734b7abdf1efbc531ae0b6c878591155556180c125ea50faab6068aad_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_102e1e7070591b427bfe94a2497c10c55e6c2eb7fd7112a79a47a534ec6657b1 = $this->env->getExtension("native_profiler");
        $__internal_102e1e7070591b427bfe94a2497c10c55e6c2eb7fd7112a79a47a534ec6657b1->enter($__internal_102e1e7070591b427bfe94a2497c10c55e6c2eb7fd7112a79a47a534ec6657b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_102e1e7070591b427bfe94a2497c10c55e6c2eb7fd7112a79a47a534ec6657b1->leave($__internal_102e1e7070591b427bfe94a2497c10c55e6c2eb7fd7112a79a47a534ec6657b1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9274d29c81bd5d0c16b2d13b2a084508bb1201b17e702154310d07dbdc984c46 = $this->env->getExtension("native_profiler");
        $__internal_9274d29c81bd5d0c16b2d13b2a084508bb1201b17e702154310d07dbdc984c46->enter($__internal_9274d29c81bd5d0c16b2d13b2a084508bb1201b17e702154310d07dbdc984c46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9274d29c81bd5d0c16b2d13b2a084508bb1201b17e702154310d07dbdc984c46->leave($__internal_9274d29c81bd5d0c16b2d13b2a084508bb1201b17e702154310d07dbdc984c46_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6143c4a26a88ca53c776bb28e08f8e8e49164a52f77d0b39f73dfd59d80346d4 = $this->env->getExtension("native_profiler");
        $__internal_6143c4a26a88ca53c776bb28e08f8e8e49164a52f77d0b39f73dfd59d80346d4->enter($__internal_6143c4a26a88ca53c776bb28e08f8e8e49164a52f77d0b39f73dfd59d80346d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_6143c4a26a88ca53c776bb28e08f8e8e49164a52f77d0b39f73dfd59d80346d4->leave($__internal_6143c4a26a88ca53c776bb28e08f8e8e49164a52f77d0b39f73dfd59d80346d4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
