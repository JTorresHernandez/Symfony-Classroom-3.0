<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_f0b136d87f3d80916878b534f2d6d8f28f84aeb1295994a594fc2783f37c0f71 extends Twig_Template
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
        $__internal_a73aa00752f9dd8ab71cc44c6d0c4c5909ae2e4080cc3044ed6ca848b6b7570a = $this->env->getExtension("native_profiler");
        $__internal_a73aa00752f9dd8ab71cc44c6d0c4c5909ae2e4080cc3044ed6ca848b6b7570a->enter($__internal_a73aa00752f9dd8ab71cc44c6d0c4c5909ae2e4080cc3044ed6ca848b6b7570a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_a73aa00752f9dd8ab71cc44c6d0c4c5909ae2e4080cc3044ed6ca848b6b7570a->leave($__internal_a73aa00752f9dd8ab71cc44c6d0c4c5909ae2e4080cc3044ed6ca848b6b7570a_prof);

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
