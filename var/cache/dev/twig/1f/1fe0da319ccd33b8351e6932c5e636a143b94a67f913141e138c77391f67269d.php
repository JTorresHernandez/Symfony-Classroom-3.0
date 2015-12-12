<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_95afbbd1632310b149f64e90d21dbb0d889242415c5f1ca3f487b4de7c3c7f3b extends Twig_Template
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
        $__internal_91ab8bd4ae2440ab77ad6031aa6d7d70fcdedd9450c087f2c5c304c46583084c = $this->env->getExtension("native_profiler");
        $__internal_91ab8bd4ae2440ab77ad6031aa6d7d70fcdedd9450c087f2c5c304c46583084c->enter($__internal_91ab8bd4ae2440ab77ad6031aa6d7d70fcdedd9450c087f2c5c304c46583084c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_91ab8bd4ae2440ab77ad6031aa6d7d70fcdedd9450c087f2c5c304c46583084c->leave($__internal_91ab8bd4ae2440ab77ad6031aa6d7d70fcdedd9450c087f2c5c304c46583084c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
