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
        $__internal_4f3d37fb2e431743ec017f65eeb11a68a784339361446b3f154e0ad69b8d7350 = $this->env->getExtension("native_profiler");
        $__internal_4f3d37fb2e431743ec017f65eeb11a68a784339361446b3f154e0ad69b8d7350->enter($__internal_4f3d37fb2e431743ec017f65eeb11a68a784339361446b3f154e0ad69b8d7350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_4f3d37fb2e431743ec017f65eeb11a68a784339361446b3f154e0ad69b8d7350->leave($__internal_4f3d37fb2e431743ec017f65eeb11a68a784339361446b3f154e0ad69b8d7350_prof);

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
