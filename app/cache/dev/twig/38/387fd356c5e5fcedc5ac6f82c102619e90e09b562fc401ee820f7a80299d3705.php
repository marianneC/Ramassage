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
        $__internal_98f9ed7c1a14e4a30e90b4f4956a25d1b87a5a357612f8207bcf8bbf17a188d8 = $this->env->getExtension("native_profiler");
        $__internal_98f9ed7c1a14e4a30e90b4f4956a25d1b87a5a357612f8207bcf8bbf17a188d8->enter($__internal_98f9ed7c1a14e4a30e90b4f4956a25d1b87a5a357612f8207bcf8bbf17a188d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_98f9ed7c1a14e4a30e90b4f4956a25d1b87a5a357612f8207bcf8bbf17a188d8->leave($__internal_98f9ed7c1a14e4a30e90b4f4956a25d1b87a5a357612f8207bcf8bbf17a188d8_prof);

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
