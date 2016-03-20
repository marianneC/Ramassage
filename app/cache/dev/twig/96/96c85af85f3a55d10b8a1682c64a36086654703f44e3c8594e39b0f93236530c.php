<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_1bbd512ef8431a152ca582e85b9722dfdd976111195535b30598dc11f83367fe extends Twig_Template
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
        $__internal_f27a2e2a8d1ef3952d53c12a0f4f39aa3b4a4efeb5c171b419f3b4ee3805214c = $this->env->getExtension("native_profiler");
        $__internal_f27a2e2a8d1ef3952d53c12a0f4f39aa3b4a4efeb5c171b419f3b4ee3805214c->enter($__internal_f27a2e2a8d1ef3952d53c12a0f4f39aa3b4a4efeb5c171b419f3b4ee3805214c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_f27a2e2a8d1ef3952d53c12a0f4f39aa3b4a4efeb5c171b419f3b4ee3805214c->leave($__internal_f27a2e2a8d1ef3952d53c12a0f4f39aa3b4a4efeb5c171b419f3b4ee3805214c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
