<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_31d96b8c138faae237acf6b2deaff9978310828fb2228da35701cb1eb46dfd1f extends Twig_Template
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
        $__internal_ac3e86c5fe80724fa16863540a30ca40d4298b851f921ac6c2be460869048e55 = $this->env->getExtension("native_profiler");
        $__internal_ac3e86c5fe80724fa16863540a30ca40d4298b851f921ac6c2be460869048e55->enter($__internal_ac3e86c5fe80724fa16863540a30ca40d4298b851f921ac6c2be460869048e55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_ac3e86c5fe80724fa16863540a30ca40d4298b851f921ac6c2be460869048e55->leave($__internal_ac3e86c5fe80724fa16863540a30ca40d4298b851f921ac6c2be460869048e55_prof);

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
