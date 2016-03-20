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
        $__internal_dc5485a9077b11fa83e166194b6eaa1b48f99f026e5c7f1902ba45873603b310 = $this->env->getExtension("native_profiler");
        $__internal_dc5485a9077b11fa83e166194b6eaa1b48f99f026e5c7f1902ba45873603b310->enter($__internal_dc5485a9077b11fa83e166194b6eaa1b48f99f026e5c7f1902ba45873603b310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_dc5485a9077b11fa83e166194b6eaa1b48f99f026e5c7f1902ba45873603b310->leave($__internal_dc5485a9077b11fa83e166194b6eaa1b48f99f026e5c7f1902ba45873603b310_prof);

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
