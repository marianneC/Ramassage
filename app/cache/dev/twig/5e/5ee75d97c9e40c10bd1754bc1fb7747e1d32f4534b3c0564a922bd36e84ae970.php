<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_28d80cdd378b8335be0a179f5c60156ae7281f45f6b15d46b8eaf1726d65bbbe extends Twig_Template
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
        $__internal_ac428e3c761bd5f5770b3d3ec8d7b4d36ea388bc6e1d93ff361de885ce5215d0 = $this->env->getExtension("native_profiler");
        $__internal_ac428e3c761bd5f5770b3d3ec8d7b4d36ea388bc6e1d93ff361de885ce5215d0->enter($__internal_ac428e3c761bd5f5770b3d3ec8d7b4d36ea388bc6e1d93ff361de885ce5215d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_ac428e3c761bd5f5770b3d3ec8d7b4d36ea388bc6e1d93ff361de885ce5215d0->leave($__internal_ac428e3c761bd5f5770b3d3ec8d7b4d36ea388bc6e1d93ff361de885ce5215d0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
