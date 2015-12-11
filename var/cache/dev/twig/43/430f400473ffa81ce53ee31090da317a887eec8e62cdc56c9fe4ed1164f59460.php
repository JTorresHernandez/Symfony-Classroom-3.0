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
        $__internal_4287679964be25166415b98759306e32265339a63ead78fc3a9750c4453a691c = $this->env->getExtension("native_profiler");
        $__internal_4287679964be25166415b98759306e32265339a63ead78fc3a9750c4453a691c->enter($__internal_4287679964be25166415b98759306e32265339a63ead78fc3a9750c4453a691c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_4287679964be25166415b98759306e32265339a63ead78fc3a9750c4453a691c->leave($__internal_4287679964be25166415b98759306e32265339a63ead78fc3a9750c4453a691c_prof);

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
