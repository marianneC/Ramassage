<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_62b617a7ba059a13385768b2561e2bd2abe98c3abce2684f6c7d04836541bba4 extends Twig_Template
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
        $__internal_8488a7da29f1b423797043cf4770e6a0bbe644b09199ee19fb4d2c812ddb3052 = $this->env->getExtension("native_profiler");
        $__internal_8488a7da29f1b423797043cf4770e6a0bbe644b09199ee19fb4d2c812ddb3052->enter($__internal_8488a7da29f1b423797043cf4770e6a0bbe644b09199ee19fb4d2c812ddb3052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_8488a7da29f1b423797043cf4770e6a0bbe644b09199ee19fb4d2c812ddb3052->leave($__internal_8488a7da29f1b423797043cf4770e6a0bbe644b09199ee19fb4d2c812ddb3052_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
