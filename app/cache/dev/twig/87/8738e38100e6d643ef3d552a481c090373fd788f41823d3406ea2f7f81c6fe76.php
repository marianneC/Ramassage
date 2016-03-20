<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_9a11e5aba8f79801d532a9c31217c7544475bf6fc7f9fd967f925609230f96d8 extends Twig_Template
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
        $__internal_787087c355816bb556b24ceb6c9431643c1c06b16518ef5549be0907765d26ea = $this->env->getExtension("native_profiler");
        $__internal_787087c355816bb556b24ceb6c9431643c1c06b16518ef5549be0907765d26ea->enter($__internal_787087c355816bb556b24ceb6c9431643c1c06b16518ef5549be0907765d26ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_787087c355816bb556b24ceb6c9431643c1c06b16518ef5549be0907765d26ea->leave($__internal_787087c355816bb556b24ceb6c9431643c1c06b16518ef5549be0907765d26ea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
