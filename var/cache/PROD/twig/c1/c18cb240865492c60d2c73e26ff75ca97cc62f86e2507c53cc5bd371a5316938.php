<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_b0e240ea509691590948d955d1e73cf004047627d4cdb6f07c74de52fd1754ee extends Twig_Template
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
        $__internal_d932b1590d72554804542141bee8c74c1ac319a16d2c91b3511093685a4de23f = $this->env->getExtension("native_profiler");
        $__internal_d932b1590d72554804542141bee8c74c1ac319a16d2c91b3511093685a4de23f->enter($__internal_d932b1590d72554804542141bee8c74c1ac319a16d2c91b3511093685a4de23f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_d932b1590d72554804542141bee8c74c1ac319a16d2c91b3511093685a4de23f->leave($__internal_d932b1590d72554804542141bee8c74c1ac319a16d2c91b3511093685a4de23f_prof);

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
