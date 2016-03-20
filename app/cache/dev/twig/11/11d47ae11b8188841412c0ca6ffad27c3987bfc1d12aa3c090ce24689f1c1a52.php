<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_8392cf460559d37da62389003e2a66aa0cd81c8e2ca23277d4dc8cdf8a3e7057 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_c9e1f47399a7f72bd0a77bc3591af035d272b63be8a9f5436605fd15810c75e1 = $this->env->getExtension("native_profiler");
        $__internal_c9e1f47399a7f72bd0a77bc3591af035d272b63be8a9f5436605fd15810c75e1->enter($__internal_c9e1f47399a7f72bd0a77bc3591af035d272b63be8a9f5436605fd15810c75e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9e1f47399a7f72bd0a77bc3591af035d272b63be8a9f5436605fd15810c75e1->leave($__internal_c9e1f47399a7f72bd0a77bc3591af035d272b63be8a9f5436605fd15810c75e1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3c617451d106bad5f42f5971dd1852456928bfde9499ddaf6c2c64f024c7e1a8 = $this->env->getExtension("native_profiler");
        $__internal_3c617451d106bad5f42f5971dd1852456928bfde9499ddaf6c2c64f024c7e1a8->enter($__internal_3c617451d106bad5f42f5971dd1852456928bfde9499ddaf6c2c64f024c7e1a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3c617451d106bad5f42f5971dd1852456928bfde9499ddaf6c2c64f024c7e1a8->leave($__internal_3c617451d106bad5f42f5971dd1852456928bfde9499ddaf6c2c64f024c7e1a8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_94386c3bebc961dfcdd4a73b9bcf8805bd5a5267d1c336bc07b6dbf05de4aca5 = $this->env->getExtension("native_profiler");
        $__internal_94386c3bebc961dfcdd4a73b9bcf8805bd5a5267d1c336bc07b6dbf05de4aca5->enter($__internal_94386c3bebc961dfcdd4a73b9bcf8805bd5a5267d1c336bc07b6dbf05de4aca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_94386c3bebc961dfcdd4a73b9bcf8805bd5a5267d1c336bc07b6dbf05de4aca5->leave($__internal_94386c3bebc961dfcdd4a73b9bcf8805bd5a5267d1c336bc07b6dbf05de4aca5_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_60adb5b148a5be1011f56cbf50197560e19c3aec45cd04109ff9be78d1bacf8d = $this->env->getExtension("native_profiler");
        $__internal_60adb5b148a5be1011f56cbf50197560e19c3aec45cd04109ff9be78d1bacf8d->enter($__internal_60adb5b148a5be1011f56cbf50197560e19c3aec45cd04109ff9be78d1bacf8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_60adb5b148a5be1011f56cbf50197560e19c3aec45cd04109ff9be78d1bacf8d->leave($__internal_60adb5b148a5be1011f56cbf50197560e19c3aec45cd04109ff9be78d1bacf8d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
