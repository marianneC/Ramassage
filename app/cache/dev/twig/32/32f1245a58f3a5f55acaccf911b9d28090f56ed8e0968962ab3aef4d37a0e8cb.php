<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_5c39c9a83fe137b160659ee54c1c68d09a2a46dc01b879081982baf76d975cc0 extends Twig_Template
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
        $__internal_785fb8a00b117588924443237ffe427f36e8f4a7c0b3306b7bf9a0b5e8793561 = $this->env->getExtension("native_profiler");
        $__internal_785fb8a00b117588924443237ffe427f36e8f4a7c0b3306b7bf9a0b5e8793561->enter($__internal_785fb8a00b117588924443237ffe427f36e8f4a7c0b3306b7bf9a0b5e8793561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_785fb8a00b117588924443237ffe427f36e8f4a7c0b3306b7bf9a0b5e8793561->leave($__internal_785fb8a00b117588924443237ffe427f36e8f4a7c0b3306b7bf9a0b5e8793561_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
