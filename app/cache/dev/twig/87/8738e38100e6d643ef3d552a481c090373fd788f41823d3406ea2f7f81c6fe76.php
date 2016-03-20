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
        $__internal_8bdc828ed3cb72122e213625d7121a9dad4b4e128f54bb46e973705aa79ef345 = $this->env->getExtension("native_profiler");
        $__internal_8bdc828ed3cb72122e213625d7121a9dad4b4e128f54bb46e973705aa79ef345->enter($__internal_8bdc828ed3cb72122e213625d7121a9dad4b4e128f54bb46e973705aa79ef345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_8bdc828ed3cb72122e213625d7121a9dad4b4e128f54bb46e973705aa79ef345->leave($__internal_8bdc828ed3cb72122e213625d7121a9dad4b4e128f54bb46e973705aa79ef345_prof);

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
