<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_392cc290fffdbadb95ba9ea7bbc3f7826826485ef3d7179fc34076645d7657c3 extends Twig_Template
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
        $__internal_d8c1c4c9402a566e3a7c99770fdc6619059ffc0e5f422d49bcbc57bf6bd70b02 = $this->env->getExtension("native_profiler");
        $__internal_d8c1c4c9402a566e3a7c99770fdc6619059ffc0e5f422d49bcbc57bf6bd70b02->enter($__internal_d8c1c4c9402a566e3a7c99770fdc6619059ffc0e5f422d49bcbc57bf6bd70b02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_d8c1c4c9402a566e3a7c99770fdc6619059ffc0e5f422d49bcbc57bf6bd70b02->leave($__internal_d8c1c4c9402a566e3a7c99770fdc6619059ffc0e5f422d49bcbc57bf6bd70b02_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
