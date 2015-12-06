<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_55dbd5601780e7534527a442d3c7bde6467e750053fe7aabc17d4310d2849d14 extends Twig_Template
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
        $__internal_7c5d74eb739b003fd51eeb1b08b23b6532710dd0aa2a67b10a39f393b32d8d8c = $this->env->getExtension("native_profiler");
        $__internal_7c5d74eb739b003fd51eeb1b08b23b6532710dd0aa2a67b10a39f393b32d8d8c->enter($__internal_7c5d74eb739b003fd51eeb1b08b23b6532710dd0aa2a67b10a39f393b32d8d8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_7c5d74eb739b003fd51eeb1b08b23b6532710dd0aa2a67b10a39f393b32d8d8c->leave($__internal_7c5d74eb739b003fd51eeb1b08b23b6532710dd0aa2a67b10a39f393b32d8d8c_prof);

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
