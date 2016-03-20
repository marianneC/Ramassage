<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_09c0c7ad70877e3d47a6dada038b32b423e1990a1ab9c4c95bd68f2d87f609ef extends Twig_Template
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
        $__internal_a2a6338ca835a79a31d9312e44cfb89675b85ec8582cedd99e913eb999f3df2d = $this->env->getExtension("native_profiler");
        $__internal_a2a6338ca835a79a31d9312e44cfb89675b85ec8582cedd99e913eb999f3df2d->enter($__internal_a2a6338ca835a79a31d9312e44cfb89675b85ec8582cedd99e913eb999f3df2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_a2a6338ca835a79a31d9312e44cfb89675b85ec8582cedd99e913eb999f3df2d->leave($__internal_a2a6338ca835a79a31d9312e44cfb89675b85ec8582cedd99e913eb999f3df2d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
