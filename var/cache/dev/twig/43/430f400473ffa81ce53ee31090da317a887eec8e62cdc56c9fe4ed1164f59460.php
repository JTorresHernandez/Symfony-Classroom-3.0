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
        $__internal_1144e5ea04ffff00cc07a9f2ac5c89082c0ea6a2009ae7478ffa0998f1367cf6 = $this->env->getExtension("native_profiler");
        $__internal_1144e5ea04ffff00cc07a9f2ac5c89082c0ea6a2009ae7478ffa0998f1367cf6->enter($__internal_1144e5ea04ffff00cc07a9f2ac5c89082c0ea6a2009ae7478ffa0998f1367cf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_1144e5ea04ffff00cc07a9f2ac5c89082c0ea6a2009ae7478ffa0998f1367cf6->leave($__internal_1144e5ea04ffff00cc07a9f2ac5c89082c0ea6a2009ae7478ffa0998f1367cf6_prof);

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
