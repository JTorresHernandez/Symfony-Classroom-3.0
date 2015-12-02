<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_2afff77f781877834ad1c1d6e3117c5354d279fe899dcf1833879c746d92d510 extends Twig_Template
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
        $__internal_762d25d8f352238ed8b3a661ad6049be026701efa7b6efa87e5771014c6fa3a8 = $this->env->getExtension("native_profiler");
        $__internal_762d25d8f352238ed8b3a661ad6049be026701efa7b6efa87e5771014c6fa3a8->enter($__internal_762d25d8f352238ed8b3a661ad6049be026701efa7b6efa87e5771014c6fa3a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_762d25d8f352238ed8b3a661ad6049be026701efa7b6efa87e5771014c6fa3a8->leave($__internal_762d25d8f352238ed8b3a661ad6049be026701efa7b6efa87e5771014c6fa3a8_prof);

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
