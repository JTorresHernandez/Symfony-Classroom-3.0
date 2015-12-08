<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_33371ec0b4210486e22dcf479209558c629486d5fba37ec09a7725dac4a2bbc0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a009a3e2e1a02eec2da081c2e7b7c4356c95c7ec1884168f54e8d38051fa1a2e = $this->env->getExtension("native_profiler");
        $__internal_a009a3e2e1a02eec2da081c2e7b7c4356c95c7ec1884168f54e8d38051fa1a2e->enter($__internal_a009a3e2e1a02eec2da081c2e7b7c4356c95c7ec1884168f54e8d38051fa1a2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_a009a3e2e1a02eec2da081c2e7b7c4356c95c7ec1884168f54e8d38051fa1a2e->leave($__internal_a009a3e2e1a02eec2da081c2e7b7c4356c95c7ec1884168f54e8d38051fa1a2e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
