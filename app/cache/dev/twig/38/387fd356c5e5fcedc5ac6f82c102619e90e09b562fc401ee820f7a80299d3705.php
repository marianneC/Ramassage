<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_1cfd12d19125804901107a3c1da07bf1fd69dbc3e651ac6ffc5169a74caacc2e extends Twig_Template
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
        $__internal_a7c87e1c5b9f5abea2ef93092b4912adc15f1e4fd69368628561594bd1e11896 = $this->env->getExtension("native_profiler");
        $__internal_a7c87e1c5b9f5abea2ef93092b4912adc15f1e4fd69368628561594bd1e11896->enter($__internal_a7c87e1c5b9f5abea2ef93092b4912adc15f1e4fd69368628561594bd1e11896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_a7c87e1c5b9f5abea2ef93092b4912adc15f1e4fd69368628561594bd1e11896->leave($__internal_a7c87e1c5b9f5abea2ef93092b4912adc15f1e4fd69368628561594bd1e11896_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
