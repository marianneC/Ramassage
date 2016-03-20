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
        $__internal_fac6465e8c31e0f32f6ec4e03d0378191f4fbd1b7b8e16cae2f849540d517c45 = $this->env->getExtension("native_profiler");
        $__internal_fac6465e8c31e0f32f6ec4e03d0378191f4fbd1b7b8e16cae2f849540d517c45->enter($__internal_fac6465e8c31e0f32f6ec4e03d0378191f4fbd1b7b8e16cae2f849540d517c45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_fac6465e8c31e0f32f6ec4e03d0378191f4fbd1b7b8e16cae2f849540d517c45->leave($__internal_fac6465e8c31e0f32f6ec4e03d0378191f4fbd1b7b8e16cae2f849540d517c45_prof);

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
