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
        $__internal_5eadd1db5601e99ebf9a07fbec51f0fa5a2e0234d0961fc44e3680f3c8a331dd = $this->env->getExtension("native_profiler");
        $__internal_5eadd1db5601e99ebf9a07fbec51f0fa5a2e0234d0961fc44e3680f3c8a331dd->enter($__internal_5eadd1db5601e99ebf9a07fbec51f0fa5a2e0234d0961fc44e3680f3c8a331dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_5eadd1db5601e99ebf9a07fbec51f0fa5a2e0234d0961fc44e3680f3c8a331dd->leave($__internal_5eadd1db5601e99ebf9a07fbec51f0fa5a2e0234d0961fc44e3680f3c8a331dd_prof);

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
