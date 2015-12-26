<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_93ef806445498a2c0d5a72a8907f770216d6b18cf12fab3efb687417ab042846 extends Twig_Template
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
        $__internal_cec711583755387a03d114c076f5be2c4c7a089fdbeabfcd2bf63c4f2366e04d = $this->env->getExtension("native_profiler");
        $__internal_cec711583755387a03d114c076f5be2c4c7a089fdbeabfcd2bf63c4f2366e04d->enter($__internal_cec711583755387a03d114c076f5be2c4c7a089fdbeabfcd2bf63c4f2366e04d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_cec711583755387a03d114c076f5be2c4c7a089fdbeabfcd2bf63c4f2366e04d->leave($__internal_cec711583755387a03d114c076f5be2c4c7a089fdbeabfcd2bf63c4f2366e04d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
