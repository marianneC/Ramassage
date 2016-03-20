<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_f6cadb1d2d255ada656f68cff36f7a610f405728cacbe46cc33f5f08a262b534 extends Twig_Template
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
        $__internal_2854feabee3a33b3da2fec25f181dc9da27e0d2ba33f12456eda5acd80096190 = $this->env->getExtension("native_profiler");
        $__internal_2854feabee3a33b3da2fec25f181dc9da27e0d2ba33f12456eda5acd80096190->enter($__internal_2854feabee3a33b3da2fec25f181dc9da27e0d2ba33f12456eda5acd80096190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_2854feabee3a33b3da2fec25f181dc9da27e0d2ba33f12456eda5acd80096190->leave($__internal_2854feabee3a33b3da2fec25f181dc9da27e0d2ba33f12456eda5acd80096190_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
