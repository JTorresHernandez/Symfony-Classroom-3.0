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
        $__internal_f147604ac0eff628e1edad217771cd8df55f79d91b13f2f979824dc58524363f = $this->env->getExtension("native_profiler");
        $__internal_f147604ac0eff628e1edad217771cd8df55f79d91b13f2f979824dc58524363f->enter($__internal_f147604ac0eff628e1edad217771cd8df55f79d91b13f2f979824dc58524363f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_f147604ac0eff628e1edad217771cd8df55f79d91b13f2f979824dc58524363f->leave($__internal_f147604ac0eff628e1edad217771cd8df55f79d91b13f2f979824dc58524363f_prof);

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
