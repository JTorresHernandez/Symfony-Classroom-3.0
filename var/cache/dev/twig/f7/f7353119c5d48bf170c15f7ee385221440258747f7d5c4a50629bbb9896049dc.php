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
        $__internal_50df5f5bff60f8d6789cb69c167a85a7b48fb9153076863a8ae1809f0768a619 = $this->env->getExtension("native_profiler");
        $__internal_50df5f5bff60f8d6789cb69c167a85a7b48fb9153076863a8ae1809f0768a619->enter($__internal_50df5f5bff60f8d6789cb69c167a85a7b48fb9153076863a8ae1809f0768a619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_50df5f5bff60f8d6789cb69c167a85a7b48fb9153076863a8ae1809f0768a619->leave($__internal_50df5f5bff60f8d6789cb69c167a85a7b48fb9153076863a8ae1809f0768a619_prof);

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
