<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_812c18a8fcd7ec7386791b91394f867f98b08a648240afd3be4488dc3b5080eb extends Twig_Template
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
        $__internal_6c8ad86715ef03ffee46b7549abb9984d80831de4711606b0ff804b2b8856006 = $this->env->getExtension("native_profiler");
        $__internal_6c8ad86715ef03ffee46b7549abb9984d80831de4711606b0ff804b2b8856006->enter($__internal_6c8ad86715ef03ffee46b7549abb9984d80831de4711606b0ff804b2b8856006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_6c8ad86715ef03ffee46b7549abb9984d80831de4711606b0ff804b2b8856006->leave($__internal_6c8ad86715ef03ffee46b7549abb9984d80831de4711606b0ff804b2b8856006_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
