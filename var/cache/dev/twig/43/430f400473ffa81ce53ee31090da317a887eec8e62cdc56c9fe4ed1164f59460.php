<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_394493af975486d197d5ddf93446e9314049186b2866e141bf4bae8b9388da5d extends Twig_Template
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
        $__internal_64a42ca16335439c656c4d52427724a4fd5d3cc7a070403edbcd2e8071aa6086 = $this->env->getExtension("native_profiler");
        $__internal_64a42ca16335439c656c4d52427724a4fd5d3cc7a070403edbcd2e8071aa6086->enter($__internal_64a42ca16335439c656c4d52427724a4fd5d3cc7a070403edbcd2e8071aa6086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_64a42ca16335439c656c4d52427724a4fd5d3cc7a070403edbcd2e8071aa6086->leave($__internal_64a42ca16335439c656c4d52427724a4fd5d3cc7a070403edbcd2e8071aa6086_prof);

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
