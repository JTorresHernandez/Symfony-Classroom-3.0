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
        $__internal_9534807340a8eb8d686e1521222a3853550ed388790c6a4a72ec40dc845674ab = $this->env->getExtension("native_profiler");
        $__internal_9534807340a8eb8d686e1521222a3853550ed388790c6a4a72ec40dc845674ab->enter($__internal_9534807340a8eb8d686e1521222a3853550ed388790c6a4a72ec40dc845674ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_9534807340a8eb8d686e1521222a3853550ed388790c6a4a72ec40dc845674ab->leave($__internal_9534807340a8eb8d686e1521222a3853550ed388790c6a4a72ec40dc845674ab_prof);

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
