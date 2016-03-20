<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_a77c226bbd7853ca1376f02ddfc97fb23189d9b68a79418840d9ad7bed625666 extends Twig_Template
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
        $__internal_2a7c9b41b7aea35ee9d72aaf248b5819a5ee47f55d0f0824edbf79f099ca64fa = $this->env->getExtension("native_profiler");
        $__internal_2a7c9b41b7aea35ee9d72aaf248b5819a5ee47f55d0f0824edbf79f099ca64fa->enter($__internal_2a7c9b41b7aea35ee9d72aaf248b5819a5ee47f55d0f0824edbf79f099ca64fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_2a7c9b41b7aea35ee9d72aaf248b5819a5ee47f55d0f0824edbf79f099ca64fa->leave($__internal_2a7c9b41b7aea35ee9d72aaf248b5819a5ee47f55d0f0824edbf79f099ca64fa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
