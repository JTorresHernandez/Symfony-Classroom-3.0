<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_3d2f9e541d32a1646a2ef3c65250954f7cde9c39d20212995a9e755f86533617 extends Twig_Template
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
        $__internal_5982513ea2aef82bf31d2d7cff2a0c37402618fa2dd700b5ea9c7bd1ae44dc3a = $this->env->getExtension("native_profiler");
        $__internal_5982513ea2aef82bf31d2d7cff2a0c37402618fa2dd700b5ea9c7bd1ae44dc3a->enter($__internal_5982513ea2aef82bf31d2d7cff2a0c37402618fa2dd700b5ea9c7bd1ae44dc3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_5982513ea2aef82bf31d2d7cff2a0c37402618fa2dd700b5ea9c7bd1ae44dc3a->leave($__internal_5982513ea2aef82bf31d2d7cff2a0c37402618fa2dd700b5ea9c7bd1ae44dc3a_prof);

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
