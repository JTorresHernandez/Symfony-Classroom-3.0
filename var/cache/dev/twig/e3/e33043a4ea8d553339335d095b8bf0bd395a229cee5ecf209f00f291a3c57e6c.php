<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_34e3373742797b70fc20171634b7a5d383554fcd1112ae012b0fc4fcae50e81f extends Twig_Template
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
        $__internal_42b2e0f7ea7f2fb4ff8d3f5985e3d7117ce33441e783eae572ff2bbaa12bd909 = $this->env->getExtension("native_profiler");
        $__internal_42b2e0f7ea7f2fb4ff8d3f5985e3d7117ce33441e783eae572ff2bbaa12bd909->enter($__internal_42b2e0f7ea7f2fb4ff8d3f5985e3d7117ce33441e783eae572ff2bbaa12bd909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_42b2e0f7ea7f2fb4ff8d3f5985e3d7117ce33441e783eae572ff2bbaa12bd909->leave($__internal_42b2e0f7ea7f2fb4ff8d3f5985e3d7117ce33441e783eae572ff2bbaa12bd909_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
