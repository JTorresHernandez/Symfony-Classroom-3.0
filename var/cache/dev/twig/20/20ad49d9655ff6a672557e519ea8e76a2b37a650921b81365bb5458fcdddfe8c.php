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
        $__internal_4846a711462a74062f78f57f857ac6385a24b5a1504fd81992548c44f72f68e1 = $this->env->getExtension("native_profiler");
        $__internal_4846a711462a74062f78f57f857ac6385a24b5a1504fd81992548c44f72f68e1->enter($__internal_4846a711462a74062f78f57f857ac6385a24b5a1504fd81992548c44f72f68e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_4846a711462a74062f78f57f857ac6385a24b5a1504fd81992548c44f72f68e1->leave($__internal_4846a711462a74062f78f57f857ac6385a24b5a1504fd81992548c44f72f68e1_prof);

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
