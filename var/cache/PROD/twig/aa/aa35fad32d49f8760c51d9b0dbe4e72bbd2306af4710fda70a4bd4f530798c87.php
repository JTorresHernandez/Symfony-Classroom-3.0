<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_0d4b28a6a7f6304785df02cc71d43d5b295c9621e172015c56ef1bda917f8da2 extends Twig_Template
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
        $__internal_ae6c7c119c8fab8d647ce8d36ad81507d28612993b7763497222ee48181dde3a = $this->env->getExtension("native_profiler");
        $__internal_ae6c7c119c8fab8d647ce8d36ad81507d28612993b7763497222ee48181dde3a->enter($__internal_ae6c7c119c8fab8d647ce8d36ad81507d28612993b7763497222ee48181dde3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_ae6c7c119c8fab8d647ce8d36ad81507d28612993b7763497222ee48181dde3a->leave($__internal_ae6c7c119c8fab8d647ce8d36ad81507d28612993b7763497222ee48181dde3a_prof);

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
