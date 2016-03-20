<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_1e9d25d440c607dd75900aacc8a5b2390194279ba443dadf2fe9872c83728fdc extends Twig_Template
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
        $__internal_3abe59d0ad34021de7b735df642514589079dc1c1aa1a1113ad0f7c0eec0b9ef = $this->env->getExtension("native_profiler");
        $__internal_3abe59d0ad34021de7b735df642514589079dc1c1aa1a1113ad0f7c0eec0b9ef->enter($__internal_3abe59d0ad34021de7b735df642514589079dc1c1aa1a1113ad0f7c0eec0b9ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_3abe59d0ad34021de7b735df642514589079dc1c1aa1a1113ad0f7c0eec0b9ef->leave($__internal_3abe59d0ad34021de7b735df642514589079dc1c1aa1a1113ad0f7c0eec0b9ef_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
