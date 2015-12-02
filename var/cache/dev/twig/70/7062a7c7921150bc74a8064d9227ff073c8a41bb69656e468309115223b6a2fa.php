<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_89572398b4c7af87d544b8d7253dc82f5e1f8cfd379b7cffa65663b04b57c8c9 extends Twig_Template
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
        $__internal_7a216f5aa69cf05c1ae8e7bfa69dc726541e08367344ff9528b56c1b5ef00353 = $this->env->getExtension("native_profiler");
        $__internal_7a216f5aa69cf05c1ae8e7bfa69dc726541e08367344ff9528b56c1b5ef00353->enter($__internal_7a216f5aa69cf05c1ae8e7bfa69dc726541e08367344ff9528b56c1b5ef00353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_7a216f5aa69cf05c1ae8e7bfa69dc726541e08367344ff9528b56c1b5ef00353->leave($__internal_7a216f5aa69cf05c1ae8e7bfa69dc726541e08367344ff9528b56c1b5ef00353_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
