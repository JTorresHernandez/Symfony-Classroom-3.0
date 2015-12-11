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
        $__internal_1b21de7ea1432674b439920b1b8dfbed356725fed5d31129c280c28dbd7eacf5 = $this->env->getExtension("native_profiler");
        $__internal_1b21de7ea1432674b439920b1b8dfbed356725fed5d31129c280c28dbd7eacf5->enter($__internal_1b21de7ea1432674b439920b1b8dfbed356725fed5d31129c280c28dbd7eacf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_1b21de7ea1432674b439920b1b8dfbed356725fed5d31129c280c28dbd7eacf5->leave($__internal_1b21de7ea1432674b439920b1b8dfbed356725fed5d31129c280c28dbd7eacf5_prof);

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
