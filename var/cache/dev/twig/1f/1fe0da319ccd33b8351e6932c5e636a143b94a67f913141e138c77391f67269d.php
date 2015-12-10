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
        $__internal_d71c83af94001afe7c4f76295dcbc55da96d9c74b5035af42fefd23f81618ae1 = $this->env->getExtension("native_profiler");
        $__internal_d71c83af94001afe7c4f76295dcbc55da96d9c74b5035af42fefd23f81618ae1->enter($__internal_d71c83af94001afe7c4f76295dcbc55da96d9c74b5035af42fefd23f81618ae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_d71c83af94001afe7c4f76295dcbc55da96d9c74b5035af42fefd23f81618ae1->leave($__internal_d71c83af94001afe7c4f76295dcbc55da96d9c74b5035af42fefd23f81618ae1_prof);

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
