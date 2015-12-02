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
        $__internal_297a2216404a7b7a95fd6b7f9fffed6b5d376501ec2fe5660f7e49aa460cb3e7 = $this->env->getExtension("native_profiler");
        $__internal_297a2216404a7b7a95fd6b7f9fffed6b5d376501ec2fe5660f7e49aa460cb3e7->enter($__internal_297a2216404a7b7a95fd6b7f9fffed6b5d376501ec2fe5660f7e49aa460cb3e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_297a2216404a7b7a95fd6b7f9fffed6b5d376501ec2fe5660f7e49aa460cb3e7->leave($__internal_297a2216404a7b7a95fd6b7f9fffed6b5d376501ec2fe5660f7e49aa460cb3e7_prof);

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
