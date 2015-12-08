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
        $__internal_de0bf5e180c355afb536f25ae3f854a1c8b7d4bef94c0db59ff52335793e3ede = $this->env->getExtension("native_profiler");
        $__internal_de0bf5e180c355afb536f25ae3f854a1c8b7d4bef94c0db59ff52335793e3ede->enter($__internal_de0bf5e180c355afb536f25ae3f854a1c8b7d4bef94c0db59ff52335793e3ede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_de0bf5e180c355afb536f25ae3f854a1c8b7d4bef94c0db59ff52335793e3ede->leave($__internal_de0bf5e180c355afb536f25ae3f854a1c8b7d4bef94c0db59ff52335793e3ede_prof);

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
