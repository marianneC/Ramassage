<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_0fa6a51b0677ec159435ee6b99409f07e55444b277fea189b96f040a496f8c5d extends Twig_Template
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
        $__internal_940474b754d31d43b67a49285237ccc1d07f45e5358df547d7fef1b9a50c5a7f = $this->env->getExtension("native_profiler");
        $__internal_940474b754d31d43b67a49285237ccc1d07f45e5358df547d7fef1b9a50c5a7f->enter($__internal_940474b754d31d43b67a49285237ccc1d07f45e5358df547d7fef1b9a50c5a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_940474b754d31d43b67a49285237ccc1d07f45e5358df547d7fef1b9a50c5a7f->leave($__internal_940474b754d31d43b67a49285237ccc1d07f45e5358df547d7fef1b9a50c5a7f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
