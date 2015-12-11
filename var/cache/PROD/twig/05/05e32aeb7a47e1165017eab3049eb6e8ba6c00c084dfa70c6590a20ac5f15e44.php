<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_b723f2d22e908948e94743bf584d5e26c41771ab81a1dccf03279771588c0984 extends Twig_Template
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
        $__internal_2e7204ae2861baf239a570d6aa975c7a8a0d05bad4a9d364a52cd6493b6285f1 = $this->env->getExtension("native_profiler");
        $__internal_2e7204ae2861baf239a570d6aa975c7a8a0d05bad4a9d364a52cd6493b6285f1->enter($__internal_2e7204ae2861baf239a570d6aa975c7a8a0d05bad4a9d364a52cd6493b6285f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_2e7204ae2861baf239a570d6aa975c7a8a0d05bad4a9d364a52cd6493b6285f1->leave($__internal_2e7204ae2861baf239a570d6aa975c7a8a0d05bad4a9d364a52cd6493b6285f1_prof);

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
