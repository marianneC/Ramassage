<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_96e99ce0d05cee84cf7f05cd9d8ebf4c77c5ffdc7eccca564e736bd7c5886891 extends Twig_Template
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
        $__internal_ff7f2a6036b1c41e3c5efa643a6b868fc03dbb6004f2d955cf44c122325e0409 = $this->env->getExtension("native_profiler");
        $__internal_ff7f2a6036b1c41e3c5efa643a6b868fc03dbb6004f2d955cf44c122325e0409->enter($__internal_ff7f2a6036b1c41e3c5efa643a6b868fc03dbb6004f2d955cf44c122325e0409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_ff7f2a6036b1c41e3c5efa643a6b868fc03dbb6004f2d955cf44c122325e0409->leave($__internal_ff7f2a6036b1c41e3c5efa643a6b868fc03dbb6004f2d955cf44c122325e0409_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
