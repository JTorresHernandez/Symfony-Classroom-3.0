<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_09d8cd2d1e10113a9b60a9239a902bfa2204ec065d0cad5e9531b5ff1a735959 extends Twig_Template
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
        $__internal_b0d9a5287f52d6450d64820d09db24f6bdbaa75657d5cc723a1226b2824ec377 = $this->env->getExtension("native_profiler");
        $__internal_b0d9a5287f52d6450d64820d09db24f6bdbaa75657d5cc723a1226b2824ec377->enter($__internal_b0d9a5287f52d6450d64820d09db24f6bdbaa75657d5cc723a1226b2824ec377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_b0d9a5287f52d6450d64820d09db24f6bdbaa75657d5cc723a1226b2824ec377->leave($__internal_b0d9a5287f52d6450d64820d09db24f6bdbaa75657d5cc723a1226b2824ec377_prof);

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
