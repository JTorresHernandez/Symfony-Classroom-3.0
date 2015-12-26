<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_e16aa94af2553e15e0e99ecdc6f55763b9880b8e0cca4d50a05a674c9a8da79d extends Twig_Template
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
        $__internal_1081a55822aa96d7f2c00224e645a036d3006b33c38519c0ef854a4f4097a344 = $this->env->getExtension("native_profiler");
        $__internal_1081a55822aa96d7f2c00224e645a036d3006b33c38519c0ef854a4f4097a344->enter($__internal_1081a55822aa96d7f2c00224e645a036d3006b33c38519c0ef854a4f4097a344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_1081a55822aa96d7f2c00224e645a036d3006b33c38519c0ef854a4f4097a344->leave($__internal_1081a55822aa96d7f2c00224e645a036d3006b33c38519c0ef854a4f4097a344_prof);

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
