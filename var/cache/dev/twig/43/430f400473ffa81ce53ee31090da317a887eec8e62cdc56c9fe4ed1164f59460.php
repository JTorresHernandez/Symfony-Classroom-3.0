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
        $__internal_35f7b1d9f61686e80ee5aebc72e2d3e3283e5a10b9e6d3e829afb7c915cf5268 = $this->env->getExtension("native_profiler");
        $__internal_35f7b1d9f61686e80ee5aebc72e2d3e3283e5a10b9e6d3e829afb7c915cf5268->enter($__internal_35f7b1d9f61686e80ee5aebc72e2d3e3283e5a10b9e6d3e829afb7c915cf5268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_35f7b1d9f61686e80ee5aebc72e2d3e3283e5a10b9e6d3e829afb7c915cf5268->leave($__internal_35f7b1d9f61686e80ee5aebc72e2d3e3283e5a10b9e6d3e829afb7c915cf5268_prof);

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
