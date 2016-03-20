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
        $__internal_35a1ea2d81f1004794c98a106175cb84806156ddddfb27123bf47e6fe850bd4e = $this->env->getExtension("native_profiler");
        $__internal_35a1ea2d81f1004794c98a106175cb84806156ddddfb27123bf47e6fe850bd4e->enter($__internal_35a1ea2d81f1004794c98a106175cb84806156ddddfb27123bf47e6fe850bd4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35a1ea2d81f1004794c98a106175cb84806156ddddfb27123bf47e6fe850bd4e->leave($__internal_35a1ea2d81f1004794c98a106175cb84806156ddddfb27123bf47e6fe850bd4e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_502020fde4445e4381f8f038c20fe7c77dc85532fac9faa292b5bfd431c0273f = $this->env->getExtension("native_profiler");
        $__internal_502020fde4445e4381f8f038c20fe7c77dc85532fac9faa292b5bfd431c0273f->enter($__internal_502020fde4445e4381f8f038c20fe7c77dc85532fac9faa292b5bfd431c0273f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_502020fde4445e4381f8f038c20fe7c77dc85532fac9faa292b5bfd431c0273f->leave($__internal_502020fde4445e4381f8f038c20fe7c77dc85532fac9faa292b5bfd431c0273f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c39b5f639f2e38c17bfbdaf4d47a98a22771f30fbab401e925642bdee20a937a = $this->env->getExtension("native_profiler");
        $__internal_c39b5f639f2e38c17bfbdaf4d47a98a22771f30fbab401e925642bdee20a937a->enter($__internal_c39b5f639f2e38c17bfbdaf4d47a98a22771f30fbab401e925642bdee20a937a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c39b5f639f2e38c17bfbdaf4d47a98a22771f30fbab401e925642bdee20a937a->leave($__internal_c39b5f639f2e38c17bfbdaf4d47a98a22771f30fbab401e925642bdee20a937a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9742900c7d6138d9f97ee3bf7ea7523a6c7d143613c2fccdbd6b31e9292b8b6d = $this->env->getExtension("native_profiler");
        $__internal_9742900c7d6138d9f97ee3bf7ea7523a6c7d143613c2fccdbd6b31e9292b8b6d->enter($__internal_9742900c7d6138d9f97ee3bf7ea7523a6c7d143613c2fccdbd6b31e9292b8b6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_9742900c7d6138d9f97ee3bf7ea7523a6c7d143613c2fccdbd6b31e9292b8b6d->leave($__internal_9742900c7d6138d9f97ee3bf7ea7523a6c7d143613c2fccdbd6b31e9292b8b6d_prof);

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
