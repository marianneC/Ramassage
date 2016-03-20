<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_930ed3d594943ece0a9c32d427d51f7fb8c83f50f30b100611ac879b0857ba7a extends Twig_Template
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
        $__internal_b10ae86081c4a64ff005a6569e74b69d6090531c867077f640c7485674392ab2 = $this->env->getExtension("native_profiler");
        $__internal_b10ae86081c4a64ff005a6569e74b69d6090531c867077f640c7485674392ab2->enter($__internal_b10ae86081c4a64ff005a6569e74b69d6090531c867077f640c7485674392ab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_b10ae86081c4a64ff005a6569e74b69d6090531c867077f640c7485674392ab2->leave($__internal_b10ae86081c4a64ff005a6569e74b69d6090531c867077f640c7485674392ab2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
