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
        $__internal_8230b1348462b243e62d9f07c91e21371401d2fffb8cf6ec90c07a4b816f6bb5 = $this->env->getExtension("native_profiler");
        $__internal_8230b1348462b243e62d9f07c91e21371401d2fffb8cf6ec90c07a4b816f6bb5->enter($__internal_8230b1348462b243e62d9f07c91e21371401d2fffb8cf6ec90c07a4b816f6bb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_8230b1348462b243e62d9f07c91e21371401d2fffb8cf6ec90c07a4b816f6bb5->leave($__internal_8230b1348462b243e62d9f07c91e21371401d2fffb8cf6ec90c07a4b816f6bb5_prof);

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
