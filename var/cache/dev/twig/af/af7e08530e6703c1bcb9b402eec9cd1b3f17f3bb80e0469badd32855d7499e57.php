<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_c33d12a426efe6555f12b9f92f620b02839a1eeb188bd3dec7599813c0f4919c extends Twig_Template
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
        $__internal_ada3d8efdd4f42b22d73b7812b8e76ea0c5916d0858d57f6cfb0f8ca0ae65c7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ada3d8efdd4f42b22d73b7812b8e76ea0c5916d0858d57f6cfb0f8ca0ae65c7b->enter($__internal_ada3d8efdd4f42b22d73b7812b8e76ea0c5916d0858d57f6cfb0f8ca0ae65c7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_ada3d8efdd4f42b22d73b7812b8e76ea0c5916d0858d57f6cfb0f8ca0ae65c7b->leave($__internal_ada3d8efdd4f42b22d73b7812b8e76ea0c5916d0858d57f6cfb0f8ca0ae65c7b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Applications/MAMP/htdocs/symfony3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
