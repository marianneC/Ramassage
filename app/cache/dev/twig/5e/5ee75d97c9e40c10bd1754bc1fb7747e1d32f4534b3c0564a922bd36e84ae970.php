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
        $__internal_870f4a617e7b2b1b6d92f1e24fc4d94ff2cead3a009d06a2d6bf86aa43ce2b7d = $this->env->getExtension("native_profiler");
        $__internal_870f4a617e7b2b1b6d92f1e24fc4d94ff2cead3a009d06a2d6bf86aa43ce2b7d->enter($__internal_870f4a617e7b2b1b6d92f1e24fc4d94ff2cead3a009d06a2d6bf86aa43ce2b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_870f4a617e7b2b1b6d92f1e24fc4d94ff2cead3a009d06a2d6bf86aa43ce2b7d->leave($__internal_870f4a617e7b2b1b6d92f1e24fc4d94ff2cead3a009d06a2d6bf86aa43ce2b7d_prof);

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
