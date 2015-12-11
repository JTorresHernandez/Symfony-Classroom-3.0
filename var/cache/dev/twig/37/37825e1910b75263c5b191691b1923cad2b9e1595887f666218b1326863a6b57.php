<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_7ae1bf16cf0123bd6963353d7f580998866905072177f8a2bc3c876aa72cde1a extends Twig_Template
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
        $__internal_d28bec2e96492677f0b3a109b66fd8f7b22775043e0d34fbbb3b640a6b9e1e4d = $this->env->getExtension("native_profiler");
        $__internal_d28bec2e96492677f0b3a109b66fd8f7b22775043e0d34fbbb3b640a6b9e1e4d->enter($__internal_d28bec2e96492677f0b3a109b66fd8f7b22775043e0d34fbbb3b640a6b9e1e4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_d28bec2e96492677f0b3a109b66fd8f7b22775043e0d34fbbb3b640a6b9e1e4d->leave($__internal_d28bec2e96492677f0b3a109b66fd8f7b22775043e0d34fbbb3b640a6b9e1e4d_prof);

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
