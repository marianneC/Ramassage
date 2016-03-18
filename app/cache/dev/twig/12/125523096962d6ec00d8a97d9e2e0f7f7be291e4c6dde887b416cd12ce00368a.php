<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_993fe01def1aa7f82a3beb6f3e91087d7c7f11700db99dc4af6ab2586490b37b extends Twig_Template
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
        $__internal_86e11cd5f1d74ac75512b3a1f04e62e1a44e34eabfc5feb24ad16cf39763a72a = $this->env->getExtension("native_profiler");
        $__internal_86e11cd5f1d74ac75512b3a1f04e62e1a44e34eabfc5feb24ad16cf39763a72a->enter($__internal_86e11cd5f1d74ac75512b3a1f04e62e1a44e34eabfc5feb24ad16cf39763a72a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_86e11cd5f1d74ac75512b3a1f04e62e1a44e34eabfc5feb24ad16cf39763a72a->leave($__internal_86e11cd5f1d74ac75512b3a1f04e62e1a44e34eabfc5feb24ad16cf39763a72a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */
