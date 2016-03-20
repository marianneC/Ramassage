<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_462b2451216d032d89fa66f3990df4713fd14b57028f1ab4d87258b1f956f676 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f4ea7fdaafba61eb2896aeb1624be98511beb8df9b47676e717acb095ed09f36 = $this->env->getExtension("native_profiler");
        $__internal_f4ea7fdaafba61eb2896aeb1624be98511beb8df9b47676e717acb095ed09f36->enter($__internal_f4ea7fdaafba61eb2896aeb1624be98511beb8df9b47676e717acb095ed09f36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4ea7fdaafba61eb2896aeb1624be98511beb8df9b47676e717acb095ed09f36->leave($__internal_f4ea7fdaafba61eb2896aeb1624be98511beb8df9b47676e717acb095ed09f36_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_46a3f9d47056a10b1187410c6fed311a1b666c8d2e81e1b0ed3ac755a06db1a1 = $this->env->getExtension("native_profiler");
        $__internal_46a3f9d47056a10b1187410c6fed311a1b666c8d2e81e1b0ed3ac755a06db1a1->enter($__internal_46a3f9d47056a10b1187410c6fed311a1b666c8d2e81e1b0ed3ac755a06db1a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_46a3f9d47056a10b1187410c6fed311a1b666c8d2e81e1b0ed3ac755a06db1a1->leave($__internal_46a3f9d47056a10b1187410c6fed311a1b666c8d2e81e1b0ed3ac755a06db1a1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e75e37ae50d399b9acd2132a64bfe25d44b304096dc9d85d6f5763824832b641 = $this->env->getExtension("native_profiler");
        $__internal_e75e37ae50d399b9acd2132a64bfe25d44b304096dc9d85d6f5763824832b641->enter($__internal_e75e37ae50d399b9acd2132a64bfe25d44b304096dc9d85d6f5763824832b641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e75e37ae50d399b9acd2132a64bfe25d44b304096dc9d85d6f5763824832b641->leave($__internal_e75e37ae50d399b9acd2132a64bfe25d44b304096dc9d85d6f5763824832b641_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_35b5d5c6e55e24e4817777283735f71a8085da17c0ef88eb9925970297fca3e4 = $this->env->getExtension("native_profiler");
        $__internal_35b5d5c6e55e24e4817777283735f71a8085da17c0ef88eb9925970297fca3e4->enter($__internal_35b5d5c6e55e24e4817777283735f71a8085da17c0ef88eb9925970297fca3e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_35b5d5c6e55e24e4817777283735f71a8085da17c0ef88eb9925970297fca3e4->leave($__internal_35b5d5c6e55e24e4817777283735f71a8085da17c0ef88eb9925970297fca3e4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
