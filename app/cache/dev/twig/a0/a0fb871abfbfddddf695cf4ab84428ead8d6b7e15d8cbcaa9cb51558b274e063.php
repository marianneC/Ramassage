<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_f4b2180b16e102633da3202960e00c5d2434306e05068103e76e08b2d65e9182 extends Twig_Template
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
        $__internal_1c18b5e40d4066e215865d3d8120d8479a88e2d34392d1033d9e6fe6c6f1efdf = $this->env->getExtension("native_profiler");
        $__internal_1c18b5e40d4066e215865d3d8120d8479a88e2d34392d1033d9e6fe6c6f1efdf->enter($__internal_1c18b5e40d4066e215865d3d8120d8479a88e2d34392d1033d9e6fe6c6f1efdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_1c18b5e40d4066e215865d3d8120d8479a88e2d34392d1033d9e6fe6c6f1efdf->leave($__internal_1c18b5e40d4066e215865d3d8120d8479a88e2d34392d1033d9e6fe6c6f1efdf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
