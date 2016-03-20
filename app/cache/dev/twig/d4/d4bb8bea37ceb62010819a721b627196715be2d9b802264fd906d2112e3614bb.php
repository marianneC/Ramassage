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
        $__internal_64b9b8421a1af260ebe51be4c890cb1420b4412f9bc4f8c72d46a3aca6055835 = $this->env->getExtension("native_profiler");
        $__internal_64b9b8421a1af260ebe51be4c890cb1420b4412f9bc4f8c72d46a3aca6055835->enter($__internal_64b9b8421a1af260ebe51be4c890cb1420b4412f9bc4f8c72d46a3aca6055835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_64b9b8421a1af260ebe51be4c890cb1420b4412f9bc4f8c72d46a3aca6055835->leave($__internal_64b9b8421a1af260ebe51be4c890cb1420b4412f9bc4f8c72d46a3aca6055835_prof);

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
