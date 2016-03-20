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
        $__internal_f877331eb579c8f5c06c04b6f2bf8b439586c4e4f525bc3c2e418f2a6062b5bc = $this->env->getExtension("native_profiler");
        $__internal_f877331eb579c8f5c06c04b6f2bf8b439586c4e4f525bc3c2e418f2a6062b5bc->enter($__internal_f877331eb579c8f5c06c04b6f2bf8b439586c4e4f525bc3c2e418f2a6062b5bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_f877331eb579c8f5c06c04b6f2bf8b439586c4e4f525bc3c2e418f2a6062b5bc->leave($__internal_f877331eb579c8f5c06c04b6f2bf8b439586c4e4f525bc3c2e418f2a6062b5bc_prof);

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
