<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_48e999c81d1e65a03741ab8b637c2bb72afb39f7acf16e9d0a436b528c00f197 extends Twig_Template
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
        $__internal_fcea9e5f702f600b552ed34d5745dbe670b61ae9bf542649eb94ddd1686dd789 = $this->env->getExtension("native_profiler");
        $__internal_fcea9e5f702f600b552ed34d5745dbe670b61ae9bf542649eb94ddd1686dd789->enter($__internal_fcea9e5f702f600b552ed34d5745dbe670b61ae9bf542649eb94ddd1686dd789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_fcea9e5f702f600b552ed34d5745dbe670b61ae9bf542649eb94ddd1686dd789->leave($__internal_fcea9e5f702f600b552ed34d5745dbe670b61ae9bf542649eb94ddd1686dd789_prof);

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
