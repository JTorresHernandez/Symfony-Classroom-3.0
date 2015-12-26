<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_09c1963a55f6b2a1f9658c773b2565fb7587b4422f57a44c8fb1174b02255984 extends Twig_Template
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
        $__internal_8db46a52f3fd3d05a1d7b90293b4a0f6152b513d3bcc806f245e8aeed50c9b29 = $this->env->getExtension("native_profiler");
        $__internal_8db46a52f3fd3d05a1d7b90293b4a0f6152b513d3bcc806f245e8aeed50c9b29->enter($__internal_8db46a52f3fd3d05a1d7b90293b4a0f6152b513d3bcc806f245e8aeed50c9b29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_8db46a52f3fd3d05a1d7b90293b4a0f6152b513d3bcc806f245e8aeed50c9b29->leave($__internal_8db46a52f3fd3d05a1d7b90293b4a0f6152b513d3bcc806f245e8aeed50c9b29_prof);

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
