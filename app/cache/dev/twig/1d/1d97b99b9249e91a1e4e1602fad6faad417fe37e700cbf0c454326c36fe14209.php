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
        $__internal_88fb7f50109b057a99ff90f6161ea552642f65f59a9263016349fb4739a0d1e3 = $this->env->getExtension("native_profiler");
        $__internal_88fb7f50109b057a99ff90f6161ea552642f65f59a9263016349fb4739a0d1e3->enter($__internal_88fb7f50109b057a99ff90f6161ea552642f65f59a9263016349fb4739a0d1e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_88fb7f50109b057a99ff90f6161ea552642f65f59a9263016349fb4739a0d1e3->leave($__internal_88fb7f50109b057a99ff90f6161ea552642f65f59a9263016349fb4739a0d1e3_prof);

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
