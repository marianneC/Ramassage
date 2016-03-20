<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_64bb00db9109b69bdff75c9e54216564ec4f3ac88ba9a07b5a8547e20108d92b extends Twig_Template
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
        $__internal_40cc1dbe01fd6adbb490fbf4ab2951d1334fa8ade809df083296d39a85b4dd25 = $this->env->getExtension("native_profiler");
        $__internal_40cc1dbe01fd6adbb490fbf4ab2951d1334fa8ade809df083296d39a85b4dd25->enter($__internal_40cc1dbe01fd6adbb490fbf4ab2951d1334fa8ade809df083296d39a85b4dd25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

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
        
        $__internal_40cc1dbe01fd6adbb490fbf4ab2951d1334fa8ade809df083296d39a85b4dd25->leave($__internal_40cc1dbe01fd6adbb490fbf4ab2951d1334fa8ade809df083296d39a85b4dd25_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
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
