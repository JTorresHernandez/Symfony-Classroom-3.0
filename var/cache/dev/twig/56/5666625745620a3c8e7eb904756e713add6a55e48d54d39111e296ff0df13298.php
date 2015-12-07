<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_779e083dcc1a65886201db92c1fb3fdbf0fbfe91e6c7e7844e7763252a6eaa8b extends Twig_Template
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
        $__internal_c3aa639e2a3f2e06195b72c2ee895b11fd6c2e9e3e5d7c0d13af5cbff062bec5 = $this->env->getExtension("native_profiler");
        $__internal_c3aa639e2a3f2e06195b72c2ee895b11fd6c2e9e3e5d7c0d13af5cbff062bec5->enter($__internal_c3aa639e2a3f2e06195b72c2ee895b11fd6c2e9e3e5d7c0d13af5cbff062bec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_c3aa639e2a3f2e06195b72c2ee895b11fd6c2e9e3e5d7c0d13af5cbff062bec5->leave($__internal_c3aa639e2a3f2e06195b72c2ee895b11fd6c2e9e3e5d7c0d13af5cbff062bec5_prof);

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
