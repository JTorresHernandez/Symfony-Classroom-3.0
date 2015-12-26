<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_7ac52ce9fce8aca66846c297cebef9c3d018d6cd439b5999b9859483b5f18e22 extends Twig_Template
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
        $__internal_45a266dcf97137c85990e093a29b7cac17ac73b276dc4b51a3657b8cec59b6ea = $this->env->getExtension("native_profiler");
        $__internal_45a266dcf97137c85990e093a29b7cac17ac73b276dc4b51a3657b8cec59b6ea->enter($__internal_45a266dcf97137c85990e093a29b7cac17ac73b276dc4b51a3657b8cec59b6ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_45a266dcf97137c85990e093a29b7cac17ac73b276dc4b51a3657b8cec59b6ea->leave($__internal_45a266dcf97137c85990e093a29b7cac17ac73b276dc4b51a3657b8cec59b6ea_prof);

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
