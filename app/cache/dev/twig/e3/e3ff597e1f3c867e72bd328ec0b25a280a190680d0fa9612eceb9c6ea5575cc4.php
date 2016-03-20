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
        $__internal_ad1be71dd3a960f463180081ba48f8aa05fc08f2892fae2f1aa71b46cbca0854 = $this->env->getExtension("native_profiler");
        $__internal_ad1be71dd3a960f463180081ba48f8aa05fc08f2892fae2f1aa71b46cbca0854->enter($__internal_ad1be71dd3a960f463180081ba48f8aa05fc08f2892fae2f1aa71b46cbca0854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_ad1be71dd3a960f463180081ba48f8aa05fc08f2892fae2f1aa71b46cbca0854->leave($__internal_ad1be71dd3a960f463180081ba48f8aa05fc08f2892fae2f1aa71b46cbca0854_prof);

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
