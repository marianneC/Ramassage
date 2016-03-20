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
        $__internal_6f1ec1d7bbded8b10a6dc58d8cc062200ae3d6d9f3a80e5c3fa2155b4a5684bf = $this->env->getExtension("native_profiler");
        $__internal_6f1ec1d7bbded8b10a6dc58d8cc062200ae3d6d9f3a80e5c3fa2155b4a5684bf->enter($__internal_6f1ec1d7bbded8b10a6dc58d8cc062200ae3d6d9f3a80e5c3fa2155b4a5684bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_6f1ec1d7bbded8b10a6dc58d8cc062200ae3d6d9f3a80e5c3fa2155b4a5684bf->leave($__internal_6f1ec1d7bbded8b10a6dc58d8cc062200ae3d6d9f3a80e5c3fa2155b4a5684bf_prof);

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
