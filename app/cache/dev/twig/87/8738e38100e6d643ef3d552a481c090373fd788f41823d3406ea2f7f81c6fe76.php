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
        $__internal_9c89f7838aa1a3734a0562e418b257358f49a4b24ed5410903ed8e94414e19b6 = $this->env->getExtension("native_profiler");
        $__internal_9c89f7838aa1a3734a0562e418b257358f49a4b24ed5410903ed8e94414e19b6->enter($__internal_9c89f7838aa1a3734a0562e418b257358f49a4b24ed5410903ed8e94414e19b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_9c89f7838aa1a3734a0562e418b257358f49a4b24ed5410903ed8e94414e19b6->leave($__internal_9c89f7838aa1a3734a0562e418b257358f49a4b24ed5410903ed8e94414e19b6_prof);

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
