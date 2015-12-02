<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_bd3c86f6684b2fd889c85fb65f3ebed9770e2714ac2199c53635c13c9213ddd3 extends Twig_Template
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
        $__internal_2539d2b48e95747a5fcbfb117d0c8617b4626f85d208b8337179c2f71c660341 = $this->env->getExtension("native_profiler");
        $__internal_2539d2b48e95747a5fcbfb117d0c8617b4626f85d208b8337179c2f71c660341->enter($__internal_2539d2b48e95747a5fcbfb117d0c8617b4626f85d208b8337179c2f71c660341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_2539d2b48e95747a5fcbfb117d0c8617b4626f85d208b8337179c2f71c660341->leave($__internal_2539d2b48e95747a5fcbfb117d0c8617b4626f85d208b8337179c2f71c660341_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
