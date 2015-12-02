<?php

/* :calculator:result.html.twig */
class __TwigTemplate_5aa9267b0be6e9e444b7d2e0157d9f2fe2efe8554e187e49e3932dc0a15f4ac2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", ":calculator:result.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_644812006c32f32ae6cc9d308dc6535669c6c35bb27c322f87300286774571d9 = $this->env->getExtension("native_profiler");
        $__internal_644812006c32f32ae6cc9d308dc6535669c6c35bb27c322f87300286774571d9->enter($__internal_644812006c32f32ae6cc9d308dc6535669c6c35bb27c322f87300286774571d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":calculator:result.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_644812006c32f32ae6cc9d308dc6535669c6c35bb27c322f87300286774571d9->leave($__internal_644812006c32f32ae6cc9d308dc6535669c6c35bb27c322f87300286774571d9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8ba9987fb3f22d1fad80f57ac4de3b2ada2bc68c681d55616f28405764a160ba = $this->env->getExtension("native_profiler");
        $__internal_8ba9987fb3f22d1fad80f57ac4de3b2ada2bc68c681d55616f28405764a160ba->enter($__internal_8ba9987fb3f22d1fad80f57ac4de3b2ada2bc68c681d55616f28405764a160ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "Result";
        
        $__internal_8ba9987fb3f22d1fad80f57ac4de3b2ada2bc68c681d55616f28405764a160ba->leave($__internal_8ba9987fb3f22d1fad80f57ac4de3b2ada2bc68c681d55616f28405764a160ba_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8490aa7ef478691c26c74a791c7d1fd03baa013cceba53277da511bd7527bbe4 = $this->env->getExtension("native_profiler");
        $__internal_8490aa7ef478691c26c74a791c7d1fd03baa013cceba53277da511bd7527bbe4->enter($__internal_8490aa7ef478691c26c74a791c7d1fd03baa013cceba53277da511bd7527bbe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <!-- <p>";
        echo twig_escape_filter($this->env, ((isset($context["op1"]) ? $context["op1"] : $this->getContext($context, "op1")) . (isset($context["op2"]) ? $context["op2"] : $this->getContext($context, "op2"))), "html", null, true);
        echo "</p> -->
    <div>
        <p style=\"font-size: 80px;\"><span style=\"color:green\">";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["op1"]) ? $context["op1"] : $this->getContext($context, "op1")), "html", null, true);
        echo "</span> ";
        echo twig_escape_filter($this->env, (isset($context["operation"]) ? $context["operation"] : $this->getContext($context, "operation")), "html", null, true);
        echo " <span style=\"color:blue;\">";
        echo twig_escape_filter($this->env, (isset($context["op2"]) ? $context["op2"] : $this->getContext($context, "op2")), "html", null, true);
        echo "</span> = <span style=\"color:red\">";
        echo twig_escape_filter($this->env, (isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")), "html", null, true);
        echo "</span></p>
    </div>
";
        
        $__internal_8490aa7ef478691c26c74a791c7d1fd03baa013cceba53277da511bd7527bbe4->leave($__internal_8490aa7ef478691c26c74a791c7d1fd03baa013cceba53277da511bd7527bbe4_prof);

    }

    public function getTemplateName()
    {
        return ":calculator:result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 8,  54 => 6,  48 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block title %}{{ parent() }}Result{% endblock %}*/
/* */
/* {% block body %}*/
/*     <!-- <p>{{ op1~op2 }}</p> -->*/
/*     <div>*/
/*         <p style="font-size: 80px;"><span style="color:green">{{ op1 }}</span> {{ operation }} <span style="color:blue;">{{ op2 }}</span> = <span style="color:red">{{ result }}</span></p>*/
/*     </div>*/
/* {% endblock %}*/
