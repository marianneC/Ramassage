<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_54fdf7d9fb56bcc196db341d3f1f40b09b498fa7709e3b507a1c872959abb048 extends Twig_Template
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
        $__internal_a2afbaa67ae2c6e17cec77d474c86d0f9bbcc4aa222e78f62c6eb560a45d6373 = $this->env->getExtension("native_profiler");
        $__internal_a2afbaa67ae2c6e17cec77d474c86d0f9bbcc4aa222e78f62c6eb560a45d6373->enter($__internal_a2afbaa67ae2c6e17cec77d474c86d0f9bbcc4aa222e78f62c6eb560a45d6373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_a2afbaa67ae2c6e17cec77d474c86d0f9bbcc4aa222e78f62c6eb560a45d6373->leave($__internal_a2afbaa67ae2c6e17cec77d474c86d0f9bbcc4aa222e78f62c6eb560a45d6373_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
