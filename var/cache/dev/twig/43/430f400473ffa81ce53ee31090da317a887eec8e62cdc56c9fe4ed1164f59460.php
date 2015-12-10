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
        $__internal_472088524c97777230a8e2d230b629d761205f7d61611df84b1970e2658005bc = $this->env->getExtension("native_profiler");
        $__internal_472088524c97777230a8e2d230b629d761205f7d61611df84b1970e2658005bc->enter($__internal_472088524c97777230a8e2d230b629d761205f7d61611df84b1970e2658005bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_472088524c97777230a8e2d230b629d761205f7d61611df84b1970e2658005bc->leave($__internal_472088524c97777230a8e2d230b629d761205f7d61611df84b1970e2658005bc_prof);

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
