<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_1c77f6eaf63ba9b777a191826b85b11d94536c16aa2e948f9d867daa05a3a99d extends Twig_Template
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
        $__internal_a04c43c436fbf246efa0257d9b4e57a54bc98d1b99cf0dae0d66576d43912f5b = $this->env->getExtension("native_profiler");
        $__internal_a04c43c436fbf246efa0257d9b4e57a54bc98d1b99cf0dae0d66576d43912f5b->enter($__internal_a04c43c436fbf246efa0257d9b4e57a54bc98d1b99cf0dae0d66576d43912f5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_a04c43c436fbf246efa0257d9b4e57a54bc98d1b99cf0dae0d66576d43912f5b->leave($__internal_a04c43c436fbf246efa0257d9b4e57a54bc98d1b99cf0dae0d66576d43912f5b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
