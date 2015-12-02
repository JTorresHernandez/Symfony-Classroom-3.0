<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_872e29c7050724261a18cd3d7f6894c0785e6628834e723e696319920efd0010 extends Twig_Template
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
        $__internal_2a43abb444169b37756c08dbe80b6e4757b5ae8662c16b0fdb251b4c9eda994c = $this->env->getExtension("native_profiler");
        $__internal_2a43abb444169b37756c08dbe80b6e4757b5ae8662c16b0fdb251b4c9eda994c->enter($__internal_2a43abb444169b37756c08dbe80b6e4757b5ae8662c16b0fdb251b4c9eda994c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_2a43abb444169b37756c08dbe80b6e4757b5ae8662c16b0fdb251b4c9eda994c->leave($__internal_2a43abb444169b37756c08dbe80b6e4757b5ae8662c16b0fdb251b4c9eda994c_prof);

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
