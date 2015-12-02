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
        $__internal_d3032ed865de4f63e86d804ff587755eb11f0da78da79ee5c78ac78d72264601 = $this->env->getExtension("native_profiler");
        $__internal_d3032ed865de4f63e86d804ff587755eb11f0da78da79ee5c78ac78d72264601->enter($__internal_d3032ed865de4f63e86d804ff587755eb11f0da78da79ee5c78ac78d72264601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_d3032ed865de4f63e86d804ff587755eb11f0da78da79ee5c78ac78d72264601->leave($__internal_d3032ed865de4f63e86d804ff587755eb11f0da78da79ee5c78ac78d72264601_prof);

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
