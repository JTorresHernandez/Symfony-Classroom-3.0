<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_091db8ea23961e20969862385c631d5fbef34b9889628b607580b32a940c7ca0 extends Twig_Template
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
        $__internal_0eb38612527dba755ee5d363cbf3941c13bdb4333eff08ae968b855dbbe77155 = $this->env->getExtension("native_profiler");
        $__internal_0eb38612527dba755ee5d363cbf3941c13bdb4333eff08ae968b855dbbe77155->enter($__internal_0eb38612527dba755ee5d363cbf3941c13bdb4333eff08ae968b855dbbe77155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_0eb38612527dba755ee5d363cbf3941c13bdb4333eff08ae968b855dbbe77155->leave($__internal_0eb38612527dba755ee5d363cbf3941c13bdb4333eff08ae968b855dbbe77155_prof);

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
