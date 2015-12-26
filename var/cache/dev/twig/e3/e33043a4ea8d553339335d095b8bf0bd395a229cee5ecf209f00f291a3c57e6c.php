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
        $__internal_e5e5b10b74731ba5d70b4a2225c5664a8516be2a8636e9295262365dddbf43ad = $this->env->getExtension("native_profiler");
        $__internal_e5e5b10b74731ba5d70b4a2225c5664a8516be2a8636e9295262365dddbf43ad->enter($__internal_e5e5b10b74731ba5d70b4a2225c5664a8516be2a8636e9295262365dddbf43ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_e5e5b10b74731ba5d70b4a2225c5664a8516be2a8636e9295262365dddbf43ad->leave($__internal_e5e5b10b74731ba5d70b4a2225c5664a8516be2a8636e9295262365dddbf43ad_prof);

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
