<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_bee72350b2c3a646c58878e6574dd535fdd879dbb9d8ccd62ba1e36bb6cf3507 extends Twig_Template
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
        $__internal_5f6d2a1e254baee96dcadec6fcca0132d29aab5aef31b59fdde13f85118646dc = $this->env->getExtension("native_profiler");
        $__internal_5f6d2a1e254baee96dcadec6fcca0132d29aab5aef31b59fdde13f85118646dc->enter($__internal_5f6d2a1e254baee96dcadec6fcca0132d29aab5aef31b59fdde13f85118646dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_5f6d2a1e254baee96dcadec6fcca0132d29aab5aef31b59fdde13f85118646dc->leave($__internal_5f6d2a1e254baee96dcadec6fcca0132d29aab5aef31b59fdde13f85118646dc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
