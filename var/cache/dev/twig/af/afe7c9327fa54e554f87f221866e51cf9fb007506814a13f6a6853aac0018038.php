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
        $__internal_38ae5622e5e685868fe4242de07debdcf70ec9707d87c96f9269cdf7302680b2 = $this->env->getExtension("native_profiler");
        $__internal_38ae5622e5e685868fe4242de07debdcf70ec9707d87c96f9269cdf7302680b2->enter($__internal_38ae5622e5e685868fe4242de07debdcf70ec9707d87c96f9269cdf7302680b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_38ae5622e5e685868fe4242de07debdcf70ec9707d87c96f9269cdf7302680b2->leave($__internal_38ae5622e5e685868fe4242de07debdcf70ec9707d87c96f9269cdf7302680b2_prof);

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
