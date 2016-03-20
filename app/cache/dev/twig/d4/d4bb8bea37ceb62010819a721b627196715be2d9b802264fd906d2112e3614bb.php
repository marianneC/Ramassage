<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_32cde91af3af4ec28708eada4b1a18f8956901d1db5629cad2573afcc4c84c8f extends Twig_Template
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
        $__internal_15b9e5cecda81cfd11b8ab6ecd76aa76b13cbb7e626ff6c404634990e6dc3640 = $this->env->getExtension("native_profiler");
        $__internal_15b9e5cecda81cfd11b8ab6ecd76aa76b13cbb7e626ff6c404634990e6dc3640->enter($__internal_15b9e5cecda81cfd11b8ab6ecd76aa76b13cbb7e626ff6c404634990e6dc3640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_15b9e5cecda81cfd11b8ab6ecd76aa76b13cbb7e626ff6c404634990e6dc3640->leave($__internal_15b9e5cecda81cfd11b8ab6ecd76aa76b13cbb7e626ff6c404634990e6dc3640_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
