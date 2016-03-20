<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_32cde91af3af4ec28708eada4b1a18f8956901d1db5629cad2573afcc4c84c8f extends Twig_Template
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
        $__internal_ff106a360aad49e2de477a96d26b80148e22cf02c43dc95e4c41fa3c4a965453 = $this->env->getExtension("native_profiler");
        $__internal_ff106a360aad49e2de477a96d26b80148e22cf02c43dc95e4c41fa3c4a965453->enter($__internal_ff106a360aad49e2de477a96d26b80148e22cf02c43dc95e4c41fa3c4a965453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_ff106a360aad49e2de477a96d26b80148e22cf02c43dc95e4c41fa3c4a965453->leave($__internal_ff106a360aad49e2de477a96d26b80148e22cf02c43dc95e4c41fa3c4a965453_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
