<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_4f6ee9b33839d098dd097b7116237f5126e75249560fd3117235a2f8db6fc310 extends Twig_Template
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
        $__internal_bfd3b178c006917fd682e7d6ad1158414a9202678dfcb6aae00baa440b60ef3c = $this->env->getExtension("native_profiler");
        $__internal_bfd3b178c006917fd682e7d6ad1158414a9202678dfcb6aae00baa440b60ef3c->enter($__internal_bfd3b178c006917fd682e7d6ad1158414a9202678dfcb6aae00baa440b60ef3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_bfd3b178c006917fd682e7d6ad1158414a9202678dfcb6aae00baa440b60ef3c->leave($__internal_bfd3b178c006917fd682e7d6ad1158414a9202678dfcb6aae00baa440b60ef3c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
