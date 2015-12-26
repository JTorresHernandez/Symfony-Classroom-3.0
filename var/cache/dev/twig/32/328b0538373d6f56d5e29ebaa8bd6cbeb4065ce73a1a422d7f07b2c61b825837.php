<?php

/* :admin/index:index.html.twig */
class __TwigTemplate_0c1af419ddaf7488a8781f6fd11d2fc398c8b01e7e1557986703cf3f3d820e38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":admin:admin_layout.html.twig", ":admin/index:index.html.twig", 1);
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
        $__internal_cacf94ab8c75b5a163f932fedc953776d18edc4552eb27e9932ae711c4f6a248 = $this->env->getExtension("native_profiler");
        $__internal_cacf94ab8c75b5a163f932fedc953776d18edc4552eb27e9932ae711c4f6a248->enter($__internal_cacf94ab8c75b5a163f932fedc953776d18edc4552eb27e9932ae711c4f6a248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin/index:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cacf94ab8c75b5a163f932fedc953776d18edc4552eb27e9932ae711c4f6a248->leave($__internal_cacf94ab8c75b5a163f932fedc953776d18edc4552eb27e9932ae711c4f6a248_prof);

    }

    // line 3
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_d5e9a028215f9b1273b6f3b71ee23a7b312220c0ebce82b1e4af6128883d4ce5 = $this->env->getExtension("native_profiler");
        $__internal_d5e9a028215f9b1273b6f3b71ee23a7b312220c0ebce82b1e4af6128883d4ce5->enter($__internal_d5e9a028215f9b1273b6f3b71ee23a7b312220c0ebce82b1e4af6128883d4ce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo "Dashboard";
        
        $__internal_d5e9a028215f9b1273b6f3b71ee23a7b312220c0ebce82b1e4af6128883d4ce5->leave($__internal_d5e9a028215f9b1273b6f3b71ee23a7b312220c0ebce82b1e4af6128883d4ce5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8ab0bf6b33815fc932ac23af5e845fc3029a3d00aa2885f9dccda2874e4be763 = $this->env->getExtension("native_profiler");
        $__internal_8ab0bf6b33815fc932ac23af5e845fc3029a3d00aa2885f9dccda2874e4be763->enter($__internal_8ab0bf6b33815fc932ac23af5e845fc3029a3d00aa2885f9dccda2874e4be763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div>
        <p>Welcome to dashboard</p>
    </div>
";
        
        $__internal_8ab0bf6b33815fc932ac23af5e845fc3029a3d00aa2885f9dccda2874e4be763->leave($__internal_8ab0bf6b33815fc932ac23af5e845fc3029a3d00aa2885f9dccda2874e4be763_prof);

    }

    public function getTemplateName()
    {
        return ":admin/index:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends ':admin:admin_layout.html.twig' %}*/
/* */
/* {% block headTitle %}Dashboard{% endblock %}*/
/* */
/* {% block body %}*/
/*     <div>*/
/*         <p>Welcome to dashboard</p>*/
/*     </div>*/
/* {% endblock %}*/
